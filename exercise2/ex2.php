<?php

$q1_q       = "In which Italian city can you find the Colosseum?";
$q1         = $_POST["q1"];
$q1_correct = "Rome";

$q2_q       = "What is the longest river in the world?";
$q2         = $_POST["q2"];
$q2_correct = "Nile";

$q3_q       = "If you are born on the 1st of January, which star sign are you?";
$q3         = $_POST["q3"];
$q3_correct = "Capricorn";

$q4_q       = " How long is the border between the United States and Canada?";
$q4         = $_POST["q4"];
$q4_correct = "5,525 miles";

$q5_q       = "Which constellation is on the Australian flag?";
$q5         = $_POST["q5"];
$q5_correct = "The Southern Cross";

$user_answers    = array(
    $q1,
    $q2,
    $q3,
    $q4,
    $q5
);
$correct_answers = array(
    $q1_correct,
    $q2_correct,
    $q3_correct,
    $q4_correct,
    $q5_correct
);

$num_correct = 0.00;
for ($i = 0; $i <= 4; $i++)
  {
    if ($user_answers[$i] == $correct_answers[$i])
      {
        $num_correct++;
      }
  }

echo '<link type="text/css" href="style1.css" rel="stylesheet">';

echo '<body>';

echo "<h3>Results</h3>";

echo '<div>';
echo 'Q.1: ' . $q1_q . '<br>';
echo 'Answer: ' . $q1 . '<br>';
echo 'Correct Answer: ' . $q1_correct . '<br>';
echo '</div>';

echo '<hr>';

echo '<div>';
echo 'Q.2: ' . $q2_q . '<br>';
echo 'Answer: ' . $q2 . '<br>';
echo 'Correct Answer: ' . $q2_correct . '<br>';
echo '</div>';

echo '<hr>';

echo '<div>';
echo 'Q.3: ' . $q3_q . '<br>';
echo 'Answer: ' . $q3 . '<br>';
echo 'Correct Answer: ' . $q3_correct . '<br>';
echo '</div>';

echo '<hr>';

echo '<div>';
echo 'Q.4: ' . $q4_q . '<br>';
echo 'Answer: ' . $q4 . '<br>';
echo 'Correct Answer: ' . $q4_correct . '<br>';
echo '</div>';

echo '<hr>';

echo '<div>';
echo 'Q.5: ' . $q5_q . '<br>';
echo 'Answer: ' . $q5 . '<br>';
echo 'Correct Answer: ' . $q5_correct . '<br>';
echo '</div>';

echo '<hr>';
echo "<br>";
echo 'Correctly Answered: ' . $num_correct .'/5'. '<br>';
echo 'Your Score: ' . $num_correct / 5.00 * 100.00 . '%<br>';

echo '</body>';
?>