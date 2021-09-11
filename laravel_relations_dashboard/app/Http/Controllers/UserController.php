<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datas = User::all();
        return view('pages.allUser',compact('datas'));       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             request()->validate([
            "nom"=>["required","min:1","max:100"],
            "prenom"=>["required","min:1","max:100"],
            "age"=>["required","numeric"],
            "email"=>["required"],
            "password"=>["required"],
            "date_naissance"=>["required"],
            "photo"=>["required"],
        ]);
        $user = new User;
        $user->photo = $rq->file('photo')->hashName();
        $user->nom = $rq->nom;
        $user->prenom = $rq->prenom;
        $user->age = $rq->age;
        $user->email = $rq->email;
        $user->password = $rq->password;
        $user->date_naissance = $rq->date_naissance;
        $user->save();

        $rq->file("photo")->storePublicly("img","public");


        return redirect()->route('users.index')->with('message', 'IT WORKS!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        $user = $User;

        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        $user=  $User;
        $roles = Role::all();

        return view('users.edit',compact('user','roles'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

             request()->validate([
            "nom"=>["required","min:1","max:100"],
            "prenom"=>["required","min:1","max:100"],
            "age"=>["required","numeric"],
            "email"=>["required"],
            "password"=>["required"],
            "date_naissance"=>["required"],
            "photo"=>["required"],
        ]);

        $user->photo = $rq->file('photo')->hashName();
        $user->nom = $rq->nom;
        $user->prenom = $rq->prenom;
        $user->age = $rq->age;
        $user->email = $rq->email;
        $user->password = $rq->password;
        $user->date_naissance = $rq->date_naissance;
        $user->save();

        $rq->file("photo")->storePublicly("img","public");


        return redirect()->route('users.show',compact('user'))->with('message', 'IT WORKS!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Storage::disk("public")->delete("img".$video->img);
        
        $user->delete();

        return redirect()->route('users.index')->with('message', 'IT WORKS!');
    }
}
