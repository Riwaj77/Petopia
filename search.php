<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a search query is submitted
if (isset($_GET['search'])) {
    $searchQuery = $_GET['search'];

    // Escape the search query to prevent SQL injection
    $searchQuery = $conn->real_escape_string($searchQuery);

    // Update the SQL query to search in the `name` and `breed` columns
    $sql = "SELECT * FROM pets WHERE name LIKE '%$searchQuery%' OR breed LIKE '%$searchQuery%'";

    // Execute the query and get the result set
    $result = $conn->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Display the search results
        echo "<h2>Search Results:</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>Pet ID: " . $row['id'] . " - Name: " . $row['name'] . " - Breed: " . $row['breed'] . " - Price: $" . $row['price'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No pets found matching your search query.";
    }
}

// Close the database connection
$conn->close();
?>
