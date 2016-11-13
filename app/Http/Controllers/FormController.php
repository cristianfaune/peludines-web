<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Form;

class FormController extends Controller
{
    function sendMail(){

    }

    function testMessage(){

      $obj = new Form;

      $obj->name = 'cristian';
      $obj->email = 'cristianfaune.t@gmail.com';
      $obj->message = 'cristian';

      return view('main')->with('obj', $obj);
    }

}
