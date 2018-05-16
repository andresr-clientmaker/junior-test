<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use App\Models\InfoKid;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Response;

class KidsController extends Controller
{

    /**
     * Display a listing of the kids.
     *
     *
     * @return Response
     */
    public function index()
    {
        $kids = Kid::all();

        $infoKids = array();

        for ($i = 0; $i < $kids->count(); $i++) {
            $idKid = $kids[$i]->id;
            $nameKid = $kids[$i]->name;
            $last_nameKid = $kids[$i]->last_name;

            $notes = Note::where([
                ['id_kid', '=', $idKid],
            ])->get();
            $newKid = new InfoKid($idKid, $nameKid, $last_nameKid, $notes);
            $infoKids[$i] = $newKid;
        }

        $response = Response::json($infoKids, 200);

        return $response;
    }

}
