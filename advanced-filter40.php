


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
        
            
            <h2>Advanced Filter PHP</h2>
           <hr/>
           <br>
           <br>
                
           <?php

           
           $intnum = 300;
           $min  = 1;
           $max  = 200;

           if(filter_var($intnum, FILTER_VALIDATE_INT,array("options" => array("min_range" =>$min, "max_range"=>$max)))){
 
             echo "It is a valid range";
 
           } 
           else {
             echo "It is a not valid range";
             
           }

           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>