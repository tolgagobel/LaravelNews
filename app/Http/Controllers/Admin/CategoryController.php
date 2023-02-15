<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        if (request()->filled('aranan') || request()->filled('up_id')){
            request()->flash();
            $aranan = request('aranan');
            $up_id = request('up_id');
            $list = Category::with('up_category')
                ->where('category_name', 'like', "%$aranan%")
                ->where('up_id', $up_id)
                ->orderByDesc('created_at')
                ->paginate(10)
                ->appends(['aranan' => $aranan, 'up_id' => $up_id]);
        }
        else{
            request()->flush();
            $list = Category::orderBy('id','asc')->paginate(15);
        }

        $anakategoriler = Category::whereRaw('up_id is null')->get();

        return view('admin.category.index',compact('list', 'anakategoriler'));

    }

    public function form($id = 0)
    {
        $entry = new Category();
        if ($id > 0){
            $entry = Category::find($id);
        }
        $category = Category::all();
        return view('admin.category.form',compact('entry','category'));
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
