<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestShowOperators extends Controller
{
   public function getOperators(Request $request) {

        $type = $request->type;

        if ($type == 'post') {
            for ($i = 0; $i < 10; $i++) {
                $data[$i]['id'] = $i;
                $data[$i]['name'] = 'name ' . $i;
                $data[$i]['type'] = 'post';
                $data[$i]['operatorCode'] = 'code ' . $i;
            }
        }

        if ($type == 'get') {
            for ($i = 0; $i < 10; $i++) {
                $data[$i]['id'] = $i;
                $data[$i]['name'] = 'name ' . $i;
                $data[$i]['type'] = 'get';
                $data[$i]['operatorCode'] = 'code ' . $i;
            }
        }

        if (isset($data))
            return response()->json([
                'error' => false,
                'data' => $data
            ]);

        else
            return response()->json([
                'error' => true,
                'data' => 'Oops, Something Went Wrong'
            ]);
    }
}
