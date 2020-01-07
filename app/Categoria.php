<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria';
    protected $primaryKey='idcategoria';
    /*agregar automaticamente dos columnas para saber cuando se crearon o actualizaron los registros*/
    public $timestamps=false;

/*especifica campos que van a recibir un valor para guardar en la tabla*/
    protected $fillable=[
    	'nombre',
    	'descripcion',
    	'condicion'
    ];
//y los campos que no queremos que se asignen al modelo
    protected $guarded=[

    ];
}
