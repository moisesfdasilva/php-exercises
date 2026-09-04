<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller {
    
    public function index() {
        $pageSize = request()->integer('pageSize', 5);
        $pageSize = $pageSize > 0 ? $pageSize : 5;
        $products = Product::with(['category', 'tags'])->paginate($pageSize);
        return view('produtos.index', ['products' => $products]);
    }

    public function create() {
        $categories = Category::all();
        return view('produtos.create', ['categories' => $categories]);
    }

    public function store() {
        request()->validate([
            'name' => ['required'],
            'description' => ['required', 'min:10'],
            'category_id' => ['required'],
            'price' => ['required']
        ]);

        $product = Product::create([
            'name' => request('name'),
            'description' => request('description'),
            'category_id' => request('category_id'),
            'price' => request('price'),
        ]);

        return redirect('/produtos/' . $product->id);
    }

    public function edit($id) {
        $categories = Category::all();
        $product = Product::find($id);
        return view('produtos.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update($id) {
        request()->validate([
            'name' => ['required'],
            'description' => ['required', 'min:10'],
            'category_id' => ['required'],
            'price' => ['required']
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'name' => request('name'),
            'description' => request('description'),
            'category_id' => request('category_id'),
            'price' => request('price'),
        ]);

        return redirect('/produtos/' . $product->id);
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/produtos');
    }

}
