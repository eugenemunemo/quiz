<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i%7CPlayfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
 <!-- Bootstrap CSS File -->
 <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <!-- Libraries CSS Files -->
 <!--<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
 <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
 <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
 <link href="lib/hover/hover.min.css" rel="stylesheet">-->
 <!-- Main Stylesheet File -->
 <link href="css/styles.css" rel="stylesheet">

   <title>SENSE OF HUMOUR QUIZ</title>
 <head> zz
 
 
 <body class="w3-black" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
   <!--Avatar image in top left corner -->
  <img src="images/know.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>QUIZ</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PHOTOS</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>


<!--Navbar on small screens (Hidden on medium and large screens)-->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">QUIZ</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>




    

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->



<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> The Quiz.</h1>
    <p>Come Lets see how your brain works.</p>
    <img src="images/know.jpg" alt="boy" class="w3-image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h1 class="w3-text-light-grey">My Test</h1>
    <hr style="width:200px" class="w3-opacity">
 <div class ='radioclass'>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="app">
<h2>Welcome to my quiz</h2>

<?php
$quiz[] = [
   'question' => 'What is always coming, but never arrives',
   'answer' => [
       'truth',
       'rare wind',
       'javascript',
       'tomorrow'
   ]
];
$quiz[] = [
   'question' => 'Against which illness do you use insuline',
   'answer' => [
       'high_blood_pressure',
       'adiposity',
       'diabetes',
       'cardiac_infection'
   ]
];
$quiz[] = [
   'question' => 'what is the biggest city in USA according to the mass of metropolitan area?',
   'answer' => [
       'Los Angeles',  
       'New york',  
       'chicago', 
       'san diego'
   ]
];
$quiz[] = [
   'question' => 'which word does the "e" in e-mail stand for?',
   'answer' => [
       'explain',
       'electronic',
       'execute',
       'exact'
       ]
   ];
$quiz[] = [
   'question' => 'how much % of the world is covered with water?',
   'answer' => [
       '92%',
       '63%',
       '37%',
       '71%'
   ]
];
$quiz[] = [
   'question' => 'which is the longest river in the world' ,
   'answer' => [
       'nil',
       'congo',
       'mississipi',
       'amazon'
   ]
];
$quiz[] = [
   'question' => 'how many teeth does an adult human usualy have?' ,
   'answer' => [
       '12-16',
       '28-32',
       '16-24',
       '32-36'
   ]
];
$quiz[] = [
   'question' => 'who developed the theory of evolution?' ,
   'answer' => [
       'Isaac Newton',
       'Chareles Darwin',
       'Pythagore',
       'Davinci'
   ]
];
$quiz[] = [
   'question' => 'which one of this animal is a fish?' ,
   'answer' => [
       'Shark',
       'Whale',
       'Dolphin',
       'Seal'
   ]
];
$quiz[] = [
   'question' => 'which one of these numbers is without rest dividable through the numbers : 1,2,3,4,5,6?' ,
   'answer' => [
       '42',
       '40',
       '60',
       '128'
   ]
];

$quiz[] = [
  'question' => 'What is always coming, but never arrives',
  'answer' => [
      'elephant',
      'blue_whale',
      'giraffe',
      'buffalo'
  ]
];
$quiz[] = [
  'question' => 'Against which illness do you use insuline',
  'answer' => [
      'high_blood_pressure',
      'adiposity',
      'diabetes',
      'cardiac_infection'
  ]
];
$quiz[] = [
  'question' => 'what is the biggest city in USA according to the mass of metropolitan area?',
  'answer' => [
      'Los Angeles',  
      'New york',  
      'chicago', 
      'san diego'
  ]
];
$quiz[] = [
  'question' => 'which word does the "e" in e-mail stand for?',
  'answer' => [
      'explain',
      'electronic',
      'execute',
      'exact'
      ]
  ];
$quiz[] = [
  'question' => 'how much % of the world is covered with water?',
  'answer' => [
      '92%',
      '63%',
      '37%',
      '71%'
  ]
];
$quiz[] = [
  'question' => 'which is the longest river in the world' ,
  'answer' => [
      'nil',
      'congo',
      'mississipi',
      'amazon'
  ]
];
$quiz[] = [
  'question' => 'how many teeth does an adult human usualy have?' ,
  'answer' => [
      '12-16',
      '28-32',
      '16-24',
      '32-36'
  ]
];
$quiz[] = [
  'question' => 'who developed the theory of evolution?' ,
  'answer' => [
      'Isaac Newton',
      'Chareles Darwin',
      'Pythagore',
      'Davinci'
  ]
];
$quiz[] = [
  'question' => 'which one of this animal is a fish?' ,
  'answer' => [
      'Shark',
      'Whale',
      'Dolphin',
      'Seal'
  ]
];
$quiz[] = [
  'question' => 'which one of these numbers is without rest dividable through the numbers : 1,2,3,4,5,6?' ,
  'answer' => [
      '42',  
      '40', 
      '60',  
      '128' 
  ]
];

$answerName = array('question1','question2','question3','question4','question5','question6','question7','question8','question9','question10','question11','question12','question13','question14','question15','question16','question17','question18','question19','question20');
$number = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20');

for($i = 0; $i < count($quiz); ++$i){
   $outputquestion = "<h3>".$number[$i].')'.$quiz[$i]['question']."</h3>";
   echo $outputquestion;
   foreach($quiz[$i]['answer'] as $value ){
       $outputanswer =  "<input required type=\"radio\" name=".$answerName[$i]."
       value=".$value.">"."<span>$value</span>";
       echo $outputanswer;
       }
}
if(isset($_POST['submit'])){
$score = 0;
if($_POST['question1'] == 'blue_whale' ){
$score++;
}
if($_POST['question2'] == 'diabetes' ){
$score++;
}
if($_POST['question3'] == 'New_york' ){
$score++;
}
if($_POST['question4'] == 'electronic' ){
   $score++;
}
if($_POST['question5'] == '71%'){
   $score++;
}
if($_POST['question6'] == 'amazon'){
   $score++;
}
if($_POST['question7'] == '28-32'){
   $score++;
}
if($_POST['question8'] == 'Chareles Darwin'){
   $score++;
}
if($_POST['question9'] == 'Shark'){
   $score++;
}
if($_POST['question10'] == '60'){
   $score++;
}
if($_POST['question1'] == 'blue_whale' ){
  $score++;
 }
  if($_POST['question2'] == 'diabetes' ){
  $score++;
}
if($_POST['question3'] == 'New_york' ){
  $score++;
}
if($_POST['question4'] == 'electronic' ){
   $score++;
  }
if($_POST['question5'] == '71%'){
   $score++;
}
if($_POST['question6'] == 'amazon'){
   $score++;
}
if($_POST['question7'] == '28-32'){
     $score++;
 }
if($_POST['question8'] == 'Chareles Darwin'){
     $score++;
}
if($_POST['question9'] == 'Shark'){
     $score++;
}
if($_POST['question10'] == '60'){
     $score++;
}

echo "<p>"."Your score is ".$score. " / 20"."</p>";
if($score === 20){
   echo "well done";
}
if($score <= 10){
  echo "<p>". "you failed"."</p>";
}else{
  echo "<p>". "you passed the test". "</p>";
}
}
?>


</div>
<input type="submit" name="submit">
</div>
</form>
    
    
</div>   
    


<h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
    <p class="w3-wide">IQ</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide">EM</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:85%"></div>
    </div>
    <p class="w3-wide">EMQ</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:80%"></div>
    </div><br>
    
   

    
       
      </div>
    <!-- End Grid/Pricing tables -->
    </div>
    
    <!-- Testimonials -->
   
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">THE BRAIN IS A TERRIBLE THING TO WASTE</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="images/blurred-traffic-light-trails-road_1359-1009.jpg" style="width:100%">
        <img src="images/techbrain1.jpg" style="width:100%">
        <img src="images/techbraing.jpg" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="images/abstract-background-design_1297-78.jpg" style="width:100%">
        <img src="images/abstract-background-design_1297-87.jpg" style="width:100%">
        <img src="images/abstract-background-design_1297-88.jpg" style="width:100%">
        <img src="images/abstract-background-with-low-poly-design_1048-8478.jpg" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Chicago, US</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    </div><br>
    <p>Lets get in touch. Send me a message:</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">e.munemo</a></p>
  <!-- End footer -->
  </footer>
    
    

   
    
   



           
           <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
              integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
              crossorigin="anonymous"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
              integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
              crossorigin="anonymous"></script>
           <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
              integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
               crossorigin="anonymous"></script>
           
        </body>
</html>
  