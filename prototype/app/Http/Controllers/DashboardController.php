<?php

namespace App\Http\Controllers;

use App\Repository\ProductRepo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $repo;

    public function __construct() {
        $this->repo = new ProductRepo();
    }
    function index()  
    {
        $products = $this->repo->all();
        return view("dashboard", compact("products"));
    }
}
