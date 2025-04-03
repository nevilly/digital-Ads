<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select database
$conn->select_db($dbname);

// Create users table
$sql = "CREATE TABLE IF NOT EXISTS news (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(30)  NULL,
    ad_type VARCHAR(30)  NULL,
    ad_unit VARCHAR(30)  NULL,
    img VARCHAR(30)  NULL,
    size VARCHAR(50) NOT NULL,
    position VARCHAR(50) NOT NULL,
    appearence VARCHAR(50) NOT NULL,
    price VARCHAR(50) NOT NULL,
    cashType VARCHAR(50) NOT NULL,
    category VARCHAR(50) NOT NULL,
    placement_type VARCHAR(50) NOT NULL,
    createDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'news' created successfully\n <br />";
} else {
    echo "Error creating table: " . $conn->error. "<br />";
}

// Create booking table
$sql = "CREATE TABLE IF NOT EXISTS booking (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ads_id  VARCHAR(30) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table ' booking' created successfully\n <br />";
} else {
    echo "Error creating table: " . $conn->error. "<br />";
}



// Insert dummy news
$sql = "INSERT INTO `news` (`id`, `brand`, `ad_type`, `ad_unit`, `img`, `size`, `position`, `appearence`, `price`, `cashType`, `category`, `placement_type`, `createDate`) VALUES
(1, 'Mwananchi', '', '', '', 'Full Page', 'Normal', 'B/white', '2,400,000', 'Tsh', 'news', '', '0000-00-00 00:00:00'),
(2, 'Mwananchi', '', '', '', 'Full Page', 'Normal', 'F/color', '3,700,000', 'Tsh', 'news', '', '0000-00-00 00:00:00'),
(3, 'Mwananchi', '', '', '', 'Half Page', 'Normal', 'B/White', '1,3000,000', 'Tsh', 'news', '', '2025-03-29 13:15:59'),
(4, 'Mwananchi', '', '', '', 'Half Page', 'Normal', 'F/Color', '2,070,000', 'Tsh', 'news', '', '2025-03-29 13:15:59'),
(5, 'Mwananchi', '', '', '', 'Front Strip', 'Special', 'F/color', '1,500,000', 'Tsh', 'news', '', '2025-03-29 13:22:51'),
(6, 'Citien', '', '', '', 'One Eight', 'Normal', 'F/color', '500,000', 'Tsh', 'news', '', '2025-03-29 13:22:51'),
(7, 'Citizen', '', '', '', 'Front-strip', 'Special', 'F/color', '1,000,000', 'Tsh', 'news', '', '2025-03-29 13:22:51'),
(8, 'Spoti', '', '', '', 'Full Page', 'Normal', 'F/color', '2,400,000', 'Tsh', 'news', '', '2025-03-29 13:22:51'),
(9, 'MwanaSpoti', '', '', '', 'Column Depth 33cm', 'Dimensions', '', '', '', 'news', '', '0000-00-00 00:00:00'),
(10, 'Facebook', 'social Media', NULL, NULL, 'font page', '', '', '211385', 'Tsh', '', '', '2025-04-03 08:57:37'),
(11, 'Instagram', 'social Media', NULL, NULL, 'font page', 'middle', '', '50000', 'Tsh', '', '', '2025-04-03 09:00:20')";

if ($conn->query($sql) === TRUE) {
    echo "Dummy news inserted successfully\n <br />";
} else {
    echo "Error inserting news: " . $conn->error. "<br />";
}

$conn->close();
echo "All operations completed successfully!";
?>