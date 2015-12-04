<?php

namespace App\Libraries\Repositories;


use App\Models\Teacher;
use Illuminate\Support\Facades\Schema;

class TeacherRepository
{

	/**
	 * Returns all Teachers
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Teacher::all();
	}

	public function search($input)
    {
        $query = Teacher::query();

        $columns = Schema::getColumnListing('teachers');
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
	 * Stores Teacher into database
	 *
	 * @param array $input
	 *
	 * @return Teacher
	 */
	public function store($input)
	{
		return Teacher::create($input);
	}

	/**
	 * Find Teacher by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Teacher
	 */
	public function findTeacherById($id)
	{
		return Teacher::find($id);
	}

	/**
	 * Updates Teacher into database
	 *
	 * @param Teacher $teacher
	 * @param array $input
	 *
	 * @return Teacher
	 */
	public function update($teacher, $input)
	{
		$teacher->fill($input);
		$teacher->save();

		return $teacher;
	}
}