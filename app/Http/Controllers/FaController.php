<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class FaController extends Controller
{
    public function index()
    {
        User::factory()->count(5)->create();
    }
}
