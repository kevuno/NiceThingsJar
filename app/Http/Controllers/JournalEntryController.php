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
        return view('journal.index',['JournalEntries' => Auth::user()->journals->reverse()]);
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

        print_r($request->image_path);

        $entry = new JournalEntry();


        $imageNameWithPath = Carbon::now()->format('Y-m-d H-M').'-'.$request->image_path->getClientOriginalName();
        $request->image_path->move(public_path('img/journal_img'), $imageNameWithPath);

        foreach($request->except(['_token','image_path']) as $key => $value){
            $entry->setAttribute($key, $value);
        }
        $entry->user_id = Auth::user()->save();
        $entry->image_path = $imageNameWithPath;
        $entry->save();


        return redirect()->route('journal.index')
            ->with('success','Image Uploaded successfully.')
            ->with('path',$imageNameWithPath);
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
