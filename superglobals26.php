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

        1.PHP superglobals   [$_REQUEST & $_POST]
        <hr/>

   
     3. $_REQUEST
     4. $_POST
    
        <hr/>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?> "method="post">
        
            
        Username: <input type="text" name="username"/>
            
            <input type="submit" value="Submit"/>
   </from>
   <hr/>

       <?php
  /*html er maje <from> er vitore 2 ta method nilam.
  action ar method, 
  kono jinis dorte hoyle amra jani kmne likbo tai.
  // $_SERVER['PHP_SELF'] nilam. ei print korte hoybe tai echo korlam and php code er mode liklam.

*/
   
  /* if condison dia  data ta dorbo tar jonno $_SERVER["REQUEST_METHOD"]=="POST"; likte  hobe.

     method ta jodi post hoy taile  $_REQUEST['username']; likbo.
     tar por ekta condison use korlam
     kali takle ki dekai be. tar jonno likte hobe

     if(empty($name)){
            
            echo "<span style='color:red'> Username field must not be empty !</span>";
     }
     kali na takle ki dekai be.tar jonno likte hobe.

     else {
                echo "<span style='color:green'>You have submitted:".$name."</span>";
          }
       
    */
       if($_SERVER["REQUEST_METHOD"] =="POST"){

       // $name = $_POST['username']; like dileo same kaj korbe.
         $name = $_REQUEST['username'];  

        if(empty($name)){
            
            echo "<span style='color:red'> Username field must not be empty !</span>";
        
        }

          else {
                echo "<span style='color:green'>You have submitted:".$name."</span>";
          }
       }
     

      ?>
        </section>
 
 
 <section class="footeroption">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>
</div>
</body>








</html>