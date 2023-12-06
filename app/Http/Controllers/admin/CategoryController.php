<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index(){
        // $categories = Category::orderBy('created_at','DESC')->paginate(10);
        // orderBy is ka shortcut h latest same kam karta h order descending order may 
        $categories = Category::latest()->paginate(10);
        // dd($categories);


        // $data['categories'] =$categories;
        // return view('admin.Category.list',$data);

        return view('admin.Category.list',compact('categories'));


    }

    public function create(){
        return view('admin.Category.create');
        
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=> 'required',
            'slug'=> 'required|unique:categories,'
        ]);
        if($validator->passes()){
            $category = new Category();
            $category->name= $request->name;
            $category->slug= $request->name;
            $category->status= $request->name;
            $category->save();

            $request->session()->flash('success','Category added successfully');

            return response()->json([
                'status' => true,
                'message' => 'Category added successfully'
            ]);

        }else{
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }

    public function edit(){
        
    }

    public function update(){
        
    }

    public function destory(){
        
    }
}
