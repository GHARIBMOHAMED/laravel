@extends('backend.layouts.app')
@section('page')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-grid-only@1.0.0/bootstrap.css">
<br><br>
            <div class="details">
              <div class="details__container">
                <div class="details__top">
                  <div class="details__company">
                    <div class="details__head">

                    </div>

                  </div>
                  <div class="details__btns"><button class="details__btn btn btn_border"><svg class="icon icon-share">
                        <use xlink:href="{{ asset('img/sprite.svg#icon-share') }}"></use>
                      </svg><span class="btn__text">Share</span></button>
                      <button class="details__btn btn btn_border"><svg class="icon icon-star-fill">
                        <use xlink:href="{{ asset('img/sprite.svg#icon-star-fill') }}"></use>
                      </svg><span class="btn__text">Watchlist</span></button>
                    </div>
                </div>
                <div class="details__flex">
                  <div class="details__money" style="padding-left: 10%">Add Car</div>

                </div>

                    <form class="form" action="{{ route('addcar') }}" method="POST" enctype="multipart/form-data">
                        <div class="scroll scroll-pull" data-scroll="true" data-height="700">
                        @csrf
                        <br><br>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-1  text-right"></label>

                            <div class="col-lg-5 actions__field  ">
                                <div class="actions__field">
                                    <div class="actions__label"> Available Until:</div>
                                    <input type="date" class="actions__input" autocomplete="false" name="Available_date" placeholder="Select date" />
                                    <div class="actions__currency color-orange">Date </div>
                                </div>

                            </div>

                            <label class="col-form-label col-lg-1  text-right"></label>
                            <div class="col-lg-5 actions__field ">
                                <div class="actions__label"> Production year:</div>
                                <input  autocomplete="fals"  class="actions__input " name="Production_year" placeholder="Production year" />
                                <div class="actions__currency color-green">YYYY </div>
                            </div>


                        </div>
                        <br><br>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-1 "></label>
                            <div class="col-lg-5  ">
                                <select class="select" name="state">
                                    <option >Marrakech-Safi Region</option>
                                    <option >Souss-Massa Region</option>
                                    <option >Fès-Meknès Region</option>
                                    <option >Rabat-Salé-Kénitra Region</option>
                                    <option >Béni Mellal-Khénifra Region</option>
                                    <option >Casablanca-Settat Region</option>
                                    <option >Drâa-Tafilalet Region</option>
                                    <option >Guelmim-Oued Noun Region</option>
                                    <option >Laâyoune-Sakia El Hamra Region</option>
                                    <option >Dakhla-Oued Ed-Dahab Region</option>
                                </select>
                            </div>

                            <label class="col-form-label text-right col-lg-1 "></label>
                            <div class="col-lg-5 actions__field ">
                                <div class="actions__label"> Buy Now Price:</div>
                                <input  class="actions__input" name="Estimated_Value" placeholder="Enter Price" />
                                <div class="actions__currency color-green">XXXX MAD </div>
                            </div>
                            </div>
                            <br><br>

                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-1 "></label>
                            <div class="col-lg-5 actions__field ">
                                <div class="actions__label"> Seller Name:</div>
                                <input type="text" autocomplete="fals" class="actions__input " name="Seller" placeholder="Full name" />

                            </div>

                                <label class="col-form-label text-right col-lg-1 "></label>
                                <div class="col-lg-5 actions__field ">
                                    <div class="actions__label"> Plate Number</div>
                                    <input type='text'  autocomplete="fals" class="actions__input" name="Plate_Number" type="text"" />
                                    <div class="actions__currency color-red">XX-XXXXX</div>
                                </div>
                        </div>

                        <br><br>
                        <div class="form-group row">
                            <label class="col-lg-1  col-form-label text-right"></label>
                            <div class="col-lg-5 actions__field">
                                <div class="actions__label"> Millage</div>
                                <input  autocomplete="fals" class="actions__input" name="Kilomiter" placeholder="Enter Millage " />
                                <div class="actions__currency color-green">KM</div>
                            </div>

                            <label class="col-lg-1  col-form-label text-right"></label>
                            <div class="col-lg-5 actions__field">
                                <div class="actions__label">Starting Price </div>
                                <input  autocomplete="fals" class="actions__input" name="Price" placeholder="Enter Price" />
                                <div class="actions__currency color-green">XXXX MAD</div>
                            </div>
                        </div>

                        <br><br>


                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-1 "></label>
                            <div class="col-lg-5 actions__field" >
                                <select class="select" id="container" name="Brand">
                                    <option >Brand</option>
                                    <option >BMW</option>
                                    <option>Ford</option>
                                    <option >Honda</option>
                                    <option >Hyundai</option>
                                    <option >Isuzu</option>
                                    <option >Kia</option>
                                    <option >Lexus</option>
                                    <option >Mazda</option>
                                    <option >Mitsubishi</option>
                                    <option >Nissan</option>
                                    <option >Peugeot</option>
                                    <option >Suzuki</option>
                                    <option >Toyota</option>
                                    <option >Volkswagen</option>
                                    <option >Audi</option>
                                    <option >Aston Martin</option>
                                    <option >Alfa Romeo</option>
                                    <option >Bently</option>
                                    <option >Bugatti</option>
                                    <option >Cadilac</option>
                                    <option >Maserati</option>
                                    <option >Chevrolet</option>
                                    <option >Citroen</option>
                                    <option >Corvet</option>
                                    <option >Dacia</option>
                                    <option >Dodge</option>
                                    <option >Ferrari</option>
                                    <option >Fiat</option>
                                    <option >Infinity</option>
                                    <option >jaguar</option>
                                    <option >Jeep</option>
                                    <option >Mercedes</option>
                                    <option >Mini</option>
                                    <option >Land rover</option>
                                    <option >Opel</option>
                                    <option >porsche</option>
                                    <option >skoda</option>
                                    <option >tesla</option>
                                    <option >Volvo</option>

                                </select>
                            </div>
                            <label class="col-form-label text-right col-lg-1 "></label>
                            <div class="col-lg-5 actions__field ">
                                <select class="select" name="Damage">
                                    <option>Damage</option>
                                    <option >Paint Scratches</option>
                                    <option >Dings & Dents</option>
                                    <option >Weather Related Damage</option>
                                    <option >Collision Damage</option>
                                    <option >Cracks</option>
                                    <option >Car Damage by Severity</option>
                                    <option >Head-On Collision</option>
                                    <option >Single-Vehicle Accidents</option>
                                    <option >Side-Impact Collision</option>
                                </select>
                            </div>
                            </div>
                            <br><br>

                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-1 "></label>
                                <div class="col-lg-5 actions__field ">
                                    <select class="select" name="Fule_Type">
                                        <option >Fule Type</option>
                                        <option >Diesel</option>
                                        <option >Gasoline</option>
                                        <option >Electric</option>
                                    </select>
                                </div>

                                <label class="col-form-label text-right col-lg-1 "></label>
                                <div class="col-lg-5 actions__field ">
                                    <select class="select" name="Vehicle_Type">
                                        <option value="">Vehicle Type</option>
                                        <option >coupe </option>
                                        <option >sports cars</option>
                                        <option  >Wagons </option>
                                        <option >hatchback</option>
                                        <option >convertible</option>
                                        <option> UV</option>
                                        <option >Minivans </option>
                                        <option >pickup truck</option>
                                    </select>
                                </div>
                                </div>
                                <br><br>


                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-1 "></label>
                                    <div class="col-lg-5 actions__field ">
                                        <select class="select" name="Engin_Type">
                                            <option>Engin Type</option>
                                            <option >TDI</option>
                                            <option >TI</option>
                                            <option >V4</option>
                                            <option >V6</option>
                                            <option >V8</option>
                                        </select>
                                    </div>
                                    <label class="col-form-label text-right col-lg-1 "></label>
                                    <div class="col-lg-5 actions__field ">
                                        <select class="select" name="Featured">
                                            <option>Featured</option>
                                            <option >Runs & Drives</option>
                                            <option >Not running</option>
                                            <option >Missing keys</option>
                                        </select>
                                    </div>
                                </div>
                                <br><br>

                                <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-1 "></label>
                                        <div class="col-lg-5 actions__field ">
                                            <div class="actions__label">brand </div>
                                            <input type="text" class="actions__input"  id="brand" name="brand" placeholder="Enter brand " />

                                        </div>
                                        <label class="col-form-label text-right col-lg-1 "></label>
                                        <div class="col-lg-5 actions__field ">
                                            <select class="select" name="Transmittion_Type" id="Transmittion_Type">
                                                <option >Transmittion Type</option>
                                                <option >Manual transmission </option>
                                                <option >Automatic transmission </option>
                                                <option >Continuously variable transmission</option>
                                                <option >Semi-automatic and dual-clutch </option>

                                            </select>
                                        </div>
                                </div>
                                    <br><br>

                                    <div class="form-group">
                                            <div  class="col-lg-6 row">
                                                    <label class="col-form-label text-right col-lg-2 "></label>
                                                    <div  class="col-lg-10 actions__field">
                                                        <div class="actions__label">Upload </div>
                                                            <input type="file" name="image[]" class="actions__input"  multiple="multiple" />
                                                    </div>
                                            </div>

                                    </div>

                <br><br><br><br>
                </div>
                <br>
                <button class="details__btn btn btn_wide btn_big" style="background-color: rgb(250, 104, 51)"><span style="color: bisque">Add Car</span> </button>
            </form>


              </div>

              </div>
            </div>

@endsection
