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
            1.switch statements
            
            <hr/>
       <?php 
       /*
       switch(n){
        case lable1:
        code execute if n=lable1;
        break;

        
        case lable2:
        code execute if n=lable2;
        break;

        
        case lable3:
        code execute if n=lable3;
        break;
        --------
        --------
        default;
        echo " ";

       }
       */

       $coding="java";

       switch($coding){
        case "html":
            echo "i love html";
            break;

                case "php":
                    echo "i lovd php";
                    break;

                    
                        case "java":
                            echo " i love bd insider 360";
                            break;
                            
                            defaul:
                            echo "i love programming";

       }



      



       
      ?>
        </section>
 
 
 <section class="footeroption">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>?
</div>
</body>








</html>