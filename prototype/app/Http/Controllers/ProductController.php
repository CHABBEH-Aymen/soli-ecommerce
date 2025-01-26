<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Repository\ProductRepo;

class ProductController extends Controller
{
    protected $repo;

    public function __construct() {
        $this->repo = new ProductRepo();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->repo->all();
        return view('welcome', compact("products"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->validate(["title|required", "desc|required", "price|required"]);
        $this->repo->store(
            array("img"=>"empty",
            "title"=>$request["title"], 
            "desc"=>$request["desc"], 
            "price"=>$request["price"]));
        return response()->json(["status"=>200]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     */
    public function destroy(int $id)
    {
        $this->repo->destroy($id);
        return response()->json(["status"=>200]);   
    }
}
