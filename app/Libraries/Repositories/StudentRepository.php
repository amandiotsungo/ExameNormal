<?php

namespace App\Libraries\Repositories;


use App\Models\Student;
use Illuminate\Support\Facades\Schema;

class StudentRepository
{

	/**
	 * Returns all Students
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Student::all();
	}

	public function search($input)
    {
        $query = Student::query();

        $columns = Schema::getColumnListing('students');
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
	 * Stores Student into database
	 *
	 * @param array $input
	 *
	 * @return Student
	 */
	public function store($input)
	{
		return Student::create($input);
	}

	/**
	 * Find Student by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Student
	 */
	public function findStudentById($id)
	{
		return Student::find($id);
	}

	/**
	 * Updates Student into database
	 *
	 * @param Student $student
	 * @param array $input
	 *
	 * @return Student
	 */
	public function update($student, $input)
	{
		$student->fill($input);
		$student->save();

		return $student;
	}
}