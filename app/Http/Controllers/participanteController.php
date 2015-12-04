<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateparticipanteRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\participanteRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class participanteController extends AppBaseController
{

	/** @var  participanteRepository */
	private $participanteRepository;

	function __construct(participanteRepository $participanteRepo)
	{
		$this->participanteRepository = $participanteRepo;
	}

	/**
	 * Display a listing of the participante.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->participanteRepository->search($input);

		$participantes = $result[0];

		$attributes = $result[1];

		return view('participantes.index')
		    ->with('participantes', $participantes)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new participante.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('participantes.create');
	}

	/**
	 * Store a newly created participante in storage.
	 *
	 * @param CreateparticipanteRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateparticipanteRequest $request)
	{
        $input = $request->all();

		$participante = $this->participanteRepository->store($input);

		Flash::message('participante saved successfully.');

		return redirect(route('participantes.index'));
	}

	/**
	 * Display the specified participante.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$participante = $this->participanteRepository->findparticipanteById($id);

		if(empty($participante))
		{
			Flash::error('participante not found');
			return redirect(route('participantes.index'));
		}

		return view('participantes.show')->with('participante', $participante);
	}

	/**
	 * Show the form for editing the specified participante.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$participante = $this->participanteRepository->findparticipanteById($id);

		if(empty($participante))
		{
			Flash::error('participante not found');
			return redirect(route('participantes.index'));
		}

		return view('participantes.edit')->with('participante', $participante);
	}

	/**
	 * Update the specified participante in storage.
	 *
	 * @param  int    $id
	 * @param CreateparticipanteRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateparticipanteRequest $request)
	{
		$participante = $this->participanteRepository->findparticipanteById($id);

		if(empty($participante))
		{
			Flash::error('participante not found');
			return redirect(route('participantes.index'));
		}

		$participante = $this->participanteRepository->update($participante, $request->all());

		Flash::message('participante updated successfully.');

		return redirect(route('participantes.index'));
	}

	/**
	 * Remove the specified participante from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$participante = $this->participanteRepository->findparticipanteById($id);

		if(empty($participante))
		{
			Flash::error('participante not found');
			return redirect(route('participantes.index'));
		}

		$participante->delete();

		Flash::message('participante deleted successfully.');

		return redirect(route('participantes.index'));
	}

}
