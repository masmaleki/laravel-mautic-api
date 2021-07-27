<?php namespace Masmaleki\Mautic\Http\Controllers;

use App\Http\Controllers\Controller;
use Masmaleki\Mautic\Models\MauticConsumer;
use Masmaleki\Mautic\Facades\Mautic;


    class MauticController extends Controller
    {

        /**
         * Setup Applicaion.
         */
        public function initiateApplication()
        {

            $consumer = MauticConsumer::count();

            if($consumer == 0){
                Mautic::connection('main');
            }else{
                echo '<h1>Mautic App Already Register</h1>';
            }

        }

    }