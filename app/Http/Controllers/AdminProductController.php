<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\RestaurantMenu;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){

        $products = RestaurantMenu::paginate(6);
      return view('admin.product.products')->with('products', $products);
    }
}
