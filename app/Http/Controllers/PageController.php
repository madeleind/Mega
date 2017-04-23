<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use Mail;

use Session;

class PageController extends Controller
{
	public function getIndex ()
	{
		return view ('Inicio');
	}

	public function getQuienessomos ()
	{
		return view ('Quienessomos');
	}

	public function getNoticias ()
	{
		return view ('Noticias');
	}

    public function getContacto ()
    {
        return view ('Contacto');
    }

	public function getGrupojca ()
	{
		return view ('Grupojca');
	}

	public function getMegatecnica ()
	{
		return view ('Megatecnica');
	}

	public function getEMTrealygrup ()
	{
		return view ('EMTrealygrup');
	}

	public function getInvertia ()
	{
		return view ('Invertia');
	}

	public function getLatinpro ()
	{
		return view ('Latinpro');
	}

	public function getGarajesmega ()
	{
		return view ('Garajesmega');
	}

    public function getNoticiavista ()
    {
        return view ('Noticiavista');
    }

    public function getVitaefisio ()
    {
        return view ('Vitaefisio');
    }
	 





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
