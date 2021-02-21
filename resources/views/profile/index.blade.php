@extends('layouts.app')

@section('main')


	<link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <link href="https://releases.transloadit.com/uppy/v1.25.0/uppy.min.css" rel="stylesheet">


<!--begin::Card-->
<div class="card card-custom">
	<div class="card-header flex-wrap border-0 pt-6 pb-0">
		<div class="card-title">
			<h3 class="card-label">
				All Vehicles
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




<!-- Modal-->
<div id="ktmodal"  class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Cars</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="scroll scroll-pull" data-scroll="true" data-height="700">
                    <form class="form" id="deleteForm1" action="" method="POST">
                        @csrf
                        <br><br>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-1  text-right">Available Until :</label>
                            <div class="col-lg-5  ">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="Available_date1"  name="Available_date1" placeholder="Select date" id="kt_datepicker"/>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-calendar-check-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Select a date</span>
                            </div>

                            <label class="col-form-label col-lg-1  text-right">Production year :</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control " id="Production_year1" name="Production_year1" placeholder="Production year"/>
                                <span class="form-text text-muted">Select a date</span>
                            </div>
                        </div>


                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-1 ">State :</label>
                            <div class="col-lg-5 ">
                                <select class="form-control selectpicker" name="state1" id="state1">
                                    <option>Marrakech-Safi Region</option>
                                    <option>Souss-Massa Region</option>
                                    <option>Fès-Meknès Region</option>
                                    <option>Rabat-Salé-Kénitra Region</option>
                                    <option>Béni Mellal-Khénifra Region</option>
                                    <option>Casablanca-Settat Region</option>
                                    <option>Drâa-Tafilalet Region</option>
                                    <option>Guelmim-Oued Noun Region</option>
                                    <option>Laâyoune-Sakia El Hamra Region</option>
                                    <option>Dakhla-Oued Ed-Dahab Region</option>
                                </select>
                            </div>

                            <label class="col-form-label text-right col-lg-1 ">Buy Now Price :</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control" name="Estimated_Value1" id="Estimated_Value1" placeholder="Enter Price"/>
                                <span class="form-text text-muted">Buy Now Price</span>
                            </div>
                        </div>

                            <div class="separator separator-dashed my-10"></div>

                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-1 ">Seller Name :</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control " id="Seller1" name="Seller1" placeholder="Full name"/>
                                <span class="form-text text-muted">Please enter your full name</span>
                            </div>

                                <label class="col-form-label text-right col-lg-1 ">Plate Number :</label>
                                <div class="col-lg-5">
                                    <input type='text' class="form-control" name="Plate_Number1" id="Plate_Number1" type="text"/>
                                    <span class="form-text text-muted">Plate number : <code>26-154896</code></span>
                                </div>
                        </div>

                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group row">
                            <label class="col-lg-1  col-form-label text-right">Millage :</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control"  id="Millage1" name="Millage1" placeholder="Enter Millage "/>
                                <span class="form-text text-muted">Please enter your Millage</span>
                            </div>

                            <label class="col-lg-1  col-form-label text-right">Starting Price :</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control" id="Price1" name="Price1" placeholder="Enter Price"/>
                                <span class="form-text text-muted">Please enter your Price</span>
                            </div>
                        </div>

                        <div class="separator separator-dashed my-10"></div>


                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-1 ">Brand :</label>
                            <div class="col-lg-5">
                                <select class="form-control selectpicker" id="Brand1" name="Brand1">
                                    <option value="images/cars/bmw">BMW</option>
                                    <option value="images/cars/ford">Ford</option>
                                    <option value="images/cars/honda">Honda</option>
                                    <option value="images/cars/hyundai">Hyundai</option>
                                    <option value="images/cars/isuzu">Isuzu</option>
                                    <option value="images/cars/kia">Kia</option>
                                    <option value="images/cars/lexus">Lexus</option>
                                    <option value="images/cars/mazda">Mazda</option>
                                    <option value="images/cars/mitsubishi">Mitsubishi</option>
                                    <option value="images/cars/nissan">Nissan</option>
                                    <option value="images/cars/peugeot">Peugeot</option>
                                    <option value="images/cars/suzuki">Suzuki</option>
                                    <option value="images/cars/toyota">Toyota</option>
                                    <option value="images/cars/volkswagen">Volkswagen</option>
                                    <option value="images/cars/audi">Audi</option>
                                    <option value="images/cars/aston-martin">Aston Martin</option>
                                    <option value="images/cars/alfa-romeo">Alfa Romeo</option>
                                    <option value="images/cars/bently">Bently</option>
                                    <option value="images/cars/bugatti">Bugatti</option>
                                    <option value="images/cars/cadilac">Cadilac</option>
                                    <option value="images/cars/chevrolet">Chevrolet</option>
                                    <option value="images/cars/citroen">Citroen</option>
                                    <option value="images/cars/corvet">Corvet</option>
                                    <option value="images/cars/dacia">Dacia</option>
                                    <option value="images/cars/dodge">Dodge</option>
                                    <option value="images/cars/maserati">Maserati</option>
                                    <option value="images/cars/ferrari">Ferrari</option>
                                    <option value="images/cars/fiat">Fiat</option>
                                    <option value="images/cars/infinity">Infinity</option>
                                    <option value="images/cars/jaguar">jaguar</option>
                                    <option value="images/cars/jeep">Jeep</option>
                                    <option value="images/cars/mercedes">Mercedes</option>
                                    <option value="images/cars/mini">Mini</option>
                                    <option value="images/cars/land-rover">Land rover</option>
                                    <option value="images/cars/opel">Opel</option>
                                    <option value="images/cars/porsche">porsche</option>
                                    <option value="images/cars/skoda">skoda</option>
                                    <option value="images/cars/tesla">tesla</option>
                                    <option value="images/cars/volvo">Volvo</option>

                                </select>
                            </div>
                            <label class="col-form-label text-right col-lg-1 ">Damage :</label>
                            <div class="col-lg-5 ">
                                <select class="form-control selectpicker" name="Damage1" id="Damage1">
                                    <option>Paint Scratches</option>
                                    <option>Dings & Dents</option>
                                    <option>Weather Related Damage</option>
                                    <option>Collision Damage</option>
                                    <option>Cracks</option>
                                    <option>Car Damage by Severity</option>
                                    <option>Head-On Collision</option>
                                    <option>Single-Vehicle Accidents</option>
                                    <option>Side-Impact Collision</option>
                                </select>
                            </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>





                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-1 ">Engin Type :</label>
                                    <div class="col-lg-5 ">
                                        <select class="form-control selectpicker" name="Engin_Type1" id="Engin_Type1">
                                            <option>TDI</option>
                                            <option>TI</option>
                                            <option>V4</option>
                                            <option>V6</option>
                                            <option>V8</option>
                                        </select>
                                    </div>
                                    <label class="col-form-label text-right col-lg-1 ">Featured</label>
                                    <div class="col-lg-5 ">
                                        <select class="form-control selectpicker" name="Featured1" id="Featured1">
                                            <option>Runs & Drives</option>
                                            <option>Not running</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-10"></div>
                                 <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-1 ">Fule Type :</label>
                                        <div class="col-lg-5 ">
                                            <select class="form-control selectpicker" name="Fule_Type1" id="Fule_Type1">
                                                <option>Diesel</option>
                                                <option>Gasoline</option>
                                                <option>Kerosene</option>
                                            </select>
                                        </div>
                                        <label class="col-form-label text-right col-lg-1 ">Vehicle Type :</label>
                                        <div class="col-lg-5 ">
                                            <select class="form-control selectpicker" name="Vehicle_Type1" id="Vehicle_Type1">
                                                <option>coupe </option>
                                                <option>sports cars</option>
                                                <option>Wagons </option>
                                                <option>hatchback</option>
                                                <option>convertible</option>
                                                <option>SUV</option>
                                                <option>Minivans </option>
                                                <option>pickup truck</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="separator separator-dashed my-10"></div>

                                <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-1 ">Model :</label>
                                        <div class="col-lg-5 ">
                                            <input type="text" class="form-control"  id="Model1" name="Model1" placeholder="Enter model "/>
                                            <span class="form-text text-muted">Please enter your Model</span>
                                        </div>
                                        <label class="col-form-label text-right col-lg-1 ">Transmittion Type :</label>
                                        <div class="col-lg-5 ">
                                            <select class="form-control selectpicker" name="Transmittion_Type1" id="Transmittion_Type1">
                                                <option>Manual transmission </option>
                                                <option>Automatic transmission </option>
                                                <option>Continuously variable transmission</option>
                                                <option>Semi-automatic and dual-clutch </option>

                                            </select>
                                        </div>
                                </div>



                                    <div class="separator separator-dashed my-10"></div>

                                <div class="form-group row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-8">

                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="background-color: darkgrey">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img   style="height:530px;" >
                                                  </div>
                                                <div id="dvProdList"> </div>

                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                              <span class="sr-only">Next</span>
                                            </a>
                                          </div>
                                    </div>
                                </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
                </div>

            </form>
                </div>
        </div>
    </div>
</div>




<!-- Modal-->
<div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl"  role="document">
        <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add a car</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form" action="{{ route('addcar') }}" method="POST" enctype="multipart/form-data">
                        <div class="scroll scroll-pull" data-scroll="true" data-height="700">
                        @csrf
                        <br><br>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-1  text-right">Available Until :</label>
                            <div class="col-lg-5  ">
                                <div class="input-group">
                                    <input type="text" class="form-control" autocomplete="fals" name="Available_date" placeholder="Select date" id="kt_datepicker"/>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-calendar-check-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Select a date</span>
                            </div>

                            <label class="col-form-label col-lg-1  text-right">Production year :</label>
                            <div class="col-lg-5">
                                <input  autocomplete="fals" type="number" class="form-control " name="Production_year" placeholder="Production year"/>
                                <span class="form-text text-muted">Select a date</span>
                            </div>


                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-1 ">State :</label>
                            <div class="col-lg-5 ">
                                <select class="form-control selectpicker" name="state">
                                    <option>Marrakech-Safi Region</option>
                                    <option>Souss-Massa Region</option>
                                    <option>Fès-Meknès Region</option>
                                    <option>Rabat-Salé-Kénitra Region</option>
                                    <option>Béni Mellal-Khénifra Region</option>
                                    <option>Casablanca-Settat Region</option>
                                    <option>Drâa-Tafilalet Region</option>
                                    <option>Guelmim-Oued Noun Region</option>
                                    <option>Laâyoune-Sakia El Hamra Region</option>
                                    <option>Dakhla-Oued Ed-Dahab Region</option>
                                </select>
                            </div>
                            <label class="col-form-label text-right col-lg-1 ">Buy Now Price :</label>
                            <div class="col-lg-5">
                                <input type="number" class="form-control" name="Estimated_Value" placeholder="Enter Price"/>
                                <span class="form-text text-muted">Buy Now Price</span>
                            </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>

                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-1 ">Seller Name :</label>
                            <div class="col-lg-5">
                                <input type="text" autocomplete="fals" class="form-control " name="Seller" placeholder="Full name"/>
                                <span class="form-text text-muted">Please enter your full name</span>
                            </div>

                                <label class="col-form-label text-right col-lg-1 ">Plate Number :</label>
                                <div class="col-lg-5">
                                    <input type='text'  autocomplete="fals" class="form-control" name="Plate_Number" id="kt_inputmask_4" type="text"/>
                                    <span class="form-text text-muted">Plate number : <code>26-154896</code></span>
                                </div>
                        </div>

                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group row">
                            <label class="col-lg-1  col-form-label text-right">Millage :</label>
                            <div class="col-lg-5">
                                <input type="number" autocomplete="fals" class="form-control" name="Millage" placeholder="Enter Millage "/>
                                <span class="form-text text-muted">Please enter your Millage</span>
                            </div>

                            <label class="col-lg-1  col-form-label text-right">Starting Price :</label>
                            <div class="col-lg-5">
                                <input type="number" autocomplete="fals" class="form-control" name="Price" placeholder="Enter Price"/>
                                <span class="form-text text-muted">Please enter your Price</span>
                            </div>
                        </div>

                        <div class="separator separator-dashed my-10"></div>


                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-1 ">Brand :</label>
                            <div class="col-lg-5">
                                <select class="form-control selectpicker" name="Brand">
                                    <option value="images/cars/bmw">BMW</option>
                                    <option value="images/cars/ford">Ford</option>
                                    <option value="images/cars/honda">Honda</option>
                                    <option value="images/cars/hyundai">Hyundai</option>
                                    <option value="images/cars/isuzu">Isuzu</option>
                                    <option value="images/cars/kia">Kia</option>
                                    <option value="images/cars/lexus">Lexus</option>
                                    <option value="images/cars/mazda">Mazda</option>
                                    <option value="images/cars/mitsubishi">Mitsubishi</option>
                                    <option value="images/cars/nissan">Nissan</option>
                                    <option value="images/cars/peugeot">Peugeot</option>
                                    <option value="images/cars/suzuki">Suzuki</option>
                                    <option value="images/cars/toyota">Toyota</option>
                                    <option value="images/cars/volkswagen">Volkswagen</option>
                                    <option value="images/cars/audi">Audi</option>
                                    <option value="images/cars/aston-martin">Aston Martin</option>
                                    <option value="images/cars/alfa-romeo">Alfa Romeo</option>
                                    <option value="images/cars/bently">Bently</option>
                                    <option value="images/cars/bugatti">Bugatti</option>
                                    <option value="images/cars/cadilac">Cadilac</option>
                                    <option value="images/cars/maserati">Maserati</option>
                                    <option value="images/cars/chevrolet">Chevrolet</option>
                                    <option value="images/cars/citroen">Citroen</option>
                                    <option value="images/cars/corvet">Corvet</option>
                                    <option value="images/cars/dacia">Dacia</option>
                                    <option value="images/cars/dodge">Dodge</option>
                                    <option value="images/cars/ferrari">Ferrari</option>
                                    <option value="images/cars/fiat">Fiat</option>
                                    <option value="images/cars/infinity">Infinity</option>
                                    <option value="images/cars/jaguar">jaguar</option>
                                    <option value="images/cars/jeep">Jeep</option>
                                    <option value="images/cars/mercedes">Mercedes</option>
                                    <option value="images/cars/mini">Mini</option>
                                    <option value="images/cars/land-rover">Land rover</option>
                                    <option value="images/cars/opel">Opel</option>
                                    <option value="images/cars/porsche">porsche</option>
                                    <option value="images/cars/skoda">skoda</option>
                                    <option value="images/cars/tesla">tesla</option>
                                    <option value="images/cars/volvo">Volvo</option>

                                </select>
                            </div>
                            <label class="col-form-label text-right col-lg-1 ">Damage :</label>
                            <div class="col-lg-5 ">
                                <select class="form-control selectpicker" name="Damage">
                                    <option>Paint Scratches</option>
                                    <option>Dings & Dents</option>
                                    <option>Weather Related Damage</option>
                                    <option>Collision Damage</option>
                                    <option>Cracks</option>
                                    <option>Car Damage by Severity</option>
                                    <option>Head-On Collision</option>
                                    <option>Single-Vehicle Accidents</option>
                                    <option>Side-Impact Collision</option>
                                </select>
                            </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>

                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-1 ">Fule Type :</label>
                                <div class="col-lg-5 ">
                                    <select class="form-control selectpicker" name="Fule_Type">
                                        <option>Diesel</option>
                                        <option>Gasoline</option>
                                        <option>electric</option>
                                    </select>
                                </div>
                                <label class="col-form-label text-right col-lg-1 ">Vehicle Type :</label>
                                <div class="col-lg-5 ">
                                    <select class="form-control selectpicker" name="Vehicle_Type">

                                        <option>coupe </option>
                                        <option>sports cars</option>
                                        <option>Wagons </option>
                                        <option>hatchback</option>
                                        <option>convertible</option>
                                        <option>SUV</option>
                                        <option>Minivans </option>
                                        <option>pickup truck</option>
                                    </select>
                                </div>
                                </div>
                                <div class="separator separator-dashed my-10"></div>


                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-1 ">Engin Type :</label>
                                    <div class="col-lg-5 ">
                                        <select class="form-control selectpicker" name="Engin_Type">
                                            <option>TDI</option>
                                            <option>TI</option>
                                            <option>V4</option>
                                            <option>V6</option>
                                            <option>V8</option>
                                        </select>
                                    </div>
                                    <label class="col-form-label text-right col-lg-1 ">Featured</label>
                                    <div class="col-lg-5 ">
                                        <select class="form-control selectpicker" name="Featured">
                                            <option>Runs & Drives</option>
                                            <option>Not running</option>
                                            <option>Missing keys</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-10"></div>

                                <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-1 ">Model :</label>
                                        <div class="col-lg-5 ">
                                            <input type="text" class="form-control"  id="Model" name="Model" placeholder="Enter model "/>
                                            <span class="form-text text-muted">Please enter your Model</span>
                                        </div>
                                        <label class="col-form-label text-right col-lg-1 ">Transmittion Type :</label>
                                        <div class="col-lg-5 ">
                                            <select class="form-control selectpicker" name="Transmittion_Type" id="Transmittion_Type">
                                                <option>Manual transmission </option>
                                                <option>Automatic transmission </option>
                                                <option>Continuously variable transmission</option>
                                                <option>Semi-automatic and dual-clutch </option>

                                            </select>
                                        </div>
                                </div>
                                    <div class="separator separator-dashed my-10"></div>



                                <div  class="form-group " >
                                     <div  class="col-lg-12">
                                            <div  class="col-lg-12 row">
                                                       <label class="col-form-label text-right col-lg-2 ">Upload photos :</label>
                                                    <div  class="col-lg-8">
                                                        <div  class="custom-file">
                                                            <input type="file" name="image[]" class="custom-file-input" id="customFile" multiple="multiple"/>
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>

                                            </div>
                                    </div>


                                </div>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
                </div>
            </form>
                </div>
        </div>
    </div>
</div>



<script>



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
                        url:'http://127.0.0.1:8000/carData',
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
                sortable: true,



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
                field: 'plate',
                title: 'Plate number',
                sortable: 'asc',
                type: 'number',
                selector: false,
                textAlign: 'center',

            },
            {
					field: 'brand',
					title: 'Brand',
                    sortable: 'asc',
					template: function(data) {
                        var output = '';
						if(data.brand){
                            var user_img = 'background-image:url(\'' + data.brand + '-logo.png\')';

							output = '<div class="d-flex align-items-center">\
								<div class="symbol symbol-50 flex-shrink-0">\
									<div class="symbol-label" style="' + user_img + ' ;height:40px !important;"></div>\
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
                sortable: 'asc',
                field: 'vehicleType',
                title: 'vehicle Type',
                textAlign: 'center',

            }, {sortable: 'asc',
                field: 'estValue',
                title: 'Est Value',
                textAlign: 'center',

            }
            , {
                sortable: 'asc',
                field: 'price',
                title: 'Starting price',
                textAlign: 'center',

            },
            {
                field: 'location',
                title: 'Location',
                textAlign: 'center',

            },
            {
                field: 'fuleType',
                title: 'Fule Type',
                textAlign: 'center',

            },{
                field: 'km',
                title: 'Millage',
                textAlign: 'center',
            }, {
                field: 'year',
                title: 'Production year',
                textAlign: 'center',

            },
            {
                field: 'damage',
                title: 'Damage',
                textAlign: 'center',
            },{
                field: 'Actions',
                title: 'action',
                sortable: false,
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
                        url: 'http://127.0.0.1:8000/carDestroy/'+id ,
                        method:'DELETE',
                        contentType: 'application/json',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: {
                            "id": id,
                        },
                        success: function(response) {
                            toastr.error("error","The Car is deleted");
                            if(response) {
                            {
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
                        url: 'http://127.0.0.1:8000/carUpdate/'+id ,
                        method:'GET',
                        contentType: 'application/json',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        success: function(response) {
                            if(response) {

                                images = response.images;

                                if (i>=images) return;
                                var i=0 , images , url;
                                images.forEach(element => {

                                    url = '<div class="carousel-item ">\
                                        <img  src="/media/'+ images[i++] +'" style="height:530px; background-color:gray;" alt="second slide">\
                                              </div>';
                                    $('#dvProdList').append(url);

                                });

                                $('#deleteForm1').attr("action", '/newCar/'+response.id);
                                $("#Available_date1").val(response.saleDate);
                                $("#Production_year1").val(response.year);
                                $("#state1").val(response.location);
                                $("#Estimated_Value1").val(response.estValue);
                                $("#Seller1").val(response.saleName);
                                $("#Plate_Number1").val(response.plate);
                                $("#Millage1").val(response.km);
                                $("#Price1").val(response.price);
                                $("#Brand1").val(response.brand);
                                $("#Damage1").val(response.damage);
                                $("#Fule_Type1").val(response.fuleType);
                                $("#Vehicle_Type1").val(response.vehicleType);
                                $("#Engin_Type1").val(response.engineType);
                                $("#Featured1").val(response.featured);
                                $("#Model1").val(response.model);
                                $("#Transmittion_Type1").val(response.transmittion);


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


@endsection
