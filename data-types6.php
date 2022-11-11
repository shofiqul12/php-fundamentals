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
            <h2>PHP variables<h2>
        </section>
        <section class="maincontent">
            1.string
            2.integer
            3.float
            4.boolean
            5.array
            6.object
            7.null
            8.resourse
            <br/>
            <hr/>
            1.string="shofik";
            <hr/>
            2.integer=23;
            <hr/>
            3.float=32.34;
            <hr/>
            4.boolean=true or false;
            <hr/>
            5.array=[3];
            <hr/>
            6.object= ;
            <hr/>
            7.null
            <hr/>
            8.resourse
            <hr/>



       <?php 

       //$a="php is nice";
       $a=null;
       var_dump($a);
       /*
       class student{
        function department() {
            return "physics";
        }
        function details() {
           echo  $this->department();
        
        }

       }
       $st=new student();
       $st->details ();

     */
      ?>
        </section>
 
 
 <div class="footer">
            <h2><?php echo "NSTU CSTE 13th"?><h2>
</div>
</div>
</body>








</html>