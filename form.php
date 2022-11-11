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
       $fullname = test_input($_POST["name"]);
       $email = test_input($_POST["email"]);
       $number = test_input($_POST["number"]);
       $comment = test_input($_POST["comment"]);
       $gender = test_input($_POST["gender"]);
       $age = test_input($_POST["age"]);
       
       
       }
       function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

       }
      ?>
      <h2>Form validation </h2>
      <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      fullname:<input type="text" name="name">
      <br> <br>
      E-mail:<input type="text" name="email">
      <br> <br>
      Number(optional):<input type="text" name="number">
      <br> <br>
      Age:<input type="text" name="age">
      <br> <br>
      Comment:<textarea name="comment" rows="10" cols="30"></textarea>
      <br> <br>
      Gender:
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="fmale">Fmale
      <br> <br>
         <input type="submit" name="click here" value="click here">
      </form>

      <?php
      echo "<h2> Your Input:</h2>";
      echo $fullname;
      echo "<br>";
      echo $email;
      echo "<br>";
      echo $age;
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