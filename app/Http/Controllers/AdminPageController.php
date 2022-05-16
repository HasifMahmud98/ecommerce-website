<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductImage;
use Image;

class AdminPageController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function products()
    {
        $products = Product::orderBy('id', 'asc')->with('images')->get();
        
        return view('backend.products', compact('products'));
    }
    
    public function productCreate()
    {
        return view('backend.product-create');
    }

    public function productStore(Request $request)
    {
        
        $request->validate([
            'title'             => 'required|max:55',
            'description'       => 'required',
            'price'             => 'required',
            'quantity'          => 'required'
        ]);
        
        $product = new Product;
        $product->title             = $request->title;
        $product->description       = $request->description;
        $product->price             = $request->price;
        $product->quantity          = $request->quantity;

        $product->slug              = Str::slug($request->title);
        $product->category_id       = 1;
        $product->brand_id          = 1;
        $product->admin_id          = 1;
        $product->save();

        // ProductImage Model insert image 
        
        // if ($request->hasFile('image')) {
        //     // insert that image 
        //     $image                              = $request->file('image');
        //     $img                                = Str::slug($request->title) . '-' . time() . '.' . $image->getClientOriginalExtension() ;
        //     $location                           = public_path('images/products-image/' . $img);
        //     Image::make($image)->save($location);
            
        //     $product_image = new ProductImage;
        //     $product_image->product_id          = $product->id;
        //     $product_image->image               = $img;
        //     $product_image->save();
            
        // }

        if (count($request->image) > 0) {
            foreach ($request->image as $image) {
                
                    // insert that image 
                    $img                                = Str::slug($request->title) . '-' . time() . '.' . $image->getClientOriginalExtension() ;
                    $location                           = public_path('images/products-image/' . $img);
                    Image::make($image)->save($location);
                    
                    $product_image = new ProductImage;
                    $product_image->product_id          = $product->id;
                    $product_image->image               = $img;
                    $product_image->save();
            }
        }
        
        return redirect()->route('admin.products');
    }

    public function productEdit($id)
    {
        $product = Product::find($id);
        return view('backend.product-edit', compact('product'));
    }

    public function productEditPost(Request $request, $id)
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

    public function productDeletePost($id)
    {
        $product = Product::find($id);
        
        if (isset($product)) {
            $product->delete();
        }
        session()->flash("Success", "Product Deleted Successfully!!!");
        return back();
    }
}