<?php
// Database connection (replace with your credentials)
include 'db.php';

// Get filters from GET parameters
$search = isset($_GET['search']) ? $_GET['search'] : '';
$priceRange = isset($_GET['price']) ? explode('-', $_GET['price']) : [];
$size = isset($_GET['size']) ? $_GET['size'] : '';
$category = isset($_GET['category']) ? $_GET['category'] : '';

// Build SQL query
$query = "SELECT * FROM news WHERE 1=1";
$params = [];

if (!empty($search)) {
    $query .= " AND (brand LIKE ? OR ad_type LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
}

if (!empty($priceRange)) {
    $query .= " AND price BETWEEN ? AND ?";
    $params[] = $priceRange[0];
   @$params[] = $priceRange[1];
}

if (!empty($size)) {
    $query .= " AND size = ?";
    $params[] = $size;
}

if (!empty($category)) {
    $query .= " AND category = ?";
    $params[] = $category;
}

// Prepare and execute query
$stmt = $conn->prepare($query);
if ($params) {
    $types = str_repeat('s', count($params));
    $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$result = $stmt->get_result();

// Display results
if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">'.htmlspecialchars($row['brand']).'</h5>
                    <p class="card-text">Category: '.htmlspecialchars($row['category']).'</p>
                    <p class="card-text">Size: '.htmlspecialchars($row['size']).'</p>
                    <p class="card-text">Price:'.htmlspecialchars($row['price']).' Tsh</p>
                </div>
                <div class=\"col text-center \" style="background:purple; border-radius:24px 24px 0px 0px; cursor:pointer;" type=\"button\" id="\btnT\" onClick = bookNow('.$row['id'].')  >
                                        <h5 class=\"text-center\" style="margin-left:40%; color:white;padding-top:10px;">Book</h5>
                                      

                </div>
            </div>
        </div>';
    }




} else {
    echo '<div class="alert alert-warning">No results found.</div>';
}

$stmt->close();
$conn->close();
?>