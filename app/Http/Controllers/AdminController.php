<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function CreateUserForm()
    {
        return view('layouts.admin.adminCreateUser');
    }
    function CreateUser(Request $request)
    {
        $validate = [
            'nama' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'telp' => 'required|unique:users',
            'password' => 'required',
            'id_role' => 'required'
        ];
        $validate = $request->validate($validate);
        User::create($validate);
        return redirect()->route('adminDashboard');
    }
    function dashboard()
    {
        // if ($pg < 2 || gettype($pg)=='string') {
        //     $pg = 0;
        // }
        // $limit = 10;
        // $pg = $pg * $limit;
        // $data = User::whereNotIn('id',[1])->offset($pg)->limit($limit)->get();
        
        $data = User::whereNotIn('id',[1])->Paginate(5);
        
        return view('layouts.admin.dashboard',compact('data'));
    }
    function detailUser($id)
    {   
        $data = User::find($id);
        return view('layouts.admin.detailUser',compact('data'));
    }
    function editForm($id)
    {
        $data = User::find($id);
        return view('layouts.admin.editUser',compact('data'));
    }
    function edit(Request $request, $id)
    {
        $validate = [
            'nama' => 'required|max:255',
        ];
    }
    function delete($id){
        $msg = 'data tidak di temukan';
        if ($id != 1) {
            if (User::destroy($id)){
                $msg = 'data berhasil dihapus';
            }
        }
        return redirect()
        ->route('adminDashboard')
        ->withErrors(
            ['msg'=>$msg]
        );
    }
}
