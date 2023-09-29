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
    
        // No need to create another instance, use $this->product
        // $model = new ProductModel();
    
        // Fetch product information from the database based on $productId
        $productInfo = $this->product->find($productId);
    
        if ($productInfo) {
            $data['product'] = $productInfo;
            return view('product_modal', $data); // Load a view with fetched data
        } else {
            return "Product not found.";
        }
    }
    
}
