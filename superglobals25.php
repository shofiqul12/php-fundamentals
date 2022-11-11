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

        1.PHP superglobals   [$GLOBALS & $_SERVER]
        <hr/>

     1. $GLOBALS
     2. $_SERVER
     3. $_REQUEST
     4. $_POST
     5. $_GET
     
     6. $_FILE
     7. $_ENV
     8.$_COOKIE
     9.$_SESSION

        <hr/>

       <?php 
       /*
       //$GLOBALS variable nia kaj.
       $x=5;
       $y=10;
       function sum(){
     $GLOBALS['z']= $GLOBALS['x']+$GLOBALS['y'];

       }
       sum();
       echo $z;

       */

     /*
       $_SERVER variable nia kaj.
     
      ze file ta nia kaj kori sei ta khuje ber korar jonno $_SERVER['PHP_SELF']; likte hoy.or ze location e achi ta khujeber korte.

     //echo $_SERVER['PHP_SELF'];

     */ 
    
    /*
     ze server nia kaj kori tar web location ber korar jonn.
     echo $_SERVER['SERVER_NAME'];Llikte hoy.

    //echo $_SERVER['SERVER_NAME'];
    */
      
       /*
    full server er location  ber korar jonno likbo
    //echo $_SERVER['SCRIPT_NAME'];
    */
   /*
   Kon browser use kori ta ber korar jonno
    //echo $_SERVER['HTTP_USER_AGENT'];
    */

    // Kno server er ip address ber korte use kori.
    echo $_SERVER['SERVER_ADDR'];
      ?>
        </section>
 
 
 <section class="footeroption">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>
</div>
</body>








</html>