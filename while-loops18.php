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
            1.while loop
            2.do while loop
            
            <hr/>
       <?php 
       
      //while loops
       $x= 1;

     while($x<=10){
        echo "this number is:$x <br/>"; 
        $x++;
        

     }
      //do while loops 
     /*
         $x= 1;
         do{
             echo "this is number:$x<br/>";
             $x++;

         }
             while($x<=9);

             */
            /* do while loop e fast e ekbar exucute kore falbe then check kore loops,
            jodi condison er taika value bro hoy tao fast e run kore.
             x er man jodi 15 hoyto taile fast e 15 exucute korto.
             then condison check korto jodio chek kore dakto man ta exucute er taika value bro tao kisu hoyto na,
             fast er value tai show korto tokhon ...exucute na korai.
             */

      



       
      ?>
        </section>
 
 
 <section class="footeroption">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>?
</div>
</body>








</html>