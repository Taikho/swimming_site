<!DOCTYPE html>

<html>
 <head>
  <meta charset = "Utf-8">
  <meta name ="description" content="This site is for swimmers", content="pl">
     <link rel="stylesheet" href="style.css" type="text/css"/>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <title>swimmers</title>
     <script src ="/javasrcipt/kolorujtlo.js" type="text/javascript"></script>
     <script src ="/javasrcipt/timedate.js" type="text/javascript"></script>
     <script LANGUAGE = "Javascript">
     document.firstline = "Welcome to this page"
     </script>

 </head>
<body onload = "startclock()">
     <div id="zegarek"></div>
     <div id="data"></div>
     <script>
      document.open()
      document.write(document.firstline)
    document.open()
</script>
     
     
<?php
    
 $nr_indeksu = 151130;
 $nrGrupy = 5;

echo "Patryk Reweda $nr_indeksu grupa $nrGrupy <br></br>";
?>
     
     <FORM METHOD="POST" NAME"background">
     <INPUT TYPE="button" VALUE ="żółty" ONCLICK = "changeBackground('#FFF000')">
     </FORM>
     <h1><center> MY SWIMMING SITE </center> </h1>
     <hr1>
     <p1><center> <a href="index.html"> HOME </a> <tab1/> <a href="training_examples.html"> TRAINING EXAMPLES </a>
         <tab1/> <a href="Training_Films.html"> TRAINING FILMS </a> <tab1/> <a href="contact.html"> CONTACT </a> <tab1/>
         </center> </hr1>
     </p1>
     <p>
          <table>
    <tr>
    <th><img id="animacjaTestowa3" border = "0" src= "/photos/pobrane.jpg" </th>
    <th><img border = "0" src= "/photos/phelps2.png" width="300" height="168" </th> 
        <th> <center> Who Is Michael Phelps? </center> <i> Michael Phelps is an American swimmer who holds the record for the most Olympics medals won by any athlete at 28, including 23 gold medals and 13 individual golds. Phelps competed in his first Olympics at the age of 15, as part of the U.S. men's swim team. He was the first American male swimmer to earn a spot on five Olympic teams and also made history as the oldest individual gold medalist in Olympic swimming history at the age of 28.. </i> </th>
  </tr>
    <tr>
    <th><img id="animacjaTestowa1" border = "0" src= "/photos/phelps3.jpg" width="300" height="168" </th>
    <th><img border = "0" src= "/photos/phelps4.jpg" width="300" height="168" </th> 
        <th> <center> Early Life and Family </center> <i>Michael Fred Phelps was born on June 30, 1985, in Baltimore, Maryland. The youngest of three children, Phelps grew up in the neighborhood of Rodgers Forge. His father, Fred, an all-around athlete, was a state trooper and his mother, Debbie, was a middle-school principal. When Phelps' parents divorced in 1994, he and his sisters lived with their mother, with whom Phelps grew very close </i></th>
  </tr>
              
    </table> 
     <a href="michael.html">
     <img id="animacjaTestowa2" style = " margin-left: 40em; margin-top: -1em " 
          border="0" alt="Read-More" src="/photos/Read-More.png" width="100" height="100">
     </a>
     </p>
    
     <script>
     $("#animacjaTestowa1").on("click", function(){
         $(this).animate({
             width: "500px",
             opacity: 0.4,
             fontsize: "3em",
             boorderwidth: "10px"
         }, 1500); 
     });
    </script>       
    
     <script>
     $("#animacjaTestowa2").on({"mouseover" : function(){
         $(this).animate({
             width: 300
         }, 800);
     },
         "mouseout" : function() {
             $(this).animate({
                 width: 200
             }, 800);
         }
         });
        
    </script>
     
          <script>
     $("#animacjaTestowa3").on("click", function(){
         if (!$(this).is(":animated")){
            $(this).animate({
             width: "+=" + 50,
             height: "+=" + 10,
             opacity: "-=" + 0.1,
             duration: 3000
             }); 
          }
     });
    </script>
     
     

     
     
 </body>
</html>