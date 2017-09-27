<?php
/**
 * Created by PhpStorm.
 * User: PHP2
 * Date: 9/18/2017
 * Time: 9:28 PM
 */


namespace  App\Http\Controllers;




class PagesController extends Controller{


    public function  getIndex(){

     return view('pages.welcome');
    }



    public function getAbout(){


        $first='mohmmed';
        $last='alosta';
        $fullname=$first." ".$last;

        $email="a@a.com";
        $data['email']=$email;

        $data['fullname']=$fullname;
        return view('pages.about')->withData($data);
    }


    public  function getContact(){
        return view('pages.contact');

    }



}

