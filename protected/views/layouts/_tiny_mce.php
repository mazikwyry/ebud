<script type="text/javascript">
    tinyMCE.init({
     
       // General options
        mode : "textareas",
        theme : "modern",
        plugins : "fullpage,textcolor,autolink,lists,spellchecker,pagebreak,layer,table,save,insertdatetime,preview,media,searchreplace,print,contextmenu,directionality,fullscreen,noneditable,visualchars,nonbreaking,template",
      
        toolbar: "bold italic underline strikethrough alignleft aligncenter alignright alignjustify fontselect fontsizeselect cut copy paste bullist numlist outdent indent blockquote undo redo removeformat subscript superscript forecolor",


        paste_auto_cleanup_on_paste : false,
        // Skin options
        language : 'pl',

        // Example content CSS (should be your site CSS)
        content_css : "<?php echo Yii::app()->request->baseUrl; ?>/css/mce.css",

        width : "500",
        height : "300",
        forced_root_block : false,

        
        font_formats : "Open Sans=Open Sans",
        fontsize_formats: "13px 14px 16px",
        fullpage_default_font_size: "14px",
        fullpage_default_font_family: "Open Sans"

    });
</script>