<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CampeonModel;
class CampeonesController extends Controller{

    public function index() {
        $champ = new CampeonModel();
        
        $tabla_campeones = $champ->orderBy('id', 'ASC')->findAll();
    
        $info = [
  
            'tabla_campeones'=>$tabla_campeones
      ];
      
      $info['pieDePagina']=view('template/pieDePagina');
      $info['cabecera']=view('template/cabecera');
      return view('vistas/inicio',$info);
      
    }
    
    public function crear(){

      $info['pieDePagina']=view('template/pieDePagina');
      $info['cabecera']=view('template/cabecera');
      
      return view('vistas/crear',$info);
    }
    
    public function editar(){
      
      $info['pieDePagina']=view('template/pieDePagina');
      $info['cabecera']=view('template/cabecera');
      
      return view('vistas/editar',$info);
    }

}