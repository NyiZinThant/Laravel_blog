<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "Contoller - Article List";
    }
    public function detail($id)
    {
        return "Contoller - Article Detail - $id";
    }
}
