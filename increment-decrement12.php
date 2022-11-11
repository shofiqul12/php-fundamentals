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
            1.arimetic operators
            2.assignment op
            3.comparison op
            4.increment/decrement op
            5.logical op
            6.string op
            7.array op
            <hr>
            4.increment/decrement op
            <hr/>
       <?php 
       
      
     $x=5;
     echo ++$x;
     // increment hole age manin valuer sarhe 1 juk kore real man ta dibe.
     /*echo $x++;
      echo "<br/>";
     echo $x;
     */
    /* jodi age $x++ dei tobe fast e manin valu 5 ei dibe tar por abr echo korle real value za hobe 6 ta dibe
     $x++ hoyle 2 bar echo korte hobe.
  */
       //decrement 
       // echo --$x;
       // decrement hole age manin valuer sarhe 1 biug kore real man ta dibe.
      
       /* jodi age $x-- dei tobe fast e manin valu 5 ei dibe tar por abr echo korle real value za hobe 4 ta dibe
     $x++ hoyle 2 bar echo korte hobe.

  */
      ?>
        </section>
 
 
 <section class="footeroption">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>?
</div>
</body>








</html>