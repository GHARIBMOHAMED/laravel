@extends('layouts.app')

@section('main')

	<link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<style>
    #avatar{
        ;
    }
</style>

<!--begin::Card-->
<div class="card card-custom">
	<div class="card-header flex-wrap border-0 pt-6 pb-0">
		<div class="card-title">
			<h3 class="card-label">
				All Users
				<span class="d-block text-muted pt-2 font-size-sm">Sorting & pagination users datasource</span>
			</h3>
		</div>
		<div class="card-toolbar">
			<!--begin::Dropdown-->

<!--end::Dropdown-->

<!--begin::Button-->
<a  class="btn btn-primary font-weight-bolder" type="button" data-toggle="modal" data-target="#exampleModalCenter">
	<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" cx="9" cy="15" r="6"/>
        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>	New Record
</a>
<!--end::Button-->
		</div>
	</div>
	<div class="card-body">
		<!--begin: Search Form-->
		<!--begin::Search Form-->
<div class="mb-7">
	<div class="row align-items-center">
		<div class="col-lg-9 col-xl-8">
			<div class="row align-items-center">
				<div class="col-md-4 my-2 my-md-0">
					<div class="input-icon">
						<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
						<span><i class="flaticon2-search-1 text-muted"></i></span>
					</div>
				</div>


                			</div>
		</div>

	</div>
</div>
<!--end::Search Form-->
		<!--end: Search Form-->

		<!--begin: Datatable-->
		<div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
		<!--end: Datatable-->
	</div>
</div>
<!--end::Card-->





<!--begin::Modal-->
<div id="ktmodal" class="modal fade" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered">


		<div class="modal-content" >
             <form class="form" id="deleteForm" action="" method="POST">
            @csrf
			<div class="modal-header ">
				<h5 class="modal-title">
					Edit user
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
            </div>

			<div class="modal-body col-ld-12">
                <br>

	                <div class="form-group row">
                    <label class="col-form-label col-lg-1  text-right">Name :</label>
                    <div class="col-lg-5  ">
                        <div class="input-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Full name"/>
                        </div>

                    </div>

                    <label class="col-form-label col-lg-1  text-right">Email :</label>
                    <div class="col-lg-5">
                        <input type="text" id="mail" name="email" class="form-control" placeholder="Email"/>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>

                <div class="form-group row">
                    <label class="col-form-label col-lg-1  text-right">Country :</label>
                    <div class="col-lg-5  ">
                        <div class="input-group">
                            <input type="text" id="addr" name="country" class="form-control" placeholder="Country"/>
                        </div>

                    </div>

                    <label class="col-form-label col-lg-1  text-right">State :</label>
                    <div class="col-lg-5">
                        <input type="text" id="state" name="state" class="form-control" placeholder="Enter your state"/>

                    </div>
                </div>


                <div class="separator separator-dashed my-10"></div>


                <div class="form-group row">
                    <label class="col-form-label col-lg-1  text-right">Address :</label>
                    <div class="col-lg-5  ">
                        <div class="input-group">

                            <input type="text" id="address" name="address" class="form-control" placeholder="Enter your Address"/>
                        </div>

                    </div>

                    <label class="col-form-label col-lg-1  text-right">Avatar :</label>
                    <div class="col-lg-5">
                        <div class="symbol symbol-70 mr-3">
                            <div class="symbol-label" id="avatar" ></div>
                        </div>

                    </div>
                </div>






                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary font-weight-bold text-uppercase">Submit</button>
                    </div>

                </div>
             </form>
            </div>
        </div>
<!--end::Modal-->




<!-- Modal-->
<div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl"  role="document">
        <div  class="modal-content" >
            <form class="form" id="deleteForm" action="" method="POST">
           @csrf
           <div class="modal-header ">
               <h5 class="modal-title">
                   Add user
               </h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <i aria-hidden="true" class="ki ki-close"></i>
               </button>
           </div>

           <div class="modal-body col-ld-12">
               <br>

                   <div class="form-group row">
                   <label class="col-form-label col-lg-1  text-right">Name :</label>
                   <div class="col-lg-5  ">
                       <div class="input-group">
                           <input type="text" id="name1" name="name1" class="form-control" placeholder="Full name"/>
                       </div>

                   </div>

                   <label class="col-form-label col-lg-1  text-right">Email :</label>
                   <div class="col-lg-5">
                       <input type="text" id="mail1" name="email1" class="form-control" placeholder="Email"/>
                   </div>
               </div>
               <div class="separator separator-dashed my-10"></div>

               <div class="form-group row">
                   <label class="col-form-label col-lg-1  text-right">Country :</label>
                   <div class="col-lg-5  ">
                       <div class="input-group">
                           <input type="text" id="addr1" name="country1" class="form-control" placeholder="Country"/>
                       </div>

                   </div>

                   <label class="col-form-label col-lg-1  text-right">State :</label>
                   <div class="col-lg-5">
                       <input type="text" id="state1" name="state1" class="form-control" placeholder="Enter your state"/>

                   </div>
               </div>


               <div class="separator separator-dashed my-10"></div>


               <div class="form-group row">
                   <label class="col-form-label col-lg-1  text-right">Address :</label>
                   <div class="col-lg-5  ">
                       <div class="input-group">

                           <input type="text" id="address1" name="address1" class="form-control" placeholder="Enter your Address"/>
                       </div>

                   </div>

                   <label class="col-form-label col-lg-1  text-right">Avatar :</label>
                   <div class="col-lg-5">
                       <div class="symbol symbol-70 mr-3">
                           <div class="symbol-label" id="avatar" ></div>
                       </div>

                   </div>
               </div>






                   </div>

                   <div class="modal-footer">
                       <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase" data-dismiss="modal">Close</button>
                       <button type="submit" class="btn btn-primary font-weight-bold text-uppercase">Submit</button>
                   </div>

               </div>
    </div>
</div>
<script>

// Class definition

var KTDatatableRemoteAjaxDemo = function() {
    // Private functions

    // basic demo
    var demo = function() {
        var ajaxResult = null;

        var datatable = $('#kt_datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                header:{
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                contentType: 'application/json',
                source: {
                    read: {
                        url:'http://127.0.0.1:8000/data',
                        // sample custom headers
                        method: 'GET',
                        async: false,
                        map: function(raw) {
                            // sample data mapping
                            var dataSet = raw;
                            if (typeof raw.data !== 'undefined') {
                                dataSet = raw.data;

                            }
                            return dataSet;
                        },
                    },
                },
                pageSize: 10,
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },

            // layout definition
            layout: {
                scroll: false,
                footer: false,
            },

            // column sorting
            sortable: true,

            pagination: true,


            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },

            // columns definition
            columns: [{
                field: 'id',
                title: '#',
                sortable: 'asc',
                width: 30,
                type: 'number',
                selector: false,
                textAlign: 'center',

            },
            {
					field: 'avatar',
					title: 'avatar',
					width: 50,
					template: function(data) {
                        var output = '';
						if(data.avatar){
                            var user_img = 'background-image:url(\'' + data.avatar + '\')';

							output = '<div class="d-flex align-items-center">\
								<div class="symbol symbol-40 flex-shrink-0">\
									<div class="symbol-label" style="' + user_img + '"></div>\
								</div>\
							</div>';

                        }else
                        {
                            var user_img = 'background-image:url(\'assets/media/users/default.jpg\')';

							output = '<div class="d-flex align-items-center">\
								<div class="symbol symbol-40 flex-shrink-0">\
									<div class="symbol-label" style="' + user_img + '"></div>\
								</div>\
							</div>';
                        }


						return output;
					},
				},
             {
                field: 'name',
                title: 'Name',
                width: 80,
            }, {
                field: 'email',
                title: 'Email',
                width: 250,
            }, {
                field: 'state',
                title: 'state',
            }, {
                field: 'country',
                title: 'country Name',
                width: 70,
            },
            {
                field: 'add-1',
                title: 'Address',
            },{
                field: 'Actions',
                title: 'action',
                sortable: false,
                width: 125,
                overflow: 'visible',
                autoHide: false,
                template: function(data) {
                    return '\
                    <button id="datas" data-record="'+data.id+'" class="btn btn-sm btn-clean" title="View records">\
		                      <i class="flaticon2-document"></i>\
		                  </button>\
                        <button  class="btn btn-sm btn-clean btn-icon" id="dataa" data-id="' + data.id + '" title="Delete">\
                            <span class="svg-icon svg-icon-md" >\
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                        <rect x="0" y="0" width="24" height="24"/>\
                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
                                    </g>\
                                </svg>\
                            </span>\
                        </button>\
                    ';
                },
            }],

        });

		$('#kt_datatable_search_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_search_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'name');
        });



        jQuery(document).ready(function($){


        datatable.on('click', '[data-id]', function() {
            var id = this.dataset.id;
            console.log(id);

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'http://127.0.0.1:8000/destroy/'+id ,
                        method:'DELETE',
                        contentType: 'application/json',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: {
                            "id": id,
                        },
                        success: function(response) {
                            if(response) {
                            {

                            toastr.error("The user is deleted");
                            }

                            }
                            datatable.reload();
                        }
                        });
                                        }

                    })
            });

            datatable.on('click', '[data-record]', function(ajaxResult) {
                var id =0;
                var id = this.dataset.record-id;

                console.log(id);
                var modal = $(this);
                $.ajax({
                        url: 'http://127.0.0.1:8000/update/'+id ,
                        method:'GET',
                        contentType: 'application/json',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        success: function(response) {
                            if(response) {


                            $('#deleteForm').attr("action", '/new/'+response.id);
                            $("#name").val(response.name);
                            $("#mail").val(response.email);
                            $("#addr").val(response.country);
                            $("#state").val(response.state);
                            $("#address").val(response["add-1"]);
                            $("#avatar").css({
                                "background-image": "url('"+ response.avatar +"')"
                                })
                            }

                        }
                        });

                $('#ktmodal').modal('show');
            });

        });




    };

    return {
        // public functions
        init: function() {
            demo();
        },
    };

}();

jQuery(document).ready(function() {
    KTDatatableRemoteAjaxDemo.init();
});

</script>


    <script>
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("{{ session('warning') }}");
        @endif
      </script>



@endsection
