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
            5.logical op
            <hr/>
       <?php 
       $x=50;
       $y=30;
     //and,and ta amra && darao likthe pari.
     
      /*
       if($x==50 and $y==30){
        echo "Training with live project";
       }
       else{
        echo "wrong";
       }
       */
      //  2 tai sotti hoyte hobe condison,1 ta kinba 1 tao sotti na hole else za takbe tai hobe.
      //or
      /*
      if($x==50 or $y==60){
        echo "Training with live project";
       }
       else{
        echo "wrong";
       }

       */
        
       // ze kno ekta sotti hoylei hobe,2 tar ekta o sotti na hole else za takbe ta hobe.
    
       //xor
       if($x==50 xor $y==70){
        echo "Training with live project";
       }
       else{
        echo "wrong";
       }

       
     /* xor er kathe 2 tai sotti hote parbe na abr 2 tai mitha hoyte parbe na,ekta sotti hoyte hobe,taile if con.. ta hobe other hoyle else za takbe sei ta hobe .

     
      



       
      ?>
        </section>
 
 
 <section class="footeroption">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>?
</div>
</body>








</html>