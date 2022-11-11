<?php 
$fonts="verdana";



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
       <?php 
       //define variables and set to empty values.
       $fullname= $email = $gender= $comment = $number=$age="";

       if($_SERVER["REQUEST_METHOD"] == "POST"){
       $fullname = validate($_POST["name"]);
       $email = validate($_POST["email"]);
       $number = validate($_POST["number"]);
       $comment = validate($_POST["comment"]);
       $gender = validate($_POST["gender"]);
       
       
       
       }
       function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

       }
      ?>
      <h2>Form validation </h2>
      <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      name:<input type="text" name="name">
      <br> <br>
      E-mail:<input type="text" name="email">
      <br> <br>
      number:<input type="text" name="number">
      <br> <br>
      
      Comment:<textarea name="comment" rows="10" cols="30"></textarea>
      <br> <br>
      Gender:
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="fmale">Fmale
      <br> <br>
      <input type="submit" name="submit" value="Submit">
      </form>

      <?php
      echo "<h2> Your Input:</h2>";
      echo $fullname;
      echo "<br>";
      echo $email;
      echo "<br>";
      
      echo $number;
      echo "<br>";
      echo $comment;
      echo "<br>";
      echo $gender;
      

      ?>

        </section>
 
 
 <div class="footer">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</div>
</div>
</body>








</html>