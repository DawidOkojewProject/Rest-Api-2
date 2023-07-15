<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\people_model;
use App\Http\JsonResponse;

class people_Controller extends Controller
{
    public function all(){
        return response()->json(people_model::all());
    }
    public function creare(Request $request)
    {
        $res= people_model::create($request->all());
        return response()->json($res,201);
    }
   
    public function index($id)
    {
        $res = people_model::find($id);
        if($res)
        return response() -> json($res,200);
        else
        return response() ->json(['error' => 'Person not found'],204);

    }
    public function update(Request $request, $id)
    {
        $person = people_model::find($id);

        if(!$person){
            return response()->json(['error' => 'Person not found'],204);
        }
        $res =people_model::where('Id', $id)->update($request->all());
        if($res)
        return response() ->json(['mesage' => 'Person updated!'],200);
        else
        return response()->json(['error' => 'Failed to update person'],304);
}
public function delete($id)
{
    $res = people_model::find($id);

    if(!$res){
        return response()->json(['error' => 'Person not found'],404);
    }

    people_model::where('Id', $id)->delete();
    if($res){
        return response()->json(['message' => 'Person deleted'], 204);
    }
    else
    return response()->json(['error' => 'Failed to delete person'],304);
}
}
