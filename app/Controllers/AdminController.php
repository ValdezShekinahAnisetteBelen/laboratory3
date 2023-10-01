<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
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

    private function returnViewWithData($viewName)
    {
        $data = $this->loadProductData();
        return view($viewName, $data);
    }

    public function shop1()
    {
        return $this->returnViewWithData('shop1');
    }

    public function admin()
    {
        return $this->returnViewWithData('admin/include/index');
    }

    public function index()
    {
        return $this->returnViewWithData('admin/include/data_table');
    }

    public function data_table()
    {
        $data['products'] = $this->productModel->findAll(); 
        return $this->returnViewWithData('admin/include/data_table');
    }

    public function getProductInfo()
    {
        $productId = $this->request->getVar('id');
    
        $productInfo = $this->productModel->find($productId);
    
        if ($productInfo) {
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
            'price' => $this->request->getVar('price'),
            'category' => $this->request->getVar('category'),
            'quantity' => $this->request->getVar('quantity'),
        ];
    
        $image = $this->request->getFile('image');
    
        if ($image->isValid() && !$image->hasMoved()) {
            $uploadPath = FCPATH . 'image/';
            $newName = $image->getRandomName();
            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'svg'];
    
            if (in_array($image->getClientExtension(), $allowedTypes)) {
                $image->move($uploadPath, $newName);
                $data['image'] = base_url('image/') . $newName; // Use base_url() here
            } else {
                return redirect()->back()->with('error', 'Invalid image format. Allowed formats: jpg, jpeg, png, gif, svg');
            }
        }
    
        if (!empty($id)) {
            $this->productModel->set($data)->where('id', $id)->update();
        } else {
            $this->productModel->insert($data);
        }
    
        return redirect()->to('/data_table');
    }
    

    public function delete($id)
    {
        $this->productModel->delete($id);
        return redirect()->to('/data_table');
    }

    public function edit($id)
    {
        return $this->returnViewWithData('products');
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
    
        $image = $this->request->getFile('image');
    
        if ($image->isValid() && !$image->hasMoved()) {
            $uploadPath = FCPATH . 'image/';
            $newName = $image->getRandomName();
            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'svg'];
    
            if (in_array($image->getClientExtension(), $allowedTypes)) {
                $image->move($uploadPath, $newName);
                $data['image'] = base_url('image/') . $newName; // Use base_url() here
            } else {
                return redirect()->back()->with('error', 'Invalid image format. Allowed formats: jpg, jpeg, png, gif, svg');
            }
        }
    
        $this->productModel->set($data)->where('id', $id)->update();
    
        return redirect()->to('/data_table');
    }
    
}
