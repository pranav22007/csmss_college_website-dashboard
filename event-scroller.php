<?php
header("Content-Type: application/json");

// include DB connection (adjust if your website folder structure is different)
include "../csmss_poly_dashboard/common/dbcon.php";  

// Get page number (default = 1)
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$limit = 5; // events per request
$offset = ($page - 1) * $limit;

// Fetch events
$sql = "SELECT * FROM events ORDER BY events_id DESC LIMIT $limit OFFSET $offset";
$result = mysqli_query($conn, $sql);

$events = [];

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // public-facing path (so <img src=""> works on website side)
        $imagePath = !empty($row['image'])
            ? "csmss_poly_dashboard/assets/img/home/events/" . $row['image']
            : "https://via.placeholder.com/400x250?text=No+Image";

        $events[] = [
            "events_id" => $row['events_id'],
            "title" => htmlspecialchars($row['title']),
            "location" => htmlspecialchars($row['location']),
            "image" => $imagePath
        ];
    }
}

// Return JSON
echo json_encode([
    "page" => $page,
    "events" => $events
]);
?>
