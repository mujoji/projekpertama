<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return 'This is the Page Controller -> Index Function';
    }

    public function showme($page = 'home')
    {
        // check if the view exist
        if(!is_file(APPPATH.'views/pages/'.$page.'.php')){
            // throw error
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        
        echo view('templates/header');
        echo view('pages/'.$page);
        echo view('templates/footer');
    }

}
