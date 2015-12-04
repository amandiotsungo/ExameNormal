<?php

namespace App\Libraries\Repositories;


use App\Models\estudante;
use Illuminate\Support\Facades\Schema;

class estudanteRepository
{

	/**
	 * Returns all estudantes
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return estudante::all();
	}

	public function search($input)
    {
        $query = estudante::query();

        $columns = Schema::getColumnListing('estudantes');
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
	 * Stores estudante into database
	 *
	 * @param array $input
	 *
	 * @return estudante
	 */
	public function store($input)
	{
		return estudante::create($input);
	}

	/**
	 * Find estudante by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|estudante
	 */
	public function findestudanteById($id)
	{
		return estudante::find($id);
	}

	/**
	 * Updates estudante into database
	 *
	 * @param estudante $estudante
	 * @param array $input
	 *
	 * @return estudante
	 */
	public function update($estudante, $input)
	{
		$estudante->fill($input);
		$estudante->save();

		return $estudante;
	}
}