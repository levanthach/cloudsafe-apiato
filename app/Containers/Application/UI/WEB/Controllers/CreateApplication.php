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
        elseif($page == "recharge-customer"){
            return view('application::Reseller.Pages.recharge_customer');
        } 
        elseif($page == "voucher-account"){
            return view('application::Reseller.Pages.manage_voucher_account');
        } 
        elseif($page == "voucher-product"){
            return view('application::Reseller.Pages.manage_voucher_product');
        }
        elseif($page == "profile"){
            return view('application::Reseller.User.user_profile');
        }   
        elseif($page == "notifile"){
            return view('application::Reseller.User.notifile_view');
        }  
        elseif($page == "password-change"){
            return view('application::Reseller.User.password_change');
        } 

        else {
            return view('application::Reseller.Error.404');
        }
    }
}
