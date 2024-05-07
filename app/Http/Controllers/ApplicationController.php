<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function __invoke()
    {
        return view('admin.layouts.app');
    }

    public function index()
    {
        $users = User::all();
        return $users;
    }
    public function store()
    {
        $users = User::create([
            // 'name' =>
        ]);

    }
}
