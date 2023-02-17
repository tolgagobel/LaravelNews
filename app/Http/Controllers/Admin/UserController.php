<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show($id){
        $user = User::find($id);
        return view('admin.user.form', compact('user'));
    }

    public function login(){
        if (request()->isMethod('POST'))
        {
            $this->validate(request(), [
                'email' => 'required|email',
                'password' => 'required|'
            ]);

            $credentials = [
                'email' => request()->get('email'),
                'password' => request()->get('password'),
                'admin' => 1,
                'active' => 1
            ];
                if(Auth::guard('admin')->attempt($credentials, request()->has('rememberme')))
                {
                    return redirect()->route('admin.main');
                }
                else
                {
                    return back()->withInput()->withErrors(['email' => 'Login fail']);
                }
        }
        return view('admin.login');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('admin.login');
    }

    public function index(){
        if (request()->filled('aranan')){
            $aranan = request('aranan');
            $list = User::where('namesurname', 'like', "%$aranan%")
                ->orWhere('email', 'like', "%$aranan%" )
                ->orderByAsc('created_at')
                ->paginate(8);
        }
        else{
        $list = User::orderBy('id','asc')->paginate(8);
        }
        return view('admin.user.index',compact('list'));

    }

    public function form($id = 0)
    {
        $entry = new User;
        if ($id > 0){
            $entry = User::find($id);
        }
        return view('admin.user.form',compact('entry'));
    }

    public function save($id = 0){
        $this->validate(request(), [
           'namesurname' => 'required',
            'email' => 'required|email',
        ]);

        $data = request()->only('namesurname','email','phone');
        if (request()->filled('password'))
        {
            $data['password'] = Hash::make(request('password'));
        }
            $data['active'] = request()->has('active') && request('active') == 1 ? 1 : 0;
            $data['admin'] = request()->has('admin') && request('admin') == 1 ? 1 : 0;

        if ($id > 0)
        {
            $entry =User::where('id', $id)->firstOrFail();
            $entry->update($data);
        }
        else
        {
            $entry = User::create($data);
        }

        return redirect()
            ->route('admin.user.update', $entry->id)
            ->with('message', ($id > 0 ? 'Updated' : 'Saved'))
            ->with('message_type', 'success');
    }

    public function delete($id){
        $data = User::where('id',$id)->delete();

        return redirect()
            ->route('admin.user')
            ->with('message', 'Deleted')
            ->with('message_type', 'success');


    }


}
