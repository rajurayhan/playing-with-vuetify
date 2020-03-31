<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableDefinition;

class APIController extends Controller
{
    public function index(){
    	// $tableDefinations = TableDefinition::first();
    	$tableDefinations = TableDefinition::get();
    	return response()->json($tableDefinations);
    }
}
