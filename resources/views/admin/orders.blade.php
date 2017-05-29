@extends('layout.admin.main')
@section('title')
	admin | orders
@endsection

@section('css')
        <!-- datatable -->
  
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet" type="text/css" />


@endsection 
@section('content')

        <!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title"> Orders List
                            <small>Order list of Goods</small>
        </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->

        <div class="row">
            <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase"> Manage Order</span>
                        </div>
                    </div>
                  
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="orders">
                            <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> ClientName </th>
                                    <th> Mobile Number </th>
                                    <th>GoodName</th>
                                                                       
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                </div>    <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
        <!-- END CONTENT BODY -->
</div>
        <!-- END CONTENT -->

@endsection 

@section('js') 

        {{-- pagelevel datatables js --}}

    <script src="//code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="{{URL::asset('/assets/global/plugins/bootstrap-toastr/toastr.min.js')}}" type="text/javascript"></script>
    
    <script>
    $(function() {
        $('#orders').DataTable({

            
            processing: true,
            serverSide: true,
            ajax: '{!! route('orders.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'users.name' },
                { data: 'mobileNumber', name: 'mobileNumber' },
                { data: 'goodsname', name: 'goods.name' },
                 ]
        });
    });
    </script>

    @if (session('msg') != null)
    {{-- expr --}}

    <script type="text/javascript">
    $(function() {
      
    //   Handler for .ready() called.
    //     Command: toastr[success]("Gnome & Growl type non-blocking notifications", 
    //         "Toastr Notifications")

    // toastr.options = {
    //   "closeButton": true,
    //   "debug": false,
    //   "positionClass": "toast-bottom-right",
    //   "onclick": null,
    //   "showDuration": "1000",
    //   "hideDuration": "1000",
    //   "timeOut": "5000",
    //   "extendedTimeOut": "1000",
    //   "showEasing": "swing",
    //   "hideEasing": "linear",
    //   "showMethod": "fadeIn",
    //   "hideMethod": "fadeOut"
    // }
    // Display an info toast with no title
       
       
        toastr.options = {
      "closeButton": true,
      "debug": false,
      "positionClass": "toast-bottom-right",
      "onclick": null,
      "showDuration": "1000",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
        }
     toastr.success('{{ session("msg") }}');
        })

      

    </script>

    @endif

@endsection