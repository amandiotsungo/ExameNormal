<?php

namespace App\Libraries\Repositories;


use App\Models\evento;
use Illuminate\Support\Facades\Schema;

class eventoRepository
{

	/**
	 * Returns all eventos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return evento::all();
	}

	public function search($input)
    {
        $query = evento::query();

        $columns = Schema::getColumnListing('eventos');
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
	 * Stores evento into database
	 *
	 * @param array $input
	 *
	 * @return evento
	 */
	public function store($input)
	{
		return evento::create($input);
	}

	/**
	 * Find evento by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|evento
	 */
	public function findeventoById($id)
	{
		return evento::find($id);
	}

	/**
	 * Updates evento into database
	 *
	 * @param evento $evento
	 * @param array $input
	 *
	 * @return evento
	 */
	public function update($evento, $input)
	{
		$evento->fill($input);
		$evento->save();

		return $evento;
	}
}