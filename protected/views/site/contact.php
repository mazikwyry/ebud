<div class="con">
	<div class="padding-box align_left">
        <div class="big-header">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/kontakt.png" />
            kontakt
        </div>



		<div class="form" style="width:50%; float:right;">

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'contact-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); ?>

			<?php echo $form->errorSummary($model); ?>
			<?php if(Yii::app()->user->hasFlash('contact')): ?>

				<div class="flash-success">
					<?php echo Yii::app()->user->getFlash('contact'); ?>
				</div>

			<?php endif; ?>

			<div class="two-in-row">
                <?php echo $form->textField($model,'name',array("placeholder"=>"Imię", "class"=>"left", "id"=>"name")); ?>
				<?php echo $form->textField($model,'email',array("placeholder"=>"E-mail",  "class"=>"right", "id"=>"email")); ?>
            </div>
            <?php echo $form->textArea($model,'body',array("placeholder"=>"Twoja wiadomość", "id"=>"message")); ?>
            <div class="cl"></div>
            <br/>
			<?php if(CCaptcha::checkRequirements()): ?>
			<div class="captcha" style="display:none; ">
				<div>
				<?php $this->widget('CCaptcha', array(
		                            'clickableImage'=>false,
		                        )); ?>
				<?php echo $form->textField($model,'verifyCode',array("placeholder"=>"Przepisz kod z obrazka powyżej")); ?>
				</div>
			</div>
			<?php endif; ?>
			
			<input type="submit" value="WYŚLIJ" />

		<?php $this->endWidget(); ?>

		</div><!-- form -->

		<div style="width:45%; text-align:left; font-size:16px;">
		    <div class="museo-bigger">
			    EUROBUD S.C.<br/>
	            Przemysłowa 66<br/>
	            43-100 Tychy<br/>
	            <a href="mailto:biuro@eurobud.tychy.pl">biuro@eurobud.tychy.pl</a><br/>
			    Tel. biuro: (32) 775 46 91
			</div>
		    <br/>
		    <b>Adam Nalepa</b><br/><em>Kierownik d/s przygotowania produkcji i realizacji inwestycji</em> <br/>
			Tel. 500 663 865, <a href="mailto:a.nalepa@eurobud.tychy.pl">a.nalepa@eurobud.tychy.pl</a>
			<br/><br/>
			<b>Adam Włodarz</b><br/><em>Kierownik techniczno-handlowy</em> <br/>
			Tel. 663 038 883, <a href="mailto:a.wlodarz@eurobud.tychy.pl">a.wlodarz@eurobud.tychy.pl</a>
			<br/><br/>
		</div>
		<div class="cl"></div>
	</div>
</div>
