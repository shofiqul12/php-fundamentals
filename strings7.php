<!doctype html>
<html>
<head>
    <title>PHP Syntax</title>
    <style>
        .phpcoding{width:900px; margin:0 auto;background:<?php echo"#ddd" ?>;}
        .headeroption, .footeroption{#444;color:green;text-align:center;padding:20px;}
        .maincontent{min-height: 400px;}
        .headeroption h2,.footeroptio h2{margin: 0;padding: 20px;}


     </style>
        </head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2>PHP Fundamentals<h2>
        </section>
        <section class="maincontent">
       <?php 

$a="PHP is nice";
echo str_replace("PHP","JAVA",$a);
//echo strlen($a);
//echo strpos($a,"nice");
//echo str_word_count($a);
//echo strrev($a);

/*strlen dara string er length ber kori.
str_word _count dara word count kori.
strrev dara revarchage kora zai.
str_replace dara  exchange kora hoy.


*/
       
      ?>
        </section>
 
 
 <section class="footeroption">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>
</div>
</body>








</html>