<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Villes;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    // Show all activities
    public function showAll()
    {
        $activities = Activity::all();
        return view('dashboardcomponents.activities.activitiesdashboard', ['activities' => $activities]);
    }

    // Show add activity form
    public function showAddForm()
    {
        $villes = Villes::all();
        return view('dashboardcomponents.activities.addactivityform', ['villes' => $villes]);
    }

    public function add(Request $request)
    {
        // dd($request->all());

        // Validate the input data
        $validatedData = $request->validate([
            'Type' => 'required',
            'Titre' => 'required',
            'Prix' => 'required',
            'Information' => 'required',
            'image' => 'required|image',
            'ville_id' => 'required|exists:villes,idV',
        ]);

    
        // Handle the image upload
        $imagePath = $request->file('image')->storeAs('public/activity_images', $request->file('image')->getClientOriginalName());
        $imageName = basename($imagePath); // Get only the image name
    
        // Create the activity record in the database
        $activity = new Activity();
        $activity->Type = $request->Type;
        $activity->Titre = $request->Titre;
        $activity->Prix = $request->Prix;
        $activity->Information = $request->Information;
        $activity->image = $imageName;
        $activity->ville_id = $request->ville_id;
        $activity->save();
    
        return redirect()->route('activitiesdashboard');
    }
    

    // Show update activity form

    public function formupdate($id){
        $activity=Activity::findOrFail($id);
        $villes=Villes::all();
        return view('dashboardcomponents.activities.formupdate',['activity'=>$activity,'villes'=>$villes]);
    }

    // Update activity
    public function update(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'Type' => 'required',
            'Titre' => 'required',
            'Prix' => 'required',
            'Information' => 'required',
            'image' => 'image',
            'ville_id' => 'required|exists:villes,idV',
        ]);

        // Find the activity by ID
        $activity = Activity::findOrFail($request->idA);

        // Update the activity 
        $activity->Type = $request->Type;
        $activity->Titre = $request->Titre;
        $activity->Prix = $request->Prix;
        $activity->Information = $request->Information;

        if ($request->hasFile('image')) {
            // Handle the updated image upload
            $imagePath = $request->file('image')->store('public/activity_images');
            $imageName = basename($imagePath); // Get only the image name
            $activity->image = $imageName;
        }
        
        $activity->ville_id = $request->ville_id;

        $activity->save();

        return redirect()->route('activitiesdashboard');
    }

    // Delete activity
    public function delete($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();
        return redirect()->route('activitiesdashboard');
    }
}


