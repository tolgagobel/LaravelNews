<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        if (request()->filled('aranan')){
            request()->flash();
            $aranan = request('aranan');
            $list = Product::with('up_category')
                ->where('product_name', 'like', "%$aranan%")
                ->orderByDesc('created_at')
                ->paginate(10)
                ->appends(['aranan' => $aranan]);
        }
        else{
            request()->flush();
            $list = Product::orderBy('id','asc')->paginate(15);
        }
        return view('admin.product.index',compact('list'));

    }

    public function form($id = 0)
    {
        $entry = new Product();
        if ($id > 0){
            $entry = Product::find($id);
        }
        $category = Product::all();
        return view('admin.product.form',compact('entry','category'));
    }

    public function save($id = 0){
        $this->validate(request(), [
            'category_name' => 'required',
            'slug' => (request('original_slug') != request('slug') ? 'unique:category,slug' : '')
        ]);
        $data = request()->only('category_name','slug','up_id');
        if (!request()->filled('slug'))
            $data['slug'] = str_slug(request('category_name'));

        if (Category::whereSlug($data['slug'])->count()>0)
            return back()
                ->withInput()
                ->withErrors(['slug' => 'Slug değeri daha önceden kayıtlı']);
        if ($id > 0)
        {
            $entry =Category::where('id', $id)->firstOrFail();
            $entry->update($data);
        }
        else
        {
            $entry = Category::create($data);
        }

        return redirect()
            ->route('admin.category.update', $entry->id)
            ->with('message', ($id > 0 ? 'Updated' : 'Saved'))
            ->with('message_type', 'success');
    }

    public function delete($id){
        $category = Category::find($id);
        $category->products()->detach();
        $category->delete($id);

        return redirect()
            ->route('admin.category')
            ->with('message', 'Deleted')
            ->with('message_type', 'success');


    }
}
