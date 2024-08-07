<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SWLanguagePage $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="swlanguage-page-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'code')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'page')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'subtitle')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'keywords')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'lead')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'body_yaml')->textarea(['rows' => 6]) ?>

	<div class="form-group">
		<?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
