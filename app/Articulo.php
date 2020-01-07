<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table='articulo';
    protected $primaryKey='idarticulo';
    /*agregar automaticamente dos columnas para saber cuando se crearon o actualizaron los registros*/
    public $timestamps=false;

/*especifica campos que van a recibir un valor para guardar en la tabla*/
    protected $fillable=[
    	'idcategoria',
    	'codigo',
    	'nombre',
    	'stock',
    	'descripcion',
    	'imagen',
    	'estado'
    ];
//y los campos que no queremos que se asignen al modelo
    protected $guarded=[

    ]; 
}
