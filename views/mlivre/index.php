<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>
<?php $form = ActiveForm::begin(['action' => 'procura', 'method' => 'get']); ?>

    <?= $form->field($model, 'idProduto')->label('Código do Produto') ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
