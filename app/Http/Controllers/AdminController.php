<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        echo 'Welcome to Admin';
        echo Auth::user()->name;
        echo "<a href='/logout'>logout</a>";
    }

    function admin()
    {
        echo 'Welcome to Admin';
        echo Auth::user()->name;
        echo "<a href='/logout'>logout</a>";
    }

    function karyawan()
    {
        echo 'Welcome to the karyawan';
        echo Auth::user()->name;
        echo "<a href='/logout'>logout</a>";
    }
}
