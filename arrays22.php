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
            1.arrays

            
            <hr/>
       <?php 
      
          //1.index array $x=arrar(3,5,7) value deowa takbe
         /*
          $x= array(5,3,9,10,15);
          $length = count($x);

          for($i=0; $i<$length; $i++){
            echo $x[$i];
            echo "<br/>";

          }
          

          */

         // sob gula array ek sathe ei vabe print kore value ber kora zai.
          // echo count ($x); dara total array ber kora zai.

          /*
          jodi  check kori array kon pojochon eace taile
           echo $x[0]; likthe dilei 0 er pojison er array dekai be,same vabe baki gular ta dite hobe, 
          $x[0]=5;
          $x[1]=3;
          $x[2]=9;
          $x[3]=10;
          $x[4]=15;
         ei vabeo likte pari array gula ke.
          */
        //2.assocuitative array.tar jonno foreach loop use korte hobe.
        // assocuitative array khatte value gular sathe sathei man or length dewa hoye take."hasan"=>"25" ei vabe.
        

        /*
        $ages = array("karim"=>"20","hasan"=>"25","tamim"=>"30");
        
        $ages["karim"]="20";
        $ages["hasan"]="25";
        $ages["tamim"]="30";

        foreach($ages as $x => $value){

            echo "key = ".$x. ", value=".$value;
           // echo $x.",value=".$value; likleo hobe
            echo "<br/>";


        }
        


        
        */
         

          //3.maltydaimensonal array.arrary er maje array takbe.
          //shes er array te comma(,) takbe na.
          $cars = array(
            array("BMW",15,"insider"),
            array("Volvo",20,"shofik"),
            array("Saab",25,"tamim"),
            array("Manbo",30,"jihad")
          );
          //echo $cars[0][0];
          // array 0 pojison e ace "bmw" 0 pojison ace,15 ta 1 pojison e,"insider" ta 2 pojison e ace.
           
          //echo $cars[1][0];
          // array 1 pojison e ace "volvo" 0 pojison ace,20 ta 1 pojison e,"shofik" ta 2 pojison e ace.

          //echo $cars[2][2];
          // array 2 pojison e ace "saad" 0 pojison ace,25 ta 1 pojison e,"tamim" ta 2 pojison e ace.
         
          //echo $cars[3][1];
          // array 2 pojison e ace "manbo" 0 pojison ace,30 ta 1 pojison e,"jihad" ta 2 pojison e ace.
         
          for($row = 0; $row <3; $row++){
           //array gula ke row dara liklam ,arrray number 3,for lopp use kore,echo  paragrap kore "<p>row number </p>" dia liklam $row.
            echo "<p> Row Number $row </p>";

            echo "<ul>";
            // echo <ul>... </ul> er maje 2nd for loop use korlam colom er jonno.

            for($col = 0; $col <3; $col++){
            //array gula ke colom dara liklam ,arrray number 3,for lopp use kore,echo  list kore "<li>col </li>" dia liklam $col.
              echo "<li>".$cars[$row][$col]."</li>";
              //ze hetu <ul> nichi tai tar vitore  pore list <li> nite hobe, "<li>" (.$cars[$row][$col].)conkit korlam "</li>".

            }

            echo "</ul>";

          }
        
       
      ?>
        </section>
 
 
 <section class="footeroption">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>?
</div>
</body>








</html>