<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'projects-form',
	'enableAjaxValidation'=>true
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place'); ?>
		<?php echo $form->textField($model,'place',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'place'); ?>
	</div>
	<br/>
	<div class="row">
		<?php echo $form->labelEx($model,'id_cat'); ?><br/>
		<?php echo $form->dropDownList($model,'id_cat', CHtml::listData(ProjectsCat::model()->findAll(), 'id', 'name'), array('empty'=>'Wybierz katergorie')); ?>
		<?php echo $form->error($model,'id_cat'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Utwórz i dodaj zdjęcia' : 'Aktualizuj'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<div class="cl"></div>
<br/>
<?php if (!$model->isNewRecord) { ?>
<div class="form">
	<form class="dropzone" action="<?php echo Yii::app()->createUrl('gall/create'); ?>" style="text-align:center;">
		<input type="hidden" name="id_parent" value="<?php echo $model->id; ?>" />
		<input type="hidden" name="parent_type" value="project" />
		+ Upuść zdjęcia lub kliknij by wybrać<br/>
		<div class="cl"></div>
	</form>
</div>
<?php } ?>