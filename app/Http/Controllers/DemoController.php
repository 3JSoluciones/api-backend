<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function __construct()
   {
       // Apply the jwt.auth middleware to all methods in this controller
       // except for the authenticate method. We don't want to prevent
       // the user from retrieving their token if they don't already have it
       $this->middleware('jwt.auth');
   }

   public function index() {
   	 $aa = '[{
  "id": 1,
  "gender": "Female",
  "first_name": "Julie",
  "last_name": "Murray",
  "email": "jmurray0@usatoday.com",
  "ip_address": "27.56.25.26"
}, {
  "id": 2,
  "gender": "Male",
  "first_name": "Joseph",
  "last_name": "Wells",
  "email": "jwells1@bluehost.com",
  "ip_address": "226.239.100.95"
}, {
  "id": 3,
  "gender": "Male",
  "first_name": "Brian",
  "last_name": "Myers",
  "email": "bmyers2@weebly.com",
  "ip_address": "140.56.181.177"
}, {
  "id": 4,
  "gender": "Female",
  "first_name": "Betty",
  "last_name": "Jenkins",
  "email": "bjenkins3@simplemachines.org",
  "ip_address": "103.159.229.104"
}, {
  "id": 5,
  "gender": "Male",
  "first_name": "Shawn",
  "last_name": "Ruiz",
  "email": "sruiz4@dot.gov",
  "ip_address": "167.123.147.48"
}]';	
	 return $aa;		  

   }

public function getNuclear() {
	return "Esto es violento";
}

}
