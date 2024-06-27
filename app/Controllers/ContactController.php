<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Response; 

class ContactController extends BaseController
{
    public function index(): Response|string 
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/'); 
        }
        return view('/contact/v_contact'); 
    }
}
