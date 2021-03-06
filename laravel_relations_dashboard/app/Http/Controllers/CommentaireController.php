<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Article;
use Illuminate\Http\Request;

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
        $articles = Article::all();
        return view('commentaires.create', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rq)
    {
        request()->validate([
            "contenu"=>["required","min:1","max:200"],

        ]);
        $commentaire = new Commentaire;
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
        $articles = Article::all();
        return view('commentaires.edit',compact('commentaire','articles'));
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
            "contenu"=>["required","min:1","max:200"],

        ]);

        $commentaire->contenu = $rq->contenu;
        $commentaire->save();

        return redirect()->route('commentaires.show',$commentaire->id);
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
