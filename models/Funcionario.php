<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property int $id_funcionario
 * @property int $id_cargo
 * @property string $nome
 * @property int $cpf
 * @property string $logradouro
 * @property int $cep
 * @property string $cidade
 * @property string $estado
 * @property int $numero
 * @property string|null $complemento
 *
 * @property Cargo $cargo
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_cargo', 'nome', 'cpf', 'logradouro', 'cep', 'cidade', 'estado', 'numero'], 'required'],
            [['id_cargo', 'cpf', 'cep', 'numero'], 'default', 'value' => null],
            [['id_cargo'], 'integer', 'max' => 999],
            [['cpf'], 'integer', 'max' => 99999999999],
            [['cep'], 'integer', 'max' => 99999999],
            [['numero'], 'integer', 'max' => 99999],
            [['nome'], 'string', 'max' => 50],
            [['logradouro'], 'string', 'max' => 70],
            [['cidade', 'complemento'], 'string', 'max' => 30],
            [['estado'], 'string', 'max' => 2],
            [['id_cargo'], 'exist', 'skipOnError' => true, 'targetClass' => Cargo::className(), 'targetAttribute' => ['id_cargo' => 'id_cargo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_funcionario' => 'Id Funcionario',
            'id_cargo' => 'Id Cargo',
            'nome' => 'Nome',
            'cpf' => 'Cpf',
            'logradouro' => 'Logradouro',
            'cep' => 'Cep',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'numero' => 'Numero',
            'complemento' => 'Complemento',
        ];
    }

    /**
     * Gets query for [[Cargo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCargo()
    {
        return $this->hasOne(Cargo::className(), ['id_cargo' => 'id_cargo']);
    }
}
