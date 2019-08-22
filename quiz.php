<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- JQuery -->
   <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap CSS -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- Bootstrap JS -->
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <!-- Font Awesome Icon Use -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- <link href="css/styles.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="css/styles.css">
  
   <title>My Quiz app</title>
</head>
<body>




<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="app"> 
<div class="panel panel-default">
<div class="panel-heading">
<h1>Quiz  That Makes You Think</h1></div>
<div class="panel-body"></div>
</div>


<?php
$exam[] = [
   'question' => 'What is always coming, but never arrives',
   'answer' => [
       'truth',
       'rare wind',
       'javascript',
       'tomorrow'
   ]
];
$exam[] = [
   'question' => 'What can be broken, but is never held?',
   'answer' => [
       'virginity',
       'A promise',
       'messages',
       'heart'
   ]
];
$exam[] = [
   'question' => 'What is it that lives if it is fed, and dies if you give it a drink?',
   'answer' => [
       'man' ,
       'maize',
       'Fire',
       'delta'
   ]
];

$exam[] = [
   'question' => 'What word would you use to describe a man who does not have all his fingers on one hand?',
   'answer' => [
       'Normal',
       'disabled',
       'reputable',
       'premaditable'
       ]
   ];

$exam[] = [
   'question' => ' What can one catch that is not thrown?',
   'answer' => [
       'coffee',
       'sand paper',
       'A cold',
       'distance'
   ]
];
$exam[] = [
   'question' => 'What is it that if you have, you want to share me, and if you share, you do not have?' ,
   'answer' => [
       'congo dust',
       'A secret',
       'A kiss',
       'password'
   ]
];
$exam[] = [
   'question' => 'If a plane crashes on the border between the United States and Canada, where do they bury the survivors' ,
   'answer' => [
       'export.',
       'United States of canada',
       'immigration',
       'Survivors are not buried.'
   ]
];
$exam[] = [
   'question' => 'If it takes eight men ten hours to build a wall, how long would it take four men?' ,
   'answer' => [
       'simultaneous equation to calculate',
       '20 hours',
       'No time, because the wall is already built.',
       'mutiply the number of man then divide by 8'
   ]
];
$exam[] = [
   'question' => 'If you have a bowl with six apples and you take away four, how many do you have?' ,
   'answer' => [
       'none',
       'The 4 you took away',
       'magic',
       'the bowl'
   ]
];
$exam[] = [
   'question' => 'If you had only one match and entered a dark room containing an oil lamp,   
   some kindling wood, and a newspaper, which would you light first?' ,
   'answer' => [
       'The match',
       '40',
       '60',
       '128' 
   ]
];$exam[] = [
   'question' => 'If you spell “sit in the tub” s-o-a-k, and you spell “a funny story” j-o-k-e, how do you spell “the white of an egg”?',
   'answer' => [
       'a-l-b-u-m-e-n or e-g-g w-h-i-t-e',
       'whiteish',
       'white',
       'embryo'
   ]
];
$exam[] = [
   'question' => 'Is it legal for a man to marry his widow’s sister?',
   'answer' => [
       'if she allows',
       'if she is blind',
       'as long as she is with him',
       'No, but since he is dead it would be hard to do so.'
   ]
];
$exam[] = [
   'question' => 'If Mrs. John’s bungalow is decorated completely in pink, with the walls, carpet, and furniture all shades of pink, what color are the stairs?',
   'answer' => [
       'wooden',
       'vanish',
       'There are no stairs, because bungalows do not have a second floor.',
       'brown'
   ]
];

$exam[] = [
   'question' => 'How did the boy kick his soccer ball ten feet, and then have it come back to him on its own?',
   'answer' => [
       'triumphantly',
       'He kicked it up.',
       'from a machine',
       'he loves magic'
       ]
   ];

$exam[] = [
   'question' => 'How could a man go outside in the pouring rain without protection, and not have a hair on his head get wet',
   'answer' => [
       'He was bald',
       'his twin went outside',
       'wearing a woolen hat',
       'playing on top of the pool'
   ]
];
$exam[] = [
   'question' => 'If an electric train is moving north at 100mph and a wind is blowing to the west at 10mph, which way does the smoke blow?' ,
   'answer' => [
       'West',
       'South',
       'North',
       'An electric train has no smoke.'
   ]
];
$exam[] = [
   'question' => 'How was it possible that every single person in an airplane crash died, but two people survived?' ,
   'answer' => [
       'they divorced.',
       'there were from a household',
       'The two survivors were married.',
       'everyone died.'
   ]
];
$exam[] = [
   'question' => 'What breaks and never falls, and what falls and never breaks?' ,
   'answer' => [
       'the lizard',
       'Day breaks and night falls',
       'caterpiller',
       'the double barrel shotgun'
   ]
];
$exam[] = [
   'question' => 'Some months have 31 days, others have 30 days, but how many have 28 days?' ,
   'answer' => [
       'only february',
       'All the months have 28 days.',
       'in the leap year',
       'one'
   ]
];
$exam[] = [
   'question' => 'The attorney is my brother,” testified the accountant. But the attorney testified he did not have a brother. Who is lying?' ,
   'answer' => [
       'The attorney',
       'Neither one, because the accountant was his sister.',
       'testified',
       'he himself' 
   ]
];

///looping through array the answers//////
$answerName = array('question1','question2','question3','question4','question5','question6','question7','question8','question9','question10',
'question11','question12','question13','question14','question15','question16','question17','question18','question19','question20' );
$number = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17',
'18','19','20');
//for loops
for($i = 0; $i < count($exam); ++$i){
   $outputquestion = "<h3>".$number[$i].')'.$exam
[$i]['question']."</h3>";
   echo $outputquestion;
   foreach($exam
[$i]['answer'] as $value ){
       $outputanswer =  "<input required type=\"radio\" name=".$answerName[$i]."
       value=".$value.">"."<span>$value</span>";
       echo $outputanswer;
       }
}



if(isset($_POST['submit'])){
    $score = 0;
   

            if($_POST['question1'] == 'tomorrow' ){
            $score++;
            }
            if($_POST['question2'] == 'A promise' ){
            $score++;
            }
            if($_POST['question3'] == 'Fire' ){
            $score++;
            }
            if($_POST['question4'] == 'Normal' ){
               $score++;
            }
            if($_POST['question5'] == 'A cold'){
               $score++;
            }
            if($_POST['question6'] == 'A secret'){
               $score++;
            }
            if($_POST['question7'] == 'Survivors are not buried.'){
               $score++;
            }
            if($_POST['question8'] == 'No time, because the wall is already built'){
               $score++;
            }
            if($_POST['question9'] == 'The 4 you took away'){
               $score++;
            }
            if($_POST['question10'] == 'The match'){
               $score++;
            }

            if($_POST['question11'] == 'a-l-b-u-m-e-n or e-g-g w-h-i-t-e' ){
               $score++;
               }
            if($_POST['question12'] == 'No, but since he is dead it would be hard to do so.' ){
               $score++;
               }
            if($_POST['question13'] == 'There are no stairs, because bungalows do not have a second floor.' ){
               $score++;
               }
            if($_POST['question14'] == 'He kicked it up.' ){
                  $score++;
               }
            if($_POST['question15'] == 'He was bald'){
                  $score++;
               }
            if($_POST['question16'] == 'An electric train has no smoke.'){
                  $score++;
               }
            if($_POST['question17'] == 'The two survivors were married.'){
                  $score++;
               }
            if($_POST['question18'] == 'Day breaks and night falls'){
                  $score++;
               }
            if($_POST['question19'] == 'All the months have 28 days.'){
                  $score++;
               }
            if($_POST['question20'] == 'Neither one, because the accountant was his sister.'){
                  $score++;
               }            

            echo "<p>"."Your score is ".$score. " / 20"."</p>";
            if($score === 20){
               echo "excellent, awesome";
               $image = "3e_1048-13d-medical-technology-design-male-figure-with-brain-highlight_1048-10787.jpg";
            }
             
           elseif ($score >=0 && $score < 10) {
            echo "<h1> Poor! </h1>";
            $image = "image-human-brain_99433-298.jpg";
           echo "<br><img src=\" img/$image \" >";
            }
         }
            
           // else if ($score >=10 && $score <= 14) {
           //echo "<h1> Good, you are above average! </h1>";
           // $image = "afternoon.jpg";
           // echo "<br><img src=\" img/$image \" >";
           //} else {
          // echo "<h1> you are among masters! </h1>";
          // $image = "evening.jpg";
           // echo "<br><img src=\" img/$image \" >";
        // }
      //}

?>
            <input id="submit" type="submit" name="submit">
            </div>

          

            <div class="panel panel-danger">
               <div class="panel-heading">EVERYTHING IS NOT WHAT IT SEEMS</div> 
               <div class="panel-body"><?php include 'footer.php';?></div>
                </div>
               </div>
               </div>
            </form>
            <script src="footer.php"> </script>
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