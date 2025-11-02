<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\campeon;
class Campeones extends Controller{

    public function index() {

        $champ= new Campeon();
        $info['campeones']=$campeon->orderBy('id','ASC')->findAll();
        
        $info['header']= view('templates/header');
        $info ['pie']= view('template/pieDePagina');
        return view('campeones/inicio',$info);


    }

}