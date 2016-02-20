<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackLoginRequest;

use Illuminate\View\Factory as ViewFactory;
use Illuminate\Auth\AuthManager;

class AuthController extends Controller
{

   /**
    * The View Factory
    *
    * @var Illuminate\View\Factory
    */
   protected $views;

   /**
    * Auth Manager
    *
    * @var Illuminate\Auth\AuthManager
    */
   protected $auth;

   /**
    * Constructor
    *
    * @param Illuminate\View\Factory $views
    */
   public function __construct(ViewFactory $views, AuthManager $auth)
   {
      $this->views = $views;
      $this->auth = $auth;
   }
   
}
