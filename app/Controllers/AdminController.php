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
    $productModel = new \App\Models\ProductModel();
    $data['products'] = $productModel->findAll();

    return view('admin/include/data_table', $data);
}
public function data_table()
{
    $data['products'] = $this->product->findAll();
    return view('admin/include/data_table', $data);
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
        public function save()
        {
            $id = $this->request->getVar('id');
            $data = [
                'name' => $this->request->getVar('name'),
                'description' => $this->request->getVar('description'),
                'image' => $this->request->getVar('price'),
                'price' => $this->request->getVar('price'),
                'category' => $this->request->getVar('category'),
                'quantity' => $this->request->getVar('quantity'),
            ];
        
            // Handle image upload
            $image = $this->request->getFile('image');
        
            if ($image->isValid() && !$image->hasMoved()) {
                // Define the upload directory
                            // Define the upload directory using base URL
                            $uploadPath = FCPATH . 'uploads/'; // Assuming your images are stored in the 'image' directory under the base URL

                // Generate a unique filename
                $newName = $image->getRandomName();

                // Set allowed image types
                $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'svg']; // Add more if needed

                // Check if the uploaded file is an allowed image type
                if (in_array($image->getClientExtension(), $allowedTypes)) {
                    // Move the uploaded image to the upload directory
                    $image->move($uploadPath, $newName);

                    // Save the image URL (relative to base URL) to the data array
                    $data['image'] = 'image/' . $newName; // Adjust the path as needed
                } else {
                    // Handle invalid image type (e.g., show an error message)
                    return redirect()->back()->with('error', 'Invalid image format. Allowed formats: jpg, jpeg, png, gif, svg');
                }

            }
        
            if (!empty($id)) {
                // Update existing record
                $this->product->set($data)->where('id', $id)->update();
            } else {
                // Insert a new record
                $this->product->insert($data);
            }
        
            return redirect()->to('/data_table');
        }
        public function delete($id)
        {
            $this->product->delete($id);
            return redirect()->to('/data_table');
        }
    
        public function edit($id) 
        {
           
            $data = [
                'product' => $this->product->findAll(),
            ];
            return view('products', $data);
        }
        public function editProduct()
        {
            $id = $this->request->getVar('id');
            $data = [
                'name' => $this->request->getVar('name'),
                'description' => $this->request->getVar('description'),
                'price' => $this->request->getVar('price'),
                'category' => $this->request->getVar('category'),
                'quantity' => $this->request->getVar('quantity'),
            ];
        
            // Handle image upload
            $image = $this->request->getFile('image');
        
            if ($image->isValid() && !$image->hasMoved()) {
                // Define the upload directory
                $uploadPath = FCPATH . 'uploads/';
        
                // Generate a unique filename
                $newName = $image->getRandomName();
        
                // Set allowed image types
                $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'svg']; // Add more if needed
        
                // Check if the uploaded file is an allowed image type
                if (in_array($image->getClientExtension(), $allowedTypes)) {
                    // Move the uploaded image to the upload directory
                    $image->move($uploadPath, $newName);
        
                    // Save the image URL (relative to base URL) to the data array
                    $data['image'] = 'uploads/' . $newName; // Adjust the path as needed
                } else {
                    // Handle invalid image type (e.g., show an error message)
                    return redirect()->back()->with('error', 'Invalid image format. Allowed formats: jpg, jpeg, png, gif, svg');
                }
            }
        
            // Update the existing record
            $this->product->set($data)->where('id', $id)->update();
        
            return redirect()->to('/data_table');
        }
        
        public function login()
            {
                $data['products'] = $this->product->findAll();
                return view('admin/include/login', $data);
            }       
                
}
