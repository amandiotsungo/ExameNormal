<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateeventoRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\eventoRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class eventoController extends AppBaseController
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

		return view('eventos.index')
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
		return view('eventos.create');
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

		Flash::message('Evento salvo com successo.');

		return redirect(route('eventos.index'));
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

		if(empty($evento))
		{
			Flash::error('Evento nao encontrado');
			return redirect(route('eventos.index'));
		}

		return view('eventos.show')->with('evento', $evento);
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
			Flash::error('Nenhum evento encontrado');
			return redirect(route('eventos.index'));
		}

		return view('eventos.edit')->with('evento', $evento);
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

		if(empty($evento))
		{
			Flash::error('Nenhum evento encontrado');
			return redirect(route('eventos.index'));
		}

		$evento = $this->eventoRepository->update($evento, $request->all());

		Flash::message('Evento actualizado com sucesso.');

		return redirect(route('eventos.index'));
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
		$evento = $this->eventoRepository->findeventoById($id);

		if(empty($evento))
		{
			Flash::error('evento not found');
			return redirect(route('eventos.index'));
		}

		$evento->delete();

		Flash::message('Evento apagado com successo.');

		return redirect(route('eventos.index'));
	}

}
