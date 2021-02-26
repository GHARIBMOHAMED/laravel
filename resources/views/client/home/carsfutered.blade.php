<div class="row justify-content-center mb-30-none">
    @if(count($carsall) > 0)
    @foreach($carsall as $cars)

    @foreach($cars as $car)

    <div class=" col-md-6 col-lg-12"  id="component{{ $car->id }}" >
        <div class="auction-item-6">
            <div class="auction-inner">
                <div class="auction-thumb">
                    <a href="{{ url('cardetail/'.$car->id) }}"><img src="/media/{{ $car->images[1] }}" alt="trending"></a>
                    <a href="#0"  class="rating"><i class="far fa-star"></i></a>
                </div>
                <div class="auction-content">
                    <h5 class="title row">
                        <div class="col-lg-2">
                            <img src="{{ $car->brand }}-logo.png" alt="" height="40px" width="50px">
                        </div>
                        <div class="col-lg-8">
                            <a  class="mt-1" href="{{ url('cardetail/'.$car->id) }}">{{ $car->year }} - {{ $car->model }} </a>
                        </div>
                    </h5>
                    <div class="item-information">
                        <ul>
                            <li><span>Number</span>{{ $car->plate }}</li>
                            <li><span>VIN</span>2G1WG5EK3B1312245</li>
                            <li><span>Milage</span> ({{ $car->km }} km)</li>
                            <li><span>Location</span>{{ $car->location }}</li>
                        </ul>
                        <ul>
                            <li><span>Engine</span>{{ $car->fuleType }}</li>
                            <li><span>Transmission</span>{{ $car->transmittion }}</li>
                            <li><span>Body</span>{{ $car->vehicleType }}</li>
                        </ul>
                    </div>
                </div>
                <div class="auction-bidding">
                    <div class="countdown">
                        <div data-countdown="{{ $car->saleDate  }}"></div>
                    </div>
                    <div class="bid-amount">
                        <div class="icon">
                            <i class="flaticon-auction"></i>
                        </div>
                        <div class="amount-content">
                            <div class="current">Current Bid</div>
                            <div class="amount">DH {{ $car->price }}</div>
                        </div>
                    </div>
                    <div class="bids-area">
                        Total Bids : <span class="total-bids"> Bids {{ $car->bids }}</span>
                    </div>
                    @if(auth()->user())
                    <a data-name="{{ $car->id }}" data-price="{{ $car->price }}" onclick="event.preventDefault()" href="{{ url('bidin/'.$car->id .'/'.$car->price) }}" class="custom-button">Add bid</a>
                @else
                    <a  href="/signin" class="custom-button">Login First</a>
                @endif

                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endforeach

    @endif
</div>


<script>


$(document).ready(function(){

    $('[data-name]').click(function(){
        var price = this.dataset.price;
        var id = this.dataset.name;
        var prices;
        Swal.fire({
        title: 'How much you wanna bid?',
        icon: 'question',
        input: 'range',
        inputValue: price,
        inputAttributes: {
            min: price,
            max: 5000,
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
                $('#carsdetail').load("{{ url('/carsdetail') }}").fadeIn('slow')
                Swal.fire('Saved!', '', 'success')


            }else{
                        Swal.close()
                        $('#carsdetail').load("{{ url('/carsdetail') }}").fadeIn()
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

