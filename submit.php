<?php 
include "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate
    if(!empty($name) && !empty($email) && !empty($message)) {
        $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if($stmt->execute()) {
            echo "✅ Message sent successfully!";
        } else {
            echo "❌ Something went wrong!";
        }
        
        $stmt->close();
    } else {
        echo "⚠️ All fields are required.";
    }
    
    $conn->close();
}


?>