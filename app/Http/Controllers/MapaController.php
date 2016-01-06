<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Pais;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\mapaslugares;
use App\Models\Categoria;
use App\Models\anuncio;
use Illuminate\Http\Request;
use DB;

class MapaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$paises = Pais::lists('nombre','id');
		$departamentos = Departamento::lists('nombre','id');
		$municipios = Municipio::lists('nombre','id');
		$anuncios = Anuncio::all();
		return view('mapas',compact('paises','departamentos','municipios','anuncios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function getDepartamentos(Request $request, $id){
		if($request->ajax()){
			$departamentos = Departamento::departamentos($id);
			return response()->json($departamentos);
		}
	}

	public function getMunicipios(Request $request, $id){
		if($request->ajax()){
			$municipios = Municipio::municipios($id);
			return response()->json($municipios);
		}
	}

	public function getLugares(Request $request, $id){
		if($request->ajax()){
			$lugares = Mapaslugares::lugares($id);
			return response()->json($lugares);
		}
	}

	public function getCategorias(Request $request){
		if($request->ajax()){
			$categorias = DB::table('categorias')->get();
		
			return response()->json($categorias);

		
		}
	}


}
