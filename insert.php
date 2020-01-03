<?php

function showCollumns()
{

    $db = openConnection();
    $select = $db->query('SELECT * FROM Students');

    $total_column = $select->columnCount();
    $result = mysql_query($select);

    echo "<table>"; // start a table tag in the HTML
    
    while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
    echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";  //$row['index'] the index here is a field name
    }
}


function sendToDb($Firstname , $Lastname , $username , $gender , $linked , $github , $email , $preferredLang , $avatar , $video , $quote , $quote_aut) {
    $date = date("l jS \of F Y h:i:s A");
    $db = openConnection();
    $select = $db->query("INSERT INTO
    Students (
      first_name,
      last_name,
      username,
      gender,
      linkedin,
      github,
      email,
      preferred_language,
      Avatar,
      video,
      quote,
      quote_author,
      created_at
    )
  VALUES
    (
      '$Firstname',
      '$Lastname',
      '$username',
      '$gender',
      '$linked',
      '$github',
      '$email',
      '$preferredLang',
      '$avatar',
      '$video',
      '$quote',
      '$quote_aut',
      '$date'
    )
  ");
}