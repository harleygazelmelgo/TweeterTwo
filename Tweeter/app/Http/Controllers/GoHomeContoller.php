<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoHomeController extends Controller
{
   function goHome (){
       $userCollection = \App\User::all();
       $userJson = $userCollection ->toJson();
       return response()->json($userJson);
   }
}