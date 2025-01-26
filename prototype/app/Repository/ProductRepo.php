<?php

namespace App\Repository;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepo
{
    protected $model;

    public function __construct()
    {
        $this->model = new Product();
    }

    /**
     *Gets all Product Models in db
     * @return void
     */
    function all(): Collection
    {
        return $this->model::all();
    }
    /**
     *Stores a new Product Model in db
     *@param array $data
     * @return void
     */
    function store(array $data) 
    {
        $this->model->create($data);
    }
    /**
     *Destroies a Product Model from db
     * @return void
     */
    function destroy(int $id): void
    {
        $item = $this->model->findOrFail($id);
        $item->delete();
    }
}
