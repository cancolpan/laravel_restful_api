<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class UserController extends ApiController
{
    
    public function index()
    {
        $users = User::get();
        return $this->showAll($users);
    }


    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email'=> 'required|email|unique:users',
            'password'=>'required|min:6|confirmed',
        ];
        $this->validate($request, $rules);

        $data= $request->all();
        $data['password'] = bcrypt($request->password);
        $data['verified'] = User::UNVERIFIED_USER;
        $data['verification_token'] = User::generateVerificationCode();

        $user = User::create($data);

        return $this->showOne($user);
    }

    
    public function show($id)
    {
        $user= User::findOrFail($id);
        return $this->showOne($user);
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
