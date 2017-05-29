@extends('layout.admin.main')
@section('title')
Admin | Edit
@endsection
@section('content')
	{{-- expr --}}

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                   
                    <!-- BEGIN PAGE TITLE-->    
                    <h1 class="page-title">
                                <small></small>
                    </h1>                    
                
                    <!-- END PAGE TITLE-->
                    <div class="row">
                        <div class="col-md-12" >
                            <!-- BEGIN PROFILE SIDEBAR -->

                            <div class="profile-sidebar" >
                                <!-- PORTLET MAIN -->

                                <!-- END SIDEBAR BUTTONS -->
                                 
                            </div>
                            <!-- END PORTLET MAIN -->
                     
                            <div class="profile-content">
                                <div class="col-md-12" >
                                <div class="portlet light">
                                    <div class="portlet-title tabbable-line">
                                       
                                       Edit Good Detaile
                                    </div>
                                    <div class="portlet-body">
                                    <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1_1">
                                        


            <div class="portlet-body form">
                                        <form id="uform" class="form-horizontal" role="form" action="{{URL::to('admin/Edit-do')}}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-body">
                                                <div class="form-group "">
                                                    <label class="col-md-3 control-label"></label>
                                                    <div class="col-md-3">
                                                        
                                                        {!! Form::text('name',$good->name, ["class"=>"form-control" ,"placeholder"=>"Name"]) !!}
                                                        <span class="help-block error"> {{$errors->first('name')}} </span>
                                                    </div>
                                                     <div class="col-md-3">
                                                     {!! Form::hidden('gId', $good->id, []) !!}
                                                        
                                                        {!! Form::text('price',$good->price, ["class"=>"form-control" ,"placeholder"=>"Price"]) !!}
                                                        <span class="help-block error">{{$errors->first('price')}} </span>
                                                    </div>
                                                </div>
                                              
                                                <div class="form-group  "">
                                                    <label class="col-md-3 control-label">Advetiser</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-user"></i>
                                                            </span>
                                                             {!! Form::email('email',Auth::user()->name, ["class"=>"form-control" ,"placeholder"=>"Email Address" ,"readonly"=>"true" ]) !!}
                                                            </div>

                                                           
                                                    </div>
                                                    <span class="help-block error">{{$errors->first('email')}} </span>
                                                </div>
                                                                                
                                                
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green">Submit</button>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                    <div class="tab-pane  display-none" id="tab_1_2">

                                     
       
                                       
                                    </div>                                  
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>


                        </div>
                        <!-- END BEGIN PROFILE SIDEBAR -->
                            
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
@endsection