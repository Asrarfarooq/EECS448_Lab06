<?php
echo '<style>table, th, td { border:1px solid #cddc39;}</style>';
echo '<link type="text/css" href="style.css" rel="stylesheet">';
echo '<table>';
for ($a = 0; $a <= 100; $a++)
  {
    if ($a == 0)
      {
        echo '<tr><td></td>';
        for ($b = 1; $b <= 100; $b++)
          {
            echo '<th scope="col" class="col">' . $b . '</th>';
          }
        echo '</tr>';
      }
    else
      {
        echo '<tr>';
        echo '<th>' . $a . '</th>';
        for ($c = 1; $c <= 100; $c++)
          {
            echo '<td>' . $a * $c . '</td>';
          }
        echo '</tr>';
      }
  }
echo '</table>';
?>