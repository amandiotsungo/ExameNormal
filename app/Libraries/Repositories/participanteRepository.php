<?php

namespace App\Libraries\Repositories;


use App\Models\participante;
use Illuminate\Support\Facades\Schema;

class participanteRepository
{

	/**
	 * Returns all participantes
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return participante::all();
	}

	public function search($input)
    {
        $query = participante::query();

        $columns = Schema::getColumnListing('participantes');
        $attributes = array();

        foreach($columns as $attribute){
            if(isset($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] =  $input[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        return [$query->get(), $attributes];

    }

	/**
	 * Stores participante into database
	 *
	 * @param array $input
	 *
	 * @return participante
	 */
	public function store($input)
	{
		return participante::create($input);
	}

	/**
	 * Find participante by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|participante
	 */
	public function findparticipanteById($id)
	{
		return participante::find($id);
	}

	/**
	 * Updates participante into database
	 *
	 * @param participante $participante
	 * @param array $input
	 *
	 * @return participante
	 */
	public function update($participante, $input)
	{
		$participante->fill($input);
		$participante->save();

		return $participante;
	}
}