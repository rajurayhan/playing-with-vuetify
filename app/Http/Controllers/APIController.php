<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableDefinition;
use Validator;

class APIController extends Controller
{
    public function index(){
    	$tableDefinations = TableDefinition::get();
    	return response()->json($tableDefinations);
    }

    public function update(Request $request){

    	info($request->all());

    	$validator = Validator::make($request->all(), [
		    'table_name' 		=> 'nullable|string', 
            'column_name' 		=> 'nullable|string',
            'data_type' 		=> 'nullable|string', 
            'length' 			=> 'nullable|integer',
            'maximum_number' 	=> 'nullable|integer',
            'decimal_part' 		=> 'nullable|integer',
            'validation' 		=> 'nullable|string'
		]);

		if ($validator->fails()) {
		    return response()->json(['errors'=>$validator->errors()]);
		}

    	$tableDefinationObj 	= new TableDefinition();

    	$tableDefination 		= $tableDefinationObj->findOrfail($request->id);
    	if($tableDefination){
    		$tableDefination->table_name 		= $request->table_name;
    		$tableDefination->column_name 		= $request->column_name;
    		$tableDefination->data_type 		= $request->data_type;
    		$tableDefination->length 			= $request->length;
    		$tableDefination->maximum_number 	= $request->maximum_number;
    		$tableDefination->decimal_part 		= $request->decimal_part;
    		$tableDefination->validation 		= $request->validation;

    		$tableDefination->save();
    	}
    	return response()->json($tableDefination);

    }

    public function add(Request $request){

    	// $validatedData = $request->validate([
     //        'table_name' 		=> 'nullable|string', 
     //        'column_name' 		=> 'nullable|string',
     //        'data_type' 		=> 'nullable|string', 
     //        'length' 			=> 'nullable|integer',
     //        'maximum_number' 	=> 'nullable|integer',
     //        'decimal_part' 		=> 'nullable|integer',
     //        'validation' 		=> 'nullable|string'
     //    ]);

        $validator = Validator::make($request->all(), [
		    'table_name' 		=> 'nullable|string', 
            'column_name' 		=> 'nullable|string',
            'data_type' 		=> 'nullable|string', 
            'length' 			=> 'nullable|integer',
            'maximum_number' 	=> 'nullable|integer',
            'decimal_part' 		=> 'nullable|integer',
            'validation' 		=> 'nullable|string'
		]);

		if ($validator->fails()) {
		    return response()->json(['errors'=>$validator->errors()]);
		}

    	$tableDefination 	= new TableDefinition();

    	$tableDefination->table_name 		= $request->table_name;
		$tableDefination->column_name 		= $request->column_name;
		$tableDefination->data_type 		= $request->data_type;
		$tableDefination->length 			= $request->length;
		$tableDefination->maximum_number 	= $request->maximum_number;
		$tableDefination->decimal_part 		= $request->decimal_part;
		$tableDefination->validation 		= $request->validation;

		$tableDefination->save();

		return response()->json($tableDefination);
    }

    public function delete(Request $request){
    	info($request->all());
    	$tableDefinationObj 	= new TableDefinition();
    	$tableDefination 		= $tableDefinationObj->findOrfail($request->id);

    	$tableDefination->delete();

    	return response()->json('Deleted Successfully!');
    }
}
