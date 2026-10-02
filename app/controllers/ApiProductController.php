
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ApiProductController extends Controller
{
    protected $api;

    public function __construct()
    {
        parent::__construct();
        $this->api = $this->call->library('api');
        $this->call->model('ProductModel');
    }

    // GET: Display all products
    public function index()
    {
        $this->api->require_jwt();

        $products = $this->ProductModel->all();

        $this->api->respond([
            'message' => 'Products retrieved successfully.',
            'data' => $products
        ]);
    }

    // GET: Display one product
    public function show($id)
    {
        $this->api->require_jwt();

        $product = $this->ProductModel->find($id);

        if (!$product) {
            $this->api->respond_error('Product not found.', 404);
        }

        $this->api->respond([
            'message' => 'Product retrieved successfully.',
            'data' => $product
        ]);
    }

    // POST: Create product
    public function store()
    {
        $this->api->require_jwt();

        $data = $this->api->body();

        if (
            empty($data['product_name']) ||
            !isset($data['price']) ||
            !isset($data['quantity'])
        ) {
            $this->api->respond_error(
                'Product name, price, and quantity are required.',
                400
            );
        }

        $productData = [
            'product_name' => $data['product_name'],
            'description' => $data['description'] ?? '',
            'price' => $data['price'],
            'quantity' => $data['quantity']
        ];

        $this->ProductModel->insert($productData);

        $this->api->respond([
            'message' => 'Product created successfully.'
        ], 201);
    }

    // PUT/PATCH: Update product
    public function update($id)
    {
        $this->api->require_jwt();

        $product = $this->ProductModel->find($id);

        if (!$product) {
            $this->api->respond_error('Product not found.', 404);
        }

        $data = $this->api->body();

        $allowedFields = [
            'product_name',
            'description',
            'price',
            'quantity'
        ];

        $productData = [];

        foreach ($allowedFields as $field) {
            if (array_key_exists($field, $data)) {
                $productData[$field] = $data[$field];
            }
        }

        if (empty($productData)) {
            $this->api->respond_error(
                'No valid product fields provided.',
                400
            );
        }

        $this->ProductModel->update($id, $productData);

        $this->api->respond([
            'message' => 'Product updated successfully.'
        ]);
    }

    // DELETE: Remove product
    public function delete($id)
    {
        $this->api->require_jwt();

        $product = $this->ProductModel->find($id);

        if (!$product) {
            $this->api->respond_error('Product not found.', 404);
        }

        $this->ProductModel->delete($id);

        $this->api->respond([
            'message' => 'Product deleted successfully.'
        ]);
    }
}