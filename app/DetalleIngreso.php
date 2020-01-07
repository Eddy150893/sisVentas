<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
     protected $table='detalle_ingreso';
    protected $primaryKey='iddetalle_ingreso';
    /*agregar automaticamente dos columnas para saber cuando se crearon o actualizaron los registros*/
    public $timestamps=false;

/*especifica campos que van a recibir un valor para guardar en la tabla*/
    protected $fillable=[
    	'idingreso',
    	'idarticulo',
    	'cantidad',
    	'precio_compra',
    	'precio_venta'
    	
    ];
//y los campos que no queremos que se asignen al modelo
    protected $guarded=[

    ];
}
