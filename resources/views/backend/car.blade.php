@extends('backend.layouts.app')
@section('page')
<div class="prices">
    <div class="prices__head">
      <div class="prices__title h5">Cars listed</div>
      <a href="{{ url('/addcars') }}" class="prices__btn btn btn_blue" style="background-color: rgb(250, 104, 51)">
        <span class="btn__text" >Add car</span></a>
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
          <div class="prices__cell">TRANSMITION</div>
          <div class="prices__cell">DAMAGE</div>
          <div class="prices__cell">SELLER</div>
          <div class="prices__cell">SELLER</div>

        </div>
        @foreach ($cars as $car)
            <a class="prices__row" href="/editcars/{{ $car->id }}" onclick="event.preventDefault()">
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
            <div class="prices__cell">{{ $car->transmittion }}</div>
            <div class="prices__cell">{{ $car->damage }}</div>
            <div class="prices__cell">{{ $car->saleName }}</div>

            <div class="prices__cell">
                <button class="delete" data-id="{{ $car->id }}" style="padding:2%">
                    <span style="font-size: 1.5em; color: Tomato;">
                        <i class="fas fa-trash-alt "></i>
                      </span>
                </button> &nbsp;
                <button class="edit" data-id="{{ $car->id }}">
                    <span style="font-size: 1.5em; color: rgb(43, 230, 36);">
                        <i class="fas fa-pencil-alt"></i>
                      </span>
                </button>
            </div>
            </a>

        @endforeach


      </div>
    </div>
    <div class="prices__btns"><button class="prices__btn btn btn_blue" style="background-color: rgb(250, 104, 51)">Load more</button></div>
  </div>
</div>

<script>


    jQuery(document).ready(function($){

     $('.delete').click(function() {
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
                                    location.reload();
                            }

                        }
                        });
                                        }

                    })
            });

            $('.edit').click(function() {
                var id = this.dataset.id;
                window.location.href ='http://127.0.0.1:8000/editcars/'+id;
            });

        });
</script>
  @endsection
