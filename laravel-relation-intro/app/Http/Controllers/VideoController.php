<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Video::all();
        return view('pages.allVideo',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.create');
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
            "url"=>["required","min:1","max:200"],
            "img"=>["required","min:1","max:200"],
            "title"=>["required","min:1","max:200"],
            "description"=>["required"],
            "duration"=>["required"],

        ]);
        $video = new Video;
        $video->img = $rq->file('img')->hashName();
        $video->url = $rq->url;
        $video->title = $rq->title;
        $video->description = $rq->description;
        $video->duration = $rq->duration;
        $video->save();

        $rq->file("img")->storePublicly("img","public");


        return redirect()->route('videos.index')->with('message', 'IT WORKS!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $Video)
    {
        $video = $Video;
        return view('videos.show',compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $Video)
    {
        $video = $Video;
        return view('videos.edit',compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
            request()->validate([
            "url"=>["required","min:1","max:200"],
            "img"=>["required","min:1","max:200"],
            "title"=>["required","min:1","max:200"],
            "description"=>["required"],
            "duration"=>["required"],

        ]);
        Storage::disk("public")->delete("img/".$Video->photo);
        $video->img = $rq->file('img')->hashName();
        $video->url = $rq->url;
        $video->title = $rq->title;
        $video->description = $rq->description;
        $video->duration = $rq->duration;
        $video->save();

        $rq->file("url")->storePublicly("img","public");

        return redirect()->route('videos.show',$video->id)->with('message', 'IT WORKS!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        Storage::disk("public")->delete("img".$video->img);
        $video->delete();

        return redirect()->route('videos.index')->with('message', 'IT WORKS!');
    }
}
