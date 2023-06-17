<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserControlleur extends Controller
{
    

    //afficher tous les utilisateurs
    function showall (){
        $listeU=User::all();
        return view('dashboardcomponents.user.users',['listeUsers'=>$listeU]);
    }

    //ajouter un utilisateur
    function adduser (Request $request){
        $user=new User();
        $user->id=$request->id;
        $user->name=$request->nameU;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->UserType=$request->UserType;
        $user->save();
        return redirect()->route('userstable');
    }

    //supprimer un utilisateur
    function deleteuser ($id){
        $user=User::find($id);
        $user->delete();
        return redirect()->route('userstable');
    }
    
    // formulaire pour update
    function formupdateuser ($id){
        $u=User::find($id);
        return view('dashboardcomponents.user.formupdateuser',['user'=>$u]);
    }


    //update un utilisateur
    function updateuser ( Request $request){
        $id=$request->id;
        $user=User::find($id);
        $user->name=$request->nameU;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->UserType=$request->UserType;
        $user->save();
        
        return redirect()->route('userstable');
    }
    

}
