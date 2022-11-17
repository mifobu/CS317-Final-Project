<?php
$servername = "localhost";
$username = "jack";
$password = "12345";
$dbname = "workout_db";
//Pass these into function
$BMI = $_POST['BMI'];
$Excercise = $_POST['Workout'];
$Difficulty =$_POST['Difficulty'];
//
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully\n";
}


//first instance of beginner //////////////////////////////////////////////////////////

if($BMI == "18" && $Excercise == "lower1" && $Difficulty == "Beginner" ){
	$sql = "SELECT exercise  AS routine FROM lower1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '8'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}
 
 
 
 if($BMI == "24" && $Excercise == "lower1" && $Difficulty == "Beginner" ){
	$sql = "SELECT exercise  AS routine FROM lower1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
} 

if($BMI == "29" && $Excercise == "lower1" && $Difficulty == "Beginner" ){
	$sql = "SELECT exercise  AS routine FROM lower1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '8'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}

 if($BMI == "42" && $Excercise == "lower1" && $Difficulty == "Beginner" ){
 $sql = "SELECT exercise  AS routine FROM lower1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}	

if($BMI == "18" && $Excercise == "lower2" && $Difficulty == "Beginner" ){
	$sql = "SELECT exercise  AS routine FROM lower2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '8'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}

 if($BMI == "24" && $Excercise == "lower2" && $Difficulty == "Beginner" ){
	$sql = "SELECT exercise  AS routine FROM lower2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}

if($BMI == "29" && $Excercise == "lower2" && $Difficulty == "Beginner" ){
	$sql = "SELECT exercise  AS routine FROM lower2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '8'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


 if($BMI == "42" && $Excercise == "lower2" && $Difficulty == "Beginner" ){
 $sql = "SELECT exercise  AS routine FROM lower2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}
/////////////////////////////////////////////////////


if($BMI == "18" && $Excercise == "lower3" && $Difficulty == "Beginner" ){
	$sql = "SELECT exercise  AS routine FROM lower3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '8'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}
 
 
 
 if($BMI == "24" && $Excercise == "lower3" && $Difficulty == "Beginner" ){
	$sql = "SELECT exercise  AS routine FROM lower3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
} 


if($BMI == "29" && $Excercise == "lower3" && $Difficulty == "Beginner" ){
	$sql = "SELECT exercise  AS routine FROM lower3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '8'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}

 if($BMI == "42" && $Excercise == "lower3" && $Difficulty == "Beginner" ){
 $sql = "SELECT exercise  AS routine FROM lower3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($BMI == "18" && $Excercise == "upper1" && $Difficulty == "Beginner" ){
 $sql = "SELECT exercise  AS routine FROM upper1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
} 
 
 
 if($BMI == "24" && $Excercise == "upper1" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM upper1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


 if($BMI == "29" && $Excercise == "upper1" && $Difficulty == "Beginner" ){
 while ($row = $result->fetch_assoc())
  $sql = "SELECT exercise  AS routine FROM upper1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}	


 if($BMI == "42" && $Excercise == "upper1" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM upper1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}

////////////////////////////////////////////////////////////////////////////
if($BMI == "18" && $Excercise == "upper2" && $Difficulty == "Beginner" ){
 $sql = "SELECT exercise  AS routine FROM upper2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
} 
 
 
 if($BMI == "24" && $Excercise == "upper2" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM upper2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


 if($BMI == "29" && $Excercise == "upper2" && $Difficulty == "Beginner" ){
 while ($row = $result->fetch_assoc())
  $sql = "SELECT exercise  AS routine FROM upper2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}	


 if($BMI == "42" && $Excercise == "upper2" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM upper2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}
///////////////////////////////////////////////////////////////////////////////////////////////////
if($BMI == "18" && $Excercise == "upper3" && $Difficulty == "Beginner" ){
 $sql = "SELECT exercise  AS routine FROM upper3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
} 
 
 
 if($BMI == "24" && $Excercise == "upper3" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM upper3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


 if($BMI == "29" && $Excercise == "upper3" && $Difficulty == "Beginner" ){
 while ($row = $result->fetch_assoc())
  $sql = "SELECT exercise  AS routine FROM upper3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}	


 if($BMI == "42" && $Excercise == "upper3" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM upper3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


///////////////////////////////////////////
if($BMI == "18" && $Excercise == "fullbody1" && $Difficulty == "Beginner" ){
 $sql = "SELECT exercise  AS routine FROM fullbody1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
} 
 
 
 if($BMI == "24" && $Excercise == "fullbody1" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM fullbody1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


 if($BMI == "29" && $Excercise == "fullbody1" && $Difficulty == "Beginner" ){
 while ($row = $result->fetch_assoc())
  $sql = "SELECT exercise  AS routine FROM fullbody1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}	


 if($BMI == "42" && $Excercise == "fullbody1" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM fullbody1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


///////////////////////////////////////////////////
if($BMI == "18" && $Excercise == "fullbody2" && $Difficulty == "Beginner" ){
 $sql = "SELECT exercise  AS routine FROM fullbody2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
} 
 
 
 if($BMI == "24" && $Excercise == "fullbody2" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM fullbody2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


 if($BMI == "29" && $Excercise == "fullbody2" && $Difficulty == "Beginner" ){
 while ($row = $result->fetch_assoc())
  $sql = "SELECT exercise  AS routine FROM fullbody2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}	


 if($BMI == "42" && $Excercise == "fullbody2" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM fullbody2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


/////////////////////////////////////////////////////////
if($BMI == "18" && $Excercise == "fullbody3" && $Difficulty == "Beginner" ){
 $sql = "SELECT exercise  AS routine FROM fullbody3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
} 
 
 
 if($BMI == "24" && $Excercise == "fullbody3" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM fullbody3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


 if($BMI == "29" && $Excercise == "fullbody3" && $Difficulty == "Beginner" ){
 while ($row = $result->fetch_assoc())
  $sql = "SELECT exercise  AS routine FROM fullbody3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}	


 if($BMI == "42" && $Excercise == "fullbody3" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM fullbody3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}
////////////////////////////////////////////////////////
if($BMI == "18" && $Excercise == "chest" && $Difficulty == "Beginner" ){
 $sql = "SELECT exercise  AS routine FROM chest";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
} 
 
 
 if($BMI == "24" && $Excercise == "chest" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM chest";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


 if($BMI == "29" && $Excercise == "chest" && $Difficulty == "Beginner" ){
 while ($row = $result->fetch_assoc())
  $sql = "SELECT exercise  AS routine FROM chest";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}	


 if($BMI == "42" && $Excercise == "chest" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM chest";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


/////////////////////////////////////////
if($BMI == "18" && $Excercise == "back" && $Difficulty == "Beginner" ){
 $sql = "SELECT exercise  AS routine FROM back";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
} 
 
 
 if($BMI == "24" && $Excercise == "back" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM back";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


 if($BMI == "29" && $Excercise == "back" && $Difficulty == "Beginner" ){
 while ($row = $result->fetch_assoc())
  $sql = "SELECT exercise  AS routine FROM back";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}	


 if($BMI == "42" && $Excercise == "back" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM back";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}

////////////////////////////////////////////
if($BMI == "18" && $Excercise == "arms" && $Difficulty == "Beginner" ){
 $sql = "SELECT exercise  AS routine FROM arms";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
} 
 
 
 if($BMI == "24" && $Excercise == "arms" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM arms";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


 if($BMI == "29" && $Excercise == "arms" && $Difficulty == "Beginner" ){
 while ($row = $result->fetch_assoc())
  $sql = "SELECT exercise  AS routine FROM arms";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}	


 if($BMI == "42" && $Excercise == "arms" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM arms";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}

////////////////////////////////////////
if($BMI == "18" && $Excercise == "shoulders" && $Difficulty == "Beginner" ){
 $sql = "SELECT exercise  AS routine FROM shoulders";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
} 
 
 
 if($BMI == "24" && $Excercise == "shoulders" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM shoulders";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


 if($BMI == "29" && $Excercise == "shoulders" && $Difficulty == "Beginner" ){
 while ($row = $result->fetch_assoc())
  $sql = "SELECT exercise  AS routine FROM shoulders";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}	


 if($BMI == "42" && $Excercise == "shoulders" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM shoulders";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}
 
//////////////////////
if($BMI == "18" && $Excercise == "legs" && $Difficulty == "Beginner" ){
 $sql = "SELECT exercise  AS routine FROM legs";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
} 
 
 
 if($BMI == "24" && $Excercise == "legs" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM legs";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


 if($BMI == "29" && $Excercise == "legs" && $Difficulty == "Beginner" ){
 while ($row = $result->fetch_assoc())
  $sql = "SELECT exercise  AS routine FROM legs";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}	


 if($BMI == "42" && $Excercise == "legs" && $Difficulty == "Beginner" ){
  $sql = "SELECT exercise  AS routine FROM legs";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Beginner'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}  
}


///Intermediate
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

///Intermediate
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($BMI == "18" && $Excercise == "lower1" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM lower1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


 if($BMI == "29" && $Excercise == "lower1" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM lower1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}	


 if($BMI == "42" && $Excercise == "lower1" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM lower1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}
if($BMI == "18" && $Excercise == "lower2" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM lower2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}
 
 if($BMI == "24" && $Excercise == "lower2" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM lower2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


 if($BMI == "29" && $Excercise == "lower2" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM lower2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}	


 if($BMI == "42" && $Excercise == "lower2" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM lower2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}

if($BMI == "18" && $Excercise == "lower3" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM lower3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}

if($BMI == "24" && $Excercise == "lower3" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM lower3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


 if($BMI == "29" && $Excercise == "lower3" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM lower3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}	


 if($BMI == "42" && $Excercise == "lower3" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM lower3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}



if($BMI == "18" && $Excercise == "upper1" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM upper1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 
 
 
 if($BMI == "24" && $Excercise == "upper1" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM upper1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


 if($BMI == "29" && $Excercise == "upper1" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM upper1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}	


 if($BMI == "42" && $Excercise == "upper1" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM upper1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


if($BMI == "18" && $Excercise == "upper2" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM upper2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}
 
 
 if($BMI == "24" && $Excercise == "upper2" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM upper2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


 if($BMI == "29" && $Excercise == "upper2" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM upper2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}	


 if($BMI == "42" && $Excercise == "upper2" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM upper2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


if($BMI == "18" && $Excercise == "upper3" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM upper3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 
 
 
 if($BMI == "24" && $Excercise == "upper3" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM upper3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '8'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


 if($BMI == "29" && $Excercise == "upper3" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM upper3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}	


 if($BMI == "42" && $Excercise == "upper3" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM upper3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


if($BMI == "18" && $Excercise == "fullbody1" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM fullbody1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 
 
 
 if($BMI == "24" && $Excercise == "fullbody1" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM fullbody1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 



if($BMI == "18" && $Excercise == "fullbody2" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM fullbody2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 
 
 
 if($BMI == "24" && $Excercise == "fullbody2" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM fullbody2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '8'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 


 if($BMI == "29" && $Excercise == "fullbody2" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM fullbody2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}	


 if($BMI == "42" && $Excercise == "fullbody2" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM fullbody2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '2'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


if($BMI == "18" && $Excercise == 'full body 3 ' && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM fullbody3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}
 
 
 if($BMI == "24" && $Excercise == 'full body 3 ' && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM fullbody3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '8'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


 if($BMI == "29" && $Excercise == 'full body 3 ' && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM fullbody3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}	


 if($BMI == "42" && $Excercise == 'full body 3 ' && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM fullbody3";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


if($BMI == "18" && $Excercise == "chest" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM chest";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 
 
 
 if($BMI == "24" && $Excercise == "chest" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM chest";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


 if($BMI == "29" && $Excercise == "chest" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM chest";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}	


 if($BMI == "42" && $Excercise == "chest" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM chest";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}



if($BMI == "18" && $Excercise == "back" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM back";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 
 
 
 if($BMI == "24" && $Excercise == "back" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM back";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


 if($BMI == "29" && $Excercise == "back" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM back";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}	


 if($BMI == "42" && $Excercise == "back" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM back";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


if($BMI == "18" && $Excercise == "arms" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM arms";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 
 
 
 if($BMI == "24" && $Excercise == "arms" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM arms";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 


 if($BMI == "29" && $Excercise == "arms" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM arms";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 	


 if($BMI == "42" && $Excercise == "arms" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM arms";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 


if($BMI == "18" && $Excercise == "shoulders" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM shoulders";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '8'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 
 
 
 if($BMI == "24" && $Excercise == "shoulders" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM shoulders";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '8'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


 if($BMI == "29" && $Excercise == "shoulders" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM shoulders";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '8'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}	


 if($BMI == "42" && $Excercise == "shoulders" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM shoulders";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '8'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
}


if($BMI == "18" && $Excercise == "legs" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM legs";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 
 
 
 if($BMI == "24" && $Excercise == "legs" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM legs";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 


 if($BMI == "29" && $Excercise == "legs" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM legs";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 	


 if($BMI == "42" && $Excercise == "legs" && $Difficulty == "Intermediate" ){
	$sql = "SELECT exercise  AS routine FROM legs";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
	}
  
  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Intermediate'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '5'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
} 

 
} 


///Advanced
////////////////////////////////////
///Advanced
////////////////////////////////////
if($BMI == "18" && $Excercise == "lower1" && $Difficulty == "Advanced" ){
     $sql = "SELECT exercise  AS routine FROM lower1";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Exercise: " . $row["routine"]. "\n";
   }
     }
 
   $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Advanced'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Difficulty: " . $row["diff"]. "\n";
   }
  
 }
   $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Reps: " . $row["Repetitions"]. "\n";
   }
 } 
 
   $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Sets: " . $row["sets_set"]. "\n";
   }
 }
}

if($BMI == "18" && $Excercise == "lower2" && $Difficulty == "Advanced" ){
     $sql = "SELECT exercise  AS routine FROM lower2";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Exercise: " . $row["routine"]. "\n";
  }
    }

  $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Advanced'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Difficulty: " . $row["diff"]. "\n";
  }
 
}
  $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Reps: " . $row["Repetitions"]. "\n";
  }
} 

  $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Sets: " . $row["sets_set"]. "\n";
  }
}
}


if($BMI == "18" && $Excercise == "lower3" && $Difficulty == "Advanced" ){
     $sql = "SELECT exercise  AS routine FROM lower3";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Exercise: " . $row["routine"]. "\n";
   }
     }
 
   $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Advanced'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Difficulty: " . $row["diff"]. "\n";
   }
  
 }
   $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Reps: " . $row["Repetitions"]. "\n";
   }
 } 
 
   $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Sets: " . $row["sets_set"]. "\n";
   }
 }
}



if($BMI == "18" && $Excercise == "upper1" && $Difficulty == "Advanced" ){
     $sql = "SELECT exercise  AS routine FROM upper1";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Exercise: " . $row["routine"]. "\n";
   }
     }
 
   $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Advanced'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Difficulty: " . $row["diff"]. "\n";
   }
  
 }
   $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Reps: " . $row["Repetitions"]. "\n";
   }
 } 
 
   $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Sets: " . $row["sets_set"]. "\n";
   }
 }
}


if($BMI == "18" && $Excercise == "upper2" && $Difficulty == "Advanced" ){
     $sql = "SELECT exercise  AS routine FROM upper2";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Exercise: " . $row["routine"]. "\n";
   }
     }
 
   $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Advance'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Difficulty: " . $row["diff"]. "\n";
   }
  
 }
   $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Reps: " . $row["Repetitions"]. "\n";
   }
 } 
 
   $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Sets: " . $row["sets_set"]. "\n";
   }
 }
}


if($BMI == "18" && $Excercise == "upper3" && $Difficulty == "Advanced" ){
     $sql = "SELECT exercise  AS routine FROM upper3";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Exercise: " . $row["routine"]. "\n";
   }
     }
 
   $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Advanced'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Difficulty: " . $row["diff"]. "\n";
   }
  
 }
   $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Reps: " . $row["Repetitions"]. "\n";
   }
 } 
 
   $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '5'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Sets: " . $row["sets_set"]. "\n";
   }
 }
}


if($BMI == "18" && $Excercise == "fullbody1" && $Difficulty == "Advanced" ){
     $sql = "SELECT exercise  AS routine FROM fullbody1";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Exercise: " . $row["routine"]. "\n";
   }
     }
 
   $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Advanced'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Difficulty: " . $row["diff"]. "\n";
   }
  
 }
   $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Reps: " . $row["Repetitions"]. "\n";
   }
 } 
 
   $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Sets: " . $row["sets_set"]. "\n";
   }
 }
}



if($BMI == "18" && $Excercise == "fullbody2" && $Difficulty == "Advanced" ){
     $sql = "SELECT exercise  AS routine FROM fullbody2";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Exercise: " . $row["routine"]. "\n";
   }
     }
 
   $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Advanced'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Difficulty: " . $row["diff"]. "\n";
   }
  
 }
   $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Reps: " . $row["Repetitions"]. "\n";
   }
 } 
 
   $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Sets: " . $row["sets_set"]. "\n";
   }
 }
}


if($BMI == "18" && $Excercise == 'full body 3 ' && $Difficulty == "Advanced" ){
     $sql = "SELECT exercise  AS routine FROM fullbody3";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Exercise: " . $row["routine"]. "\n";
   }
     }
 
   $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Advanced'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Difficulty: " . $row["diff"]. "\n";
   }
  
 }
   $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '13'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Reps: " . $row["Repetitions"]. "\n";
   }
 } 
 
   $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Sets: " . $row["sets_set"]. "\n";
   }
 }
}


if($BMI == "18" && $Excercise == "chest" && $Difficulty == "Advanced" ){
     $sql = "SELECT exercise  AS routine FROM chest";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Exercise: " . $row["routine"]. "\n";
   }
     }
 
   $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Advanced'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Difficulty: " . $row["diff"]. "\n";
   }
  
 }
   $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '10'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Reps: " . $row["Repetitions"]. "\n";
   }
 } 
 
   $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '5'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Sets: " . $row["sets_set"]. "\n";
   }
 }
}



if($BMI == "18" && $Excercise == "back" && $Difficulty == "Advanced" ){
     $sql = "SELECT exercise  AS routine FROM back";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Exercise: " . $row["routine"]. "\n";
   }
     }
 
   $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Advanced'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Difficulty: " . $row["diff"]. "\n";
   }
  
 }
   $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '8'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Reps: " . $row["Repetitions"]. "\n";
   }
 } 
 
   $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Sets: " . $row["sets_set"]. "\n";
   }
 }
}


if($BMI == "18" && $Excercise == "arms" && $Difficulty == "Advanced" ){
     $sql = "SELECT exercise  AS routine FROM arms";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Exercise: " . $row["routine"]. "\n";
   }
     }
 
   $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Advanced'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Difficulty: " . $row["diff"]. "\n";
   }
  
 }
   $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Reps: " . $row["Repetitions"]. "\n";
   }
 } 
 
   $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '3'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Sets: " . $row["sets_set"]. "\n";
   }
 }
}


if($BMI == "18" && $Excercise == "shoulders" && $Difficulty == "Advanced" ){
     $sql = "SELECT exercise  AS routine FROM shoulders";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Exercise: " . $row["routine"]. "\n";
   }
     }
 
   $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Advacned'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Difficulty: " . $row["diff"]. "\n";
   }
  
 }
   $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '12'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Reps: " . $row["Repetitions"]. "\n";
   }
 } 
 
   $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '4'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Sets: " . $row["sets_set"]. "\n";
   }
 }
}


if($BMI == "18" && $Excercise == "legs" && $Difficulty == "Advanced" ){
     $sql = "SELECT exercise  AS routine FROM legs";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Exercise: " . $row["routine"]. "\n";
   }
     }
 
   $sql = "SELECT Diff AS diff FROM Difficulty WHERE Diff = 'Advanced'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Difficulty: " . $row["diff"]. "\n";
   }
  
 }
   $sql = "SELECT Reps AS Repetitions FROM reps WHERE Reps = '5'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Reps: " . $row["Repetitions"]. "\n";
   }
 } 
 
   $sql = "SELECT number_of_sets AS sets_set FROM num_sets WHERE number_of_sets = '5'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "Sets: " . $row["sets_set"]. "\n";
   }
 }
}
//////
 

$conn->close();
?>
