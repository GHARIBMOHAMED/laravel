@extends('backend.layouts.app')
@section('page')
<div class="prices">
    <div class="prices__head">
      <div class="prices__title h5">Cars listed</div>
      <a href="{{ url('/addcars') }}" class="prices__btn btn btn_blue">
        <span class="btn__text">Add car</span></a>
    </div>
    <div class="prices__container">
      <div class="prices__table">
        <div class="prices__row prices__row_head">
          <div class="prices__cell">BRAND</div>
          <div class="prices__cell">NAME</div>
          <div class="prices__cell">TYPE</div>
          <div class="prices__cell">BID</div>
          <div class="prices__cell">LOCATION</div>
          <div class="prices__cell">FULE TYPE</div>
          <div class="prices__cell">MILLAGE</div>
          <div class="prices__cell">YEAR</div>

        </div>
        @foreach ($cars as $car)
            <a class="prices__row" href="/editcars/{{ $car->id }}">
            <div class="prices__cell">
                <div class="prices__logo"><img src="{{ $car->brand }}-logo.png"></div>
            </div>
            <div class=" prices__cell">{{ $car->model }}</div>
            <div class=" prices__cell">{{ $car->vehicleType }}</div>
            <div class=" prices__cell"> <div class="status positive">$ {{ $car->price }}</div> </div>
            <div class=" prices__cell">
                <div>{{ $car->location }}</div>
            </div>
            <div class=" prices__cell">{{ $car->fuleType }}</div>
            <div class=" prices__cell">{{ $car->km }}</div>
            <div class="prices__cell">{{ $car->year }}</div>
            {{-- <div class="prices__company">
                <div class="prices__logo"></div>
                <div class="prices__text"></div>
            </div> --}}

            </a>
        @endforeach


      </div>
    </div>
    <div class="prices__btns"><button class="prices__btn btn btn_blue">Load more</button></div>
  </div>
</div>
  @endsection
