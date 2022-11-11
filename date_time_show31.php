
<?php
$fonts = "verdana";
$bgcolor= "#444";
$fontcolor ="fff";


?>




<!doctype html>
<html>
<head>
    <title>PHP Syntax</title>
    <style>
        .phpcoding{width:900px; margin:0 auto;background:<?php echo"#ddd" ?>;}
        .headeroption, .footeroption{#444;color:green;text-align:center;padding:20px;}
        .maincontent{min-height: 400px;}
        .headeroption h2,.footeroptio h2{margin: 0;padding: 20px;}
        .p{margin:0;}

     </style>
        </head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2>PHP date-time show<h2>
        </section>
        <section class="maincontent">
            1.Date-Time Show
            <hr/>
            <span style="float:right">
            <!--  <span style="float:right"> ei use korlam konai show korar jonno. -->
       <?php 

     /*
     ei kane fast 2 line korlam konai dekaqnur jonno.

     */
     date_default_timezone_set("Asia/Dhaka");
     echo "Time:".date("h:i:sa");


   //echo "Today is:".date("d/m/Y")."<br/>";
   
   //echo "Today is:".date("l")."<br/>";
   //echo "Default Time is:".date("h:i:sa")."<br/>";

   //date_default_timezone_set("Asia/Dhaka");
   // echo "Bangladesh Time is:".date("h:i:sa")."<br/>";
   // echo date_default_timezone_get();
    /* 
    bangladesh er time zon ta dekai te use korlam.2 ta line.
    { date_default_timezone_set("Asia/Dhaka");
    echo "Bangladesh Time is:".date("h:i:sa")."<br/>";
    }
    kon jai gar somoy ta dekacce sei jonno use kolam
    //  echo date_default_timezone_get(); 
 ta sarao onk date er formet ace sei gula online taika lagle dake nite hobe.
    */
    /*
    date ze vabei dei sei vabe show korbe
    //echo "Today is:".date("D/M/Y"); ei vabe dile din ar month shoho dekai be.
   // echo "Today is:".date("d.m.y"); 
   //echo "Today is:".date("d-m-y");
   //echo "Today is:".date("d/m/Y"); 


    */
    
     
      ?>
        </section>
 
 
 <section class="footeroption">
<!-- ei  kane <p>&copy:<?php echo date("Y"); ?> Training with live project</p> deowa hoyce zate update year ta show kore or dekai. -->
    <p>&copy:<?php echo date("Y"); ?> Training with live project</p>
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>
</div>
</body>








</html>