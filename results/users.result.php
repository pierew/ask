<?php

$userResults = getResultOfUser($_GET['username']);
echo "Ergebnisse f&uuml;r Benutzer: <b>".$_GET['username']." <br></b>


<div id='antwortheader'>
<canvas id='antworten' width='999' height='30' style='border:1px solid #000000;'></canvas>
      <script>
        var canvas = document.getElementById('antworten');
        var context = canvas.getContext('2d');
  
        context.font='23 Arial';
        
        context.fillStyle='#FFA200';
        context.fillRect(0,0,999,30);
        context.fillText('Antworten',450,20);
  
      </script>
      <script>
        var canvas = document.getElementById('antworten');
        var context = canvas.getContext('2d');
  
        context.font='23 Arial';
        
        context.fillStyle='#000000';
        context.fillText('Antworten fuer: ". $_GET['username']. "',350,24);
  
      </script>
</div>";
?>
<?php
for ($i = 0; $i < sizeof($userResults); $i++) {
echo
"<link rel='Stylesheet' type='text/css' href='style.css'>
<div id=background>
<!--Zeichnet den Hintergrund der Box -->

  <canvas id='backgroundRect".$userResults[$i]['ask_question_idask_question']."' width='1200' height='100' style='border:1px solid #000000;'></canvas>
      <script>
        var canvas = document.getElementById('backgroundRect".$userResults[$i]['ask_question_idask_question']."');
        var context = canvas.getContext('2d');
        
        var my_gradient=context.createLinearGradient(0,0,1200,100);
        my_gradient.addColorStop(0,'red');
        my_gradient.addColorStop(0.7,'green');
        context.fillStyle=my_gradient;
        context.fillRect(0,0,1000,100);

        
  
      </script>
      <script>
        var canvas = document.getElementById('backgroundRect".$userResults[$i]['ask_question_idask_question']."');
        var context = canvas.getContext('2d');
        
        context.font='30 Arial';
        context.fillStyle='#000000';
        context.fillText('Frage Nr. " . $userResults[$i]['ask_question_idask_question'] . "',1015,62);
  
      </script>
      <script>
      
        
        var canvas = document.getElementById('backgroundRect".$userResults[$i]['ask_question_idask_question']."');
        var context = canvas.getContext('2d');
  
        //Zeichnet das X
        context.beginPath();
        context.moveTo(". $userResults[$i]['answer'] ."*100-100, 0);
        context.lineTo(". $userResults[$i]['answer'] ."*100, 100);
        context.lineWidth = 4;
  
        // set line color
        context.strokeStyle = '#ffffff';
        context.stroke();
  
        
      </script>
      
      <script>
      
        
        var canvas = document.getElementById('backgroundRect".$userResults[$i]['ask_question_idask_question']."');
        var context = canvas.getContext('2d');
  
        //Zeichnet das X
        context.beginPath();
        context.moveTo(". $userResults[$i]['answer'] ."*100-100, 100);
        context.lineTo(". $userResults[$i]['answer'] ."*100, 0);
        context.lineWidth = 4;
  
        // set line color
        context.strokeStyle = '#ffffff';
        context.stroke();
  
        
      </script>

      <script>
        var canvas = document.getElementById('backgroundRect".$userResults[$i]['ask_question_idask_question']."');
        var context = canvas.getContext('2d');
  
        context.beginPath();
        context.moveTo(100, 0);
        context.lineTo(100, 100);
        context.lineWidth = 0.5;
  
        // set line color
        context.strokeStyle = '#000000';
        context.stroke();
      </script>
      <script>
        var canvas = document.getElementById('backgroundRect".$userResults[$i]['ask_question_idask_question']."');
        var context = canvas.getContext('2d');
  
        context.beginPath();
        context.moveTo(200, 0);
        context.lineTo(200, 300);
        context.lineWidth = 0.5;
  
        // set line color
        context.strokeStyle = '#000000';
        context.stroke();
      </script>
      <script>
        var canvas = document.getElementById('backgroundRect".$userResults[$i]['ask_question_idask_question']."');
        var context = canvas.getContext('2d');
  
        context.beginPath();
        context.moveTo(300, 0);
        context.lineTo(300, 300);
        context.lineWidth = 0.5;
  
        // set line color
        context.strokeStyle = '#000000';
        context.stroke();
      </script>
      <script>
        var canvas = document.getElementById('backgroundRect".$userResults[$i]['ask_question_idask_question']."');
        var context = canvas.getContext('2d');
  
        context.beginPath();
        context.moveTo(400, 0);
        context.lineTo(400, 300);
        context.lineWidth = 0.5;
  
        // set line color
        context.strokeStyle = '#000000';
        context.stroke();
      </script>
      <script>
        var canvas = document.getElementById('backgroundRect".$userResults[$i]['ask_question_idask_question']."');
        var context = canvas.getContext('2d');
  
        context.beginPath();
        context.moveTo(500, 0);
        context.lineTo(500, 300);
        context.lineWidth = 0.5;
  
        // set line color
        context.strokeStyle = '#000000';
        context.stroke();
      </script>
      <script>
        var canvas = document.getElementById('backgroundRect".$userResults[$i]['ask_question_idask_question']."');
        var context = canvas.getContext('2d');
  
        context.beginPath();
        context.moveTo(600, 0);
        context.lineTo(600, 300);
        context.lineWidth = 0.5;
  
        // set line color
        context.strokeStyle = '#000000';
        context.stroke();
      </script>
      <script>
        var canvas = document.getElementById('backgroundRect".$userResults[$i]['ask_question_idask_question']."');
        var context = canvas.getContext('2d');
  
        context.beginPath();
        context.moveTo(700, 0);
        context.lineTo(700, 300);
        context.lineWidth = 0.5;
  
        // set line color
        context.strokeStyle = '#000000';
        context.stroke();
      </script>
      <script>
        var canvas = document.getElementById('backgroundRect".$userResults[$i]['ask_question_idask_question']."');
        var context = canvas.getContext('2d');
  
        context.beginPath();
        context.moveTo(800, 0);
        context.lineTo(800, 300);
        context.lineWidth = 0.5;
  
        // set line color
        context.strokeStyle = '#000000';
        context.stroke();
      </script>
      <script>
        var canvas = document.getElementById('backgroundRect".$userResults[$i]['ask_question_idask_question']."');
        var context = canvas.getContext('2d');
  
        context.beginPath();
        context.moveTo(900, 0);
        context.lineTo(900, 300);
        context.lineWidth = 0.5;
  
        // set line color
        context.strokeStyle = '#000000';
        context.stroke();
      </script>
      <script>
        var canvas = document.getElementById('backgroundRect".$userResults[$i]['ask_question_idask_question']."');
        var context = canvas.getContext('2d');
  
        context.beginPath();
        context.moveTo(1000, 0);
        context.lineTo(1000, 300);
        context.lineWidth = 2;
  
        // set line color
        context.strokeStyle = '#000000';
        context.stroke();
      </script>
      
  </div>
  ";}
?>
  <div id='votedButtons'>  
  <canvas id='voted1' width='98' height='30' margin-left='1'></canvas>
    
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
  <canvas id='voted2' width='98' height='30'></canvas>
    
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
  <canvas id='voted3' width='98' height='30'></canvas>
    
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
  <canvas id='voted4' width='98' height='30'></canvas>
    
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
  <canvas id='voted5' width='98' height='30'></canvas>
    
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
  <canvas id='voted6' width='98' height='30'></canvas>
    
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
  <canvas id='voted7' width='98' height='30'></canvas>
    
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
  <canvas id='voted8' width='98' height='30'></canvas>
    
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
  <canvas id='voted9' width='98' height='30'></canvas>
    
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
  <canvas id='voted10' width='98' height='30' ></canvas>
    
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


<br><br><br><br><br>