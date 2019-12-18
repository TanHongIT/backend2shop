<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Bill;
use App\BillDetail;
use Cart;
use Illuminate\Contracts\Session\Session;

class CustomerController extends Controller
{
    public function index()
    {
        return view('pages.customer.dashboard');
    }
    public function getContact(){
        return view('pages.contact');
    }
    public function getAbout(){
        return view('pages.about');
    }
    public function postCheckout(Request $req){
        $cart = Session::get('cart');
dd($cart);
        $customer = new Customer;
        $customer->customer_firstname = $req->firstName;
        $customer->customer_lastname = $req->lastName;
        $customer->customer_gender = $req->gender;
        $customer->customer_email = $req->email;
        $customer->customer_address = $req->address;
        $customer->customer_phone_number = $req->phone;
        $customer->customer_note = $req->notes;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        // $bill->total = Cart::getSubTotal();
        // $bill->payment = $req->paymentMethod;
        // $bill->node = $req->nodes;
        // $bill->save();

        // foreach($cart['item'] as $key => $value){
        // $bill_detail = new BillDetail;
        // $bill_detail->id_bill = $bill->id;
        // $bill_detail->id_product = $key;
        //}
    }
}
