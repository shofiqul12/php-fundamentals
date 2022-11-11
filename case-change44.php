


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
        
            
            <h2>PHP Case Change</h2>
           <hr/>
           <br>
           <br>
                
           <?php

            if(isset($_POST['text'])) {
            global $txt;
            $txt = $_POST['text'];
            echo strtoupper ($txt);

            // upor case korar jnno "strtoupper" dilam,letter gula kon pormet e likha hobe ,
           // echo strtolower ($txt);
           //lower case korar jonno "strtolower" dite hoy,mane letter gula kmn hobe,
           
          //echo ucfirst ($txt); dilam fast letter capital then normal vabe baki gula hoy,
           //echo ucwords($txt);dilam taile pottek word er fast letter capital kore dei,small letter likleo.
    }

         

           ?>

           <form action="case-change44.php" method="post">

           <!--case-change44.php; dilam ei kane tar mane print kore ei page ei daka be tai.onno page er location dile onno jaigai dekaibe,zokhon my squal,data base ,other pager location dibo sei zaigai print hobe lekha gula. -->
           <input type="text" name="text" value="<?php global $txt; echo $txt; ?>"/>
           <input type="submit" value="Submit"/>
           
           </form>

           <br/>

           
           
          
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>