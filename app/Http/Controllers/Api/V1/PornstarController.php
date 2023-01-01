<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePornstarRequest;
use App\Http\Resources\V1\PornstarCollection;
use App\Http\Resources\V1\PornstarResource;
use Illuminate\Http\Request;
use App\Models\Pornstar;

class PornstarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return new PornstarCollection(Pornstar::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePornstarRequest $request)
    {
        //es validated
        Pornstar::create($request->validated());

        return response()->json("se creo la actriz correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Pornstar $pornstar)
    {
        //

        return new PornstarResource($pornstar);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePornstarRequest $request, Pornstar $pornstar)
    {
        //
        $pornstar->update($request->all());

        return response()->json("la actualizacion se ha hecho correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pornstar $pornstar)
    {
        //
        $pornstar->delete();
        return response()->json("la actriz se elimino correctamente");
    }

}
