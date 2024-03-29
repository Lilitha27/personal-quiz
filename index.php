<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=ZCOOL XiaoWei' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
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
    11 => array(
        'Question' => '<h2>11.How would you describe my personal wardrobe style?</h2>',
        'Answers' => array(
            'A' => 'Tons of color in my closet!',
            'B' => ' An even mix of neutrals and color',
            'C' => ' Neutral - blacks, whites, grays',
            'D' => ' Flowy, fun, and flowery!
            '
        ),
        'CorrectAnswer' => 'B'
    ),
    12 => array(
        'Question' => '<h2>12.How do you think i want to impact the world ?</h2>',
        'Answers' => array(
            'A' => 'By bringing justice to all',
            'B' => 'By creating an empire',
            'C' => 'By doing good',
            'D' => 'By leaving my mark on it'
        ),
        'CorrectAnswer' => 'D'
    ),
    13 => array(
        'Question' => '<h2>13.Where do i want to be in 20 years?</h2>',
        'Answers' => array(
            'A' => 'Inventing the next breakthrough',
            'B' => 'Starring in movies',
            'C' => 'Making the world a better place',
            'D' => ' Running a country'
        ),
        'CorrectAnswer' => 'A'
    ),
    14 => array(
        'Question' => '<h2>14. What is my dream job?</h2>',
        'Answers' => array(
            'A' => 'Computer Engineer',
            'B' => 'Pilot',
            'C' => 'Musician',
            'D' => 'Tour guide '
        ),
        'CorrectAnswer' => 'A'
    ),
    15 => array(
        'Question' => '<h2>15.What is my favourite dessert?</h2>',
        'Answers' => array(
            'A' => 'Ice Cream',
            'B' => 'Peach Pie',
            'C' => ' Chocolate Cake',
            'D' => 'Donut'
        ),
        'CorrectAnswer' => 'C'
    ),
    16 => array(
        'Question' => '<h2>16.What do i do to relax?</h2>',
        'Answers' => array(
            'A' => 'Play video games',
            'B' => 'Have drinks with friends',
            'C' => 'Spend time outdoors',
            'D' => ' Relax on the couch'
        ),
        'CorrectAnswer' => 'D'
    ),
    17 => array(
        'Question' => '<h2>17.What is my texting style?</h2>',
        'Answers' => array(
            'A' => 'I just txt as quickly as pssible whtevr',
            'B' => 'Full sentences with correct grammer',
            'C' => 'I am an over-texter',
            'D' => 'Emoji city'
        ),
        'CorrectAnswer' => 'B'
    ),
    18 => array(
        'Question' => '<h2>18.How would i spend a free day ?</h2>',
        'Answers' => array(
            'A' => 'Shopping with friends',
            'B' => 'Organizing my closet',
            'C' => 'Writing poems, songs, or stories',
            'D' => 'Planting in a garden'
        ),
        'CorrectAnswer' => 'A'
    ),
    19 => array(
        'Question' => '<h2>19.What is my favourite form of exercise?</h2>',
        'Answers' => array(
            'A' => ' Walking',
            'B' => ' Hiking/Climbing',
            'C' => ' Jogging',
            'D' => 'Swimming'
        ),
        'CorrectAnswer' => 'B'
    ),
    20 => array(
        'Question' => '<h2>20.What is my star sign ?</h2>',
        'Answers' => array(
            'A' => 'Leo',
            'B' => 'Scorpio',
            'C' => 'Libra',
            'D' => 'Cancer'
        ),
        'CorrectAnswer' => 'D'
    ),
);

if (isset($_POST['answers'])){
    $Answers = $_POST['answers']; // Get submitted answers.
    // Now this is fun, automated question checking! :wink:
    foreach ($Questions as $QuestionNo => $Value){
        // Echo the question
        echo $Value[Question];
        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
             echo '<h3>You answered: <span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br></h3>' ; // Replace style with a class
             echo '<h3>Correct answer: <span style="color: green;">'.$Value['Answers'][$Value['CorrectAnswer']].'</span></h3>' ;
        } else {
            echo '<h3>Correct answer: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br></h3>' ; // Replace style with a class
            echo '<h3>You are correct: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span></h3>' ; $counter++;
        }
        echo '<br />';
                                if ($counter=="")
                                {
                                $counter='0';
                                $results = "<h4>Your score: $counter/20</h4>";
                                }
                                else
                                {
                                $results = "<h4>Your score: $counter/20</h4>";
                                }
            }                           echo $results;
                                        echo "<br>";
                    if ($counter <=9){
                        echo "<h5>Try again &#128531; </h5>"."<br>";
                        
                    }
                    else{
                        echo "<h5>Well Done &#127881; !</h5>"."<br>";
                        
                    }
                                        
 } else {
 ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
    <?php foreach ($Questions as $QuestionNo => $Value){ ?>
        <h3><?php echo $Value['Question']; ?></h3>
        <?php
            foreach ($Value['Answers'] as $Letter => $Answer){
            $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
            echo '<br />';
        ?>
          <div>
            <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
            <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
        </div>
        <?php } ?>
    <?php } ?>
    <?php }
     ?>
    <input id="button" type="submit" value="Submit Quiz" />
    
    </form>
 

</body>
</html>