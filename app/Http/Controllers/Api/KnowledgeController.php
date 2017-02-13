<?php

namespace App\Http\Controllers\Api;

use App\Models\Knowledge;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KnowledgeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth', ['except' => 'index']);
    }

    public function generate()
    {
        $knowledges = Knowledge::first();

        return response()->json([
            'text' => \Lang::get('knowledge.'.$knowledges->q_name),
        ]);
    }
}
