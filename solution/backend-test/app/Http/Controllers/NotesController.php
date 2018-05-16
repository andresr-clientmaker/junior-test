<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Response;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{

    private $note;
    public function __construct(Note $note)
    {
        $this->note = $note;
    }

    /**
     * Display a listing of the notes.
     *
     *
     * @return Response
     */
    public function index()
    {
        $notes = Note::all();

        $response = Response::json($notes, 200);

        return $response;
    }

    /**
     * Display a listing of all the notes of a Kid.
     *
     * @param Request $request
     * @return Response
     */
    public function allNotesKid(Request $request)
    {

        $idKid = $request->only('id');


        $notes = Note::where([
            ['id_kid', '=', $idKid],
        ])->get();


        $response = Response::json($notes, 200);

        return $response;
    }

    /**
     * Add a note to a Kid.
     *
     * @param Request $request
     * @return Response
     */
    public function addNoteKid(Request $request){
        $newNote = $this->note->create([
            'note' => $request->get('note'),
            'id_kid' => $request->get('id_kid'),
        ]);

        if (!$newNote) {
            return response()->json(['failed to add new note'], 500);
        }
        return response()->json(['Note successfully added'], 200);
    }

    /**
     * Delete a note from a Kid.
     *
     * @param Request $request
     * @return Response
     */
    public function deleteNote(Request $request){
        $idNote = $request->only('id');

        $confirm = Note::where([
            ['id', '=', $idNote],
        ])->get();

        if (!$confirm) {
            return response()->json(['failed to find note'], 500);
        }

        DB::table('notes')->where('id', '=', $idNote)->delete();

        return response()->json(['Note successfully deleted'], 500);
    }
}
