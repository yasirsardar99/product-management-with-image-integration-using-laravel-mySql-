<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        

        return view('product.index', ['product'=> product::get() ] );
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){

        // validate data 
        $request->validate([
            'name'=> 'required',
            'description'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);



        // image name formation 
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('product'),$imageName);

        // data store in database
        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;
        
        $product->save();
        return back()->withSuccess('product created successfully');



        

            return redirect()->route('product.index');

        }

        public function edit($id){
            $product = Product::where('id',$id)->first();
            return view('product.edit', ['product'=>$product]);
        }

        public function update(Request $request, $id){
             // validate data 
        $request->validate([
            'name'=> 'required',
            'description'=>'required',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $product = Product::where('id', $id)->first();


        // image name formation 
        if(isset($request->image))
        {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('product'),$imageName);
            $product->image = $imageName;
        }
            

        // data store in database

        
        $product->name = $request->name;
        $product->description = $request->description;
        
        $product->save();
        return back()->withSuccess('product Updated successfully');



        

            return redirect()->route('product.index');

        }

        public function destroy($id){
            $product = Product::where('id', $id)->first();
            $product->delete();

            return back()->withSuccess('product deleted successfully');
            
        }

};