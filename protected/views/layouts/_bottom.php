<div class="con">
    <div class="left">
        <nav>
            <div class="column left">
                <div class="nav-header">
                    budownictwo
                </div>
                <ul>
                    <li><?php echo CHtml::link("oferta", Yii::app()->createUrl('site/oferta')) ?></li>
                    <li><?php echo CHtml::link("aktualności", Yii::app()->createUrl('news/index')) ?></li>
                    <li><?php echo CHtml::link("realizacje", Yii::app()->createUrl('projectsCat/index')) ?></li>
                    <li><?php echo CHtml::link("kariera", Yii::app()->createUrl('career/index')) ?></li>
                </ul>
            </div>
            <div class="column left">
                <div class="nav-header">
                    wypożyczalnia
                </div>
                <ul>
                    <li><?php echo CHtml::link("deskowania", Yii::app()->createUrl('rent/index', array("tab"=>"deskowania"))) ?></li>
                    <li><?php echo CHtml::link("rusztowania", Yii::app()->createUrl('rent/index', array("tab"=>"rusztowania"))) ?></li>
                    <li><?php echo CHtml::link("sprzęt budowlany", Yii::app()->createUrl('rent/index')) ?></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="right contact">
        EUROBUD S.C.<br/>
        Przemysłowa 66<br/>
        43-100 Tychy<br/>
        <a href="mailto:biuro@eurobud.tychy.pl">biuro@eurobud.tychy.pl</a>
    </div>

</div>
<div class="cl"></div>