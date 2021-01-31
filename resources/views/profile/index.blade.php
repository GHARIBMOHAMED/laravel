@extends('layouts.app')

@section('main')

				<!--begin::Content-->
				<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
<div class="subheader py-2 py-lg-4  subheader-transparent " id="kt_subheader">
<div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
<!--begin::Details-->
<div class="d-flex align-items-center flex-wrap mr-2">

<!--begin::Title-->
<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
            Users                            </h5>
<!--end::Title-->

<!--begin::Separator-->
<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
<!--end::Separator-->

<!--begin::Search Form-->
<div class="d-flex align-items-center" id="kt_subheader_search">
<span class="text-dark-50 font-weight-bold" id="kt_subheader_total">
                    450 Total                                    </span>
            <form class="ml-5">
<div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
    <input type="text" class="form-control" id="kt_subheader_search_form" placeholder="Search..."/>
    <div class="input-group-append">
        <span class="input-group-text">
            <span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24"/>
<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
</g>
</svg><!--end::Svg Icon--></span>                                    <!--<i class="flaticon2-search-1 icon-sm"></i>-->
        </span>
    </div>
</div>
</form>
    </div>
<!--end::Search Form-->

    <!--begin::Group Actions-->
<div class="d-flex- align-items-center flex-wrap mr-2 d-none" id="kt_subheader_group_actions">
<div class="text-dark-50 font-weight-bold">
<span id="kt_subheader_group_selected_rows">23</span> Selected:
</div>
<div class="d-flex ml-6">
<div class="dropdown mr-2" id="kt_subheader_group_actions_status_change">
    <button type="button" class="btn btn-light-primary font-weight-bolder btn-sm dropdown-toggle" data-toggle="dropdown">
        Update Status
    </button>
    <div class="dropdown-menu p-0 m-0 dropdown-menu-sm">
        <ul class="navi navi-hover pt-3 pb-4">
            <li class="navi-header font-weight-bolder text-uppercase text-primary font-size-lg pb-0">
                Change status to:
            </li>
            <li class="navi-item">
                <a href="#" class="navi-link" data-toggle="status-change" data-status="1">
                    <span class="navi-text"><span class="label label-light-success label-inline font-weight-bold">Approved</span></span>
                </a>
            </li>
            <li class="navi-item">
                <a href="#" class="navi-link" data-toggle="status-change" data-status="2">
                    <span class="navi-text"><span class="label label-light-danger label-inline font-weight-bold">Rejected</span></span>
                </a>
            </li>
            <li class="navi-item">
                <a href="#" class="navi-link" data-toggle="status-change" data-status="3">
                    <span class="navi-text"><span class="label label-light-warning label-inline font-weight-bold">Pending</span></span>
                </a>
            </li>
            <li class="navi-item">
                <a href="#" class="navi-link" data-toggle="status-change" data-status="4">
                    <span class="navi-text"><span class="label label-light-info label-inline font-weight-bold">On Hold</span></span>
                </a>
            </li>
        </ul>
    </div>
</div>
<button class="btn btn-light-success font-weight-bolder btn-sm mr-2" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_records_fetch_modal">
    Fetch Selected
</button>
<button class="btn btn-light-danger font-weight-bolder btn-sm mr-2" id="kt_subheader_group_actions_delete_all">
    Delete All
</button>
</div>
</div>
<!--end::Group Actions-->
</div>
<!--end::Details-->

<!--begin::Toolbar-->
<div class="d-flex align-items-center">
    <!--begin::Button-->
<a href="#" class="">

            </a>
<!--end::Button-->

                        <!--begin::Button-->
<a href="custom/apps/user/add-user.html" class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2">

Add User                    </a>
<!--end::Button-->

    <!--begin::Dropdown-->
<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="svg-icon svg-icon-success svg-icon-2x"><!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<polygon points="0 0 24 0 24 24 0 24"/>
<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"/>
</g>
</svg><!--end::Svg Icon--></span>                    </a>
<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
<!--begin::Naviigation-->
<ul class="navi">
<li class="navi-header font-weight-bold py-5">
<span class="font-size-lg">Add New:</span>
<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
</li>
<li class="navi-separator mb-3 opacity-70"></li>
<li class="navi-item">
<a href="#" class="navi-link">
<span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
<span class="navi-text">Order</span>
</a>
</li>
<li class="navi-item">
<a href="#" class="navi-link">
<span class="navi-icon"><i class="navi-icon flaticon2-calendar-8"></i></span>
<span class="navi-text">Members</span>
<span class="navi-label">
<span class="label label-light-danger label-rounded font-weight-bold">3</span>
</span>
</a>
</li>
<li class="navi-item">
<a href="#" class="navi-link">
<span class="navi-icon"><i class="navi-icon flaticon2-telegram-logo"></i></span>
<span class="navi-text">Project</span>
</a>
</li>
<li class="navi-item">
<a href="#" class="navi-link">
<span class="navi-icon"><i class="navi-icon flaticon2-new-email"></i></span>
<span class="navi-text">Record</span>
<span class="navi-label">
<span class="label label-light-success label-rounded font-weight-bold">5</span>
</span>
</a>
</li>
<li class="navi-separator mt-3 opacity-70"></li>
<li class="navi-footer pt-5 pb-4">
<a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
<a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
</li>
</ul>
<!--end::Naviigation-->
</div>
</div>
<!--end::Dropdown-->
</div>
<!--end::Toolbar-->
</div>
</div>
<!--end::Subheader-->








<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
<!--begin::Container-->

<div class=" container ">
<!--begin::Card-->
<div class="card card-custom">
<!--begin::Header-->
<div class="card-header flex-wrap border-0 pt-6 pb-0">
<div class="card-title">
<h3 class="card-label">
User Management
<span class="d-block text-muted pt-2 font-size-sm">User management made easy</span>
</h3>
</div>
<div class="card-toolbar">
<!--begin::Dropdown-->
<div class="dropdown dropdown-inline mr-2">
<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect x="0" y="0" width="24" height="24"/>
<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"/>
<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"/>
</g>
</svg><!--end::Svg Icon--></span>		Export
</button>

<!--begin::Dropdown Menu-->
<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
<!--begin::Navigation-->
<ul class="navi flex-column navi-hover py-2">
<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
Choose an option:
</li>
<li class="navi-item">
<a href="#" class="navi-link">
<span class="navi-icon"><i class="la la-print"></i></span>
<span class="navi-text">Print</span>
</a>
</li>
<li class="navi-item">
<a href="#" class="navi-link">
<span class="navi-icon"><i class="la la-copy"></i></span>
<span class="navi-text">Copy</span>
</a>
</li>
<li class="navi-item">
<a href="#" class="navi-link">
<span class="navi-icon"><i class="la la-file-excel-o"></i></span>
<span class="navi-text">Excel</span>
</a>
</li>
<li class="navi-item">
<a href="#" class="navi-link">
<span class="navi-icon"><i class="la la-file-text-o"></i></span>
<span class="navi-text">CSV</span>
</a>
</li>
<li class="navi-item">
<a href="#" class="navi-link">
<span class="navi-icon"><i class="la la-file-pdf-o"></i></span>
<span class="navi-text">PDF</span>
</a>
</li>
</ul>
<!--end::Navigation-->
</div>
<!--end::Dropdown Menu-->
</div>
<!--end::Dropdown-->

<!--begin::Button-->
<a href="#" class="btn btn-primary font-weight-bolder">
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
<!--end::Header-->

<!--begin::Body-->
<div class="card-body">
<!--begin: Datatable-->
<div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">

</div>
<!--end: Datatable-->
</div>
<!--end::Body-->
</div>
<!--end::Card-->
</div>
<!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->


</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Main-->

</form>
</div>
<!--end::Tabpane-->
</div>
</div>
<!--end::Content-->
<script src="assets/js/pages/custom/user/list-datatable.js?v=7.0.6"></script>




@endsection
