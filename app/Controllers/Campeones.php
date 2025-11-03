<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Campeon;
class Campeones extends Controller{

    public function index() {
        $champ= new Campeon();

        $info = [    
            'campeones'=> $champ->orderBy('id','ASC')->findAll()

        ];
     

        
        
        //$info['header']= view('templates/header');
        $info ['pieDePagina']= view('template/pieDePagina');
        return view('campeones/inicio', $info);

    }

}