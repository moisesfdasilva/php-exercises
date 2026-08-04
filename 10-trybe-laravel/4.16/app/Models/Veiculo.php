<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model {
    protected $table = 'veiculos';
    protected $fillable = ['placa', 'modelo', 'ano', 'proprietario', 'status_id'];

    public function status() {
        return $this->belongsTo(Status::class);
    }

}
