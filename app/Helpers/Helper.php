<?php
namespace App\Helpers;

use App\Models\Order;
use Illuminate\Support\Str;

class Helper
{
    /**
     * @return int
     */
    public static function OrderNumberGenerate(): int
    {
        $data = Order::orderBy('order_number','desc')->first();
        if(!$data){
            return 1;
        }else{
            return $data->order_number + 1;
        }
    }

    /**
     * @param $price
     * @return int
     */
    public static function calculatePriceWithTaxForDatabase($price): int
    {
        $price = (int) Str::replace('.','',Str::replace(',','',$price));
        return number_format($price / (100 + config('app.tax')),2,'','');
//        return (($price * config('app.tax')) / 100) + $price;
    }

    public static function calculatePriceForDatabase($price): int
    {
        return Str::replace('.','',Str::replace(',','',$price));
    }
}
