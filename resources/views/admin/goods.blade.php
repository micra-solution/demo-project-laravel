@extends('layout.admin.main')
@section('title')
	admin | goods
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
        <h1 class="page-title"> Goods List
                            <small>Good list avalible for order</small>
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
                            <span class="caption-subject bold uppercase"> Manage Goods</span>
                        </div>
                    </div>
                  
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="users">
                            <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> Name </th>
                                    <th> Price </th>
                                    <th> Advetiser </th>
                                    <th> Date </th>
                                    <th> Action </th>
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
        $('#users').DataTable({

            
            processing: true,
            serverSide: true,
            ajax: '{!! route('goods.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'price', name: 'price' },
                { data: 'username', name: 'users.name' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action' },


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
