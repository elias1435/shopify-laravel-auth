<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopifyController extends Controller {
    // get 
    function sayHi($name='') {

        // return in method
        //return response("Hi {$name}", 200);
        // return "Hi From Shopify Controller";

        // return in blade view
        return view('shopify', ['name'=>$name]);
    }

    // post request
    function managePostRequest(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        return response("Post Request Output - {$name} - {$email}", 200);
    }

}