<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index()
    {
        return view('admin.allproducts');
    }

    public function AddProduct()
    {
        return view('admin.addproduct');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'status' => 'required|in:En Stock,Epuise',
            'matter' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'discount' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'image.*' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5120',
        ]);

        $product = new Product($validatedData);
        $product->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $filename = $imageFile->getClientOriginalName();
                $path = $imageFile->storeAs('images', $filename, 'public');


                $image = new Image([
                    'filename' => $filename,
                    'path' => $path,
                ]);
                $product->images()->save($image);
                $fullPath = storage_path('app/public/' . $path);
                chmod($fullPath, 0755);
            }
        }

        return redirect()->route('products.index')->with('success', 'Your Product has been created.');
    }
}
