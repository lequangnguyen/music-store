<?php

namespace App\Http\Controllers\Frontend;

use App\Repository\ProductRepositoryInterface;
use App\Repository\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{   
	private $productRepository;
    private $categoryRepository;
     public function __construct(ProductRepositoryInterface $productRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;

    }
    function GetProduct(){
    	return view('frontend.product.product');
    }
    function GetProductDetail($id){
    	return view('frontend.product.product-detail', ['product' => $this->productRepository->getProduct($id),'category'=>$this->categoryRepository->getEditCategory($id),'rale_product'=>$this->productRepository->getRelateProduct($id,4)]);
    }

}
