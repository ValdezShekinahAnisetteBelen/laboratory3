<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new \App\Models\ProductModel();
    }

    private function loadProductData()
    {
        return [
            'products' => $this->productModel->findAll()
        ];
    }

    public function shop()
    {
        $data = $this->loadProductData();
        return view('shop', $data);
    }

    public function index()
    {
        $data = $this->loadProductData();
        return view('anisette', $data);
    }

    public function getProductInfo()
    {
        $productId = $this->request->getVar('id');
    
        // Fetch product information from the database based on $productId
        $productInfo = $this->productModel->find($productId);
    
        if ($productInfo) {
            // Return product details as JSON
            return json_encode($productInfo);
        } else {
            return "Product not found.";
        }
    }
}
