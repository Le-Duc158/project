<?php
namespace App\Http\Controllers;
use App\Model\banner;
use App\Model\product;
use App\Model\contact;
use App\Model\Cart;
use DB;
use Session;
use Illuminate\Http\Request;

/*

 */
class FrontendController extends Controller
{
	public function index()
	{	
		$banner_3 = Banner::where('position',3)->limit(1)->get();
		$banner_2 = Banner::where('position',2)->limit(2)->get();
		$banner = Banner::where('position',1)->get();
		
		$product_nb = Product::where('status',1)->get();
		$product_new = Product::limit(10)->orderBy('id','DESC')->get();
		$product = Product::where('status',1)->limit(2)->get();
		return view('frontend.pages.index',compact('banner', 'product','product_new','product_nb','banner_2','banner_3'));
	}
	public function about()
	{	
		return view('frontend.pages.about');
	}
	public function contact_us()
	{	
		
		return view('frontend.pages.contact_us');
	}
	public function faq()
	{	
		return view('frontend.pages.faq');
	}
	public function AddCart(Request $req,$id)
	{
		$product = DB::table('product')->where('id',$id)->first();
		if($product != null){
			$oldCart = Session('cart')?Session('cart'):null;
			$newCart = new Cart($oldCart);
			$newCart->AddCart($product,$id);
			$req->session()->put('cart',$newCart);
		}
		return view('frontend.cart.cart');
		
	}
	 public function DeleteItemCart(Request $req,$id){
        $oldCart = Session('cart')?Session('cart'):null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if(count($newCart->products)>0){
            $req->Session()->put('cart',$newCart);
        }
        else{
            $req->Session()->forget('cart');
        }
       return view('frontend.cart.cart');
    }
	
}
?>
