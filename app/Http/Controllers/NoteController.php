<?php
namespace App\Http\Controllers;

use App\Note;
use App\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    public function getIndex()
    {
        return view('note.index');
    }

    public function getList()
    {
        Session::put('note_search', Input::has('ok') ? Input::get('search') : (Session::has('note_search') ? Session::get('note_search') : ''));
        Session::put('note_field', Input::has('field') ? Input::get('field') : (Session::has('note_field') ? Session::get('note_field') : 'id'));
        Session::put('note_sort', Input::has('sort') ? Input::get('sort') : (Session::has('note_sort') ? Session::get('note_sort') : 'asc'));

        $notes = Note::where('id', 'like', '%' . Session::get('note_search') . '%')
            ->orderBy(Session::get('note_field'), Session::get('note_sort'))->paginate(48);
        return view('note.list', ['notes' => $notes]);
    }

    public function getUpdate($id)
    {
        return view('note.update', ['note' => Note::find($id)]);
    }

    public function postUpdate($id)
    {
        $note = Note::find($id);
        $rules = ["NoteName" => "required"];
        if ($note->NoteName != Input::get('NoteName'))
            $rules += ['NoteName' => 'required|unique:notes'];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }
        $note->NoteName = Input::get('NoteName');
        $note->save();
        return ['url' => 'note/list'];
    }

    public function getCreate()
    {
        return view('note.create');
    }

    public function postCreate()
    {
        $validator = Validator::make(Input::all(), [
            "NoteName" => "required|unique:notes",
            
        ]);
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->getMessageBag()->toArray()
            );
        }

        $note = new Note();
        $note->NoteName = Input::get('NoteName');
        $note->save();

        return ['url' => 'note/list'];
    }

    public function getDelete($id)
    {
        Note::destroy($id);
        return Redirect('note/list');
    }

}