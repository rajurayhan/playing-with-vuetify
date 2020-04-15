<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableDefinition;
use App\Models\Tables;
use App\Http\Resources\TDefination;
use Validator;

class APIController extends Controller
{
    public function index(Request $request){
        $tableID = $request->id;
        if(isset($tableID) && $tableID){
            $tableDefinations = TableDefinition::where('tables_id', $tableID)->get();
        }
        else{
            $tableDefinations = TableDefinition::get();
        }

        $tableDefinitaionsData = $tableDefinations->map(function($defination){
            $defination->tableName = $defination->tables->table_name;
            $defination->unsetRelation('tables');
            return $defination;
            // return new TDefination($defination);
        });

    	return response()->json($tableDefinitaionsData);
    }

    public function getTables(){
        // $tables = Tables::with('definations')->get();
        $tables = Tables::get();
        return response()->json($tables);
    }

    public function update(Request $request){

    	$validator = Validator::make($request->all(), [
		    'tables_id' 		=> 'nullable|string', 
            'column_name' 		=> 'nullable|string',
            'data_type' 		=> 'nullable|string', 
            'length' 			=> 'nullable|integer',
            'maximum_number' 	=> 'nullable|integer',
            'decimal_part' 		=> 'nullable|integer',
            'validation' 		=> 'nullable|string'
		]);

		if ($validator->fails()) {
		    return response()->json($validator->errors(), 422);
		}

    	$tableDefinationObj 	= new TableDefinition();

    	$tableDefination 		= $tableDefinationObj->findOrfail($request->id);
    	if($tableDefination){
    		$tableDefination->tables_id 		= $request->tables_id;
    		$tableDefination->column_name 		= $request->column_name;
    		$tableDefination->data_type 		= $request->data_type;
    		$tableDefination->length 			= $request->length;
    		$tableDefination->maximum_number 	= $request->maximum_number;
    		$tableDefination->decimal_part 		= $request->decimal_part;
    		$tableDefination->validation 		= $request->validation;

    		$tableDefination->save();

            $tableDefination->tableName = $tableDefination->tables->table_name;

            // info(['Data' => $tableDefination]);
    	}
    	return response()->json($tableDefination);

    }

    public function add(Request $request){

        $validator = Validator::make($request->all(), [
		    'tables_id' 		=> 'nullable|integer', 
            'column_name' 		=> 'nullable|string',
            'data_type' 		=> 'nullable|string', 
            'length' 			=> 'nullable|integer',
            'maximum_number' 	=> 'nullable|integer',
            'decimal_part' 		=> 'nullable|integer',
            'validation' 		=> 'nullable|string'
		]);

		if ($validator->fails()) {
		    return response()->json($validator->errors(), 422);
		}

    	$tableDefination 	= new TableDefinition();

    	$tableDefination->tables_id 		= $request->table_id;
		$tableDefination->column_name 		= $request->column_name;
		$tableDefination->data_type 		= $request->data_type;
		$tableDefination->length 			= $request->length;
		$tableDefination->maximum_number 	= $request->maximum_number;
		$tableDefination->decimal_part 		= $request->decimal_part;
		$tableDefination->validation 		= $request->validation;

		$tableDefination->save();

        $tableDefination->tableName = $tableDefination->tables->table_name;

		return response()->json($tableDefination);
    }

    public function delete(Request $request){
    	info($request->all());
    	$tableDefinationObj 	= new TableDefinition();
    	$tableDefination 		= $tableDefinationObj->findOrfail($request->id);

        if(count($tableDefination)>0){
            $tableDefination->delete();
        }
        else{
            return response()->json('Resource Not Found!', 404);
        }
    	

    	return response()->json('Deleted Successfully!');
    }
}
