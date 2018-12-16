<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notepad;
use Carbon\Carbon;

class NotepadController extends Controller
{
    public function notepad_add()
    {
        return view('admin.notepad.add_notepad');
    }
    public function notepad_submit(Request $req)
    {
        $this->validate($req, [
          'notepad_title' => 'required',
          ], [
            'notepad_title.required'=> "Please Enter Notepad Title ",
            ]);
        Notepad::insert([
          'notepad_title'=>$req->notepad_title,
          'notepad_des'=>$req->notepad_des,
        'created_at'=>Carbon::now(),
        ]);
        return back()->with('status', 'Notepad Add Successfully!');
    }
    public function notepad_all()
    {
        $all_notepad = Notepad::all();
        return view('admin.notepad.notepad_all', compact('all_notepad'));
        // code...
    }
    public function notepad_edit($id)
    {
        $edit_notepad = Notepad::where('id', $id)->first();
        return view('admin.notepad.notepad_edit', compact('edit_notepad'));
    }
    public function notepad_edit_submit(Request $req)
    {
        Notepad::where('id', $req->id)->update([
          'notepad_title'=>$req->notepad_title,
          'notepad_des'=>$req->notepad_des,
        ]);
        return   back()->with('status', 'Notepad Updated Successfully!');
    }
    public function notepad_view($id)
    {
        $notepad_one =  Notepad::where('id', $id)->first();
        return view('admin.notepad.notepad_view', compact('notepad_one')) ;
    }
}
