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

        1.variable scrope
        <hr/>
       <?php 


      $x=15;
      //function er baire variable nile zekno zauga taika acces korte parbo.
     function test1(){
        global $x;
        //bairer function kaj korar jonno global $x; likte hobe.

        $a=5;
        echo "$a";
        echo "<br/>";
        echo "acces from function test1 ".$x;
        //variable ta conkit kore dite hoy ".$x" ei vabe.
        //function er bairei variable acces korlam ei vabe.
        echo "<br/>";
     }
     function test2(){
        global $x;
        //bairer function kaj korar jonno global $x; likte hobe.

        $b=12;
        echo "$b";
        echo "<br/>";
        echo "acces from function test2".$x;
        //function er bairei variable acces korlam ei vabe.
     }
     test1();
     test2();

       
      ?>
        </section>
 
 
 <section class="footeroption">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>
</div>
</body>








</html>