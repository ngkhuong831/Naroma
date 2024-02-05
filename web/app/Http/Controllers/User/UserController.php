<?php

namespace App\Http\Controllers\User;

use Illuminate\Foundation\Application;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;


class UserController extends Controller
{
    public function index() {
        return Inertia::render( 'User/Index', [
            'canLogin' => app('router')->has('login'),
            'canRegister' => app('router')->has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]
        );
    }
}
