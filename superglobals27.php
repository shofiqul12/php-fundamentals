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

        1.PHP superglobals   [$_GET]
        <hr/>

   
     5. $_GET
     
    
<br/>
     <a href="text.php?msg=Good&txt=Bye"> Sent Data</a>

     <hr/>
     <!-- 
   <a href="text.php?msg=Good&txt=Bye"> Sent Data</a> ei kane  ta likam.ei jonno 
   msg=Good&txt=bye ,ei ta  arek ta code er maje ,  mane arek ta page e  taika show korbe ei kan taika nia .
   sei code ta (text.php) name ace.
   sei kane 
   ($message = $_GET['msg']; 
   
  
    $word = $_GET['txt'];v)
    
     likchi  karon ei kanne ki likchi tai show korbe .sei kane tai bole dici.


   



   -->
     
 
       <?php 
   
      
      ?>
        </section>
 
 
 <section class="footeroption">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>
</div>
</body>








</html>