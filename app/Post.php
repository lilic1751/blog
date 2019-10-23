<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	//EL MODELO SE CONECTA A UNA TABLA LLAMADA POST 
	protected $table='posts';
	protected $fillable = ['title','description'];
}
