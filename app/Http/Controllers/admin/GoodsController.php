<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\validator;
use Illuminate\Support\Facades\Auth;
use App\Good;
use DB;



class GoodsController extends Controller
{
    //load goods view
    public function index(){

    	return view('admin.goods');
    }
    //load goods Edit
    public function Edit($id) {

        $good = Good::find($id);
        return view('admin.EditView',compact('good'));
    }
    //send datatable data through ajax
    public function getData() {

        $find = DB::table('goods')
                ->join('users','goods.advetiserId','=','users.id')
                ->select('goods.*','users.name as username');

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
    //goods Edit function
    public function Edit_do(Request $req) {

         $data = $req->all();
          
         $rule = [
                    'name' => 'required',
                    'price' => 'required|numeric'
         ]; 

         $msg = [
                    'required' => 'field can\'t be blank',
         ];

         $validate = validator::make($data,$rule,$msg);

         if($validate->fails()) {

            return back()->withInput()
            ->withErrors($validate);
         }

         $update = [
                        'name' => $data['name'],
                        'price' => $data['price'],
                        'advetiserId' => Auth::user()->id
         ];

         $update = Good::whereId($data['gId'])->update($update);

         //set session of scusess mes

         session()->flash('msg','Edit Complite');
         return  redirect('admin/goods');


    }


    
}
