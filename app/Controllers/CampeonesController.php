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
    
    public function editar($id=null){
      
      $info['pieDePagina']=view('template/pieDePagina');
      $info['cabecera']=view('template/cabecera');
      
      return view('vistas/editar',$info);
    }
  
  public function borrar($id=null){

  
      $campeon= new CampeonModel();
      $datoscampeon=$campeon->where('id',$id)->first();

      $ruta=('../public/uploads/'.$datoscampeon['ruta_imagen']);
      unlink($ruta);
      
      $campeon->where('id',$id)->delete($id);
     
        return $this->response->redirect(site_url());
    
    }

  public function guardar(){
      $champ = new CampeonModel();

      $nombre = $this->request->getVar('nombre');
      $rol = $this->request->getVar('rol');
      $region = $this->request->getVar('region');
      $raza = $this->request->getVar('raza');
      $fecha_lanzamiento = $this->request->getVar('fecha_lanzamiento');
      $tipo_daño = $this->request->getVar('tipo_daño');

      if ($ruta_imagen=$this->request->getFile('ruta_imagen')) {
          $nuevoNombre = $ruta_imagen->getRandomName();
          $ruta_imagen->move('./uploads/', $nuevoNombre);
 
      $datos = [
          'nombre' => $nombre,
          'rol' => $rol,
          'region' => $region,
          'raza' => $raza,
          'fecha_lanzamiento' => $fecha_lanzamiento,
          'tipo_daño' => $tipo_daño,
          'ruta_imagen' => $nuevoNombre
      ];

      $champ->insert($datos);
    }
    return $this->response->redirect(site_url());
  }
 }