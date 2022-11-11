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
            1.functions
            
            <hr/>
       <?php 
      //user defends function
  /*
      
      function school($name,$year) {
        echo "$name is the best school started $year<br/>";

       } 
       school("kishoreganj govt boys high school","2000");
       school("kishoreganj govt bd insidee 360","2005");
       school("kishoreganj dhaka bd","2010");
       school("kishoreganj govt office","2015");
       */
     
    //jokhon kono valu paibe school()er maje sei ta echo $name er maje dia dibe.
    //jokhon kono valu paibe na school() er maje tokhon defol vale $name = 'my school' sei ta hobe . za dei...$name= er zaigai.
    /*
    function school($name="my school") {
        echo "$name is good<br/>";

       } 
       school("kishoreganj govt boys high school");
       school();
       school("kishoreganj govt bd insidee 360");
       school("kishoreganj dhaka bd",);
       school("kishoreganj govt office");
       */
      /*
      function sum($x, $y){
        $z = $x+$y;
        return $z;
      }
      echo "5+10=".sum(5,10);
      */
      function multiply($a, $b) {
        $z=$a * $b;
        return $z;

      }
      echo "3*5=".multiply(3,5);
      ?>
        </section>

 
 <section class="footeroption">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>?
</div>
</body>








</html>