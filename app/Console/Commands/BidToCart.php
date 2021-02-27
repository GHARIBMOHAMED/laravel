<?php

namespace App\Console\Commands;

use App\Models\Bid;
use App\Models\Car;
use App\Models\Cart;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class BidToCart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bid:cart';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $highBid= Bid::join('cars','bids.car_id','=','cars.id')
        ->join('users','bids.user_id','=','users.id')
        ->get(['cars.*','bids.*','users.*','bids.id as theone']);
            foreach ($highBid as $bid ) {
                $date = Carbon::parse($bid->saleDate)->toDatetimeString();
                $time = Carbon::now();
                $maxBid = Bid::where('car_id',$bid->car_id)->max('bidValue');
                //->where('car_id',$bid->car_id)
                if($date <= $time)
                {
                    if ($bid->bidValue >= $maxBid) {

                        $carts = Cart::where(['user_id'=>$bid->user_id,'car_id'=>$bid->car_id])->first();
                        $bids = Bid::find($bid->theone);
                        $bids->update([
                            'winningBid' => 1
                        ]);

                            if (is_null($carts)) {
                                $cart = new Cart();
                                $cart->user_id = $bid->user_id;
                                $cart->car_id = $bid->car_id;
                                $cart->save();
                            }

                    }
                }
            }
            //return with('cart',$cart);

    }
}
