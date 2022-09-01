<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Produto extends Model
{
    public $idProduto;
    
public function rules()
    {
        return [
            [['idProduto'], 'required'],
        ];
    }
}