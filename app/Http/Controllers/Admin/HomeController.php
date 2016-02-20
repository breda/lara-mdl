<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\View\Factory as ViewFactory;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

   /**
    * The View Factory
    * @var Illuminate\View\Factory
    */
   protected $views;

   /**
    * Constructor
    *
    * @param Illuminate\View\Factory $views
    */
   public function __construct(ViewFactory $views)
   {
      $this->views = $views;
   }

   /**
    * Get the admin homepage.
    * 
    * @return Response
    */
   public function homepage()
   {
      return $this->views->make('admin.home');
   }

}
