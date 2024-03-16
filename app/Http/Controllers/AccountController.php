<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function show()
    {
        // Add logic for displaying the account page
        return view('account'); // Assuming you have a Blade view file named account.blade.php
    }
}
