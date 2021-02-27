@section('cars')
<div class="row mb-30-none justify-content-center">

        @foreach($cars as $car)
        <div class="col-sm-10 col-md-6" id="component{{ $car->id }}">
            <div class="auction-item-2">
                <div class="auction-thumb">
                    <a href="{{ url('cardetail/'.$car->id) }}"><img src="/media/{{ $car->images[8] }}" alt="trending" alt="product"></a>
                    <a href="{{ url('cardetail/'.$car->id) }}" class="rating"><i class="far fa-star"></i></a>
                    {{-- <a href="{{ url('cardetail/'.$car->id) }}" class="bid" style="padding-top:3px"><img src="{{ $car->brand }}-logo.png" alt=""></i></a> --}}
                </div>
                <div class="auction-content">
                    <h3 class="title row">
                        <div class="col-lg-2">
                            <img src="{{ $car->brand }}-logo.png" alt="" height="40px" width="50px">
                        </div>
                        <div class="col-lg-10">
                            <div class="">
                                <a  class="mt-1" href="{{ url('cardetail/'.$car->id) }}">{{ $car->year }} - {{ $car->model }} </a>
                            </div>

                        </div>
                    </h3>
                    <div class="bid-area">
                        <div class="bid-amount">
                            <div class="icon">
                                <i class="flaticon-auction"></i>
                            </div>
                            <div class="amount-content">
                                <div class="current">Current Bid</div>
                                <div class="amount">{{ $car->price }}DH</div>
                            </div>
                        </div>
                        <div class="bid-amount">
                            <div class="icon">
                                <i class="flaticon-money"></i>
                            </div>
                            <div class="amount-content">
                                <div class="current">Buy Now</div>
                                <div class="amount">{{ $car->estValue }}DH</div>
                            </div>
                        </div>
                    </div>
                    <div class="countdown-area">
                        <div class="countdown">
                            <div data-countdown="{{ $car->saleDate  }}"></div>
                        </div>
                        <span class="total-bids">{{ $car->bids }} Bids</span>
                    </div>
                    <div class="text-center">
                        <a data-name="{{ $car->id }}" data-price="{{ $car->price }}" data-maxprice="{{ $car->estValue }}" onclick="event.preventDefault()" href="{{ url('bidin/'.$car->id .'/'.$car->price) }}" class="custom-button">Increace bid </a>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

</div>

<ul class="pagination">
    {{ $cars->links() }}
</ul>

<script>


    $(document).ready(function(){

        $('[data-name]').click(function(){
            var price = this.dataset.price;
            var id = this.dataset.name;
            var maxprice = this.dataset.maxprice;
            var prices;
            Swal.fire({
            title: 'How much you wanna bid?',
            icon: 'question',
            input: 'range',
            inputValue: price,
            inputAttributes: {
                min: price,
                max: maxprice,
                step: 50
            },
            didOpen: () => {
                const inputRange = Swal.getInput()
                const inputNumber = Swal.getContent().querySelector('#range-value')
                    inputRange.addEventListener('input', () => {
                    prices = inputRange.value
                })
            }
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                    url: 'http://127.0.0.1:8000/bidin/'+id+'/'+prices,
                    method:'GET',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                                success: function() {

                                }
                                });
                    $('#carsdetail').load("{{ url('/product-comp') }}").fadeIn('slow')
                    Swal.fire('Saved!', '', 'success')


                }else{
                            Swal.close()
                            $('#carsdetail').load("{{ url('/product-comp') }}").fadeIn()
                        }

                });
        });

        $('[data-countdown]').each(function() {
      var $this = $(this), finalDate = $(this).data('countdown');
      $this.countdown(finalDate, function(event) {

        $this.html(event.strftime('%D days %H:%M:%S'));

      })
    });
    });

    </script>


@endsection
