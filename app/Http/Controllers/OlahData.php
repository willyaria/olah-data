<?php

namespace App\Http\Controllers;
use App\Models\OlahData_m;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class OlahData extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produk_terjual = OlahData_m::produk_terjual();
        // var_dump($produk_terjual);die;
        // return view('home',compact('data_customer'));
        return view('banyak_terjual',compact('produk_terjual'));
    }

    public function pembelian_customer()
    {
        $customer_pembelian = OlahData_m::customer_pembelian();
        // var_dump($customer_pembelian);die;
        return view('customer_pembelian',compact('customer_pembelian'));
    }

    
}
