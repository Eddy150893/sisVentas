<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table='venta';
    protected $primaryKey='idventa';
    /*agregar automaticamente dos columnas para saber cuando se crearon o actualizaron los registros*/
    public $timestamps=false;

/*especifica campos que van a recibir un valor para guardar en la tabla*/
    protected $fillable=[
    	'idcliente',
    	'tipo_comprobante',
    	'serie_comprobante',
    	'num_comprobante',
    	'fecha_hora',
    	'impuesto',
    	'total_venta',
    	'estado'
    ];
//y los campos que no queremos que se asignen al modelo
    protected $guarded=[

    ];
}
