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
 <!--<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <! Libraries CSS Files -->
 <!--<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
 <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
 <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
 <link href="lib/hover/hover.min.css" rel="stylesheet">-->
 <!-- Main Stylesheet File -->
 <link href="css/styles.css" rel="stylesheet">

   <title>SENSE OF HUMOUR QUIZ</title>
 <head> 
 
 
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
    <h2 class="w3-text-light-grey">My Test</h2>
    <hr style="width:200px" class="w3-opacity">
    
<?php 

$Questions = array(
    1 => array(
        'Question' => '01.What is always coming, but never arrives',
        'Answers' => array(
            'A' => 'truth',
            'B' => 'rare wind',
            'C' => 'javascript',
            'D'=> 'tomorrow'

        ),
        'CorrectAnswer' => 'D'
    ),
    2 => array(
        'Question' => '02.What can be broken, but is never held',
        'Answers' => array(
            'A' => 'virginity',
            'B' => 'A promise',
            'C' => 'messages',
            'D'=> 'heart'
        ),
        'CorrectAnswer' => 'B'
    
        ),


    3 => array(
            'Question' => '03.What is always there,at day and night',
            'Answers' => array(
                'A' => 'the sun at night and shines through the moon',
                'B' => 'Julius Malema',
                'C' => 'coffee',
                'D'=> 'petrol'
    
            ),
            'CorrectAnswer' => 'A'
        ),
    4 => array(
            'Question' => '04.What is it that lives if it is fed, and dies if you give it a drink?',
            'Answers' => array(
                'A' => 'man because unfaithfull as their options',
                'B' => 'delta',
                'C' => 'Fire',
                'D'=> 'maize'
            ),
            'CorrectAnswer' => 'C'
        ),

    5 => array(
        'Question' => '05.What is it that if you have, you want to share with me, and if you share, you do not have?',
        'Answers' => array(
            'A' => 'A secret',
            'B' => 'rare wind',
            'C' => 'javascript',
            'D'=> 'congo dust'

        ),
        'CorrectAnswer' => 'A'
    ),
    6 => array(
        'Question' => '06.If a plane crashes on the border between the United States and Canada, where do they bury the survivors',
        'Answers' => array(
            'A' => 'United States of canada',
            'B' => 'immigration',
            'C' => 'Survivors are not buried',
            'D'=> 'export'
        ),
        'CorrectAnswer' => 'C'
    ),    

    7 => array(
            'Question' => '07.If it takes eight men ten hours to build a wall, how long would it take four men?',
            'Answers' => array(
                'A' => 'No time, because the wall is already built.',
                'B' => 'simultaneous equation to calculated',
                'C' => '20 hours',
                'D'=> 'mutiply the number of man then divide by 8'
    
            ),
            'CorrectAnswer' => 'A'
        ),
    8 => array(
            'Question' => '08.If you have a bowl with six apples and you take away four, how many do you have?',
            'Answers' => array(
                'A' => 'none',
                'B' => 'the bowl',
                'C' => 'The 4 you took away',
                'D'=> 'magic'
            ),
            'CorrectAnswer' => 'C'
        ),
    9 => array(
                'Question' => '09.If you had only one match and entered a dark room containing an oil lamp,   
                some kindling wood, and a newspaper, which would you light first?',
                'Answers' => array(
                    'A' => 'The match',
                    'B' => 'newspaper',
                    'C' => 'wood',
                    'D'=> 'The light'
        
                ),
                'CorrectAnswer' => 'A'
            ),
    10 => array(
                'Question' => '10.If you spell “sit in the tub” s-o-a-k, and you spell “a funny story” j-o-k-e, how do you spell “the white of an egg”?',
                'Answers' => array(
                    'A' => 'First answer of Second question',
                    'B' => 'Second answer Second question',
                    'C' => 'Third answer Second question',
                    'D'=> 'Crazy Solid Shapes'
                ),
                'CorrectAnswer' => 'C'
            ),        
    11 => array(
                    'Question' => '11.What is always coming, but never arrives',
                    'Answers' => array(
                        'A' => 'a-l-b-u-m-e-n or e-g-g w-h-i-t-e',
                        'B' => 'whiteish',
                        'C' => 'white',
                        'D'=> 'embryo'
            
                    ),
                    'CorrectAnswer' => 'A'
                ),
    12 => array(
                    'Question' => '12.Is it legal for a man to marry his widow’s sister?',
                    'Answers' => array(
                        'A' => 'First answer of Second question',
                        'B' => 'as long as she is with him',
                        'C' => 'No, but since he is dead it would be hard to do so',
                        'D'=> 'if she allows'
                    ),
                    'CorrectAnswer' => 'C'
                ),    
            
    13 => array(
                        'Question' => '13.How did the boy kick his soccer ball ten feet, and then have it come back to him on its own?',
                        'Answers' => array(
                            'A' => 'He kicked it up',
                            'B' => 'triumphantly',
                            'C' => 'from a machine',
                            'D'=> 'tomorrow'
                
                        ),
                        'CorrectAnswer' => 'A'
                    ),
    14 => array(
                        'Question' => '14.If Mrs. John’s bungalow is decorated completely in pink, with the walls, carpet, and furniture all shades of pink, what color are the stairs?',
                        'Answers' => array(
                            'A' => 'wooden',
                            'B' => 'Second answer Second question',
                            'C' => 'There are no stairs, because bungalows do not have a second floor',
                            'D'=> 'none of the above'
                        ),
                        'CorrectAnswer' => 'C'
                    ),
            
    15 => array(
                    'Question' => '15.How could a man go outside in the pouring rain without protection, and not have a hair on his head get wet',
                    'Answers' => array(
                        'A' => 'He was bald',
                        'B' => 'his twin went outside',
                        'C' => 'wearing a woolen hat',
                        'D'=> 'playing on top of the pool'
            
                    ),
                    'CorrectAnswer' => 'A'
                ),

    16 => array(
                    'Question' => '16.If an electric train is moving north at 100mph and a wind is blowing to the west at 10mph, which way does the smoke blow?',
                    'Answers' => array(
                        'A' => 'north',
                        'B' => 'both C & D',
                        'C' => 'An electric train has no smoke',
                        'D'=> 'west'
                    ),
                    'CorrectAnswer' => 'C'
                ),    
            
    17 => array(
                        'Question' => '17.How was it possible that every single person in an airplane crash died, but two people survived?',
                        'Answers' => array(
                            'A' => 'The two survivors were married',
                            'B' => 'they divorced',
                            'C' => 'everyone died',
                            'D'=> 'there were from a household'
                
                        ),
                        'CorrectAnswer' => 'A'
                    ),


    18 => array(
                        'Question' => '18.What breaks and never falls, and what falls and never breaks?',
                        'Answers' => array(
                            'A' => 'caterpiller',
                            'B' => 'Second answer Second question',
                            'C' => 'Day breaks and night falls',
                            'D'=> ' the lizard'
                            
                        ),
                        'CorrectAnswer' => 'C'
                    ),    

    19 => array(
                            'Question' => '19.Some months have 31 days, others have 30 days, but how many have 28 days?',
                            'Answers' => array(
                                'A' => 'All the months have 28 days.',
                                'B' => 'in the leap year',
                                'C' => 'only february',
                                'D'=> 'one'
                    
                            ),
                            'CorrectAnswer' => 'A'
                        ),
    20 => array(
                            'Question' => '20. The attorney is my brother,” testified the accountant. But the attorney testified he did not have a brother. Who is lying?',
                            'Answers' => array(
                                'A' => 'The attorney',
                                'B' => 'Second answer Second question',
                                'C' => 'Neither one, because the accountant was his sister.',
                                'D'=> 'he himself'
                            ),
                            'CorrectAnswer' => 'C'    
                          ),
);

if (isset($_POST['answers'])){
  $Answers = $_POST['answers']; // Get submitted answers.

  // Now this is fun, automated question checking! ;)

  foreach ($Questions as $QuestionNo => $Value){
      // Echo the question
      echo $Value['Question'].'<br />';

      if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
           echo 'You answered: <span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>'; // Replace style with a class
           echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Value['CorrectAnswer']].'</span>';
      } else {
          echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>'; // Replace style with a class
          echo 'You are correct: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; $counter++;

      }

      echo '<br /><hr>'; 
                              if ($counter=="") 
                              { 
                              $counter='0';
                              $results = "Your score: $counter/2"; 
                              }
                              else 
                              { 
                              $results = "Your score: $counter/2"; 
                              }
                             }                           echo $results;
                                } else {  
?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
  <?php foreach ($Questions as $QuestionNo => $Value){ ?>

      <h3><?php echo $Value['Question']; ?></h3>
      <?php 
          foreach ($Value['Answers'] as $Letter => $Answer){ 
          $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
      ?>
      <div>
          <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
          <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
      </div>
      <?php } ?>

 <?php } ?>
  <input type="submit" value="Submit Quiz" />
  </form>
<?php 
}
?>

    
    
    
    


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
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> CAPE TOWN, SA</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +27619125338</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: emunemo@gmail.com</p>
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