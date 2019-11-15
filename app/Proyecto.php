<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Proyecto extends Model
{
    protected $table = 'proyectos';
    
    public function empleado() {
        return $this->hasOne('App\Empleado', 'id', 'empleado_id');
    }

}