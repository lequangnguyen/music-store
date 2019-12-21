<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
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
        $cate_info = Categories::findOrFail($id);
        $cate_info->image = env("IMG_URL").$cate_info->image;

        return view('frontend.categories.index', [
            'products' => $products,
            'top_selling_products' => $top_selling_products,
            'cate_info' => $cate_info
        ]);
    }

}
