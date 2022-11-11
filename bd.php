<!doctype html>
<html>
<head>
    <title>PHP Syntax</title>
    <style>
        .phpcoding{width:1000px; margin:0 auto;background:<?php echo"#ddd" ?>;}
        .headeroption, .footeroption{#444;color:green;text-align:center;padding:20px;}
        .maincontent{min-height: 600px;}
        .headeroption h2,.footeroptio h2{margin: 0;padding: 20px;}


     </style>
        </head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2>PHP Fundamentals<h2>
        </section>
        <section class="maincontent">

        1.PHP Form Validation
        <hr/>
     <from method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <!-- ei kane htmlspecialchars  use kora hoyce and ($_SERVER['PHP_SELF']); ke backet maje raka hoyce secur korar jonno hacker der kas taika.  -->
     <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" required="1" /></td>
         <!-- requided="1" dewa hoyce mane ek ta auto message dekai be filab kprar jonno  -->
        </tr>
        <tr>
            <td>E-mail:</td>
            <td><input type="text" name="email" required="1"/></td>
        </tr>
        <tr>
            <td>Website:</td>
            <td><input type="text" name="website" required="1"/></td>
        </tr>
        
        
        <tr>
            <td>Comment:</td>
            <td><textarea name="comment" rows="5"cols="40"></textarea></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="male"/>Male
                <input type="radio" name="gender" value="fmale"/>Fmale
            </td>
            
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"name="name" value="Submit"/> </td>
        </tr>
       </table>

     </from>
    
     
    
<br/>
     

     <hr/>
    
 
       <?php 
       $name= $email= $age = $comment = $gender ="";
       if($_SERVER["REQUEST_METHOD"] == "POST"){
          
        $name       =  validate($_POST["name"]);
        $email      =  validate($_POST["email"]);
        $age    =     validate($_POST["age"]);
        $comment    =  validate($_POST["comment"]);
        $gender     =  validate($_POST["gender"]);
      
           //sob gula ke ekhon() echo " ";) korlam.
          echo "Name:".$name."<br/>";
          echo "E-mail:".$email."<br/>";
          echo "age:".$age."<br/>";
          echo "Comment:".$comment."<br/>";
          echo "Gender:".$gender;
        
       }
      function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data); 
        return $data;
       

        /* fast e data gula dorar jonno if condison er mardome 
        ($_SERVER[REQUEST_METHOD]=="POST") hoy tobe.  alada alada kore sob  gula 
        value  ke dorar jonno ($_POST['']) korlam.
        tar pore value gula ke or data gula ke secure korar jonno
        arek ta function nilam and vale hisabe 'Validate($data)' e raklam.
        tar por abr sei 'Validate($data)' ke 'trim($data)' e raklam. secure korar jonno.
        tar por abr sei 'trim($data)' ke secure korar jonno rakam 'htmlspecialchars($data)' e raklam.
       tar por data ke return kore dilam (return $data). 
  
        */

      }
      


      
      ?>
        </section>
 
 
 <section class="footeroption">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</section>
</div>
</body>








</html>