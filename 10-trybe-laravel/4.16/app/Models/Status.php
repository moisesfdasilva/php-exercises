<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model {
    protected $table = 'status';
    protected $fillable = ['nome'];

    public function veiculos() {
        return $this->hasMany(Veiculo::class);
    }
}
