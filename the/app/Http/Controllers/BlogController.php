<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\contact;


/*

 */
class BlogController extends Controller
{
	
	public function blog()
	{
		return view('frontend.pages.blog');
	}
	public function blogDetails()
	{
		$contact = Contact::all();
		return view('frontend.pages.blogDetails');
	}
}
?>