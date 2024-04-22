<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ParticipantController extends Controller
{
    public function index()
    {
        $countFermale = DB::table('participants')->where('gender', 'female')->count();
        $countMale = DB::table('participants')->where('gender', 'male')->count();
        $totalParticipants = DB::table('participants')->count();
        $countIsVerified = DB::table('participants')->where('status', 'verified')->count();
        $countIsNotVerified = DB::table('participants')->where('status', 'not verified')->count();
        $participants = DB::table('participants')->paginate(10);

        $data = [
            'participants' => $participants,
            'countFermale' => $countFermale,
            'countMale' => $countMale,
            'totalParticipants' => $totalParticipants,
            'countIsVerified' => $countIsVerified,
            'countIsNotVerified' => $countIsNotVerified
        ];

        return view('pages.participant', compact('data'));
    }
}
