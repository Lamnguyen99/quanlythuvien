
<?php
namespace App\Http\Controllers;

class homecontroller extends Controller
{
    public function index($name,$age){
    	echo "Xin chào $name, $age tuổi";
    }
}