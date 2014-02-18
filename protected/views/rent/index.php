<?php
$this->breadcrumbs=array(
	'Wypożyczalnia',
);

$this->menu=array(
	array('label'=>'sprzęt budowlany', 'url'=>'', 'linkOptions'=>array("id"=>"sprzet")),
	array('label'=>'deskowania', 'url'=>'', 'linkOptions'=>array("id"=>"deskowania")),
	array('label'=>'rusztowania', 'url'=>'', 'linkOptions'=>array("id"=>"rusztowania")),

);
?>

<?php $this->beginClip('header'); ?>
	<div class="big-header">
	    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gfx/sprzet.png" />
	    wypożyczalnia
	</div>
<?php $this->endClip(); ?>


<div class="tab sprzet" style="display:none;">
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		'summaryText'=>'',
	)); ?>
</div>

<div class="tab deskowania" style="display:none;">
	Posiadamy deskowania ścienne i stropowe renomowanej firmy DOKA.
</div>

<div class="tab rusztowania" style="display:none;">
	Rusztowania elewacyjne ramowe to kolejna propozycja w naszym dziale wypożyczalni. Posiadamy atestowane rusztowania, które zapewnią bezpieczną pracę na budowie.
</div>

<h2 class="call-us">Jeżeli jesteś zainteresowany ofertą naszej wypożyczalni - zadzwoń <span>663 038 883</span><h2>


<script type="text/javascript">
	$(document).ready(function() {
		$(".left-menu a").click(function() {
			$(".tab").slideUp();
			$("."+$(this).attr("id")).slideDown();
			$(".left-menu li").removeClass("current");
			$(this).parent().addClass("current");
		});
		$("#<?php echo isset($_GET['tab']) ? $_GET['tab'] : 'sprzet'; ?>").parent().addClass("current");
		$(".<?php echo isset($_GET['tab']) ? $_GET['tab'] : 'sprzet'; ?>").slideDown();
	});
</script>
