<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\campeon;
class Campeones extends Controller{

    public function index() {

        return view('campeones/inicio');

    }

}