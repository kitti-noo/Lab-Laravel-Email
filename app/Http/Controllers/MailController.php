<?php

namespace App\Http\Controllers;

use App\Models\lain;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function basic_email()
    {
        $data = array('name' => $_GET['name'] , 'datamessage' => $_GET['message']);
       
        Mail::send(['text' => 'mail'], $data,function ($message) {
            $message->to($_GET['email'],$_GET['name'])->subject($_GET['subject']);
            $message->from('s6135512003@phuket.psu.ac.th', 'Kittipot Noothong');
        });
        echo "Basic Email Sent. Check your inbox.";
        echo "<br>";
        echo "Reciver Name =>" . $_GET['name'];
        echo "<br>";
        echo "Reciver Email =>" . $_GET['email'];
        echo "<br>";
        echo "Subject =>" . $_GET['subject'];
        echo "<br>";
        echo "Message =>" . $_GET['message'];
    }
}
