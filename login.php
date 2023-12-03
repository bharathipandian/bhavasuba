<?php
// if (isset($FName) || isset($MName) || isset($LName) || isset($Em) || isset($Mob) || isset($AltMob) || isset($sta) || isset($cit) || isset($Inve) || isset($tex)) {
//   $fname = $_POST["First Name"];
//   $mname = $_POST["Middle Name"];
//   $lname = $_POST["Last Name"];
//   $em = $_POST["Email"];
//   $mob = $_POST["Mobile"];
//   $altMob = $_POST["Alternative Mobile"];
//   $sta = $_POST["state"];
//   $cit = $_POST["city"];
//   $Inve = $_POST["Investment"];
//   $tex = $_POST["textarea"];

//       $con = mysqli_connect("localhost", "root", "", "registration form");
//       $sql = "INSERT INTO form details(First_Name,Middle_Name,Last_Name,Email,Mobile,Alternativemobile,Select_State,Select_City,Select_Investment_Range,Query_(optional) values('$fname','$mname','$lname','$em','$mob','$altMob','$sta','$cit','$Inve','$tex' )";
//       $r = mysqli_query($con, $sql);
//       if ($r) {
//             echo "YOUR DETAILS ADDED SUCESSFULLY";
//       } else {
//             echo "YOURS DETAILS DID NOT ADDED";
//       }
// }



// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$FName = isset($_POST["First_Name"]) ? $_POST["First_Name"] : '';
$MName = isset($_POST["Middle_Name"]) ? $_POST["Middle_Name"] : '';
$LName = isset($_POST["Last_Name"]) ? $_POST["Last_Name"] : '';
$Em = isset($_POST["Email"]) ? $_POST["Email"] : '';
$Mob = isset($_POST["Mobile"]) ? $_POST["Mobile"] : '';
$AltMob = isset($_POST["Alternative_Mobile"]) ? $_POST["Alternative_Mobile"] : '';
$sta = isset($_POST["State"]) ? $_POST["State"] : '';
$cit = isset($_POST["City"]) ? $_POST["City"] : '';
$Inve = isset($_POST["Investment"]) ? $_POST["Investment"] : '';
$tex = isset($_POST["Textarea"]) ? $_POST["Textarea"] : '';

if (!empty($FName) || !empty($MName) || !empty($LName) || !empty($Em) || !empty($Mob) || !empty($AltMob) || !empty($sta) || !empty($cit) || !empty($Inve) || !empty($tex)) {
    $con = mysqli_connect("localhost", "root", "", "registration_form");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
//     $sql = "INSERT INTO `form_details` (First_Name, Middle_Name, Last_Name, Email, Mobile, Alternative_Mobile, Select_State, Select_City, Select_Investment_Range, Query) VALUES ('$FName', '$MName', '$LName', '$Em', '$Mob', '$AltMob', '$sta', '$cit', '$Inve', '$tex')";
    $sql = "INSERT INTO form_details (First_Name, Middle_Name, Last_Name, Email, Mobile, Alternative_Mobile, Select_State, Select_City, Select_Investment_Range, Query) VALUES ('$FName', '$MName', '$LName', '$Em', '$Mob', '$AltMob', '$sta', '$cit', '$Inve', '$tex')";
    $r = mysqli_query($con, $sql);

    if ($r) {
        echo "YOUR DETAILS ADDED SUCCESSFULLY";
    } else {
        echo "YOUR DETAILS DID NOT ADD";
    }

    mysqli_close($con);
}


// if (isset($_POST["First_Name"], $_POST["Middle_Name"], $_POST["Last_Name"], $_POST["Email"], $_POST["Mobile"], $_POST["Alternative_Mobile"], $_POST["state"], $_POST["city"], $_POST["Investment"], $_POST["textarea"])) {
//       $FName = $_POST["First_Name"];
//       $MName = $_POST["Middle_Name"];
//       $LName = $_POST["Last_Name"];
//       $Em = $_POST["Email"];
//       $Mob = $_POST["Mobile"];
//       $AltMob = $_POST["Alternative_Mobile"];
//       $sta = $_POST["state"];
//       $cit = $_POST["city"];
//       $Inve = $_POST["Investment"];
//       $tex = $_POST["textarea"];

//       // Establishing connection to database
//       $con = mysqli_connect("localhost", "root", "", "registration_form");

//       // Checking the connection
//       if (mysqli_connect_errno()) {
//           echo "Failed to connect to MySQL: " . mysqli_connect_error();
//           exit();
//       }

//       // Using prepared statements to prevent SQL injection
//       $sql = "INSERT INTO form details (First Name, Middle_Name, Last_Name, Email, Mobile, Alternative_mobile, Select_State, Select_City, Select_Investment_Range, Query(optional) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

//       $stmt = mysqli_prepare($con, $sql);

//       // Bind parameters and execute the statement
//       mysqli_stmt_bind_param($stmt, "ssssssssss", $FName, $MName, $LName, $Em, $Mob, $AltMob, $sta, $cit, $Inve, $tex);
//       mysqli_stmt_execute($stmt);

//       // Checking if the insertion was successful
//       if (mysqli_stmt_affected_rows($stmt) > 0) {
//           echo "YOUR DETAILS ADDED SUCCESSFULLY";
//       } else {
//           echo "YOUR DETAILS DID NOT GET ADDED";
//       }

//       // Closing statement and connection
//       mysqli_stmt_close($stmt);
//       mysqli_close($con);
//   } else {
//       echo "Some form fields are empty.";
//   }


// if (isset($_POST["First_Name"], $_POST["Middle_Name"], $_POST["Last_Name"], $_POST["Email"], $_POST["Mobile"], $_POST["Alternative_Mobile"], $_POST["state"], $_POST["city"], $_POST["Investment"], $_POST["textarea"])) {
//     @$FName = $_POST["First_Name"];
//     @$MName = $_POST["Middle_Name"];
//     @$LName = $_POST["Last_Name"];
//     @$Em = $_POST["Email"];
//     @$Mob = $_POST["Mobile"];
//     @$AltMob = $_POST["Alternative_Mobile"];
//     @$sta = $_POST["state"];
//     @$cit = $_POST["city"];
//     @$Inve = $_POST["Investment"];
//     @$tex = $_POST["textarea"];

//     // Establishing connection to the database
//     $con = mysqli_connect("localhost", "root", "", "registration_form");

//     // Checking the connection
//     if (mysqli_connect_errno()) {
//         echo "Failed to connect to MySQL: " . mysqli_connect_error();
//         exit();
//     }

//     // Using prepared statements to prevent SQL injection
//     $sql = "INSERT INTO form_details (First_Name, Middle_Name, Last_Name, Email, Mobile, Alternative_Mobile, Select_State, Select_City, Select_Investment_Range, Query) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
//     $stmt = mysqli_prepare($con, $sql);

//     // Bind parameters and execute the statement
//     mysqli_stmt_bind_param($stmt, "ssssssssss", $FName, $MName, $LName, $Em, $Mob, $AltMob, $sta, $cit, $Inve, $tex);
//     mysqli_stmt_execute($stmt);

//     // Checking if the insertion was successful
//     if (mysqli_stmt_affected_rows($stmt) > 0) {
//         echo "YOUR DETAILS ADDED SUCCESSFULLY";
//     } else {
//         echo "YOUR DETAILS DID NOT GET ADDED";
//     }

//     // Closing the statement and connection
//     mysqli_stmt_close($stmt);
//     mysqli_close($con);
// } else {
//     echo "Some form fields are empty.";
// }



// if (
//     isset($_POST["First_Name"]) ||
//     isset($_POST["Middle_Name"]) ||
//     isset($_POST["Last_Name"]) ||
//     isset($_POST["Email"]) ||
//     isset($_POST["Mobile"]) ||
//     isset($_POST["Alternative_Mobile"]) ||
//     isset($_POST["state"]) ||
//     isset($_POST["city"]) ||
//     isset($_POST["Investment"]) ||
//     isset($_POST["textarea"])
// ) {
//     $FName = $_POST["First_Name"];
//     $MName = $_POST["Middle_Name"];
//     $LName = $_POST["Last_Name"];
//     $Em = $_POST["Email"];
//     $Mob = $_POST["Mobile"];
//     $AltMob = $_POST["Alternative_Mobile"];
//     $sta = $_POST["state"];
//     $cit = $_POST["city"];
//     $Inve = $_POST["Investment"];
//     $tex = $_POST["textarea"];

//     $con = mysqli_connect("localhost", "root", "", "registration_form");

//     // Check connection
//     if (mysqli_connect_errno()) {
//         echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     }

//     $sql = "INSERT INTO form_details (First_Name, Middle_Name, Last_Name, Email, Mobile, Alternative_Mobile, Select_State, Select_City, Select_Investment_Range, Query_optional) VALUES ('$FName', '$MName', '$LName', '$Em', '$Mob', '$AltMob', '$sta', '$cit', '$Inve', '$tex')";

//     $r = mysqli_query($con, $sql);

//     if ($r) {
//         echo "YOUR DETAILS ADDED SUCCESSFULLY";
//     } else {
//         echo "YOUR DETAILS DID NOT ADDED";
//     }

//     // Close the connection
//     mysqli_close($con);
// }


// if (
//     isset($_POST["First_Name"]) &&
//     isset($_POST["Middle_Name"]) &&
//     isset($_POST["Last_Name"]) &&
//     isset($_POST["Email"]) &&
//     isset($_POST["Mobile"]) &&
//     isset($_POST["Alternative_Mobile"]) &&
//     isset($_POST["state"]) &&
//     isset($_POST["city"]) &&
//     isset($_POST["Investment"]) &&
//     isset($_POST["textarea"])
// ) {
//     // Assign values from POST data to variables
//     $FName = $_POST["First_Name"];
//     $MName = $_POST["Middle_Name"];
//     $LName = $_POST["Last_Name"];
//     $Em = $_POST["Email"];
//     $Mob = $_POST["Mobile"];
//     $AltMob = $_POST["Alternative_Mobile"];
//     $sta = $_POST["state"];
//     $cit = $_POST["city"];
//     $Inve = $_POST["Investment"];
//     $tex = $_POST["textarea"];

//     // Establish database connection
//     $con = mysqli_connect("localhost", "root", "", "registration_form");

//     // Check connection
//     if (mysqli_connect_errno()) {
//         die("Failed to connect to MySQL: " . mysqli_connect_error());
//     }

//     // Use prepared statement to prevent SQL injection
//     $sql = "INSERT INTO form_details (First_Name, Middle_Name, Last_Name, Email, Mobile, AlternativeMobile, Select_State, Select_City, Select_Investment_Range, Query_optional) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

//     $stmt = mysqli_prepare($con, $sql);

//     // Bind parameters
//     mysqli_stmt_bind_param($stmt, "ssssssssss", $FName, $MName, $LName, $Em, $Mob, $AltMob, $sta, $cit, $Inve, $tex);

//     // Execute the statement
//     $result = mysqli_stmt_execute($stmt);

//     // Check for success
//     if ($result) {
//         echo "YOUR DETAILS ADDED SUCCESSFULLY";
//     } else {
//         echo "YOUR DETAILS DID NOT ADDED";
//     }

//     // Close the statement and connection
//     mysqli_stmt_close($stmt);
//     mysqli_close($con);
// }




// // Check if all the necessary fields are set in the $_POST array
// if (
//     isset($_POST["First_Name"]) &&
//     isset($_POST["Middle_Name"]) &&
//     isset($_POST["Last_Name"]) &&
//     isset($_POST["Email"]) &&
//     isset($_POST["Mobile"]) &&
//     isset($_POST["Alternative_Mobile"]) &&
//     isset($_POST["state"]) &&
//     isset($_POST["city"]) &&
//     isset($_POST["Investment"]) &&
//     isset($_POST["textarea"])
// ) {
//     // Assign values from $_POST array to variables
//     $FName = $_POST["First_Name"];
//     $MName = $_POST["Middle_Name"];
//     $LName = $_POST["Last_Name"];
//     $Em = $_POST["Email"];
//     $Mob = $_POST["Mobile"];
//     $AltMob = $_POST["Alternative_Mobile"];
//     $sta = $_POST["state"];
//     $cit = $_POST["city"];
//     $Inve = $_POST["Investment"];
//     $tex = $_POST["textarea"];

//     // Create a connection to the database
//     $con = mysqli_connect("localhost", "root", "", "registration_form");

//     // Check the connection
//     if (mysqli_connect_errno()) {
//         echo "Failed to connect to MySQL: " . mysqli_connect_error();
//         exit();
//     }

//     // Prepared statement to prevent SQL injection
//     $sql = "INSERT INTO form_details (First_Name, Middle_Name, Last_Name, Email, Mobile, AlternativeMobile, Select_State, Select_City, Select_Investment_Range, Query_optional) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

//     // Prepare the statement
//     $stmt = mysqli_prepare($con, $sql);

//     // Bind parameters to the statement
//     mysqli_stmt_bind_param($stmt, "ssssssssss", $FName, $MName, $LName, $Em, $Mob, $AltMob, $sta, $cit, $Inve, $tex);

//     // Execute the statement
//     $success = mysqli_stmt_execute($stmt);

//     // Check if the insertion was successful
//     if ($success) {
//         echo "YOUR DETAILS ADDED SUCCESSFULLY";
//     } else {
//         echo "YOUR DETAILS WERE NOT ADDED";
//     }

//     // Close the statement and the connection
//     mysqli_stmt_close($stmt);
//     mysqli_close($con);
// } else {
//     echo "All fields are required.";
// }



// // Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Check if all the necessary fields are set in the $_POST array
//     if (
//         isset($_POST["First_Name"]) &&
//         isset($_POST["Middle_Name"]) &&
//         isset($_POST["Last_Name"]) &&
//         isset($_POST["Email"]) &&
//         isset($_POST["Mobile"]) &&
//         isset($_POST["Alternative_Mobile"]) &&
//         isset($_POST["state"]) &&
//         isset($_POST["city"]) &&
//         isset($_POST["Investment"]) &&
//         isset($_POST["textarea"])
//     ) {
//         // Assign values from $_POST array to variables
//         $FName = $_POST["First_Name"];
//         $MName = $_POST["Middle_Name"];
//         $LName = $_POST["Last_Name"];
//         $Em = $_POST["Email"];
//         $Mob = $_POST["Mobile"];
//         $AltMob = $_POST["Alternative_Mobile"];
//         $sta = $_POST["state"];
//         $cit = $_POST["city"];
//         $Inve = $_POST["Investment"];
//         $tex = $_POST["textarea"];

//         // Create a connection to the database
//         $con = mysqli_connect("localhost", "root", "", "registration_form");

//         // Check the connection
//         if (mysqli_connect_errno()) {
//             echo "Failed to connect to MySQL: " . mysqli_connect_error();
//             exit();
//         }

//         // Prepared statement to prevent SQL injection
//         $sql = "INSERT INTO form_details (First_Name, Middle_Name, Last_Name, Email, Mobile, Alternative_Mobile, Select_State, Select_City, Select_Investment_Range, Query_optional) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

//         // Prepare the statement
//         $stmt = mysqli_prepare($con, $sql);

//         // Bind parameters to the statement
//         mysqli_stmt_bind_param($stmt, "ssssssssss", $FName, $MName, $LName, $Em, $Mob, $AltMob, $sta, $cit, $Inve, $tex);

//         // Execute the statement
//         $success = mysqli_stmt_execute($stmt);

//         // Check if the insertion was successful
//         if ($success) {  
//             echo "YOUR DETAILS ADDED SUCCESSFULLY";
//         } else {
//             echo "YOUR DETAILS WERE NOT ADDED";
//         }

//         // Close the statement and the connection
//         mysqli_stmt_close($stmt);
//         mysqli_close($con);
//     } else {
//         echo "All fields are required.";
//     }
// }


// $sql = "INSERT INTO form_details(First_Name, Middle_Name, Last_Name, Email, Mobile, Alternativemobile, Select_State, Select_City, Select_Investment_Range, Query_optional) VALUES ('$FName', '$MName', '$LName', '$Em', '$Mob', '$AltMob', '$sta', '$cit', '$Inve', '$tex')";


// $stmt = $con->prepare("INSERT INTO form_details(First_Name, Middle_Name, Last_Name, Email, Mobile, Alternativemobile, Select_State, Select_City, Select_Investment_Range, Query_optional) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// $stmt->bind_param("ssssssssss", $FName, $MName, $LName, $Em, $Mob, $AltMob, $sta, $cit, $Inve, $tex);

// if ($stmt->execute()) {
//     echo "YOUR DETAILS ADDED SUCCESSFULLY";
// } else {
//     echo "YOUR DETAILS DID NOT ADD";
// }

// $stmt->close();

?>