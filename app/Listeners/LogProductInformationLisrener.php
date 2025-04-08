<?php

namespace App\Listeners;

use App\Events\ProductAddesEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class LogProductInformationLisrener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //イベントのインスタンスに含まれている商品情報をログに記録する
        Log::info('新商品が追加されました:',['product' =>$event->product]);
    }

    /**
     * Handle the event.
     */
    public function handle(ProductAddesEvent $event): void
    {
        //
    }
}
