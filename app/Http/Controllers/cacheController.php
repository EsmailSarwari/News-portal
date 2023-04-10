<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class cacheController extends Controller
{
    public function sample()
    {
       // Cache::put('isim', 'esmail');
        //echo Cache::get('isim');
        //dd(Cache::has('isim'));

        //Cache::put('ziyaretSayisi', 1);
        //echo Cache::get('ziyaretSayisi' );
        //echo "<br>".  Cache::increment('zayaretSayisi', 5);
        //echo "<br>". Cache::decrement('zayaretSayisi');
        //Cache::delete('ziyaretSayisi');

        Cache::remember('ziyaretSayisi', 1000, function (){
           return 10;
        });
        Cache::forever('isim', 'esmail');
        Cache::pull('ziyaretSayisi');

        echo Cache::get('ziyaretSayisi');
        echo Cache::get('isim');

       // Cache::flush();
        // clears the cache



    }
}
