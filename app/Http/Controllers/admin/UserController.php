<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\User;
use Auth;


class UserController extends Controller
{
     public function getIndex() {

        return view('admin.manageuser');
    
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData() {

        // only see the not deleted data.
    	$data = Datatables::of(User::all())->make(true);
 		
 		$data =  json_encode( $data );
       	$data =  json_decode( $data );

        // it's use for the ajax datatable field  in define the button
    	foreach ($data->original->data as $row) {


        	$row->firstName = "<img style=\"border-radius: 50%;height: 
        	50px;padding-right: 5px;\"src=".Url('public/user.png').">".
        	"<a href=".Url('admin/profile/'.$row->id)."> 
        		<button class=\"btn btn-link\"><b>"
        			.$row->name.
        		"</b></button>
        	</a>";
 

        	}

      
        return response()->json($data->original);

    }
    


}
