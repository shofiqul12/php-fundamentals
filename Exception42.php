



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
        
            
            <h2>PHP Exception</h2>
           <hr/>
           <br>
           <br>
                
           <?php

           function numCheck ($num) {

            if($num !=5) {

                throw new Exception("Number is not 5");
            
            }
            return true;
        }
            
            try {

                numCheck(3);
                echo "Yes you have done.";
            }

            catch(Exception $e) {

                echo "Error: ".$e->getMessage();

            }
           
           /*
           fast e ekta function toiri korlam 'function numCheck ($num)' ei functin maje ekta condicon dilam
            'if ($num > 1)'or if (!$num = 5) use korlam,onno condiocn o dite parbo.
             thon ekta exception show korbe tar jonno dilam 'throw new Exception("Number is not 5");'
             er maje kisu dakai te dilam "number is not 5" eccha korle onno kisu dite pari.
             tar por "return true" korlam.
             ekhon ekta try block nilam,ei kane ekta numcheck(3) dilam,
             tar por echo korlam,
             tar por jodi condicon sotti hoy taile try e asbe then cumcheck(3) ei condison sotti hoyle catch chole zabe 
              number is not 5 dekai be,
              ar jodi sotti na hoy tobe try er pore ze echo ace sei ta print korbe,
              'catch(Exception $e)' tara dorlam konta message show korbe
              tar por echo korlam.
             // echo "Error: ".$e->getMessage();
             konkatin bole (.),
              .$e->getMessage(); dara error ta ke dorie dilam.

           */
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>