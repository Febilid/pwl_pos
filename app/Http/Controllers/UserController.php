<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $data = [
        //     'level_id' => '2',
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' =>Hash::make('12345')
        // ];
        // UserModel:: create($data);

        $user = UserModel::where('level_id' ,2)->count();
        return view('level/index', ['data'=> $user]);
    }
}