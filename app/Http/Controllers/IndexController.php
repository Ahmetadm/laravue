<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index()
    {
        return inertia("Index/Index", [
            'message' => "Hello from Laravel",
        ]);
    }
    public function Show()
    {
        return inertia("Index/Show");
    }
}
