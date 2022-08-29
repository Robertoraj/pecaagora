<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Funcionario;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FuncionarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Funcionarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="funcionario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Funcionario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id_funcionario',
            'id_cargo',
            'nome',
            'cpf',
            'logradouro',
            //'cep',
            //'cidade',
            //'estado',
            //'numero',
            //'complemento',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Funcionario $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_funcionario' => $model->id_funcionario]);
                 }
            ],
        ],
    ]); ?>


</div>
