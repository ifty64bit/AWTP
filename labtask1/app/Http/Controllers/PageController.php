<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    //
    function products(){
        $names = array("AK-47", "M4 A1", "M4 CQB", "Hellfire", "Apache", "M24", "AR15");
        return View('product', ["names"=>$names]);
    }

    function ourTeams(){
        $names = array("Ifty Islam", "Goblin-1", "Voodoo", "Rabbit", "Jimmy");
        return View('ourteams')->with("names",$names);
    }

    function aboutUs(){
        return View('aboutus');
    }

    function contactUs(){
        return View('contactUs');
    }
}
