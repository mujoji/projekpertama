<?php

namespace App\Controllers;


class About extends BaseController
{
    
    public function index($page = 'about')
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
