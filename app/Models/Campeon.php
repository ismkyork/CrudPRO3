<?php 
namespace App\Models;

use CodeIgniter\Model;

class Campeon extends Model{
    protected $table      = 'campeones';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'ruta_imagen'];

}