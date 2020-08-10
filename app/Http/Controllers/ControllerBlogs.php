<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelBlogs;
use DB;

class ControllerBlogs extends Controller
{
   public function postaddblog(Request $request){
     $getNameFile = $request->img->getClientOriginalName();
     $addblog = new ModelBlogs;
     $addblog->title = $request->title;
     $addblog->sumary = $request->sumary;
     $addblog->content = $request->content;
     $addblog->status = $request->status;
     $addblog->image = $getNameFile;
     $request->img->storeAs('avatar',$getNameFile);
     $addblog->save();
     return redirect()->route("listblogs");
 }
 public function addblog(){
    return view("Admin/blogs/addblog");
}
public function listblogs(){
   $listblogs =  DB::table('blogs')->paginate(3);
   return view('Admin.blogs.listblogs',["listblogs"=>$listblogs]);
}
            // xóa tin tức sự kiện (blogs)
public function removeblogs($id){
    DB::table('blogs')->where('id','=',$id)->delete();
    return redirect("admin/blogs/listblogs");
}
            // sửa tin tức sự kiện
public function editblog($id){
  $edit = DB::table('blogs')->where('id',$id)->first();
 return view('Admin.blogs.editblogs',compact("edit"));
}
            // post update danh mục tin tức
public function posteditblog(Request $request, $id){
    $blogs = new ModelBlogs;
    $a['title'] = $request->title;
    $a['sumary']= $request->sumary;
    $a['content']= $request->content;
    $a['status']= $request->status;


    if ($request->hasFile('img')) {
        $img = $request->img->getClientOriginalName();
        $a['img'] = $img;
        $request->img->storeAs('avatar',$img);
    }

    $blogs::where('id',$id)->update($a);

    return redirect()->route("listblogs");
}
// tìm kiếm tin tức
     public function searchblogs(){
        $search_text = $_GET['search'];
        $listblogs= DB::table('blogs')->where('title','like','%'.$search_text.'%')->get();
        return view('Admin.blogs.searchblogs',compact('listblogs'));
    }
}
