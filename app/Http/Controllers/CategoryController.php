<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    
    // For Categories
    public function Categories()
    {
        $categories = Category::all();
        
        return view('backend.categories', compact('categories'));
    }
    
    public function categoryCreate()
    {
        return view('backend.category-create');
    }

    public function categoryStore(Request $request)
    {
        
        $request->validate([
            'name'              => 'required|max:55',
            'description'       => 'required'
        ]);
        
        $product = new Product;
        $product->name              = $request->name;
        $product->description       = $request->description;
        $product->save();

        // ProductImage Model insert image 
        
        if ($request->hasFile('image')) {
            // insert that image 
            $image                              = $request->file('image');
            $img                                = Str::slug($request->title) . '-' . time() . '.' . $image->getClientOriginalExtension() ;
            $location                           = public_path('images/categories-image/' . $img);
            Image::make($image)->save($location);
            
            $product_image = new ProductImage;
            $product_image->product_id          = $product->id;
            $product_image->image               = $img;
            $product_image->save();
            
        }
        
        return redirect()->route('admin.products');
    }

    public function categoryEdit($id)
    {
        $product = Product::find($id);
        return view('backend.product-edit', compact('product'));
    }
    
    public function categoryEditPost(Request $request, $id)
    {
        
        $request->validate([
            'title'             => 'required|max:55',
            'description'       => 'required',
            'price'             => 'required',
            'quantity'          => 'required'
        ]);
        
        $product = Product::find($id);
        $product->title             = $request->title;
        $product->description       = $request->description;
        $product->price             = $request->price;
        $product->quantity          = $request->quantity;
        $product->save();

        return redirect()->route('admin.products');
    }

    public function categoryDeletePost($id)
    {
        $product = Product::find($id);
        
        if (isset($product)) {
            $product->delete();
        }
        session()->flash("Success", "Product Deleted Successfully!!!");
        return back();
    }
}