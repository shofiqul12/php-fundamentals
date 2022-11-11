<?php
session_start();
setcookie('visited',"",time()-3600);

?>


<!DOCTYPE html>
<html>
    <head> 
        <title>index</title> 
        <style>
            
#body{
    background-color: gray;
}
#header{
    width: 115%;
    height: 70px;
    background-color:green;
    color:white;

}

#footer{
    width: 115%;
    height: 80px;
    background-color:green;
    color:white;

}

       </style>
    </head> 
    <body>
         
            <div id="header" align="center"><h2>PHP Fundamentals</h2></div>
            <span style="float:right">
                <?php
                date_default_timezone_set("Asia/Dhaka");
                echo "Time:".date("h:i:sa");
                ?>
             </span>
        
            
            <h2>PHP COOKIE</h2>
           <hr/>
           <br>
           <br>
                
           <?php
           /*
           Cookies hoylo user identiti,
           setcookies:(name,value,expire,path,domain.secure,httponly); er maje 'name' ta hoylo dormantory ar baki gula hoylo opsonal.
           name= ta hoylo cookie er name.
           value= cookie er maje ze information dei tai ta hoylo value.
           expire= cookier maje ze time set deowa hoy sei ta,
           path=domain er sorbocho tor taika data gula patanu jaibe sei hoylo path.
           secure= secure er jonno 0,1 use kora hoy,secure connection korte chaile 1 use kora hoy.
           httponly= mane hoylo true or false set kore dei,
           */
          if(!isset($_COOKIE['visited'])) {

            setcookie("Visited","1",time()+86400, "/") or die("Could not set cookie !");
            
            echo "This is your first visit in this website."; 

           }  


           else {

                echo "You are our old visitor."; 

              }
              /*
              cookie set korar jonno use korlam,
              ar delet korte chaile 
              if(!isset($_COOKIE['visited'])) {

            setcookie("Visited","1",time()+86400, "/") or die("Could not set cookie !");
            
            echo "This is your first visit in this website."; 

           }  


           else {

                echo "You are our old visitor."; 

              }
              bad dia 
              // echo "Cookies deletsd";
 likte hobe and oporer maje
 //setcookie('visited',"",time()-3600); like dite hobe kokhon delet hoybo.


              */
           
           //echo "Cookies deletsd";

           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>