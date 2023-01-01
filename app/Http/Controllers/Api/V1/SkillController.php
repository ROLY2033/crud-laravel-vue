<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\V1\SkillCollection;
use App\Http\Resources\V1\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    public function index(){
        // $skills =  Skill::all();

        return new SkillCollection(Skill::all());

    }
    public function store(StoreSkillRequest $request ){
        Skill::create($request->validated());
        return response()->json('se creo correctamente la habilidad');
    }

    public function show(Skill $skill){


        return new SkillResource($skill);

    }
    public function update(Skill $skill, StoreSkillRequest $request ){
        $skill->update($request->validated());
        return response()->json('se actualizo correctamente');
    }
    public function destroy(Skill $skill){
        $skill->delete();
        return response()->json('la habilidad ha sido eliminada');
    }

}
