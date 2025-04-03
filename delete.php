<?php 

include_once('db.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize input data
    $data = json_decode(file_get_contents('php://input'), true);
    
    $id = htmlspecialchars(trim($data['id']));
    // $email = filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL);
    // $date = htmlspecialchars(trim($data['date']));

    // Validate input
    $errors = [];
    
    if (empty($id)) {
        $errors[] = "id is required";
    }
    
    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $errors[] = "Invalid email format";
    // }
    
    // if (empty($date)) {
    //     $errors[] = "Date is required";
    // }

    // If validation passes
    if (empty($errors)) {
        // Prepare and bind
        $stmt = $conn->prepare("DELETE FROM booking WHERE id = ?");
     

         $stmt->bind_param("i", $id);
         
        // // Execute query
        if ($stmt->execute()) {
            $response = ["status" => "success", "message" => "Booking saved successfully"];
        } else {
            $response = ["status" => "error", "message" => "Error: " . $stmt->error];
        }
        
        $stmt->close();
    } else {
        $response = ["status" => "error", "message" => $errors];
    }

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}
?>