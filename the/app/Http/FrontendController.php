<?php
namespace App\Http\Controllers;
use App\Model\banner;
use App\Model\product;


/*

 */
class FrontendController extends Controller
{
	public function index()
	{	
		$banner = Banner::where('position',1)->get();
		
		$product_nb = Product::where('status',1)->get();
		$product_new = Product::limit(10)->orderBy('id','DESC')->get();
		$product = Product::where('status',1)->limit(2)->get();
		return view('frontend.pages.index',compact('banner', 'product','product_new','product_nb'));
	}

	
}
?>