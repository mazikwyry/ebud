

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
<?php echo count($model->images); ?>
<div class="form">
	<form class="dropzone" id="dropzone" action="<?php echo Yii::app()->createUrl('gall/create'); ?>" style="text-align:center;">
		<input type="hidden" name="id_parent" value="<?php echo $model->id; ?>" />
		<input type="hidden" name="parent_type" value="project" />
		+ Upuść zdjęcia lub kliknij by wybrać<br/>
		<div class="cl"></div>
	</form>
</div>
<?php } ?>


<script type="text/javascript">
	// "myAwesomeDropzone" is the camelized version of the HTML element's ID
	Dropzone.options.dropzone = {
	  init: function() {
  		// Create the mock file:
		var mockFile;

		<?php foreach($model->images as $image) {?>

			mockFile = { name: "Uploaded", size: 1000 };
		
			// Call the default addedfile event handler
			this.emit("addedfile", mockFile);

			// And optionally show the thumbnail of the file:
			this.emit("thumbnail", mockFile, "<?php echo Yii::app()->request->baseUrl."/images/images/big/".$image->photo; ?>");

		<?php } ?>


	    this.on("success", function(file, responseText) {
	     image = JSON.parse(responseText);
	      // Handle the responseText here. For example, add the text to the preview element:
	      $(file.previewTemplate).append("<a class=\"dz-remove\" href=\"javascript:undefined;\" id=\"image"+image.id+"\">Remove file</a>");
        

        // Capture the Dropzone instance as closure.
       	  var _this = this;
       	  
       	  $("#image"+image.id).click(function(e) {
	          // Make sure the button click doesn't submit the form:
	          e.preventDefault();
	          e.stopPropagation();
	          $.post( 
	           	"<?php echo Yii::app()->createUrl('gall/delete'); ?>/"+image.id+"?ajax=imageupload", 
	           	function( data ) {
				_this.removeFile(file);
			  	}
			  );
          });
	    });
	  }
	};


</script>
