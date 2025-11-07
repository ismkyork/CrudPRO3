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

    $campeon = new CampeonModel();
    $datoscampeon['campeon'] = $campeon->where('id', $id)->first();

    
        if($datoscampeon['campeon']==null){

       return $this->response->redirect(site_url());
      }

    $datos = [
        'pieDePagina' => view('template/pieDePagina'),
        'cabecera'    => view('template/cabecera'),
        'campeon'     => $datoscampeon['campeon']
    ];

    return view('vistas/editar', $datos); 
}

          public function actualizar()
        {
            $champ = new CampeonModel();
            $id = $this->request->getVar('id');
            $nombre = $this->request->getVar('nombre');
            $rol = $this->request->getVar('rol');
            $region = $this->request->getVar('region');
            $raza = $this->request->getVar('raza');
            $fecha_lanzamiento = $this->request->getVar('fecha_lanzamiento');
            $tipo_daño = $this->request->getVar('tipo_daño');

            $validationRules = [
                'nombre' => 'required|min_length[2]|alpha',
                'region' => 'required',
                'rol' => 'required',
                'raza' => 'required',
                'fecha_lanzamiento' => 'required|valid_date[Y-m-d]',
                'tipo_daño' => 'required'
            ];
            
            $imagenFile = $this->request->getFile('ruta_imagen');
            $datos = []; 
            
            
            if ($imagenFile->isValid() && ! $imagenFile->hasMoved()) {
                
                $validationRules['ruta_imagen'] = [
                    'uploaded[ruta_imagen]',
                    'mime_in[ruta_imagen,image/jpg,image/jpeg,image/png]',
                    'max_size[ruta_imagen,1024]',
                ];
                
                if ($this->validate($validationRules)) {
                    
                    $datoscampeon = $champ->find($id); 
                    if ($datoscampeon && $datoscampeon['ruta_imagen']) {
                        $rutaAntigua = './uploads/' . $datoscampeon['ruta_imagen'];
                        if (file_exists($rutaAntigua)) {
                            unlink($rutaAntigua); 
                        }
                    }

                    $nuevoNombre = $imagenFile->getRandomName();
                    $imagenFile->move('./uploads/', $nuevoNombre);

                    $datos['ruta_imagen'] = $nuevoNombre;
                } else {
                    $session = session();
                    $session->setFlashdata('mensaje', 'Error en el archivo: ' . implode(', ', $this->validator->getErrors()));
                    return redirect()->back()->withInput();
                }
            } else {
                
                if (!$this->validate($validationRules)) {
                    $session = session();
                    $session->setFlashdata('mensaje', 'Los datos de texto agregados no son acordes al campo');
                    return redirect()->back()->withInput();
                }
            }

          
            $datos['nombre'] = $nombre;
            $datos['rol'] = $rol;
            $datos['region'] = $region;
            $datos['raza'] = $raza;
            $datos['fecha_lanzamiento'] = $fecha_lanzamiento;
            $datos['tipo_daño'] = $tipo_daño;

          
            $champ->update($id, $datos);

            return $this->response->redirect(site_url());
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

      $validacion= $this->validate ([
        'nombre'=>'required|min_length[2]',
          'ruta_imagen'=> [
            'uploaded[ruta_imagen]',
            'mime_in[ruta_imagen,image/jpg,image/jpeg,image/png]',
            'max_size[ruta_imagen,1024]',
          ],
            'region'=> 'required', 
            'rol'=> 'required', 
            'raza'=> 'required', 
            'fecha_lanzamiento'=> 'required|valid_date[Y-m-d]',
            'tipo_daño' => 'required',

            ]);
            if(!$validacion){
              $session= session();
              $session->setFlashdata('mensaje','Llene los datos acorde al campo');
              return redirect()->back()->WithInput();
            
          
      }
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
    session()->setFlashdata('mensaje', '¡El campeón se agregó con éxito!');
    return $this->response->redirect(site_url());
  }
}