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

</body>
</html>