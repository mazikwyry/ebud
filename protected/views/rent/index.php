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
	dLorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, maiores, eveniet eligendi temporibus at soluta laboriosam harum perferendis velit a cupiditate asperiores. Fugiat, cum, eaque minima suscipit reiciendis excepturi qui.
</div>

<div class="tab rusztowania" style="display:none;">
	rLorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, doloribus voluptatem sapiente consequatur sed culpa error molestiae unde. Atque, provident, earum laborum error accusantium aliquam temporibus nostrum sit reiciendis corporis.
</div>

<h2 class="call-us">Jeżeli jesteś zainteresowany ofertą naszej wypożyczalni - zadzwoń <span>(32) 775 46 91</span><h2>


<script type="text/javascript">
	$(".left-menu a").click(function() {
		$(".tab").slideUp();
		$("."+$(this).attr("id")).slideDown();
		$(".left-menu li").removeClass("current");
		$(this).parent().addClass("current");
	})
	$(document).ready(function() {
		$("#<?php echo isset($_GET['tab']) ? $_GET['tab'] : 'sprzet'; ?>").parent().addClass("current");
		$(".<?php echo isset($_GET['tab']) ? $_GET['tab'] : 'sprzet'; ?>").slideDown();
	})
</script>