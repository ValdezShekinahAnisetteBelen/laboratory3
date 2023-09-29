<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $product;
    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
      
    }

    public function shop()
    {
        $data = [
            'products' => $this->product->findAll()
        ];
        return view('shop', $data);
    }

    public function index()
    {
        $data = [
            'products' => $this->product->findAll()
        ];
        return view('welcome_message', $data);
        
        //'name','description','image','price','category','quantity'
    }

    public function getProductInfo()
    {
        $productId = $this->request->getVar('id');
    
        // Fetch product information from the database based on $productId
        $productInfo = $this->product->find($productId);
    
        if ($productInfo) {
            // Return product details as JSON
            return json_encode($productInfo);
        } else {
            return "Product not found.";
        }
    }
    
}
