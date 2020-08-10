<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelProduct;
use App\Http\Requests\RequestProduct;
use DB;
use App\ModelCategory;

class ControllerProduct extends Controller
{
    // add product
    public function addproduct(){
        $category = ModelCategory::all();
        return view('Admin.product.addproduct',compact('category'));

    }
    // danh sách sản phẩm
    public function listproduct(){
        $list_pro = ModelProduct::paginate(3);
        return view("Admin/product/listproduct",["pro_list"=>$list_pro]);

    }
    //post add
    public function postproduct(RequestProduct $request){
        $getNameFile = $request->img->getClientOriginalName();
        $addproduct = new ModelProduct;
        $addproduct->category_id = $request->cat_id;
        $addproduct->name = $request->name;
        $addproduct->price = $request->price;
        $addproduct->status = $request->status;
        $addproduct->description = $request->description;
        $addproduct->img = $getNameFile;
        $request->img->storeAs('avatar',$getNameFile);
        $addproduct->save();
        return redirect("admin/product/listproduct");
    }
    //xóa sản phẩm
    public function removeproduct($id){
        DB::table('product')->where('id','=',$id)->delete();
        return redirect("admin/product/listproduct");
    }
    //sửa sản phẩm
    public function editproduct($id){
     $edit = DB::table('product')->where('id',$id)->first();
     $data = ModelCategory::all();
     return view('Admin.product.editproduct',['edit'=>$edit,'listcat'=>$data]);
 }
    // post update
 public function posteditproduct( RequestProduct $request,$id){
    $product = new ModelProduct;
    $a['name'] = $request->name;
    $a['price']= $request->price;
    $a['description']= $request->description;
    $a['status']= $request->status;


    if ($request->hasFile('img')) {
        $img = $request->img->getClientOriginalName();
        $a['img'] = $img;
        $request->img->storeAs('avatar',$img);
    }

    $product::where('id',$id)->update($a);
    return redirect()->intended('admin/product/listproduct');
}
    // tìm sản phẩm
    public function searchproduct(){
        $search_text = $_GET['search'];
        $pro_list = DB::table('product')->where('name','like','%'.$search_text.'%')->get();
        return view('Admin.product.search',compact('pro_list'));
    }
}


