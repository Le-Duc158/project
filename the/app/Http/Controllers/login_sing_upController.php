<?php
namespace App\Http\Controllers;
use App\Model\contact;
use App\User;
use Hash;
use Auth;
use Illuminate\Http\Request;


/*

 */
class login_sing_upController extends Controller
{
	public function getsingin()
	{	
		
		return view('frontend.pages.singin');
	}
	public function getsingup()
	{	
		
		return view('frontend.pages.singup');
	}
	public function postsingup(Request $req)
	{	

		$this->validate($req,
			[
				'email'=>'required|email|unique:user,email',
				'name'=>'required',
				'password'=>'required|min:6|max:20',
				'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|unique:user,phone',
				're_password'=>'required|same:password'
			],
			[
				'email.required'=>'Please enter your email',
				'email.email'=>'Email invalidate',
				'email.unique'=>'Email already exists',
				'name.required'=>'Please enter your account name',
				'password.required'=>'Please enter a password',
				'phone.required' => 'Please enter the phone number',
				're_password.same'=>'The password is not the same',
				'password.min'=>'Password at least 6 characters',
				'password.max'=>'Password up to 20 characters'
			]);
			$user = new User();
			$user-> name = $req->name;
			$user-> email = $req->email;
			$user-> phone = $req->phone;
			$user-> password = Hash::make($req->password);
			$user->save();
			return redirect()->route('singin')->with('thanhcong','tạo tài khoản thành công');


		

	}

	public function postsingin(Request $req){
		
		$this->validate($req,
			[
				'password'=>'required|min:6|max:20',
				'email'=>'required|email'
			],
			[
				'email.required'=>'Please enter your email',
				'email.email'=>'Email invalidate',
				'password.required'=>'Please enter a password',
				'password.min'=>'Password at least 6 characters',
				'password.max'=>'Password up to 20 characters'
			]);
		
		if(Auth::guard('userlogin')->attempt(['email'=>$req->email ,'password'=>$req->password])){
			return redirect()->route('home');

		}else{
			return redirect()->back()->with('thongBao','tài khoản hoặc mật khẩu không chính xác');
		}
	}
	public function getlogout(){
		Auth::guard('userlogin')->logout();
		return redirect()->route('home');
	}
}
?>