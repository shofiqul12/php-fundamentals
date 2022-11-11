


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
        
            
            <h2>PHP Explode Implode Function</h2>
           <hr/>
           <br>
           <br>
               
           <?php
           
           
           $mystr = "We are learning PHP";
           //print_r(explode (" ",$mystr));
           $str = explode (" ",$mystr);
           echo $str[0];
          // echo $str[1];
          // echo $str[2];
          // echo $str[2];

           /*
           explode function er 2 ta type take,1.delimiter 2.source sting.
           zar opor bitti kore vange te chaitake bole deli miter .
           kon ta ke vante chai se ta hoylo source ,
           //explode (" ",$mystr);
           ei kane (" ", $mystr ) space dia liklam,
           array e convert hoybe ki na ta dakte "print_r" dia check korlam,or ekta string value e raika alada vabe o korte pari,


           */


           
            
           /*
           <?php
           $mystr = array("We","are", "learning", "PHP");
           echo implode (", ",$mystr);
           ?>
          // ei kane  implode dara alada vabe kora zai s("") dobbol cutechon er maje coma akare print hoy,space dile space raika print

       */
           ?>

           
           
           
           
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>