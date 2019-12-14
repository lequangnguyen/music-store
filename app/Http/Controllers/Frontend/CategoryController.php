<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repository\ProductRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;

    }

    public function index($id, Request $request)
    {
        $products = $this->productRepository->getListProductsByCategoryId($id);
        return view('frontend.categories.index', ['products' => $products]);
    }

}
