<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table='detalle_venta';
    protected $primaryKey='iddetalle_venta';
    /*agregar automaticamente dos columnas para saber cuando se crearon o actualizaron los registros*/
    public $timestamps=false;

/*especifica campos que van a recibir un valor para guardar en la tabla*/
    protected $fillable=[
    	'idventa',
    	'idarticulo',
    	'cantidad',
    	'precio_venta',
    	'descuento'
    	
    ];
//y los campos que no queremos que se asignen al modelo
    protected $guarded=[

    ];
}

