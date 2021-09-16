<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{

    /**
     * show home page
     */

    public function showHomePage()
    {
        return view('foods.index');
    }


   /**
    * blog page show
    */

   public function showBlogPage()
   {
      return view ('foods.blog');
   }


   /**
    * show menu page
    */
   public function showMenuPage()
   {
       return view ('foods.menu');
   }


   /**
    * show location page
    */

   public function showLocationPage()
   {
       return view('foods.location');
   }

   /**
    * show Reservation Page
    */

   public function showReservationPage()
   {
       return view('foods.reservation');
   }

   /**
    * show Reservation Page
    */

   public function showStaffPage()
   {
       return view('foods.staff');
   }

   /**
    * show Reservation Page
    */

   public function showGalleryPage()
   {
       return view('foods.gallery');
   }

   /**
    * show news page
    */

   public function showNewsPage()
   {
       return view('foods.news');
   }



}
