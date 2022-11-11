
<?php
session_start();
// session suru korar jonno likte hobe "session_start();"

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
        
            
            <h2>PHP sessions</h2>
           <hr/>
           <br>
           <br>
                
           <?php

           $_SESSION['user']      = "bdinsider360";
           $_SESSION['password']  = "1234bd";
           /*
           $_SESSION[''] name ekta global variable nilam thar maje user name ekta value raklam = za bdinsider360.
          same  vabe ark ta session nia valu e raklam .tar por echo kore dilam.
          // session_unset(); dile tar por ar kisu show korbe na ,er age za ace ta dekai be 
          .// session_unset(); utaie dile sob show korbe, 

           */

           echo "Username is". $_SESSION['user']."<br/>";
          // session_unset();
           echo "Password is". $_SESSION['password'] ;

           session_destroy();
           // session suru korar por must shes kora vlo tai likte hobe "session_destroy();"
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>