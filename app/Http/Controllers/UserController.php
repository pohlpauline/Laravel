<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         //FÜRS SELECT
         $user = User::all(); // Annahme: Hier werden alle Daten abgerufen
         return view('user.index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.show')->with('user',$user);
        #return 1;
       # return view('erfahrung', ['user' => $user]);
        
        # return view('erfahrung')->with('user', $user); #erfahrung-Ansicht ist mit 
    } 
    public function show2($id) {
        $user = User::find($id);
        dd($user);
       return view('show2')->with('user.show2', $user);
       
        
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
       // $userId = $user->id; // Die ID des Benutzers erhalten, $userId kann ich nicht löschen wg. Fremdschlüssel-Verbindung in der DB
       
    $user->update(['erfahrungen' => null]); // Erfahrungen des Benutzers zurücksetzen
    $user->update(['hundename' => null]);  // Hundename zurücksetzen
    session()->flash('meldung','Beitrag wurde zurückgesetzt.'); 
    
        return redirect('/user');
       
       # return 2;

    }


}
