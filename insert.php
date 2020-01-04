<?php
function showCollumns()
{
    $db = openConnection();
    $select = 'SELECT * FROM Students';
    echo '<table id="Students">'; // start a table tag in the HTML
    
    foreach($db->query($select) as $row){   //Creates a loop to loop through results

    echo "<tr><th>Firstname</th><th>Lastname</th><th>E-Mail</th><th>Preferred Language</th><th>Link to Profile</th><tr/>" ."<tr><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . '<a href = "' . $row['email'] . '">' . $row['email'] . '</a>' . "</td><td>" . $row['preferred_language'] . "</td><td>" . "</td>";  //$row['index'] the index here is a field name
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