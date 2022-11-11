

<?php include'header.php'; ?>
<!--<?php include'header.php'; ?> ei  line ta html er header.php  er maje za ace ta ei kan include korlam .mane arek file kno kisu raika sei ta onno file er sathe add korte use korte hoyle include er maje kora zai or Require mardome.

sei file ta name ei kane dite hoy same vabe.
file tar name heade.php dilam.

-->





<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2>PHP File Open/Read/Close<h2>
                <hr/>
        </section>
        <section class="maincontent">
            1.File Open/Read/Close
            <hr/>
            
       <?php 
       /* 
       //$ourfile = fopen("text2.txt","r") or die("File not found !!");
       ekta variable nilam $ourfile name tar maje function  fopen() name ek ta function nilam.
       fopen("text2.txt","r"); function er 2 ta pera mitar ace.1. text2.txt ekta pera mitar arek ta 2. "r".2 number tar moto same aro kisu 
       "w","a","x"...ei rokom aro pera mitar ace (php.net/manual/en/function.fopen.php) ei link taika or online   taika dake nite hobe dorkar  er somoy.
       or file ta na file die ki korbe tar jonno liklam 'or die("File not found !!");'

       //echo fread($ourfile,filesize("text2.txt"));

       ei kane fread file 2 ta pera mitar hoy, tar maje amra ze variable ta nilam sei ta  ekta raklam.abr (,) dia file er size ta ki name dilam sei ta  'filesize("textxt");' likte  hoy.
       tar por echo korlam ei file ta.
       
       
       // fclose($ourfile);
       
       tar por file ze nilam sei ta close kore dilam
       
       // ei code gula run korar somoy ei ta takbe ar ki.
       ei code run korar somoy ei tuk hongsho must like raun kor bo .tar por ze ta chai sei ta change kore dilei hobe.
        $ourfile = fopen("text2.txt","r") or die("File not found !!");

    
        echo fread($ourfile,filesize("text2.txt")); 
    


    fclose($ourfile);

     
       */

     

 //echo fread($ourfile,filesize("text2.txt"));
    //echo fgets($ourfile,filesize("text2.txt"));
    /*
    //echo fgets($ourfile,filesize("text2.txt"));
    ei line ta dile mane "fgets" likle freads er jaigai tokhon text2 er maje za lika ace tar maje fast line ta kali asbe.
    
    //echo fread($ourfile,filesize); dile sudu fast ze letter or number ta ace sei ta show korbe.
    */
    //echo fgetc($ourfile);
    $ourfile = fopen("text2.txt","r") or die("File not found !!");

    while(! feof($ourfile)) {
        echo fgets($ourfile)."<br/>"; 
    }


    fclose($ourfile);
    /*
    $ourfile = fopen("text2.txt","r") or die("File not found !!");

    while(! feof($ourfile)) {
        echo fgets($ourfile)."<br/>"; 
    }
    fclose($ourfile);
    //ei code bad dia baki coder jonno tokhon ei code likbo na, kebol ei code hobe er coder jonno.or ei tuk hongsher jonn.

    ei ta like sob file read kore mane za likchi ta sob dekabe mane ek ta ta show korbe.
    tar jonnoi // while(! feof($ourfile)) condison dia pore echo kore dilam. echo fgets($ourfile)."<br/>"; 

    //last za daklam ta hoylo ei code ta raiko kali fread,fgets dileo hoy,

    */
     
      ?>
        </section>
 
 <?php include'footer.php'; ?>
 <!--< ?php include'footer.php'; ?> ei  line ta html er header.php  er maje za ace ta ei kan include korlam .mane arek file kno kisu raika sei ta onno file er sathe add korte use korte hoyle include er maje kora zai or Require mardome.

sei file ta name ei kane dite hoy same vabe.
file tar name footer.php dilam.
footer.php name ekta file ace sei ta include korbe ei kane.
require use korle file kno vul hoyle sei zaiga  porjon to show korte pare tar pore mane zei kane vul hoyce tar porer gula ar dekai be na.
kintu include dile ze zai gai vul hoyce sei zai ga dekai be and vuler pore za ace tao dekai be or show kore dibe.
tai include use kora vlo.

-->