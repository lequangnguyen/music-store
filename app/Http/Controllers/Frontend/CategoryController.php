<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Repository\ProductRepositoryInterface;
use App\Services\DataExchange;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $productRepository;
    private $dataExchange;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
        $this->dataExchange = new DataExchange();
    }

    public function index($id, Request $request, Products $products)
    {
        $products = $products->newQuery();
        $query = [];
        $products->select('products.*')->where('products.category_id', '=', $id);
        if ($request->input('name')) {
            $name = $request->input('name');
            $products->where('products.name', 'like', '%' . $name . '%');
            $query['name'] = $name;
        }
        $products = $this->dataExchange->exchangeProducts($products->orderBy('id', 'desc')->paginate(6)->appends($query));
        $top_selling_products = $this->dataExchange->exchangeProducts($this->productRepository->getMostPopularProducts($id, 4));
        return view('frontend.categories.index', ['products' => $products, 'top_selling_products' => $top_selling_products]);
    }

}
