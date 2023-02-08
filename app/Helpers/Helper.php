<?php
namespace App\Helpers;

use App\Models\Order;

class Helper
{
    /**
     * @return string
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
}
