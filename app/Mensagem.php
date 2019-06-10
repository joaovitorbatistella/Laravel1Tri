<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Atividade;

class Mensagem extends Model
{
    protected $table = 'mensagens';

    public function atividade(){
        return $this->belongsTo(Atividade::class);
    }

}
