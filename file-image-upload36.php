


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
             <h2>File/image upload</h2>
           <hr/>

                
           <?php
           if(isset($_FILES['image'])){

            $filename = $_FILES['image']['name'];
            $filetmp  = $_FILES['image']['tmp_name'];
            move_uploaded_file($filetmp,"images/".$filename);
            echo "Image Uploaded Successfully";

           }


           /*
           ek ta condichon dibo jodi file ta pai tobe isset() name ekta function ace sei ta dibo,tar pore $_FILE['image']  ze file ace ta like dibo .
           tar por $filename nam e ekta variable nia 2 ta jinis rakbo tar jonno $_FILES['image']['name']; er vitore name dichi za nibo tar,
           tar pore abr $filetmp nam e ekta  variable nia 2 jinis rakbo,temporly ze copy uplod korbe tar jonno ei ta $_FILES['image']['tmp_name']; dite hobe  must,
            tar por ekta file agei toiri kore nila images name ,
            tar jonno move_uploaded_file($filetmp,"images/".filename); nite hobe ,fast e filetmp,ze name dichi tar name "images/" tar por dot(.) dia ze variable nichi tar name,$filename.
            tar pore echo kore dilam.
            echo "image uploaded successfully";

           ex: if(isset($_FILES[$image])){

            $filename = $_FILES['image']['name'];
            $filetmp = $_FILES['image']['tmp_name'];
            move_uploaded_file(filetmp,"images/".$filename);
             echo "image uploaded successfully";

           }



           */
           
           ?>
          

           
          <form method="POST" action="" enctype="multipart/form-data">
            <input type="file" name="image"/>
            <input type="submit" value="Submit"/>
           <!--ei kane 2 ta input value nilam,input type ki ta dilam ,tar por name ki hobe file er ta dilam
             2 input er jonno same vabei ta korlam,
             ei input gula nilam ta form function er maje bole dilam ki doroner method,acttion,enctype,hobe.
             ex:method="POST"
             ex:action="";or ei ta dileo hobe action=" < ?php echo $_SERVER["PHP_SELF"];"?>
             file nia  kaj kora hobe bole enctype dia nite hobe
             ex:multipart/form-data
            
            
           -->
           
          </form>
          <br>
           <br> 
          <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>