<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateanuncioRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\anuncioRepository;
use Mitul\Controller\AppBaseController;
use Response;
use App\Models\Mapaslugares;
use App\Models\Pais;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Anuncio;
use App\Models\Categoria;
use Flash;
use \Input as Input; 
use File;

class anuncioController extends AppBaseController
{

	/** @var  anuncioRepository */
	private $anuncioRepository;

	function __construct(anuncioRepository $anuncioRepo)
	{
		$this->anuncioRepository = $anuncioRepo;
	}

	/**
	 * Display a listing of the anuncio.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->anuncioRepository->search($input);

		$anuncios = $result[0];

		$attributes = $result[1];

		return view('anuncios.index')
		    ->with('anuncios', $anuncios)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new anuncio.
	 *
	 * @return Response
	 */
	public function create()
	{
		$paises = Pais::lists('nombre','id');
		$departamentos = Departamento::lists('nombre','id');
		$municipios = Municipio::lists('nombre','id');
		$categoria = Categoria::lists('nombre','id');
		$mapas = Mapaslugares::lists('nombre','id');
		return view('anuncios.create',compact('paises','departamentos','municipios','categoria','mapas'));
	}

	/**
	 * Store a newly created anuncio in storage.
	 *
	 * @param CreateanuncioRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateanuncioRequest $request)
	{
      

        if(Input::hasFile('imagen')){
        	$file = Input::file('imagen');
        	$file->move('images/upload/anucios/',$file->getClientOriginalName());
        		
      
        }

		$anuncio = new Anuncio();
		$anuncio->titulo = $request->titulo;
		$anuncio->descripcion = $request->descripcion;
		$anuncio->imagen = $file->getClientOriginalName();
		$anuncio->enlace = $request->enlace;
		$anuncio->estado = $request->estado;
		$anuncio->pais_id = $request->pais_id;
		$anuncio->departamento_id = $request->departamento_id;
		$anuncio->municipio_id = $request->municipio_id;
		$anuncio->mapa_id = $request->mapa_id;
		$anuncio->posicion_mapa = $request->posicion_mapa;
		$anuncio->save();


		Flash::message('anuncio guardado y publicado satisfactoriamente.');
	

		return redirect(route('anuncios.index'));
	}

	/**
	 * Display the specified anuncio.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$anuncio = $this->anuncioRepository->findanuncioById($id);

		if(empty($anuncio))
		{
			Flash::error('anuncio not found');
			return redirect(route('anuncios.index'));
		}

		return view('anuncios.show')->with('anuncio', $anuncio);
	}

	/**
	 * Show the form for editing the specified anuncio.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$paises = Pais::lists('nombre','id');
		$departamentos = Departamento::lists('nombre','id');
		$municipios = Municipio::lists('nombre','id');
		$categoria = Categoria::lists('nombre','id');
		$mapas = Mapaslugares::lists('nombre','id');
		$anuncio = $this->anuncioRepository->findanuncioById($id);

		if(empty($anuncio))
		{
			Flash::error('anuncio not found');
			return redirect(route('anuncios.index'));
		}

		return view('anuncios.edit')->with('anuncio', $anuncio,'paises','departamentos','municipios','categoria','mapas');
	}

	/**
	 * Update the specified anuncio in storage.
	 *
	 * @param  int    $id
	 * @param CreateanuncioRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateanuncioRequest $request)
	{
		$anuncio = $this->anuncioRepository->findanuncioById($id);

		if(empty($anuncio))
		{
			Flash::error('anuncio not found');
			return redirect(route('anuncios.index'));
		}

		$anuncio = $this->anuncioRepository->update($anuncio, $request->all());
		

		Flash::message('anuncio updated successfully.');

		return redirect(route('anuncios.index'));
	}

	/**
	 * Remove the specified anuncio from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$anuncio = $this->anuncioRepository->findanuncioById($id);

		if(empty($anuncio))
		{
			Flash::error('anuncio not found');
			return redirect(route('anuncios.index'));
		}

		$anuncio->delete();

		Flash::message('anuncio deleted successfully.');

		return redirect(route('anuncios.index'));
	}

}
