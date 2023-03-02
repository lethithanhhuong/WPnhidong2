<?php

/**
 * Template name: icd Page
 * @author :duc
 */
get_header();
while (have_posts()) :
    the_post();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Tra cứu Mã ICD - Bệnh Viện Nhi Đồng 2</title>
<meta name="description" content="Tìm kiếm">
<meta name="keywords" content="Tìm kiếm">
<link rel="stylesheet" type="text/css" href="http://icd.benhviennhi.org.vn/template/css/style.css">


</head>
<body>


    <div id="wrapper">
        <div class="site_width">
            <div class="div_search">
     
                <h1>Tra cứu Mã ICD - Bệnh Viện Nhi Đồng 2</h1>
                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
            </div>

            <script type="text/javascript">
            function check() {
                var q = $("#newtab-search-text").val();
                if (q == "") {
                    alert("Vui lòng nhập từ khóa tìm kiếm");
                    $("#newtab-search-text").focus();
                    return false;
                }

                return true;
            }
            </script>

</script>



        </div>
    </div>

 
</body>

<?php
endwhile;
get_footer();
?>
