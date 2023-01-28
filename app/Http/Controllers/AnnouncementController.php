<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{

    public function index()
    {
        $announcements = Announcement::all();

        return response()->json([
            'message' => 'announcements retreived successfully!',
            'announcements' => $announcements
        ], 200);
    }

    public function store(Request $request)
    {
        $announcements = Announcement::create($request->all());

        return response()->json([
            'message' => 'announcements created successfully!',
            'announcements' => $announcements
        ], 200);
    }


    public function show($id)
    {
        $announcement = Announcement::find($id);

        return response()->json([
            'message' => 'announcements retreived successfully!',
            'announcement' => $announcement
        ], 200);
    }

    public function update(Request $request,$id)
    {
        $announcement=Announcement::find($id);
        $announcement->update($request->all());

        return response()->json([
            'message' => 'announcements updated successfully!',
            'announcement' => $announcement
        ], 200);

    }

    public function destroy($id)
    {
        $announcement = Announcement::destroy($id);

        return response()->json([
            'message' => 'announcements deleted successfully!',
            'announcement' => $announcement
        ], 200);
    }
}
