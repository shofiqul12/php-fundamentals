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
            1.sorting arrays

            
            <hr/>
       <?php 
     /*
       //alfabetik order e sorting,A-Z er maje ze letter gula age sei onu sare asbe name gula. 
       // sort er jaigai rsort($names); dillast er gula age hohe.last taika fast er dike asbe.
       //rsort dara revers kora bujai.

       $names = array("shofik","tamim","jihad","hamim","akbar");
       
       sort($names);
      
       $length = count($names);

       for( $i= 0; $i<$length; $i++){
        echo $names[$i];
        echo "<br/>";

       }
       
      */


      /*

      // neumerik call order e sorting
       // sort er jaigai rsort($names); dile bro gula age hohe then choto gula hobe.
       //rsort dara revers kora bujai.


        $names = array(35,20,5,10,40);
       sort($names);
      
       $length = count($names);

       for( $i= 0; $i<$length; $i++){
        echo $names[$i];
        echo "<br/>";
       }

       */


      
      $age = array("jamal"=> "20", "kamal"=> "5", "aslam"=>"15");
      
      ksort($age);

       foreach($age as $key => $value){

      echo "key = ".$key."value =".$value;

      echo "<br/>";

       }
       /*value(neumerik value ) ke dore amra sort kore chi asort($age) dichi.
      jodi key(kamal,jamal,aslam)alfabetik dore sort kori taile  ksort($age) dibo .

      */
      //asanding order e sort or asort kora.
      
      // array er sathe key,value dia takle foreach loop use korte hoy.
       
      
      
       
      ?>
        </section>
 
 
 <section class="footeroption">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>?
</div>
</body>








</html>