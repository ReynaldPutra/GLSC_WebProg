<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $Name = ['VALORANT', 'COVID-19', 'JAKARTA' , 'INDONESIA', 'BITCOIN','RUSH HOUR','CONJURING','GENSHIN'];
        $Img = ['img/valorant.jpg', 'img/covid.jpg','img/jakarta.jpg','img/indonesia.jpg', 'img/bitcoin.jpg','img/rushHour.jpg','img/conjuring.jpg','img/genshin.jpg'];
        return view('card',array('title' => $Name,'img'=> $Img));
    }

}
