<?php
namespace App\Helper;

class Alert
{
    public static function SetSucessMessage(string $message)

    {
        session()->flash ("message:success",$message);
    }


    public static function SetErrorMessage(string $message)

    {
        session()->flash ("Message:Error",$message);
    }
}