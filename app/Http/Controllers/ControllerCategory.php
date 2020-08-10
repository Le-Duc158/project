<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelCategory;
use App\Http\Requests\RequestCategory;
use DB;

class ControllerCategory extends Controller
{
    // danh sach
    public function danhsach(){
        $list = ModelCategory::paginate(2);
        return view("Admin/category/listcategory",["list"=>$list]);
    }
    public function addcategory(){

        return view('Admin.category.addcategory');
    }
    //xóa danh mục(remove)
    public function removecategory($id){
        DB::table('category')->where('id','=',$id)->delete();
        return redirect("admin/category/listcategory");
    }
    //sửa danh mục(edit)
    public function editcategory($id){
       $edit = DB::table('category')->where('id',$id)->first();
        return view('Admin.category.editcategory',['edit'=> $edit,'id'=>$id]);
    }
    // post update
    public function posteditcategory( RequestCategory $request,$id){
        DB::table('category')->where('id','=',$id)->update(
            [
            'name'=> $request->cat_name
            ]
        );
        return redirect("admin/category/listcategory");
    }
    // post
    public function postcategory(RequestCategory $request){
                $addcategory = new ModelCategory;
                $addcategory->name = $request->cat_name;
                $addcategory->save();
                return redirect("admin/category/listcategory");
    }
     // tìm danh mục
    public function searchcategory(){
        $search_text = $_GET['search'];
        $list = DB::table('category')->where('name','like','%'.$search_text.'%')->get();
        return view('Admin.category.searchcategory',compact('list'));
    }
}
