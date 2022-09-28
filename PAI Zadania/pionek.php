<?php
    $chessboard = array(
        array('w','s','g','h','k','g','s','w'),
        array('p','p','p','p','p','p','p','p'),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array(' ',' ',' ',' ',' ',' ',' ',' '),
        array('P','P','P','P','P','P','P','P'),
        array('W','S','G','H','K','G','S','W'),
    );
    echo "<pre>";
    foreach($chessboard as $row)
    {
        foreach($row as $piece)
            echo "$piece ";
        echo "<br>";
    }
    echo "</pre>";
 $chessboard[6][2] = " ";
  $chessboard[5][2] = "P";
  echo "<pre>";
    foreach($chessboard as $row)
    {
        foreach($row as $piece)
            echo "$piece ";
        echo "<br>";
    }
   echo "</pre>";
?>