<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
  function index()
  {
    $category = Category::all();
    $product = Product::all();
    return view('frontend.index', compact('category', 'product'));
  }
  function cart()
  {
    return view('frontend.cart.index');
  }
  function checkout()
  {
    return view('frontend.checkout.index');
  }
}
