<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz</title>
</head>
<body>
<?php 
echo '<div class="head" ><h1> Welcome to my personal Questionnaire &#128522;!</h1></div>'.'<hr>';
$Questions = array(
    1 => array(
        'Question' => '<h2>1.What is my favourite colour?</h2>',
        'Answers' => array(
            'A' => 'pink',
            'B' => 'black',
            'C' => 'grey',
            'D' => 'yellow'
        ),
        'CorrectAnswer' => 'C'
    ),
    
    2 => array(
        'Question' => '<h2>2.What is my favourite season ?</h2>',
        'Answers' => array(
            'A' => 'Spring',
            'B' => 'Winter',
            'C' => 'Summer',
            'D' => 'Autumn'
        ),
        'CorrectAnswer' => 'A'
    ),
    3 => array(
        'Question' => '<h2>3.What do i do at parties ?</h2>',
        'Answers' => array(
            'A' => 'play dj, i bring music ',
            'B' => 'I take selfies and let everyone know I am there ',
            'C' => 'I jump into party games ',
            'D' => 'I try to start a conversation with someone '
        ),
        'CorrectAnswer' => 'B'
    ),
    4 => array(
        'Question' => '<h2>4.My ideal workplace...</h2>',
        'Answers' => array(
            'A' => 'wherever the work takes me ',
            'B' => 'an art studio',
            'C' => 'an office',
            'D' => 'anywhere i can get wifi'
        ),
        'CorrectAnswer' => 'A'
    ),
    5 => array(
        'Question' => '<h2>5.When do i get the most done ?</h2>',
        'Answers' => array(
            'A' => ' early morning',
            'B' => 'late at night',
            'C' => 'between other tasks',
            'D' => 'whenever inspration hits'
        ),
        'CorrectAnswer' => 'B'
    ),


    6 => array(
        'Question' => '<h2>6.Which would be my go-to first date?</h2>',
        'Answers' => array(
            'A' => 'dinner and a show',
            'B' => 'picnic and bike ride in the park',
            'C' => 'music festival',
            'D' => 'drinks and dancing in the club '
        ),
        'CorrectAnswer' => 'A'
    ),
    7 => array(
        'Question' => '<h2>7.Which words best describe me?</h2>',
        'Answers' => array(
            'A' => 'reliable and easy going ',
            'B' => 'glittering and charming',
            'C' => 'modern and stylish',
            'D' => 'carefree and creative'
        ),
        'CorrectAnswer' => 'D'
    ),
    8 => array(
        'Question' => '<h2>8.What is a quote that inspires me ?</h2>',
        'Answers' => array(
            'A' => 'Go hard or go home',
            'B' => 'collect memories not things ',
            'C' => 'life begins at the end of your comfort zone ',
            'D' => 'fall in love with taking care of yourself'
        ),
        'CorrectAnswer' => 'B'
    ),
    9 => array(
        'Question' => '<h2>9.What is my favorite kind of vacation?</h2>',
        'Answers' => array(
            'A' => 'road trip ',
            'B' => 'cultural',
            'C' => 'beach',
            'D' => 'active'
        ),
        'CorrectAnswer' => 'A'
    ),
    10 => array(
        'Question' => '<h2>10.What are my typical morning like?</h2>',
        'Answers' => array(
            'A' => 'hitting the gym and then off to work',
            'B' => 'i typically do not rise before noon',
            'C' => 'blasting music while i shower and get ready',
            'D' => 'rolling out of bed and running to work '
        ),
        'CorrectAnswer' => 'C'
    ),

</body>
</html>