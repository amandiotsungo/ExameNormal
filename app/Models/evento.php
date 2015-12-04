<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    
	public $table = "eventos";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "titulo",
		"tipo",
		"descricao",
		"local",
		"data",
		"agenda",
		"estado"
	];

	public static $rules = [
	    "titulo" => "required",
		"tipo" => "required",
		"descricao" => "required",
		"local" => "required",
		"data" => "required",
		"agenda" => "required",
		"estado" => "required"
	];

}
