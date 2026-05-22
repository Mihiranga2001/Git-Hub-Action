<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function GetAllUsers()
    {
        return response()->json([
            'users' => [
                [
                    'id' => 1,
                    'name' => 'John Doe',
                    'email' => 'doe@gmail.com',
                    'role' => 'Admin',
                ],
                [
                    'id' => 2,
                    'name' => 'Jane Smith',
                    'email' => 'jane@gmail.com',
                    'role' => 'User',
                ],
                [
                    'id' => 3,
                    'name' => 'Michael Brown',
                    'email' => 'michael@gmail.com',
                    'role' => 'Manager',
                ],
                [
                    'id' => 4,
                    'name' => 'Sarah Wilson',
                    'email' => 'sarah@gmail.com',
                    'role' => 'Editor',
                ]
            ]
        ]);
    }
}
