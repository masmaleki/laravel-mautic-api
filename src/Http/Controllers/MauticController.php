<?php

namespace Masmaleki\Mautic\Http\Controllers;

use Masmaleki\Mautic\Facades\Mautic;
use App\Http\Controllers\Controller;
use Masmaleki\Mautic\Models\MauticConsumer;

class MauticController extends Controller
{

    /**
     * Setup Applicaion.
     */
    public function initiateApplication()
    {
        $consumer = MauticConsumer::count();

        if ($consumer == 0)
        {
            Mautic::createConnection('main');
            echo '<h1>Mautic App Successfully Registered</h1>';
        }
        else
        {
            echo '<h1>Mautic App Already Register</h1>';
        }
    }
}
