<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductService
{
    protected Product $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     * Get all products with pagination
     */
    public function getAllProducts(): LengthAwarePaginator
    {
        return $this->model->latest()->paginate(10);
    }

    /**
     * Find a product by ID
     */
    public function findProduct(int $id): ?Product
    {
        return $this->model->find($id);
    }

    /**
     * Create a new product
     */
    public function createProduct(array $data): Product
    {
        // Business logic can go here (e.g., price calculations, discounts, etc.)
        $data['price'] = $this->formatPrice($data['price']);
        
        return $this->model->create($data);
    }

    /**
     * Update an existing product
     */
    public function updateProduct(int $id, array $data): bool
    {
        $product = $this->findProduct($id);
        
        if (!$product) {
            return false;
        }

        // Business logic can go here
        $data['price'] = $this->formatPrice($data['price']);

        return $product->update($data);
    }

    /**
     * Delete a product
     */
    public function deleteProduct(int $id): bool
    {
        $product = $this->findProduct($id);
        
        if (!$product) {
            return false;
        }

        return $product->delete();
    }

    /**
     * Format price to ensure it has 2 decimal places
     */
    private function formatPrice($price): string
    {
        return number_format((float)$price, 2, '.', '');
    }

    /**
     * Get product statistics (example of additional business logic)
     */
    public function getProductStats(): array
    {
        return [
            'total' => $this->model->count(),
            'average_price' => $this->model->avg('price'),
            'max_price' => $this->model->max('price'),
            'min_price' => $this->model->min('price'),
        ];
    }
}
