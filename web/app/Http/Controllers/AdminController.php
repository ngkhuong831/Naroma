<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    function index(){
        return Inertia::render('Admin/Dashboard', ['admin' => 'admin']);
    }
}
