<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class adddatatodb extends Controller
{
    //
    public function insert(Request $req)
    {
      $testData = $req->input('idata');
	
      try{
      $insertData = DB:table('testdatav3')->insert(['test_data_text' => $testData]);
      
      
        echo "Data added to the database!";
      }
      catch(Exception $e){
       echo "Data is not added to the database table: ".$e;
      }
    }
}
