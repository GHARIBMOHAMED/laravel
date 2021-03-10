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
                  <div class="details__btns">
                    <a class="details__btn btn btn_border" href="{{ url('newhome') }}" style="background-color: rgb(250, 104, 51)">
                      <i class="fas fa-long-arrow-alt-left"></i>&nbsp;
                       <span class="btn__text">back</span>
                   </a>
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
                                    <div class="actions__currency color-red">Date </div>
                                </div>

                            </div>

                            <label class="col-form-label col-lg-1  text-right"></label>
                            <div class="col-lg-5 actions__field ">
                                <div class="actions__label"> Production year:</div>
                                <input  autocomplete="fals"  class="actions__input " name="Production_year" placeholder="Production year" />
                                <div class="actions__currency color-red">YYYY </div>
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
                                <div class="actions__currency color-red"> MAD </div>
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
                                <div class="actions__currency color-red">KM</div>
                            </div>

                            <label class="col-lg-1  col-form-label text-right"></label>
                            <div class="col-lg-5 actions__field">
                                <div class="actions__label">Starting Price </div>
                                <input  autocomplete="fals" class="actions__input" name="Price" placeholder="Enter Price" />
                                <div class="actions__currency color-red"> MAD</div>
                            </div>
                        </div>

                        <br><br>


                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-1 "></label>
                            <div class="col-lg-5 actions__field" >
                                <select class="select" id="container" name="Brand">
                                    <option >Brand</option>
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
                                    <option value="images/carsopel/">Opel</option>
                                    <option value="images/cars/porsche">porsche</option>
                                    <option value="images/cars/skoda">skoda</option>
                                    <option value="images/cars/tesla">tesla</option>
                                    <option value="images/cars/volvo">Volvo</option>

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
