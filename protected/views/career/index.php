<div class="con">
	<div class="padding-box align_left">
        <div class="big-header">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/kariera.png" />
            kariera
        </div>
		Obecnie zatrudniamy 29 osób o wysokich kwalifikacjach zawodowych popartych solidną wiedzą i doświadczeniem.
		Jeśli chcesz dołączyć do naszego zespołu i wziąć udział w realizacji dużych projektów budowlanych wyślij swoje CV na adres <a href="mailto:biuro@eurobud.tychy.pl">biuro@eurobud.tychy.pl</a>.
		<br/><br/>
		Ponieżj znajdują się aktualne ofery pracy w naszym zespole:
		<br/><br/>
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			'summaryText'=>'',
		)); ?>
	</div>
</div>


