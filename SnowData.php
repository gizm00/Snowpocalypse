<?php
  session_start();
    $mysqli = mysqli_connect(connection string );
    if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  else { 
  
    //$query = "SELECT COUNT(*) as count, TweetText, DAYNAME(TweetTimeStamp) as dayName, HOUR(TweetTimeStamp) AS hour, DAY(TweetTimeStamp) AS day FROM portlandsnow2 GROUP BY day, hour";
   $query = "SELECT TweetText, TweetId, TweetTimeStamp FROM portlandsnow2";
    
  if (!$results = mysqli_query($mysqli, $query)) {
    echo "Couldnt query DB " . $mysqli->error;
  }
  else {
    $data = array();
    echo "TweetId,TweetTimeStamp,TweetText<br>";
    while($row = mysqli_fetch_assoc($results))
    {
       echo $row['TweetId'].",".$row['TweetTimeStamp'].",".$row['TweetText']."<br>";
    }
    //for ($x = 0; $x < mysqli_num_rows($results); $x++) {
    //    $data[] = mysqli_fetch_assoc($results);     
      
    // }
    
    //echo json_encode($data);    
    
    mysqli_close($mysqli);
  }
  }
  ?>