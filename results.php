<?php
header('Content-Type: text/html; charset=utf-8');
?>
<link rel="Stylesheet" type="text/css" href="template.css">

<!--<script>

var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
var grd = ctx.createLinearGradient(0, 0,400, 0);
grd.addColorStop(0, "white");
grd.addColorStop(0.3, "red");
grd.addColorStop(1, "white");
ctx.fillStyle = grd;
ctx.fillRect(20, 40, 100, 150);

</script>
-->

<div id="wrapper">
<?php



$userid = $_SESSION['userid'];
$theseNR = 3;
$qid = 1;
$lang = 1;
$groupName = "Gruppe 1";

//$these = getAnswer($qid,$lang,$con,$userid);


?>
<div id=title>

<h2>These Nr. <?php echo $theseNR . ": ";


"</h2>";
echo $these;
"<br>";
?>

</div>
<div id=background>
<!--Zeichnet den Hintergrund der oberen Box auf denen sich die oberen Balken befinden-->
<canvas id="backgroundRect" width="1300" height="120" style="border:2px solid #000000;"></canvas>
  
    <script>
    //Die Variablen werden vergeben für die Canvas ID "backgroundRect"
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      //Zeichnet das Rechteck
      context.beginPath();
      context.rect(0, 0, 1300, 120);
      context.fillStyle = 'white';
      context.fill();
      
      /*Zeichnet die Linie
      context.lineWidth = 2;
      context.strokeStyle = 'black';
      context.beginPath();
      context.moveTo(500, 0);
      context.lineTo(500, 300);
      context.stroke();
      */
    </script>
    <!-- Dieses Erste Script ist für den Deutschen Balken -->
    <script>
      //Variablen für die Länge der Balken werden definiert
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');
      
      var answer = 5;
      var barStart;
      var barEnd;
      var standardAbweichung = 2.4;
      
      
      var barA = answer-standardAbweichung;
      var barB = answer+standardAbweichung;
      var mittelwert = standardAbweichung/10;
      
      if(barA < 1)
      {
          barA = 1;
      }
      else
      {
          barA = barA;
      }
      if(barB > 10)
      {
          barB = 10;
      }
      else
      {
          barB = barB;
      }
      //Die Switch Abfrage für den Anfang der Balken 
      switch(barA){
        
        case 0-0.49:
            barStart = 0;
            break;
        case 0.5-1.49:
            barStart = 100;
            break;
        case 1.5-2.49:
            barStart = 200;
            break;
        case 2.5-3.49:
            barStart = 300;
            break;
        case 3.5-4.49:
            barStart = 400;
            break;
        case 4.5-5.49:
            barStart = 500;
            break;
        case 5.5-6.49:
            barStart = 600;
            break;
        case 6.5-7.49:
            barStart = 700;
            break;
        case 7.5-8.49:
            barStart = 800;
            break;
        case 9.5-10:
            barStart = 900;
            break;
    }
    /*
    switch(barA){
        
        case 0-0.49:
            barStart = 0;
            break;
        case 0.5-1.49:
            barStart = 100;
            break;
        case 1.5-2.49:
            barStart = 200;
            break;
        case 2.5-3.49:
            barStart = 300;
            break;
        case 3.5-4.49:
            barStart = 400;
            break;
        case 4.5-5.49:
            barStart = 500;
            break;
        case 5.5-6.49:
            barStart = 600;
            break;
        case 6.5-7.49:
            barStart = 700;
            break;
        case 7.5-8.49:
            barStart = 800;
            break;
        case 9.5-10:
            barStart = 900;
            break;
    }
    */
    //Die Switch Abfrage für das Ende der Balken 
    switch(barB){
        
        case 1:
            barEnd = 100;
            break;
        case 2:
            barEnd = 200;
            break;
        case 3:
            barEnd = 300;
            break;
        case 4:
            barEnd = 400;
            break;
        case 5:
            barEnd = 500;
            break;
        case 6:
            barEnd = 600;
            break;
        case 7:
            barEnd = 700;
            break;
        case 8:
            barEnd = 800;
            break;
        case 9:
            barEnd = 900;
            break;
        case 10:
            barEnd = 1000;
            break;
    }
    
    
      //Zeichnet das Rechteck
      /*context.beginPath();
      context.rect(barStart, 40, barEnd, 40);
      context.fillStyle = 'orange';
      context.fill();*/
      var gradAdd = 0.3;
      var gradStart = mittelwert+gradAdd;
      var gradEnd = mittelwert-gradAdd;
      
      if(gradStart < 0)
      {
          gradStart = 0;
      }
      if(gradEnd > 1)
      {
          gradEnd = 1;
      }
            
      var grd = context.createLinearGradient(barStart, 40,barEnd, 40);
      grd.addColorStop(gradStart, "white");
      grd.addColorStop(mittelwert, "orange");
      grd.addColorStop(gradEnd, "white");
      context.fillStyle = grd;
      context.fillRect(barStart, 40, barEnd, 40);
      
      
  
      
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');
      
      context.font = '20pt Arial';
      context.textAlign = 'center';
      context.fillStyle = 'black';
      context.fillText("Benutzer", 1150, 70);
    </script>

    <!-- Dieses Script ist für den polnischen Balken -->
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');
      
      var answer = 9;
      var barStart;
      var barEnd;
      var standardAbweichung = 4;
      var mittelwert = standardAbweichung/10;
      
      var barA = answer-standardAbweichung;
      var barB = answer+standardAbweichung;
      
      if(barA < 1)
      {
          barA = 1;
      }
      else
      {
          barA = barA;
      }
      if(barB > 10)
      {
          barB = 10;
      }
      else
      {
          barB = barB;
      }
      
      switch(barA){
        
        case 1:
            barStart = 0;
            break;
        case 2:
            barStart = 100;
            break;
        case 3:
            barStart = 200;
            break;
        case 4:
            barStart = 300;
            break;
        case 5:
            barStart = 400;
            break;
        case 6:
            barStart = 500;
            break;
        case 7:
            barStart = 600;
            break;
        case 8:
            barStart = 700;
            break;
        case 9:
            barStart = 800;
            break;
        case 10:
            barStart = 900;
            break;
    }
    
    switch(barB){
        
        case 1:
            barEnd = 100;
            break;
        case 2:
            barEnd = 200;
            break;
        case 3:
            barEnd = 300;
            break;
        case 4:
            barEnd = 400;
            break;
        case 5:
            barEnd = 500;
            break;
        case 6:
            barEnd = 600;
            break;
        case 7:
            barEnd = 700;
            break;
        case 8:
            barEnd = 800;
            break;
        case 9:
            barEnd = 900;
            break;
        case 10:
            barEnd = 1000;
            break;
    }

      /*Zeichnet das Rechteck
      context.beginPath();
      context.rect(barStart, 130, barEnd, 40);
      context.fillStyle = 'red';
      context.fill();*/
      
      var gradAdd = 0.3;
      var gradStart = mittelwert+gradAdd;
      var gradEnd = mittelwert-gradAdd;
      
      if(gradStart < 0)
      {
          gradStart = 0;
      }
      if(gradEnd > 1)
      {
          gradEnd = 1;
      }
      
      var grd = context.createLinearGradient(barStart, 130,barEnd, 40);
      grd.addColorStop(gradStart, "white");
      grd.addColorStop(mittelwert, "red");
      grd.addColorStop(gradEnd, "white");
      context.fillStyle = grd;
      context.fillRect(barStart, 130, barEnd, 40);
      
      
      
    </script>
    <!-- Das ist das Script für den Balken für andere Teilnehmer.  -->
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');
      context.font = '20pt Arial';
      context.textAlign = 'center';
      context.fillStyle = 'black';
      context.fillText('Polish', 1150, 160);
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');
      
      var answer = 8;
      var barStart;
      var barEnd;
      var standardAbweichung = 4;
      var mittelwert = standardAbweichung/10;
      
      var barA = answer-standardAbweichung;
      var barB = answer+standardAbweichung;
      
      if(barA < 1)
      {
          barA = 1;
      }
      else
      {
          barA = barA;
      }
      if(barB > 10)
      {
          barB = 10;
      }
      else
      {
          barB = barB;
      }
      
      switch(barA){
        
        case 1:
            barStart = 0;
            break;
        case 2:
            barStart = 100;
            break;
        case 3:
            barStart = 200;
            break;
        case 4:
            barStart = 300;
            break;
        case 5:
            barStart = 400;
            break;
        case 6:
            barStart = 500;
            break;
        case 7:
            barStart = 600;
            break;
        case 8:
            barStart = 700;
            break;
        case 9:
            barStart = 800;
            break;
        case 10:
            barStart = 900;
            break;
    }
    
    switch(barB){
        
        case 1:
            barEnd = 100;
            break;
        case 2:
            barEnd = 200;
            break;
        case 3:
            barEnd = 300;
            break;
        case 4:
            barEnd = 400;
            break;
        case 5:
            barEnd = 500;
            break;
        case 6:
            barEnd = 600;
            break;
        case 7:
            barEnd = 700;
            break;
        case 8:
            barEnd = 800;
            break;
        case 9:
            barEnd = 900;
            break;
        case 10:
            barEnd = 1000;
            break;
    }

      /*Zeichnet das Rechteck
      context.beginPath();
      context.rect(barStart, 220, barEnd, 40);
      context.fillStyle = 'blue';
      context.fill();
      */
      
      var gradAdd = 0.3;
      var gradStart = mittelwert+gradAdd;
      var gradEnd = mittelwert-gradAdd;
      
      if(gradStart < 0)
      {
          gradStart = 0;
      }
      if(gradEnd > 1)
      {
          gradEnd = 1;
      }
      
      var grd = context.createLinearGradient(barStart, 220,barEnd, 40);
      grd.addColorStop(gradStart, "white");
      grd.addColorStop(mittelwert, "blue");
      grd.addColorStop(gradEnd, "white");
      context.fillStyle = grd;
      context.fillRect(barStart, 220, barEnd, 40);
      
      
    </script>
    <!--Other Text-->
    <script>
    var canvas = document.getElementById('backgroundRect');
    var context = canvas.getContext('2d');
      context.font = '20pt Arial';
      context.textAlign = 'center';
      context.fillStyle = 'black';
      context.fillText('Other', 1150, 250);
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(100, 0);
      context.lineTo(100, 300);
      context.lineWidth = 0.3;

      // set line color
      context.strokeStyle = '#000000';
      context.stroke();
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(200, 0);
      context.lineTo(200, 300);
      context.lineWidth = 0.3;

      // set line color
      context.strokeStyle = '#000000';
      context.stroke();
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(300, 0);
      context.lineTo(300, 300);
      context.lineWidth = 0.3;

      // set line color
      context.strokeStyle = '#000000';
      context.stroke();
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(400, 0);
      context.lineTo(400, 300);
      context.lineWidth = 0.3;

      // set line color
      context.strokeStyle = '#000000';
      context.stroke();
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(500, 0);
      context.lineTo(500, 300);
      context.lineWidth = 0.3;

      // set line color
      context.strokeStyle = '#000000';
      context.stroke();
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(600, 0);
      context.lineTo(600, 300);
      context.lineWidth = 0.3;

      // set line color
      context.strokeStyle = '#000000';
      context.stroke();
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(700, 0);
      context.lineTo(700, 300);
      context.lineWidth = 0.3;

      // set line color
      context.strokeStyle = '#000000';
      context.stroke();
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(800, 0);
      context.lineTo(800, 300);
      context.lineWidth = 0.3;

      // set line color
      context.strokeStyle = '#000000';
      context.stroke();
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(900, 0);
      context.lineTo(900, 300);
      context.lineWidth = 0.3;

      // set line color
      context.strokeStyle = '#000000';
      context.stroke();
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(1000, 0);
      context.lineTo(1000, 300);
      context.lineWidth = 2;

      // set line color
      context.strokeStyle = '#000000';
      context.stroke();
    </script>
    <!--Waagerechte Linien Orange-->
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(0, 39);
      context.lineTo(1300, 39);
      context.lineWidth = 2;

      // set line color
      context.strokeStyle = 'orange';
      context.stroke();
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(0, 81);
      context.lineTo(1300, 81);
      context.lineWidth = 2;

      // set line color
      context.strokeStyle = 'orange';
      context.stroke();
    </script>
    
    <!--Waagerechte Linien Rot-->
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(0, 129);
      context.lineTo(1200, 129);
      context.lineWidth = 2;

      // set line color
      context.strokeStyle = 'red';
      context.stroke();
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(0, 171);
      context.lineTo(1200, 171);
      context.lineWidth = 2;

      // set line color
      context.strokeStyle = 'red';
      context.stroke();
    </script>
    
    <!--Waagerechte Linien Blau-->
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(0, 219);
      context.lineTo(1200, 219);
      context.lineWidth = 2;

      // set line color
      context.strokeStyle = 'blue';
      context.stroke();
    </script>
    <script>
      var canvas = document.getElementById('backgroundRect');
      var context = canvas.getContext('2d');

      context.beginPath();
      context.moveTo(0, 261);
      context.lineTo(1200, 261);
      context.lineWidth = 2;

      // set line color
      context.strokeStyle = 'blue';
      context.stroke();
    </script>
    </div>
<div id="votedButtons">  
<canvas id="voted1" width="98" height="30" margin-left="1"></canvas>
  
    <script>
      var canvas = document.getElementById('voted1');
      var context = canvas.getContext('2d');

      //Zeichnet das Rechteck
      context.beginPath();
      context.rect(0, 0, 98, 30);
      
      context.fillStyle = '#FFA200';
      context.fill();
    </script>
    <script>
      var canvas = document.getElementById('voted1');
      var context = canvas.getContext('2d');

      context.font = '20pt Arial';
      context.fillStyle = 'black';
      context.fillText('1', 42, 24);
    </script>
<canvas id="voted2" width="98" height="30"></canvas>
  
    <script>
      var canvas = document.getElementById('voted2');
      var context = canvas.getContext('2d');

      //Zeichnet das Rechteck
      context.beginPath();
      context.rect(0, 0, 98, 30);
      
      context.fillStyle = '#FFE100';
      context.fill();
    </script>
    <script>
      var canvas = document.getElementById('voted2');
      var context = canvas.getContext('2d');

      context.font = '20pt Arial';
      context.fillStyle = 'black';
      context.fillText('2', 42, 24);
    </script>
<canvas id="voted3" width="98" height="30"></canvas>
  
    <script>
      var canvas = document.getElementById('voted3');
      var context = canvas.getContext('2d');

      //Zeichnet das Rechteck
      context.beginPath();
      context.rect(0, 0, 98, 30);
      
      context.fillStyle = '#FFA200';
      context.fill();
    </script>
    <script>
      var canvas = document.getElementById('voted3');
      var context = canvas.getContext('2d');

      context.font = '20pt Arial';
      context.fillStyle = 'black';
      context.fillText('3', 42, 24);
    </script>
<canvas id="voted4" width="98" height="30"></canvas>
  
    <script>
      var canvas = document.getElementById('voted4');
      var context = canvas.getContext('2d');

      //Zeichnet das Rechteck
      context.beginPath();
      context.rect(0, 0, 98, 30);
      
      context.fillStyle = '#FFE100';
      context.fill();
    </script>
    <script>
      var canvas = document.getElementById('voted4');
      var context = canvas.getContext('2d');

      context.font = '20pt Arial';
      context.fillStyle = 'black';
      context.fillText('4', 42, 24);
    </script>
<canvas id="voted5" width="98" height="30"></canvas>
  
    <script>
      var canvas = document.getElementById('voted5');
      var context = canvas.getContext('2d');

      //Zeichnet das Rechteck
      context.beginPath();
      context.rect(0, 0, 98, 30);
      
      context.fillStyle = '#FFA200';
      context.fill();
    </script>
    <script>
      var canvas = document.getElementById('voted5');
      var context = canvas.getContext('2d');

      context.font = '20pt Arial';
      context.fillStyle = 'black';
      context.fillText('5', 42, 24);
    </script>
<canvas id="voted6" width="98" height="30"></canvas>
  
    <script>
      var canvas = document.getElementById('voted6');
      var context = canvas.getContext('2d');

      //Zeichnet das Rechteck
      context.beginPath();
      context.rect(0, 0, 98, 30);
      
      context.fillStyle = '#FFE100';
      context.fill();
    </script>
    <script>
      var canvas = document.getElementById('voted6');
      var context = canvas.getContext('2d');

      context.font = '20pt Arial';
      context.fillStyle = 'black';
      context.fillText('6', 42, 24);
    </script>
<canvas id="voted7" width="98" height="30"></canvas>
  
    <script>
      var canvas = document.getElementById('voted7');
      var context = canvas.getContext('2d');

      //Zeichnet das Rechteck
      context.beginPath();
      context.rect(0, 0, 98, 30);
      
      context.fillStyle = '#FFA200';
      context.fill();
    </script>
    <script>
      var canvas = document.getElementById('voted7');
      var context = canvas.getContext('2d');

      context.font = '20pt Arial';
      context.fillStyle = 'black';
      context.fillText('7', 42, 24);
    </script>
<canvas id="voted8" width="98" height="30"></canvas>
  
    <script>
      var canvas = document.getElementById('voted8');
      var context = canvas.getContext('2d');

      //Zeichnet das Rechteck
      context.beginPath();
      context.rect(0, 0, 98, 30);
      
      context.fillStyle = '#FFE100';
      context.fill();
    </script>
    <script>
      var canvas = document.getElementById('voted8');
      var context = canvas.getContext('2d');

      context.font = '20pt Arial';
      context.fillStyle = 'black';
      context.fillText('8', 42, 24);
    </script>
<canvas id="voted9" width="98" height="30"></canvas>
  
    <script>
      var canvas = document.getElementById('voted9');
      var context = canvas.getContext('2d');

      //Zeichnet das Rechteck
      context.beginPath();
      context.rect(0, 0, 98, 30);
      
      context.fillStyle = '#FFA200';
      context.fill();
    </script>
    <script>
      var canvas = document.getElementById('voted9');
      var context = canvas.getContext('2d');

      context.font = '20pt Arial';
      context.fillStyle = 'black';
      context.fillText('9', 42, 24);
    </script>
<canvas id="voted10" width="98" height="30" ></canvas>
  
    <script>
      var canvas = document.getElementById('voted10');
      var context = canvas.getContext('2d');

      //Zeichnet das Rechteck
      context.beginPath();
      context.rect(0, 0, 98, 30);
      
      context.fillStyle = '#FFE100';
      context.fill();
    </script>
    <script>
      var canvas = document.getElementById('voted10');
      var context = canvas.getContext('2d');

      context.font = '20pt Arial';
      context.fillStyle = 'black';
      context.fillText('10', 34, 24);
    </script>
    
</div>
<br><br>
<!--Zeigt den Pfeil für die Auswahl des Benutzers an-->
<div id=yourChoiceArrowA >

<canvas id="yourChoiceArrow" width="1000" height="30" style="border:2px solid #000000;"></canvas>
  
    <script>
      var canvas = document.getElementById('yourChoiceArrow');
      var context = canvas.getContext('2d');

      //Zeichnet das Rechteck
      context.beginPath();
      context.rect(0, 0, 1000, 30);
      
      context.fillStyle = 'yellow';
      context.fill();
    </script>
    <script>
      var canvas = document.getElementById('yourChoiceArrow');
      var context = canvas.getContext('2d');

      
    </script>
    <script>
      var canvas = document.getElementById('yourChoiceArrow');
      var context = canvas.getContext('2d');
      
      var answer = 4;
      var choiceArrow = null;
    switch(answer){
        
        case 1:
            choiceArrow = 50;
            break;
        case 2:
            choiceArrow = 150;
            break;
        case 3:
            choiceArrow = 250;
            break;
        case 4:
            choiceArrow = 350;
            break;
        case 5:
            choiceArrow = 450;
            break;
        case 6:
            choiceArrow = 550;
            break;
        case 7:
            choiceArrow = 650;
            break;
        case 8:
            choiceArrow = 750;
            break;
        case 9:
            choiceArrow = 850;
            break;
        case 10:
            choiceArrow = 950;
            break;
    }
      
      
      var dif = 30;
      
      
      

      context.beginPath();
      context.moveTo(choiceArrow,2);
      context.lineTo(choiceArrow-dif,28);
      context.lineTo(choiceArrow+dif,28);
      context.globalAlhpa = 0.5;
      context.fillStyle = 'blue';
      context.fill();

    </script>
    
    

</div>
<div id=yourChoice >
<canvas id="yourChoiceA" width="1000" height="30" style="border:2px solid #000000;">
  <script>
      var canvas = document.getElementById('yourChoiceA');
      var context = canvas.getContext('2d');

      //Zeichnet das Rechteck
      context.beginPath();
      context.rect(0, 0, 1000, 30);
      
      
      </script>
      <script>
        var canvas = document.getElementById('yourChoiceA');
        var context = canvas.getContext('2d');
        context.font = '20pt Arial';
        context.fillStyle = 'black';
        context.fillText('Deine Antwort', 410, 24);
      </script>
</canvas>
</div>
<div id=userInfo >
    
    <?php
        echo "Results for user: " . $userid . "  <br><b>  These " . $theseNR . " of 24</b>";
        echo "<br><br>";
    ?>
    
    Klick here for the next these.
    <form>
        <input type="submit" value="Nächste Antwort">
    </form>
    
    
    
</div>
</div>
