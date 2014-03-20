<div class="con">
	<div class="diamond">
		<?php 
		$x = 1;
		foreach ($photos as  $photo) { ?>
	    	<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/images/big/".$photo->photo, "Image", array("id"=>$x++)); ?>
	    <?php } ?>
	</div> 
	<div class="half align_left" style="padding-right:60px;">
	    <div class="header">
	        o firmie
	    </div>
	    Jesteśmy firmą dla której budownictwo jest pasją, której oddajemy się bez reszty. Nie boimy się trudnych wyzwań i wymagających Inwestorów. Nasze niemałe doświadczenie w branży budowlanej gwarantuje, że każde powierzone nam zadanie zrealizujemy terminowo i z najwyższą jakością.
	    <br/><br/>

	</div>
	<div class="half align_left" style="padding-left:115px;">
	    <div class="header">
	        kontakt
	    </div>
	    <?php $form=$this->beginWidget('CActiveForm', array(
	        'id'=>'contact-form',
	        'enableAjaxValidation'=>true,
	        'action'=>Yii::app()->createUrl('site/contact'),
	    )); ?>
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

	</div>
	<div class="cl"></div>
</div>
<div class="big-info mission" name="ofirmie" id="ofirmie" style="margin-top:100px;">
	<div class="con">
	    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/cel.png" />
	    <div class="big-content">
	        <div class="title">Nasza misja</div>
	        <div class="shot">Misją firmy stało się <strong>stworzenie wiarygodnego i solidnego partnera dla realizacji celów inwestycyjnych</strong>. Osiągamy powyższy cel poprzez dbanie o konkurencyjność, utrzymywanie stałych relacji z Inwestorami oraz przez fachowe doradztwo i wykonawstwo.</div>
	    </div>
	    <div class="cl"></div>
	</div>
</div>
<div class="big-info team">
	<div class="con">
	    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/team.png" />
	    <div class="big-content">
	        <div class="title">Zespół</div>
	        <div class="shot">Obecnie zatrudniamy <strong>29 osób o wysokich kwalifikacjach zawodowych</strong> popartych solidną wiedzą i doświadczeniem. Ponadto współpracujemy ze sprawdzoną grupą podwykonawców i dostawców.</div>
	    </div>
	    <div class="cl"></div>
	</div>
</div>
<div class="recent-news">
	<div class="con">
	    <div class="big-header">
	        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/news.png" />
	        aktualności
	    </div>

	    <div class="list_news">
			<?php foreach ($news as  $data) { ?>

				<div class="fourty-five-box justify left news-homepage">
				    <div class="news">
						<h1>
							<?php echo CHtml::encode($data->title); ?>
						</h1>
						<div class="justify">
							<div class="date_added">
								<?php echo substr($data->date_added, 5 ,2)."<span class=\"year\">".substr($data->date_added, 0 ,4)."</span>"; ?>
							</div>
							<?php echo shortenText($data->content,500,true, $data->id); ?>
						</div>
					</div>
				</div>

			<?php } ?>
			<div class="cl"></div>
			<a class="block" style="margin:15px 0;" href="<?php echo Yii::app()->createUrl('news/index'); ?>">Zobacz archiwum &raquo;</a>
		</div>
	    <div class="cl"></div>

	</div>
</div>
<?php echo $this->renderPartial('//layouts/_partners'); ?>

<script type="text/javascript">
	var diamonds_imgs = <?php echo count($photos) ?>;
	var current_img = 1;
	$(document).ready(function() {
		setInterval(function() {
			$('#'+current_img).fadeOut();
			if(current_img==diamonds_imgs)
				current_img=1;
			else
				current_img++;
			$('#'+current_img).fadeIn();
		},3000)
	});
</script>



