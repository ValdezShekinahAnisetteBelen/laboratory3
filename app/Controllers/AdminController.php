<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
        private $product;
        public function __construct()
        {
            $this->product = new \App\Models\ProductModel();
          
        }
    public function shop1()
{
    $productModel = new \App\Models\ProductModel();
    $data = [
        'products' => $productModel->findAll() // Assuming you want to fetch all products
    ];
    return view('shop1', $data);
}


public function admin()
{
    $data = [
        'products' => $this->product->findAll()
    ];
    return view('admin/include/index', $data); // Pass the $data array to the main view
}
    
        public function index()
        {
            $data = [
                'products' => $this->product->findAll()
            ];
            return view('index', $data);
            
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
