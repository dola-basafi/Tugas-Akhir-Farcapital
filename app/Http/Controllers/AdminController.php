<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{   
    public $dashboard = 'adminDashboard';
    public $create = 'adminCreateUserForm';
    function CreateUserForm()
    {   
        return view('layouts.admin.adminCreateUser',['dashboard' => $this->dashboard, 'create' => $this->create]);
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
       
        return redirect()->route('adminDashboard',['dashboard' => $this->dashboard, 'create' => $this->create]);
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
        return view('layouts.admin.dashboard',['data' => $data,'dashboard' => $this->dashboard, 'create' => $this->create]);
    }
    function detailUser($id)
    {   
        $data = User::find($id);
        return view('layouts.admin.detailUser',['dashboard' => $this->dashboard, 'create' => $this->create]);
    }
    function editForm($id)
    {
        $data = User::find($id);
        return view('layouts.admin.editUser',['data' => $data, 'dashboard' => $this->dashboard, 'create' => $this->create]);
    }
    function edit(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
        [
            'nama' => 'max:255',
            'nama' => 'max:255',
            'email' => 'email|unique:users',
            'telp' => 'unique:users',
            'id_role' => 'numeric'
        ]);
    }
    function delete($id){
        $msg = 'data tidak di temukan';
        if ($id != 1) {
            if (User::destroy($id)){
                $msg = 'data berhasil dihapus';
            }
        }
        return redirect()
        ->route('adminDashboard',['dashboard' => $this->dashboard, 'create' => $this->create])
        ->withErrors(
            ['msg'=>$msg]
        );
    }
}
