<!DOCTYPE html>
<html>

<head>
    <title>Pet Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: sans-serif;
            padding: 0;
            margin: 0;
        }

        header {
            background-color: #f7f7f7;
            padding: 10px 20px;
            text-align: center;
            border-bottom: 2px solid #ddd;
        }

        header h1 {
            margin: 0;
        }

        .container {
            padding: 20px;
        }

        .search-form {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-form input[type="text"],
        .search-form select,
        .search-form button {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .search-form button {
            background-color: #45a049;
            color: white;
            border: none;
            cursor: pointer;
        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .product {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            width: 300px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
        }

        .product:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .product h2 {
            margin: 0 0 10px 0;
            text-align: center;
        }

        .product p {
            margin: 5px 0;
        }

        .product img {
            max-width: 100%;
            border-radius: 4px;
        }

        .product button {
            padding: 8px;
            border: none;
            background-color: #45a049;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <h1>Pet Shop</h1>
    </header>
    <div class="container">
        <form class="search-form" method="GET" action="">
            <input type="text" name="search" placeholder="Search for pets" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <select name="sort_by">
                <option value="">-- Sort By --</option>
                <option value="price_asc">Sort by Price: Low to High</option>
                <option value="price_desc">Sort by Price: High to Low</option>
                <option value="alpha_asc">Sort by Alphabet: A to Z</option>
                <option value="alpha_desc">Sort by Alphabet: Z to A</option>
            </select>
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>

        <div class="product-list">
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

            // Initialize the query
            $sql = "SELECT * FROM pets";

            // Check if a search query is submitted
            if (isset($_GET['search'])) {
                $searchQuery = $_GET['search'];

                // Escape the search query to prevent SQL injection
                $searchQuery = $conn->real_escape_string($searchQuery);

                // Append search conditions to the SQL query
                $sql .= " WHERE name LIKE '%$searchQuery%' OR breed LIKE '%$searchQuery%'";
            }

            // Check the sorting option and append to the SQL query
            if (isset($_GET['sort_by'])) {
                $sortBy = $_GET['sort_by'];

                if ($sortBy == "price_asc") {
                    $sql .= " ORDER BY price ASC";
                } elseif ($sortBy == "price_desc") {
                    $sql .= " ORDER BY price DESC";
                } elseif ($sortBy == "alpha_asc") {
                    $sql .= " ORDER BY name ASC";
                } elseif ($sortBy == "alpha_desc") {
                    $sql .= " ORDER BY name DESC";
                }
            }

            // Execute the query and get the result set
            $result = $conn->query($sql);

            // Check if there are any results
            if ($result->num_rows > 0) {
                // Display the search results
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='product'>";
                    // echo "<img src='" . $row['img'] . "' alt='" . $row['name'] . "'>";
                    echo "<h2>" . $row['name'] . "</h2>";
                    echo "<p>No. " . $row['id'] . "</p>";
                    echo "<p>Description: " . $row['breed'] . "</p>";
                    echo "<p>Price: $" . $row['price'] . "</p>";
                    echo "<a href='form.php?id=" . $row['id'] . "'>";
                    echo "<button>Inquire Now</button>";
                    echo "</a>";
                    echo "</div>";
                }
            } else {
                echo "<p>No pets found matching your search query.</p>";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>
</body>

</html>
