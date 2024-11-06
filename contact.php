<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "contact_form_db"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $firstName = htmlspecialchars(trim($_POST['fname']));
    $lastName = htmlspecialchars(trim($_POST['lname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }


    $stmt = $conn->prepare("INSERT INTO contacts (first_name, last_name, email, message) VALUES (?, ?, ?, ?)");
    
    if ($stmt === false) {
        die("Prepare failed: " . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("ssss", $firstName, $lastName, $email, $message);

  
    if ($stmt->execute()) {
        echo "Thank you for contacting us, $firstName. We will get back to you shortly.";
    } else {
        echo "Error: " . htmlspecialchars($stmt->error);
    }

   
    $stmt->close();
} else {
    echo "Invalid request method.";
}


$conn->close();
?>
  