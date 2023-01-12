<?php

namespace App\Http\Controllers;

use App\Models\Newsflash;
use Illuminate\Http\Request;

class NewsflashController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $newsflashes = Newsflash::all();
        return view('newsflashes.index', compact('newsflashes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Newsflash $newsflash) {
        return view('newsflashes.form', compact('newsflash'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        Newsflash::create([
            'announcement' => $request->announcement,
            'active'       => true,
        ]);

        return redirect()->route('newsflashes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsflash  $newsflash
     * @return \Illuminate\Http\Response
     */
    public function show(Newsflash $newsflash) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsflash  $newsflash
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsflash $newsflash) {
        return view('newsflashes.form', compact('newsflash'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newsflash  $newsflash
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsflash $newsflash) {
        $newsflash->update([
            'announcement' => $request->announcement,
        ]);

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsflash  $newsflash
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsflash $newsflash) {
        //
    }
}
