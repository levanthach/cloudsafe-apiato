<?php

namespace App\Containers\Application\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;

class createApplication extends WebController
{

    public function admin_page($page){
        if($page == 'dashboard') {
            return view('application::Reseller.Pages.dashboard');
        }
        elseif($page == "add-site"){
            return view('application::Reseller.Pages.add_site');
        } 
        elseif($page == "setting"){
            return view('application::Reseller.Pages.setting');
        } 
        elseif($page == "log"){
            return view('application::Reseller.Pages.log');
        } 
        elseif($page == "report"){
            return view('application::Reseller.Pages.report');
        } 

        else {
            return view('application::Reseller.Error.404');
        }
    }
}
