<?php 
$fonts="verdana";
$errfullname = $erremail = $errwebsite = $errgender = "";

       /*
       //$errfullname = $erremail = $errnumber = $errgender = "";
  ei line use korlam required message zate dekai or show kor,
  ar ei line ta ei kane likle niche  lika lagbe na.
       */

?>


<?php 
       //define variables and set to empty values.

       
    
       /*
       //$errfullname = $erremail = $errnumber = $errgender = "";
  ei line use korlam required message zate dekai or show kore,
  ar ei line ta ei kane likle upore lika lagbe na.
       */
       $fullname= $email = $website= $comment = $gender="";

       if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST["name"])) {
        
            $errfullname = "<span style='color:red'>Name is required.</span>";
          }
            else {
            $fullname = validate($_POST["name"]);
                 }

                 /*
                 
        if(empty($_POST["name"])) {
        
            $errfullname = "<span style='color:red'>Name is required.</span>";
          }
            else {
            $fullname = validate($_POST["name"]);
                 } 

                 ei condison use korar mane hoylo name na like submit dile show korbe ze name likar jonno name required.
                 lal show kor jonno style korlam zate <span> tag er maje and <p> tag use kori nai brack spase nei bole.

                 

                 */

     if(empty($_POST["email"])) {
        
          $erremail = "<span style='color:red'>E-mail is required.</span>";
           }

           elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {

            $erremail = "<span style='color:red'> Invalid E-mail format.</span>";

        }
        /*
         elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {

            $erremail = "<span style='color:red'> Invalid E-mail format.</span>";

        }

        ei codison ta use kora hoyce email jodi vul vabe likhi or email er jonno za lage ta na dei ta invalid dekai be.
        same vabe ei condison ta onno gula te use korte pari,name,website..ect takle sei ta die hobe sudu.




        */
         else {
             $email = validate($_POST["email"]);
             }

             if(empty($_POST["website"])) {
        
                $errwebsite = "<span style='color:red'>Website is required.</span>";
              }
              elseif(!filter_var($_POST["website"],FILTER_VALIDATE_URL)) {

                $errwebsite = "<span style='color:red'> Invalid website format.</span>";
    
            }
                
              else {
                $website = validate($_POST["website"]);
                     }        
        
        
        
                     if(empty($_POST["gender"])) {
        
                        $errgender = "<span style='color:red'>Gender is required.</span>";
                      }
                        else {
                        $gender = validate($_POST["gender"]);
                             }
       $comment = validate($_POST["comment"]);
       
       
       
       
       }
       function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

       }
      ?>


<?php
      echo "<h2> Your Input:</h2>";
      echo $fullname;
      echo "<br>";
      echo $email;
      echo "<br>";
      
      echo $website;
      echo "<br>";
      echo $comment;
      echo "<br>";
      echo $gender;
      

      ?>



<!doctype html>
<html>
<head>
    <title>PHP </title>
    <style>
    .phpcoding{width:1000px;height:700px ; margin:0 auto;background:<?php echo"#ddd" ?>}
    .header{
    width: 115%;
    text-align: center;
    height: 70px;
    background-color: gray;
    color:green;
    padding: 6px;
    margin: 0;
   }
   .body{font-family:<?php echo $fonts;?>}
    
    
    .maincontent{min-height: 500px;padding:20px;}

    .footer{
    width: 115%;
    height: 80px;
    background-color:gray;
    color:green;
    padding: 6px;
   text-align: center;
   margin: 0;
}
    


     </style>
        </head>
<body>
    <div class="phpcoding">
        <section class="header">
            <h2>PHP validation<h2>
        </section>
        <section class="maincontent">
     
      <h2>Form validation </h2>
      <p style="color:red">Required field </p>
      <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      name:<input type="text" name="name">* <?php echo $errfullname; ?>
      <br> <br>
      E-mail:<input type="text" name="email">*<?php echo $erremail; ?>
      <br> <br>
      website:<input type="text" name="website">*<?php echo $errwebsite; ?>
      <br> <br>
      
      Comment:<textarea name="comment" rows="10" cols="30"></textarea>
      <br> <br>
      Gender:
      <input type="radio" name="gender" value="male">Fmale
      <input type="radio" name="gender" value="fmale">Male
      *<?php echo $errgender; ?>
      <br> <br>
      <input type="submit" name="submit" value="Submit">
      </form>

      
        </section>
 
 
 <div class="footer">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</div>
</div>
</body>








</html>