<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*return view('home', compact('announcements'));*/
        return view('announcements.announcements', [
            'header' => 'Announcement List',
            'announcements'   =>  Announcement::all()
        ]);

 
    }

    public function upload()
    {
        return view('announcements.upload', [
            'header' => 'Add Announcement'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'int'],
            'description' => ['required', 'string'],
            'image' => ['required', 'string'],
            
        ]);

        //Storing after Validation
        Announcement::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image,
            
        ]);
        session()->flash('status', 'Added Announcement successfully!');
        return redirect('/announcements');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement = Announcement::find($id);

        return view('announcements.upload', [
            'header' => 'Update Announcement',
            'announcement'   => $announcement
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validation
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'int'],
            'description' => ['required', 'string'],
            'image' => ['required', 'string'],

        ]);
        $announcement = Announcement::find($id);

        $announcement->update($request->all());

        session()->flash('status', 'Updated announcement successfully!');

        return redirect('/announcements/update/' . $announcement->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $announcement = Announcement::find($id);
        $announcement->delete();

        return redirect('/announcements');
    }
}
