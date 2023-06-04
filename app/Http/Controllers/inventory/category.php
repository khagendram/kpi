<?php

namespace App\Http\Controllers\Inventory;

use App\Helper\Alert as HelperAlert;
use App\Http\Controllers\Controller;
use App\Modules\Inventory\Entity\category as EntityCategory;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Foundation\Http\FormRequest;

class category extends Controller
{
    public function Add()
    {
        return view("inventory.category.add");
    }
// for Edit 
    public function  edit()
    {
        $id=request('id');
        $category=Entitycategory ::find ($id);
        return view("inventory.category.edit",['category'=>$category]);
      
    }
    public function Editpost()
    {
        $id=request('id');
        $name=request('name');
        $code=request('code');
        $category=Entitycategory::find($id);
        $category->name=$name;
        $category->code=$code;
        $category->save();
        return redirect("/inventory/category");

    }

    // for view 
    public function report()
    {
        return view("inventory.category.report");
    }
    public function menu()
    {
        return view("inventory.category.menu");
    }







// for insert into table 
    public function adddata()  //FormRequest:$request)
    {
      $name=request("name");
      $code=request("code");

      $category=new EntityCategory();
      $category->name=$name;
      $category->code=$code;
      $category->Save();
      return redirect("inventory/category");
    }
    public function index()
    {
        $data=EntityCategory::all(); //get data all 
        return view("inventory.category.index",["categoryList"=>$data]);
    }

 
        public function delete()
    {
        $id=request("id");
        $category=Entitycategory::find($id); 
        $category->delete();
        HelperAlert::SetSucessMessage("Category Deleteded Sucessfully");
        return redirect("/inventory/category");   

    }






}
