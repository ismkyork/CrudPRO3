<?php 
namespace App\Models;

use CodeIgniter\Model;

class CampeonModel extends Model{
    protected $table      ='tabla_campeones';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'ruta_imagen', 'raza', 'region', 'rol', 'fecha_lanzamiento', 'tipo_daño'];

}