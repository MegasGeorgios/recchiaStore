<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class citas extends Model
{
    //
    protected $table = 'citas';

    protected $fillable = [
        'nombre', 'email', 'telefono', 'prenda','fecha'
    ];

    public function citasordenadasporfecha()
    {
        return $query=DB::table('citas')->orderBy('fecha','asc')->get();
    }

}
