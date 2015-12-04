<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateeventoRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\eventoRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class workshopController extends AppBaseController
{

	/** @var  eventoRepository */
	private $eventoRepository;

	function __construct(eventoRepository $eventoRepo)
	{
		$this->eventoRepository = $eventoRepo;
	}

	/**
	 * Display a listing of the evento.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->eventoRepository->search($input);

		$eventos = $result[0];

		$attributes = $result[1];

		return view('workshop.index')
		    ->with('eventos', $eventos)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new evento.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('palestra.create');
	}

	/**
	 * Store a newly created evento in storage.
	 *
	 * @param CreateeventoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateeventoRequest $request)
	{
        $input = $request->all();

		$evento = $this->eventoRepository->store($input);

		Flash::message('Evento Criado com successo.');

		return redirect(route('palestra.index'));
	}

	/**
	 * Display the specified evento.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$evento = $this->eventoRepository->findeventoById($id);

		if(empty($palestra))
		{
			Flash::error('Evento nao encontrado');
			return redirect(route('palestra.index'));
		}

		return view('palestra.show')->with('palestra', $palestra);
	}

	/**
	 * Show the form for editing the specified evento.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$evento = $this->eventoRepository->findeventoById($id);

		if(empty($evento))
		{
			Flash::error('Evento nao encontrado');
			return redirect(route('palestra.index'));
		}

		return view('palestra.edit')->with('palestra', $palestra);
	}

	/**
	 * Update the specified evento in storage.
	 *
	 * @param  int    $id
	 * @param CreateeventoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateeventoRequest $request)
	{
		$evento = $this->eventoRepository->findeventoById($id);

		if(empty($palestra))
		{
			Flash::error('Evento nao encontrado');
			return redirect(route('palestra.index'));
		}

		$evento = $this->eventoRepository->update($palestra, $request->all());

		Flash::message('Evento actualizado com sucesso.');

		return redirect(route('palestra.index'));
	}

	/**
	 * Remove the specified evento from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$palestra = $this->eventoRepository->findeventoById($id);

		if(empty($palestra))
		{
			Flash::error('Evento nao encontrado.');
			return redirect(route('palestra.index'));
		}

		$palestra->delete();

		Flash::message('Evento apagado com successo.');

		return redirect(route('eventos.index'));
	}

}
