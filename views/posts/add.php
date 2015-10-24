<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="post-add">
	<?php $form = ActiveForm::begin() ?>

		<?php echo $form->field($model, "title") ?>

		<?php echo $form->field($model, "content") ?>

		<div class="form-group">
			<?php echo Html::submitButton("Submit", ["class", "btn btn-primary"]) ?>
		</div>

	<?php ActiveForm::end() ?>

</div>