@extends('backend.layouts.app')
@section('page')
<div class="prices">
    <div class="prices__head">
      <div class="prices__title h5">user listed</div>
      <a href="{{ url('/adduser') }}" class="prices__btn btn btn_blue" style="background-color: rgb(250, 104, 51)">
        <span class="btn__text" >Add car</span></a>
    </div>
    <div class="prices__container">
      <div class="prices__table">
        <div class="prices__row prices__row_head">
          <div class="prices__cell">AVATAR</div>
          <div class="prices__cell">NAME</div>
          <div class="prices__cell">EMAIL</div>
          <div class="prices__cell">ADDRESS</div>
          <div class="prices__cell">STATE</div>
          <div class="prices__cell">COUNTRY</div>
          <div class="prices__cell">TYPE</div>
          <div class="prices__cell">ACTION</div>


        </div>
        @foreach ($user as $data)
            <a class="prices__row" href="/edituser/{{ $data->id }}" onclick="event.preventDefault()">
            <div class="prices__cell">
                <div class="prices__logo"><img src="{{ $data->avatar }}"></div>
            </div>
            <div class="prices__cell">{{ $data->name }}</div>
            <div class=" prices__cell">{{ $data->email }}</div>
            <div class=" prices__cell">{{ $data['add-1'] }}</div>
            <div class=" prices__cell">{{ $data->state }}</div>
            <div class=" prices__cell"><div class=""> {{ $data->country }}</div> </div>
            <div class=" prices__cell">
                <div>{{ $data->type }}</div>
            </div>


            <div class="prices__cell">
                <button class="delete" data-id="{{ $data->id }}" style="padding:2%">
                    <span style="font-size: 1.5em; color: Tomato;">
                        <i class="fas fa-trash-alt "></i>
                      </span>
                </button> &nbsp;
                <button class="edit" data-id="{{ $data->id }}">
                    <span style="font-size: 1.5em; color: rgb(43, 230, 36);">
                        <i class="fas fa-pencil-alt"></i>
                      </span>
                </button>
            </div>
            </a>

        @endforeach


      </div>
    </div>
    <div class="" style="padding-top: 1.5%">
    {{ $user->links('pagination::custom') }}
    </div>
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
                window.location.href ='http://127.0.0.1:8000/edituser/'+id;
            });

        });
</script>
  @endsection
