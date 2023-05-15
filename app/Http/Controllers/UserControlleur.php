<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserControlleur extends Controller
{
    //afficher tous les utilisateurs
    function showall (){
        $listeU=User::all();
        return view('dashboardcomponents.user',['listeUsers'=>$listeU]);
    }
}
