<?php

namespace App\Http\Controllers;

use App\Models\Villes;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Illuminate\Pagination\LengthAwarePaginator;



class VilleController extends Controller
{
    //show the destinations
    public function index()
    {
        $villes = Villes::paginate(3);
        return view('pages.villes.destinations', ['villes'=>$villes]);
    }

    //show the details of a destination

    public function show($id)
{
    $ville = Villes::findOrFail($id);
    $activities=$ville->activities;

    return view('pages.villes.detailsville',['ville'=>$ville,'activities'=>$activities] );
}

//*********  Destination Dashboard  ***********//

public function search(Request $request)
{
    $destinationName = $request->input('destination');

    // Perform the search operation based on the destination name
    $foundDestination = Villes::where('nomVille', $destinationName)->first();

    // Redirect to the detail page if the destination is found
    if ($foundDestination) {
        return redirect()->route('detailsville', ['id' => $foundDestination->idV]);
    }

    // If the destination is not found, you can handle the case accordingly
    // For example, you can redirect back with an error message
    else
       return redirect()->back()->with('error', 'Destination not found');
}




//show all the destinations

function showall (){
    $villes=Villes::all();
    return view('dashboardcomponents.destinations.destinationsdashboard',['villes'=>$villes]);
}

// Show add destination form
public function formajout()
{    
    return view('dashboardcomponents.destinations.adddestinationform');
}

// add the destination
public function ajoutdestination(Request $request)
{
    // Validate the input data
    $validatedData = $request->validate([
        'name' => 'required',
        'image' => 'required|image',
        'description' => 'required',
    ]);

    // Handle the image upload
    $imagePath = $request->file('image')->storeAs('public/destination_images', $request->file('image')->getClientOriginalName());
    $imageName = basename($imagePath); // Get only the image name

    // Create the destination record in the database
    $destination = new Villes();
    $destination->nomVille = $request->name;
    $destination->image = $imageName; // Store the image name
    $destination->description = $request->description;
    $destination->save();

    return redirect()->route('destinationsdashboard');
}


// Show update destination form
public function formupdate($id)
{    
    $ville = Villes::findOrFail($id);
    return view('dashboardcomponents.destinations.updatedestinationform',['ville'=>$ville]);
}

// Update the destination
public function update(Request $request)
{
    // Validate the input data
    $validatedData = $request->validate([
        'name' => 'required',
        'image' => 'image',
        'description' => 'required',
    ]);

    // Find the destination by ID
    $id= $request->idV;
    $ville = Villes::findOrFail($id);

    // Update the destination 
    $ville->nomVille = $request->name;
    $ville->description = $request->description;

    if ($request->hasFile('image')) {
        // Handle the updated image upload
        $imagePath = $request->file('image')->storeAs('public/destination_images', $request->file('image')->getClientOriginalName());
        $imageName = basename($imagePath); // Get only the image name
        $ville->image = $imageName;
    }

    $ville->save();

    return redirect()->route('destinationsdashboard');
}

// Delete the destination 

function delete($id){
    $ville=Villes::find($id);
    $ville->delete();
    return redirect()->route('destinationsdashboard');

}


}
