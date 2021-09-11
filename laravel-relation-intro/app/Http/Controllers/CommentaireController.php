<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use App\Models\Video;
class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Commentaire::all();
        return view('pages.allCommentaire',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $videos = Video::all();
        return view('commentaires.create',compact('videos'));
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
            "nom"=>["required","min:1","max:200"],
            "prenom"=>["required","min:1","max:200"],
            "dateDePublication"=>["required","min:1","max:200"],
            "contenu"=>["required"],
            "video_id"=>["required"],

        ]);

        $commentaire->nom = $rq->nom;
        $commentaire->prenom = $rq->prenom;
        $commentaire->dateDePublication = $rq->dateDePublication;
        $commentaire->contenu = $rq->contenu;
        $commentaire->save();
        return redirect()->route('commentaires.index')->with('message', 'IT WORKS!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $Commentaire)
    {
        $commentaire = $Commentaire;
        return view('commentaires.show',compact('commentaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $Commentaire)
    {
        $commentaire = $Commentaire;
        $videos = Video::all();
        return view('commentaires.edit',compact('commentaire','videos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaire $commentaire)
    {
            request()->validate([
            "nom"=>["required","min:1","max:200"],
            "prenom"=>["required","min:1","max:200"],
            "dateDePublication"=>["required","min:1","max:200"],
            "contenu"=>["required"],

        ]);

        $commentaire->nom = $rq->nom;
        $commentaire->prenom = $rq->prenom;
        $commentaire->dateDePublication = $rq->dateDePublication;
        $commentaire->contenu = $rq->contenu;
        $commentaire->save();



        return redirect()->route('commentaires.show',$commentaire->id)->with('message', 'IT WORKS!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        $commentaire->delete();

        return redirect()->route('commentaires.index')->with('message', 'IT WORKS!');
    }
}
