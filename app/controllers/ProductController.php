<?php

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('ProductModel');
    }

    public function index()
    {
        $products = $this->ProductModel->all();

        $this->call->view('products/index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $this->call->view('products/create');
    }

    public function store()
    {
        $data = [
            'product_name' => $_POST['product_name'],
            'description' => $_POST['description'],
            'price' => $_POST['price'],
            'quantity' => $_POST['quantity']
        ];

        $this->ProductModel->insert($data);

        redirect('products');
    }

    public function edit($id)
    {
        $product = $this->ProductModel->find($id);

        $this->call->view('products/edit', [
            'product' => $product
        ]);
    }

    public function update($id)
    {
        $data = [
            'product_name' => $_POST['product_name'],
            'description' => $_POST['description'],
            'price' => $_POST['price'],
            'quantity' => $_POST['quantity']
        ];

        $this->ProductModel->update($id, $data);

        redirect('products');
    }

    public function delete($id)
    {
        $this->ProductModel->delete($id);

        redirect('products');
    }
}