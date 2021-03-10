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
                      </svg><span class="btn__text">Share</span></button><button class="details__btn btn btn_border"><svg class="icon icon-star-fill">
                        <use xlink:href="{{ asset('img/sprite.svg#icon-star-fill') }}"></use>
                      </svg><span class="btn__text">Watchlist</span></button>
                    </div>
                </div>
                <div class="details__flex">
                  <div class="details__money" style="padding-left: 10%">Car Details</div>

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
                                    <input type="date" class="actions__input" autocomplete="false" name="Available_date" placeholder="Select date" value="{{ $car->saleDate }}"/>
                                    <div class="actions__currency color-orange">Date </div>
                                </div>

                            </div>

                            <label class="col-form-label col-lg-1  text-right"></label>
                            <div class="col-lg-5 actions__field ">
                                <div class="actions__label"> Production year:</div>
                                <input  autocomplete="fals"  class="actions__input " name="Production_year" placeholder="Production year" value="{{ $car->year }}" />
                                <div class="actions__currency color-green">YYYY </div>
                            </div>


                        </div>
                        <br><br>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-1 "></label>
                            <div class="col-lg-5  ">
                                <select class="select" name="state">
                                    <option {{ $car->location === 'Marrakech-Safi Region' ? 'selected' : '' }}>Marrakech-Safi Region</option>
                                    <option {{ $car->location === 'Souss-Massa Region' ? 'selected' : '' }}>Souss-Massa Region</option>
                                    <option {{ $car->location === 'Fès-Meknès Region' ? 'selected' : '' }}>Fès-Meknès Region</option>
                                    <option {{ $car->location === 'Rabat-Salé-Kénitra Region' ? 'selected' : '' }}>Rabat-Salé-Kénitra Region</option>
                                    <option {{ $car->location === 'Béni Mellal-Khénifra Region' ? 'selected' : '' }}>Béni Mellal-Khénifra Region</option>
                                    <option {{ $car->location === 'Casablanca-Settat Region' ? 'selected' : '' }}>Casablanca-Settat Region</option>
                                    <option {{ $car->location === 'Drâa-Tafilalet Region' ? 'selected' : '' }}>Drâa-Tafilalet Region</option>
                                    <option {{ $car->location === 'Guelmim-Oued Noun Region' ? 'selected' : '' }}>Guelmim-Oued Noun Region</option>
                                    <option {{ $car->location === 'Laâyoune-Sakia El Hamra Region' ? 'selected' : '' }}>Laâyoune-Sakia El Hamra Region</option>
                                    <option {{ $car->location === 'Dakhla-Oued Ed-Dahab Region' ? 'selected' : '' }}>Dakhla-Oued Ed-Dahab Region</option>
                                </select>
                            </div>
                            <label class="col-form-label text-right col-lg-1 "></label>
                            <div class="col-lg-5 actions__field ">
                                <div class="actions__label"> Buy Now Price:</div>
                                <input  class="actions__input" name="Estimated_Value" placeholder="Enter Price" value="{{ $car->estValue }}" />
                                <div class="actions__currency color-green">XXXX MAD </div>
                            </div>
                            </div>
                            <br><br>

                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-1 "></label>
                            <div class="col-lg-5 actions__field ">
                                <div class="actions__label"> Seller Name:</div>
                                <input type="text" autocomplete="fals" class="actions__input " name="Seller" placeholder="Full name" value="{{ $car->saleName }}"/>

                            </div>

                                <label class="col-form-label text-right col-lg-1 "></label>
                                <div class="col-lg-5 actions__field ">
                                    <div class="actions__label"> Plate Number</div>
                                    <input type='text'  autocomplete="fals" class="actions__input" name="Plate_Number" type="text"value="{{ $car->plate }}" />
                                    <div class="actions__currency color-red">XX-XXXXX</div>
                                </div>
                        </div>

                        <br><br>
                        <div class="form-group row">
                            <label class="col-lg-1  col-form-label text-right"></label>
                            <div class="col-lg-5 actions__field">
                                <div class="actions__label"> Millage</div>
                                <input  autocomplete="fals" class="actions__input" name="Kilomiter" placeholder="Enter Millage "value="{{ $car->km }}" />
                                <div class="actions__currency color-green">KM</div>
                            </div>

                            <label class="col-lg-1  col-form-label text-right"></label>
                            <div class="col-lg-5 actions__field">
                                <div class="actions__label">Starting Price </div>
                                <input  autocomplete="fals" class="actions__input" name="Price" placeholder="Enter Price"value="{{ $car->price }}" />
                                <div class="actions__currency color-green">XXXX MAD</div>
                            </div>
                        </div>

                        <br><br>


                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-1 "></label>
                            <div class="col-lg-5 actions__field" >
                                <select class="select" id="container" name="Brand">
                                    <option >Brand</option>
                                    <option value="images/cars/bmw" {{ $car->brand === 'images/cars/bmw' ? 'selected' : '' }}>BMW</option>
                                    <option value="images/cars/ford"  {{ $car->brand === 'images/cars/ford' ? 'selected' : '' }}>Ford</option>
                                    <option value="images/cars/honda" {{ $car->brand === 'images/cars/honda' ? 'selected' : '' }}>Honda</option>
                                    <option value="images/cars/hyundai" {{ $car->brand === 'images/cars/hyundai' ? 'selected' : '' }}>Hyundai</option>
                                    <option value="images/cars/isuzu" {{ $car->brand === 'images/cars/isuzu' ? 'selected' : '' }}>Isuzu</option>
                                    <option value="images/cars/kia" {{ $car->brand === 'images/cars/kia' ? 'selected' : '' }}>Kia</option>
                                    <option value="images/cars/lexus" {{ $car->brand === 'images/cars/lexus' ? 'selected' : '' }}>Lexus</option>
                                    <option value="images/cars/mazda" {{ $car->brand === 'images/cars/mazda' ? 'selected' : '' }}>Mazda</option>
                                    <option value="images/cars/mitsubishi" {{ $car->brand === 'images/cars/mitsubishi' ? 'selected' : '' }}>Mitsubishi</option>
                                    <option value="images/cars/nissan" {{ $car->brand === 'images/cars/nissan' ? 'selected' : '' }}>Nissan</option>
                                    <option value="images/cars/peugeot" {{ $car->brand === 'images/cars/peugeot' ? 'selected' : '' }}>Peugeot</option>
                                    <option value="images/cars/suzuki" {{ $car->brand === 'images/cars/suzuki' ? 'selected' : '' }}>Suzuki</option>
                                    <option value="images/cars/toyota" {{ $car->brand === 'images/cars/toyota' ? 'selected' : '' }}>Toyota</option>
                                    <option value="images/cars/volkswagen" {{ $car->brand === 'images/cars/volkswagen' ? 'selected' : '' }}>Volkswagen</option>
                                    <option value="images/cars/audi" {{ $car->brand === 'images/cars/audi' ? 'selected' : '' }}>Audi</option>
                                    <option value="images/cars/aston-martin" {{ $car->brand === 'images/cars/aston-martin' ? 'selected' : '' }}>Aston Martin</option>
                                    <option value="images/cars/alfa-romeo" {{ $car->brand === 'images/cars/alfa-romeo' ? 'selected' : '' }}>Alfa Romeo</option>
                                    <option value="images/cars/bently" {{ $car->brand === 'images/cars/bently' ? 'selected' : '' }}>Bently</option>
                                    <option value="images/cars/bugatti" {{ $car->brand === 'images/cars/bugatti' ? 'selected' : '' }}>Bugatti</option>
                                    <option value="images/cars/cadilac" {{ $car->brand === 'images/cars/cadilac' ? 'selected' : '' }}>Cadilac</option>
                                    <option value="images/cars/maserati" {{ $car->brand === 'images/cars/maserati' ? 'selected' : '' }}>Maserati</option>
                                    <option value="images/cars/chevrolet" {{ $car->brand === 'images/cars/chevrolet' ? 'selected' : '' }}>Chevrolet</option>
                                    <option value="images/cars/citroen" {{ $car->brand === 'images/cars/citroen' ? 'selected' : '' }}>Citroen</option>
                                    <option value="images/cars/corvet" {{ $car->brand === 'images/cars/corvet' ? 'selected' : '' }}>Corvet</option>
                                    <option value="images/cars/dacia" {{ $car->brand === 'images/cars/dacia' ? 'selected' : '' }}>Dacia</option>
                                    <option value="images/cars/dodge" {{ $car->brand === 'images/cars/dodge' ? 'selected' : '' }}>Dodge</option>
                                    <option value="images/cars/ferrari" {{ $car->brand === 'images/cars/ferrari' ? 'selected' : '' }}>Ferrari</option>
                                    <option value="images/cars/fiat" {{ $car->brand === 'images/cars/fiat' ? 'selected' : '' }}>Fiat</option>
                                    <option value="images/cars/infinity" {{ $car->brand === 'images/cars/infinity' ? 'selected' : '' }}>Infinity</option>
                                    <option value="images/cars/jaguar" {{ $car->brand === 'images/cars/jaguar' ? 'selected' : '' }}>jaguar</option>
                                    <option value="images/cars/jeep" {{ $car->brand === 'images/cars/jeep' ? 'selected' : '' }}>Jeep</option>
                                    <option value="images/cars/mercedes" {{ $car->brand === 'images/cars/mercedes' ? 'selected' : '' }}>Mercedes</option>
                                    <option value="images/cars/mini" {{ $car->brand === 'images/cars/mini' ? 'selected' : '' }}>Mini</option>
                                    <option value="images/cars/land-rover" {{ $car->brand === 'images/cars/land-rover' ? 'selected' : '' }}>Land rover</option>
                                    <option value="images/cars/opel" {{ $car->brand === 'images/cars/opel' ? 'selected' : '' }}>Opel</option>
                                    <option value="images/cars/porsche" {{ $car->brand === 'images/cars/porsche' ? 'selected' : '' }}>porsche</option>
                                    <option value="images/cars/skoda" {{ $car->brand === 'images/cars/skoda' ? 'selected' : '' }}>skoda</option>
                                    <option value="images/cars/tesla" {{ $car->brand === 'images/cars/tesla' ? 'selected' : '' }}>tesla</option>
                                    <option value="images/cars/volvo" {{ $car->brand === 'images/cars/volvo' ? 'selected' : '' }}>Volvo</option>

                                </select>
                            </div>
                            <label class="col-form-label text-right col-lg-1 "></label>
                            <div class="col-lg-5 actions__field ">
                                <select class="select" name="Damage">
                                    <option>Damage</option>
                                    <option {{ $car->damage === 'Paint Scratches' ? 'selected' : '' }}>Paint Scratches</option>
                                    <option {{ $car->damage === 'Dings & Dents' ? 'selected' : '' }}>Dings & Dents</option>
                                    <option {{ $car->damage === 'Weather Related Damage' ? 'selected' : '' }}>Weather Related Damage</option>
                                    <option {{ $car->damage === 'Collision Damage' ? 'selected' : '' }}>Collision Damage</option>
                                    <option {{ $car->damage === 'Cracks' ? 'selected' : '' }}>Cracks</option>
                                    <option {{ $car->damage === 'Car Damage by Severity' ? 'selected' : '' }}>Car Damage by Severity</option>
                                    <option {{ $car->damage === 'Head-On Collision' ? 'selected' : '' }}>Head-On Collision</option>
                                    <option {{ $car->damage === 'Single-Vehicle Accidents' ? 'selected' : '' }}>Single-Vehicle Accidents</option>
                                    <option {{ $car->damage === 'Side-Impact Collision' ? 'selected' : '' }}>Side-Impact Collision</option>
                                </select>
                            </div>
                            </div>
                            <br><br>

                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-1 "></label>
                                <div class="col-lg-5 actions__field ">
                                    <select class="select" name="Fule_Type">
                                        <option {{ $car->fuleType === 'Fule Type' ? 'selected' : '' }}>Fule Type</option>
                                        <option {{ $car->fuleType === 'Diesel' ? 'selected' : '' }}>Diesel</option>
                                        <option {{ $car->fuleType === 'Gasoline' ? 'selected' : '' }}>Gasoline</option>
                                        <option {{ $car->fuleType === 'Electric' ? 'selected' : '' }}>Electric</option>
                                    </select>
                                </div>

                                <label class="col-form-label text-right col-lg-1 "></label>
                                <div class="col-lg-5 actions__field ">
                                    <select class="select" name="Vehicle_Type">
                                        <option value="">Vehicle Type</option>
                                        <option {{ $car->vehicleType === 'coupe' ? 'selected' : '' }} >coupe </option>
                                        <option {{ $car->vehicleType === 'sports cars' ? 'selected' : '' }} >sports cars</option>
                                        <option {{ $car->vehicleType === 'Wagons' ? 'selected' : '' }} >Wagons </option>
                                        <option {{ $car->vehicleType === 'hatchback' ? 'selected' : '' }} >hatchback</option>
                                        <option {{ $car->vehicleType === 'convertible' ? 'selected' : '' }} >convertible</option>
                                        <option {{ $car->vehicleType === 'SUV' ? 'selected' : '' }} >SUV</option>
                                        <option {{ $car->vehicleType === 'Minivans' ? 'selected' : '' }} >Minivans </option>
                                        <option {{ $car->vehicleType === 'pickup truck' ? 'selected' : '' }} >pickup truck</option>
                                    </select>
                                </div>
                                </div>
                                <br><br>


                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-1 "></label>
                                    <div class="col-lg-5 actions__field ">
                                        <select class="select" name="Engin_Type">
                                            <option>Engin Type</option>
                                            <option {{ $car->engineType === 'TDI' ? 'selected' : '' }}>TDI</option>
                                            <option {{ $car->engineType === 'TI' ? 'selected' : '' }}>TI</option>
                                            <option {{ $car->engineType === 'V4' ? 'selected' : '' }}>V4</option>
                                            <option {{ $car->engineType === 'V6' ? 'selected' : '' }}>V6</option>
                                            <option {{ $car->engineType === 'V8' ? 'selected' : '' }}>V8</option>
                                        </select>
                                    </div>
                                    <label class="col-form-label text-right col-lg-1 "></label>
                                    <div class="col-lg-5 actions__field ">
                                        <select class="select" name="Featured">
                                            <option>Featured</option>
                                            <option {{ $car->featured === 'Runs & Drives' ? 'selected' : '' }}>Runs & Drives</option>
                                            <option {{ $car->featured === 'Not running' ? 'selected' : '' }}>Not running</option>
                                            <option {{ $car->featured === 'Missing keys' ? 'selected' : '' }}>Missing keys</option>
                                        </select>
                                    </div>
                                </div>
                                <br><br>

                                <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-1 "></label>
                                        <div class="col-lg-5 actions__field ">
                                            <div class="actions__label">brand </div>
                                            <input type="text" class="actions__input"  id="brand" name="brand" placeholder="Enter brand "value="{{ $car->model }}" />

                                        </div>
                                        <label class="col-form-label text-right col-lg-1 "></label>
                                        <div class="col-lg-5 actions__field ">
                                            <select class="select" name="Transmittion_Type" id="Transmittion_Type">
                                                <option >Transmittion Type</option>
                                                <option {{ $car->transmittion === 'Manual transmission' ? 'selected' : '' }} >Manual transmission </option>
                                                <option {{ $car->transmittion === 'Automatic transmission' ? 'selected' : '' }}>Automatic transmission </option>
                                                <option {{ $car->transmittion === 'Continuously variable transmission' ? 'selected' : '' }}>Continuously variable transmission</option>
                                                <option {{ $car->transmittion === 'Semi-automatic and dual-clutch' ? 'selected' : '' }}>Semi-automatic and dual-clutch </option>

                                            </select>
                                        </div>
                                </div>
                                    <br><br>
                                    <div class="form-group row">
                                        <div class="col col-lg-3">

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="slider slider_home">
                                                <div class="slider__container">
                                                    <div class="slider__list js-slider owl-carousel">
                                                    @for($i = 0; $i < 10; $i++)
                                                    <div class="">
                                                        <div class=""><img src="/media/{{ $car->images[$i] }}" alt=""></div>
                                                    </div>
                                                    @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        </div>

                <br><br><br><br>
                </div>
                <br>
                <button class="details__btn btn btn_wide btn_big" style="background-color: rgb(250, 104, 51)"><span style="color: bisque">Edit Car</span> </button>
            </form>


              </div>

              </div>
            </div>

@endsection
