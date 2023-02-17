<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index(){
        if (request()->filled('aranan')){
            $aranan = request('aranan');
            $list = Product::where('product_name', 'like', "%$aranan%")
                ->orWhere('description', 'like', "%$aranan%" )
                ->orderBy('created_at','desc')
                ->paginate(15)
                ->appends('aranan', $aranan);
        }
        else{
            request()->flush();
            $list = Product::orderBy('id','desc')->paginate(15);
        }
        return view('admin.product.index',compact('list'));

    }

    public function form($id = 0)
    {
        $entry = new Product();
        $product_categories = [];
        if ($id > 0){
            $entry = Product::find($id);
            $product_categories = $entry->categories()->pluck('category_id')->all();
        }
        $category = Category::all();
        return view('admin.product.form',compact('entry','category','product_categories'));
    }

    public function save($id = 0)
    {
        $this->validate(request(), [
            'product_name' => 'required',
            'slug' => [
                'required',
                Rule::unique('products')->ignore($id)
            ]
        ]);
        $data = request()->only('product_name','slug','description','slug');
        if (!request()->filled('slug'))
            $data['slug'] = str_slug(request('product_name'));

        $findSlug = Product::whereSlug($data['slug']);
        if ($id > 0) $findSlug->where('id', '!=', $id);
        if ($findSlug->count()>0)
            return back()
                ->withInput()
                ->withErrors(['slug' => 'Slug değeri daha önceden kayıtlı']);

        $data_detay = request()->only('goster_slider','goster_gunun_firsati','goster_one_cikan','goster_cok_satan','goster_indirimli');
        $categories = request('categories');
        if ($id > 0)
        {
            $entry =Product::where('id', $id)->firstOrFail();
            $entry->update($data);
            $productDetail = ProductDetail::where(['product_id' => $id])->first();
            $productDetail->update($data_detay);
            $entry->categories()->sync($categories);
        }
        else
        {
            $entry = Product::create($data);
            $entry->product()->create($data_detay);
            $entry->categories()->attach($categories);

        }

        if (request()->hasFile('product_img'))
        {
            $this->validate(request(), [
                'product_img' => 'image|mimes:jpg,png,jpeg,gif'
            ]);

            $product_img = request()->file('product_img');

            $filename = $entry->id . "-" . time() ."." .$product_img->extension();

            if ($product_img->isValid())
            {
                $product_img->move(public_path('images'),$filename);

                ProductDetail::updateOrCreate(
                    ['product_id' =>$entry->id ],
                    ['product_img' => $filename]
                );
            }
        }

        return redirect()
            ->route('admin.product.update', $entry->id)
            ->with('message', ($id > 0 ? 'Updated' : 'Saved'))
            ->with('message_type', 'success');
    }

    public function delete($id){
        $category = Product::find($id);
        $category->categories()->detach();
        $category->delete($id);

        return redirect()
            ->route('admin.product')
            ->with('message', 'Deleted')
            ->with('message_type', 'success');


    }
}
