<?php
namespace App\Http\Controllers;
use App\Model\contact;



/*

 */
class ProductController extends Controller
{
	public function product()
	{
		
		return view('frontend.pages.product');
	}
	public function product_detail()
	{
		
		return view('frontend.pages.product_detail');
	}
	
}
?>