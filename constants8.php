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

define("VALUE","I Am Learning PHP ");

    echo VALUE;

 
/*
define("VALUE","I Am Learning JAVA ");S
  function learnphp(){

    return VALUE;
  }
  echo learnphp();
  */
// Function call koreo kora zai .


  //kno kisu constant taka 
  //define (name,value,case-insensitive) take...;

       
      ?>
        </section>
 
 
 <section class="footeroption">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>?
</div>
</body>








</html>