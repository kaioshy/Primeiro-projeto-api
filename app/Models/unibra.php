<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unibra extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'situacao', 'numero_do_cnpj', 'razao_social', 'nome', 'data_de_abertura',
        'capital_social', 'tipo', 'natureza_juridica', 'porte_da_empresa', 'qnt_de_funcionarios',
        'faturamento_presumido', 'telefone', 'email', 'estado_uf', 'municipio', 'bairro',
        'logradouro', 'numero', 'cep', 'atividade_economica'];
}
