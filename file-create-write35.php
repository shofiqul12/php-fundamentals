


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
         
            <div id="header" align="center"><h2> File Create & Write PHP</h2></div>
            <br>
           <br>
           <br>
           <br>
                
               <?php
               $createfile = fopen("new.txt","w") or die ("File not found !!");
               /*
               //$createfile = fopen("new.txt","w"); er dara ekta new file toidi kora hoye,
               new file toiri korte fast e ekta variable nilam $createfile name,
               tar por tar maje file ke open koar jonno fopen liklam,then 
               ze file ta toiri hobe sei file er name ta dilam er txt. liklam,
               ex: "new.txt"; new name ekta file toiri hoyce ,check korlei deka zaibe,
               */
               $one = "bdinsider360 vs md shofiqul islam\n";
               /*
               write korar jonno
               mane new file ze hoyce tar maje kno kisu likha dekaite hoyle 
               amr za korbo,
               ekta variable nibo tarmaje zai likbo tai show korbe new file er vitore,
               ex: $one = "bdinsider360 vs md shofiqul islam"; likam ,tai show korbe new file er vitore,
               file ta write korar jonno write ekta function ace tar jonno 
                fwrite($createfile,$one); likte hobe,
                mane fwrite("$createfile,$one"); file gula ze name sei ace sei gula.

               */
               fwrite($createfile,$one);
               

               $two = "MD SHOFIQUL ISLAM VS TAMIM";
               fwrite($createfile,$two);
               fclose($createfile);
               /*
               ek er bechi jodi file er vitore kisu likte chai same vabe nite hobe.
               $two = "MD SHOFIQUL ISLAM VS TAMIM";
               fwrite($createfile,$two);
               fclose($createfile);
               sudu za likbo ta dibo ar ze variable dibo sei ta change kore likbo.
               */
                 
               
               ?>
          

           
         
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>