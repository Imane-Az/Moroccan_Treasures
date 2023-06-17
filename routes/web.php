<?php

use App\Models\User;
use App\Models\Villes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserControlleur;
use App\Http\Controllers\VilleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*********************** Website Pages Begin**********************************/

// ------Home Page------//

Route::get('/', function () {
    return view('pages/Home/index');
})->name('home');


// -------Destinations------- //

// afficher toutes les destinations
Route::get('/destinations', [VilleController::class,'index'] )->name('destinations');

//afficher les details d'une destination
Route::get('/ville/{id}', [VilleController::class,'show'])->name('detailsville');


// -------Explore------- //
Route::get('/explore',function(){
    return view('pages/explore/explore');
});

// -------Travel Guides------- //
Route::get('/travelGuides',function(){
    return view('pages/TravelGuides/TravelGuides');
});

//--------- Contact Part -----------//

Route::get('/contactform', [ContactController::class, 'formcontact'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');



/*********************** Website Pages End**********************************/

//----------Dashboard----------//

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;

//dashboard content 

Route::get('/dashboard', function() {
        $totalUsers = User::count();
        $totalVilles=Villes::count();
        return view('dashboardcomponents.dashboard', ['totalUsers' => $totalUsers,'totalVilles'=>$totalVilles]);
    })
    ->middleware(['auth', 'verified', 'admin'])
    ->name('dashboard');


        //------   Users   ------//
     
        //******** Afficher tous les utilisateurs *******//
Route::get('/users',[UserControlleur::class,'showall'])->name('userstable');

        //******** Ajouter un utilisateur *******//
Route::post('/adduser',[UserControlleur::class,'adduser']);

        //******** Supprimer un utilisateur *******//
Route::get('/deleteuser/{u}',[UserControlleur::class,'deleteuser']);

        //******** Modifier un utilisateur *******//
Route::get('/formupdateuser/{u}',[UserControlleur::class,'formupdateuser']);

        //******** Modifier un utilisateur *******//
Route::post('/updateuser',[UserControlleur::class,'updateuser']);


         //------   Destinations    ------//

         //search for a destination
         Route::get('/search', [VilleController::class,'search'])->name('searchDestination');



         //******** Afficher toutes les destinations *******//

Route::get('/destinationdashboard',[VilleController::class,'showall'])->name('destinationsdashboard');


        //********  form d'ajout d'une destination  ******//
Route::get('/formaddDestination',[VilleController::class,'formajout']);
        //******** Ajouter d'une destination *******//
Route::post('/ajoutdestination',[VilleController::class,'ajoutdestination']);


        //********   Update destination   ***********//
Route::get('/formeditdestination/{id}', [VilleController::class, 'formupdate']);
Route::post('/updatedestination/{id}', [villeController::class, 'update']);

        //************  Delete destination  ****************//
Route::get('//deletedestination/{id}', [VilleController::class, 'delete']);

                        //---------- Activities ----------//


// Show all activities
Route::get('/activities', [ActivityController::class, 'showAll'])->name('activitiesdashboard');

// Show add activity form
Route::get('/activities/addform', [ActivityController::class, 'showAddForm'])->name('showaddactivityform');

// Add activity
Route::post('/activities/add', [ActivityController::class, 'add'])->name('addactivity');

// Show update activity form
Route::get('/formupdate/{id}',[ActivityController::class,'formupdate']);

// Update activity
Route::post('/activities/update', [ActivityController::class, 'update'])->name('updateactivity');

// Delete activity
Route::get('/activities/delete/{id}', [ActivityController::class, 'delete'])->name('deleteactivity');






//-------------Authentification------------//
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
