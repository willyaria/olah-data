<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

class OlahData_m
{
    public static function produk_terjual()
	{
		return DB::table('order_detail')
		->join('product','product.id','=','order_detail.product_id','left')
		->select('order_detail.product_id',DB::raw('sum(order_detail.qty) as quantity'))
		->groupBy('product_id')
		->orderBy('quantity','desc')
		->limit('10')
		->get();
	}

	public static function customer_pembelian()
	{
		return DB::table('order_detail')
		->join('orders','order_detail.order_id','=','orders.id','left')
		->join('customer','orders.customer_id','=','customer.id','left')
		->join('users','customer.id','=','users.id','left')
		->select(DB::raw('count(order_detail.qty) as quantity'))
		->groupBy('users.id')
		->orderBy('quantity','desc')
		->limit('10')
		->get();
	}

}