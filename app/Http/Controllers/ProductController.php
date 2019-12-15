<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Lay tat ca san pham
        $products = Product::paginate(3);
        return view('pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1 Kiem tra du lieu
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_promotion_pricre'=>'required',
            'product_description' => 'required',
            'product_image' => 'required'
        ]);

        //2 Tao Product Model, gan gia tri tu form len cac thuoc tinh cua Product model
        $product = new Product([
            'product_name' => $request->get('product_name'),
            'product_price' => $request->get('product_price'),
            'product_promotion_pricre' => $request->get('product_promotion_pricre'),
            'product_description' => $request->get('product_description'),
            'product_image' => basename($request->file('product_image')->store('public/images'))
        ]);

        //3 Luu
        $product->save();
        $product->categories()->attach($request->category_id);
        return redirect('/product')->with('success', 'Product added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Lay ra 1 dong theo id
        $item = Product::find($id);
        $comments = $item->comments;
        return view('pages.product.show', compact('item', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Lay ra 1 dong theo id
        $item = Product::find($id);
        return view('pages.product.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //1 Kiem tra du lieu
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_promotion_pricre'=>'required',
            'product_description' => 'required',
        ]);

        //2 Tao Product Model, gan gia tri tu form len cac thuoc tinh cua Product model
        $product = Product::find($id);
        $product->product_name = $request->get('product_name');
        $product->product_price = $request->get('product_price');
        $product->product_promotion_pricre = $request->get('product_promotion_pricre');
        $product->product_description = $request->get('product_description');

        //3 Luu
        $product->save();
        return redirect('/product')->with('success', 'Product updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/product')->with('success', 'Deleted.');
    }

    public function productAjax($id)
    {
        $product = Product::find($id);
        return $product;
    }
}
