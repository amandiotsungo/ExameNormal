<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class participante extends Model
{
    
	public $table = "participantes";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "nome",
		"apelido",
		"grauacademico",
		"empresa",
		"datadenascimento",
		"sexo",
		"telefone",
		"email"
	];

	public static $rules = [
	    "nome" => "required",
		"apelido" => "required",
		"grauacademico" => "required",
		"empresa" => "required",
		"datadenascimento" => "required",
		"sexo" => "required",
		"telefone" => "required",
		"email" => "required"
	];

}
