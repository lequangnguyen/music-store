<?php

namespace App\Http\Controllers\Frontend;

use App\Constants;
use App\Http\Controllers\Controller;
use App\Repository\ProductRepositoryInterface;
use Illuminate\Http\Request;
class IndexController extends Controller
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;

    }
    function index(Request $request){
        $cds = $this->productRepository->getListProductsByCategoryId(Constants::CATE_CD, 8, ['id', 'desc']);
        $dvds = $this->productRepository->getListProductsByCategoryId(Constants::CATE_DVD, 8, ['id', 'desc']);
        $tapes = $this->productRepository->getListProductsByCategoryId(Constants::CATE_TAPE, 8, ['id', 'desc']);
        $music_instruments = $this->productRepository->getListProductsByCategoryId(Constants::CATE_MUSIC_INSTRUMENTS, 8, ['id', 'desc']);
    	return view('frontend.index');
    }
   
    function get404(){
    	return view('frontend.404');
    }
    function contactUs(){
    	return view('frontend.contact');
    }
    function aboutUs(){
        return view('frontend.contact');
    }
}
