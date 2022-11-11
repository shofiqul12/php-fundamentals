


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
        
            
            <h2>PHP FILTERS</h2>
           <hr/>
           <br>
           <br>
                
           <?php
          
          /*
           $str = "<h2>I am Learing PHP </h>";
           $newstr = filter_var($str ,FILTER_SANITIZE_STRING);
           echo $newstr;
           // fast ekta variable nia tate html tag mage kisu likam .tai filter korlam zate html tag na ace $newstr er maje za lichi.then echo korlam. 
           same vabe url,email,int number,ect check korte pari.
          */
          /*
           
          $email = "shofiqul327@gmail.com";
          $email = filter_var($email,FILTER_VALIDATE_EMAIL);

          if (filter_var($email,FILTER_VALIDATE_EMAIL)){

            echo "$email is a corret valid address";

          } 

          else {
            echo "$email is not valid address";
          }
          */

          $ip = "127.0.0.1";
          $ip = filter_var($ip,FILTER_VALIDATE_IP);

          if (filter_var($ip,FILTER_VALIDATE_IP)){

            echo "$ip is a corret valid ip address";

          } 

          else {
            echo "$ip is not valid ip address";
          }

        
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>