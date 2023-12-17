<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\TempImage;
use Illuminate\Support\Facades\File;
use Image;


class CategoryController extends Controller
{
    public function index(Request $request){
        $categories = Category::latest();
        
        if(!empty($request->get('keyword'))){
            $categories=$categories->where('name','like','%'.$request->get('keyword').'%');
        }


        $categories = $categories->paginate(10);  
        return view('admin.Category.list',compact('categories'));


        // $categories = Category::orderBy('created_at','DESC')->paginate(10);
        // orderBy is ka shortcut h latest same kam karta h order descending order may 
       
        // dd($categories);


        // $data['categories'] =$categories;
        // return view('admin.Category.list',$data);

        


    }

    public function create(){
        return view('admin.Category.create');
        
    }

    public function store(Request $request){
        // $validator = Validator::make($request->all(),[
        //     'name'=> 'required',
        //     'slug'=> 'required|unique:categories,'
        // ]);
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:categories',
        ]);

        $category = Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status
        ]);

        //save image here
        if(!empty($request->image_id)){
            $tempImage = TempImage::find($request->image_id);
            $extArray = explode('.',$tempImage->name);
            $ext = last($extArray);

            $newImageName = $category->id.'' .$ext;
            $sPath = public_path().'/temp/'.$tempImage->name;
            $dPath = public_path().'/uploads/category/'.$tempImage->name;
            File::copy($sPath,$dPath);


            // GenerateImage Thumbnail
            $dPath = public_path().'/uploads/category/thumb/'.$newImageName;
            $img = Image::make($sPath);
            $img->resize(450,600);
            $img->save($dPath);
            


            $category->imge =$newImageName;
            $category->save();

            $oldImage = $category->image;
        }

        if ($category) {
            $request->session()->flash('success','Category added successfully');
    
            return response()->json([
                'status' => true,
                'message' => 'Category added successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
        


    }

    public function edit($categoryId,Request $request){
        // echo  $categoryId;
        $category =Category::find($categoryId);
        if (empty($category)){
            return redirect()->route('categories.index');
        }

        
        
        return view('admin.Category.edit',compact('category'));
    }

    public function update($categoryId, Request $request){
        $category =Category::find($categoryId);
        if(empty($category)){
            $request->session()->flash('error','Category not found');



            return response()->json([
                'status'=>false,
                'notFound'=>true,
                'message'=>'Category not found'
            ]);
        }

        $request->validate([
            
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:categories,slug,'.$category->id.'id',
        ]);

        $category = Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status
        ]);

        //save image here
        if(!empty($request->image_id)){
            $tempImage = TempImage::find($request->image_id);
            $extArray = explode('.',$tempImage->name);
            $ext = last($extArray);

            $newImageName = $category->id.'-'.time().'.' .$ext;
            $sPath = public_path().'/temp/'.$tempImage->name;
            $dPath = public_path().'/uploads/category/'.$tempImage->name;
            File::copy($sPath,$dPath);


            // GenerateImage Thumbnail
            $dPath = public_path().'/uploads/category/thumb/'.$newImageName;
            $img = Image::make($sPath);
            $img->resize(450,600);
            $img->save($dPath);
            


            $category->imge =$newImageName;
            $category->save();

            //Delete old images here
            File::delete(public_path().'/uploads/category/thumb/'.$oldImage);
            File::delete(public_path().'/uploads/category/'.$oldImage);
        }

        if ($category) {
            $request->session()->flash('success','Category update successfully');
    
            return response()->json([
                'status' => true,
                'message' => 'Category added successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
        
    }

    public function destory($categoryId, Request $request){
        $category =Category::find($categoryId);
        if(empty($category)){
            
            $request->session()->flash('error','Category not found');
            
            return response()->json([
                'status'=> true, 
                'message' => 'Category deleted successfully'
            ]);
        }
        
        File::delete(public_path().'/uploads/category/thumb/'.$category->image);
        File::delete(public_path().'/uploads/category/'.$category->image);
        
        
        $category->delete();
        
        // return redirect()->route('categories.index');
        $request->session()->flash('success','Category deleted successfully');
        
        
        
    }
}
