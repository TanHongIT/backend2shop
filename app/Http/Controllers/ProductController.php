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
        // Lay ra 3 sản phẩm 1 trang
        $products = Product::paginate(9);
        return view('pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //tạo form add sản phẩm
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
        $request->validate([//request chứa dữ liệu từ form
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
            'product_image' => 'required',
        ]);

        //2 Tao Product Model, gan gia tri tu form len cac thuoc tinh cua Product model
        $product = new Product([
            'product_name' => $request->get('product_name'),//lấy ra giá trị từ form gửi lên get có thể được thay = input()
            'product_price' => $request->get('product_price'),
            'product_description' => $request->get('product_description'),

            //lấy tên hình từ database
            // 'product_image' => $request->get('product_image')

            //up load và lấy tên file ra lưu vào thư mục storage/app/public/images
            'product_image' => basename($request->file('product_image')->store('public/images'))
        ]);

        //3 lưu sản phẩm
        $product->save();//sau khi chạy xg sẽ return về id của product được thêm vào

        //
        $product->categories()->attach($request->get('category_id'));//tự động hiểu là 1 mảng or chuỗi

        //trả ngược về link product sau khi lưu lên được database
        return redirect('/product')->with('success','Product added!!');//tạo session tên success mang giá trị "product added" thông qua hàm with
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
       //lấy tất cả cmt trong product thông qua product_id
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
        //lấy sản phẩm theo id
        $item = Product::find($id);
        //tạo form update sản phẩm
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
        $request->validate([//request chứa dữ liệu từ form
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
            // 'product_image' => 'required'
        ]);

        //2 Lấy sản phẩm ra thông qua ID
        $product = Product::find($id);
        $product->product_name = $request->get('product_name');
        $product->product_price = $request->get('product_price');
        $product->product_description = $request->get('product_description');

        //3 lưu sản phẩm
        $product->save();

        //trả ngược về link product sau khi lưu lên được database
        return redirect('/product')->with('success','Product updated!!');//tạo session tên success mang giá trị "product updated" thông qua hàm with
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //1 tìm sản phẩm cần xóa thông qua id
        $product = Product::find($id);
        //2 xóa sản phẩm
        $product->delete();

        $product->categories()->detach();//bay màu sản phẩm ở tất cả các danh mục
        //trả ngược về link product sau khi xóa sản phẩm khỏi database
        return redirect('/product')->with('success','Product Deleted!!');//tạo session tên success mang giá trị "product Dedleted" thông qua hàm with
    }

    public function productAjax($id)
    {
        $product = Product::find($id);
        return $product;
    }
}
