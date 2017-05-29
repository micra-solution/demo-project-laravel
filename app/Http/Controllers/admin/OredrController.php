<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Order;
use DB;


class OredrController extends Controller
{
    //load ordedr view
    public function index(){

    	return view('admin.orders');
    }
    //send datatable data through ajax
    public function getData() {

        $find = DB::table('orders')
                ->join('goods','goods.id','=','orders.goodId')
                ->join('users','users.id','=','clientId')
                ->select('orders.*','goods.name as goodsname','users.name');

    	$data = Datatables::of($find)->make(true);
 		
 		$data =  json_encode( $data );
       	$data =  json_decode( $data );

        // it's use for the ajax datatable field  in define the button
    	foreach ($data->original->data as $row) {


        	$row->action = "<a href=".Url('admin/Edit/'.$row->id)."> 
        		<button class=\"btn btn-link\"><b>Edit</b></button>
        	</a>";
 

        	}

      
        return response()->json($data->original);
    }
}
