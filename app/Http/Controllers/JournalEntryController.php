<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;  

use App\JournalEntry;

class JournalEntryController extends Controller
{
    /**
     * Display a listing of the journal.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('journal.index',['JournalEntries' => Auth::user()->journals()]);
    }

    /**
     * Show the form for creating a new journal.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('journal.create', ['time' => Carbon::now()->toDayDateTimeString()]);
    }

    /**
     * Store a newly created journal in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified journal.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified journal.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified journal in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified journal from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
