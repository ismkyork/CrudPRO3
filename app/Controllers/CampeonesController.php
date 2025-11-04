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
        return view('vistas/inicio',$info);

    }

    public function crear(){

      return view('vistas/crear');
    }

    public function editar(){

      return view('vistas/editar');
    }

}