<?php

namespace App\Http\Controllers;

use App\Mail\orderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function send()
    {
        Mail::to('esmail.sarwari@ogr.dpu.edu.tr', 'esmail sarwari')
            ->send(new orderShipped('esmail', 'sarwari', rand(10, 99999)));
        echo "<strong>\"order shipped \"</strong> email has been sent";
    }
}




