<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CMPS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
$error_msg = '';
$success_msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $solvent = trim($_POST['solvent']);
    $purpose = trim($_POST['purpose']);
    
    // Basic validation
    if (empty($solvent) || empty($purpose)) {
        $error_msg = "Both fields are required!";
    } elseif (strlen($solvent) > 50) {
        $error_msg = "Solvent name must be 50 characters or less";
    } elseif (strlen($purpose) > 200) {
        $error_msg = "Purpose must be 200 characters or less";
    } else {
        // Use prepared statement
        $stmt = $conn->prepare("INSERT INTO Solvents (Solvents, Purpose) VALUES (?, ?)");
        $stmt->bind_param("ss", $solvent, $purpose);
        
        if ($stmt->execute()) {
            $success_msg = "Solvent added successfully!";
            // Clear form inputs after successful submission
            $solvent = $purpose = '';
        } else {
            $error_msg = "Error adding solvent: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solvents Management</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .add-form {
            margin: 20px 0;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 500px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            background-color: #004e42;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color:rgb(32, 115, 102);
        }
        .message {
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
        }
        .success {
            background-color: #dff0d8;
            color: #3c763d;
        }
        .error {
            background-color: #f2dede;
            color: #a94442;
        }
    </style>
</head>

<!-- Header section -->
<body>
    <header>
        <h1>CMP Slurry Website</h1>
        <!-- Navigation Menu -->
        <nav class="navbar">
            <!-- Clarkson University Logo -->
            <img id="Clarkson Logo" src="CU_Logo.png" alt="Clarkson Logo" style="height: 88px; width: auto; padding-top: 20px;">
            
            <!-- Navigation links for the tabs -->
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="tab1.php">Required Info</a></li>
                <li><a href="tab2.php">Input</a></li>
                <li><a href="tab3.php">Results</a></li>
                <li><a href="tab4.php">Help</a></li>
                <li><a href="tab5.php">State Ouput Emissions</a></li>
                <li><a href="tab6.php">Global Temperatures</a></li>
                <li><a href="tab7.php">All Equipment</a></li>
                <li><a href="#">Solvents</a></li>
                <li><a href="tab9.php">Precursors Chemicals</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main content area for this tab -->
<main class="maincontent">
        <h2>Solvents</h2>

        <?php if ($success_msg): ?>
            <div class="message success"><?= htmlspecialchars($success_msg) ?></div>
        <?php endif; ?>
        
        <?php if ($error_msg): ?>
            <div class="message error"><?= htmlspecialchars($error_msg) ?></div>
        <?php endif; ?>

        <?php
        // Query to get data
        $sql = "SELECT Solvents, Purpose FROM Solvents";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table style="border: 1px solid black; border-collapse: collapse; margin: 20px 0;">';
            echo '<tr style="background-color: #f2f2f2;">
                    <th style="border: 1px solid black; padding: 8px;">Solvents</th>
                    <th style="border: 1px solid black; padding: 8px;">Purpose</th>
                  </tr>';
            
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td style='border: 1px solid black; padding: 8px;'>".htmlspecialchars($row["Solvents"])."</td>
                        <td style='border: 1px solid black; padding: 8px;'>".htmlspecialchars($row["Purpose"])."</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No solvents found in database</p>";
        }
        
        $conn->close();
        ?>
        <!-- Add Solvent Form -->
        <div class="add-form">
            <h3>Add New Solvent</h3>
            <form method="POST">
                <div class="form-group">
                    <label for="solvent">Solvent Name (max 50 characters):</label>
                    <input type="text" id="solvent" name="solvent" 
                           maxlength="50" required
                           value="<?= isset($solvent) ? htmlspecialchars($solvent) : '' ?>">
                </div>
                
                <div class="form-group">
                    <label for="purpose">Purpose (max 200 characters):</label>
                    <input type="text" id="purpose" name="purpose" 
                           maxlength="200" required
                           value="<?= isset($purpose) ? htmlspecialchars($purpose) : '' ?>">
                </div>
                
                <button type="submit">Add Solvent</button>
            </form>
        </div>



    </main>
</body>

    <!-- Footer section -->
    <footer>
        <p>&copy; 2025 CMP Slurry. All rights reserved.</p>
    </footer>


</html> 