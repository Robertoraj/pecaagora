<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cargo */

$this->title = 'Update Cargo: ' . $model->id_cargo;
$this->params['breadcrumbs'][] = ['label' => 'Cargos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_cargo, 'url' => ['view', 'id_cargo' => $model->id_cargo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cargo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
