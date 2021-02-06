<?php

namespace App\Http\Controllers;
use App\Models\lain;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function basic_email() {
        $data = array('name'=>"Kittipot");

        Mail::send(['text'=>'mail'],$data,function($message) {
            $message->to('fiw56789@gmail.com','Kla')->subject('Hello World');
            $message->from('s6135512003@phuket.psu.ac.th','Kittipot');
        });
        echo "Basic Email Sent. Check your inbox.";
    }
}