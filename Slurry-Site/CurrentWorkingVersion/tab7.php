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

?>
<!DOCTYPE html>

<!-- HTML Layout -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMP Slurry Website</title>
    <link rel="stylesheet" href="style.css">
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
              <li><a href="#">All Equipment</a></li>
              <li><a href="tab8.php">Solvents</a></li>
              <li><a href="tab9.php">Precursors Chemicals</a></li>
          </ul>
      </nav>
    </header>

    <!-- Main content area for this tab -->
    <main class="maincontent">
        <h2>All Equipment</h2>
        <?php
          // Query to get data
          $sql = "SELECT tool_name, chamber_h, chamber_w, chamber_d, vol, op_tmp_min, op_temp_max, pwr_rating, rpm_min, rpm_max, pfr_lpd, ut_vol, manufacturer, model_name, pwr_rating_kg, reference FROM equipment";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              echo '<table style="border: 1px solid black; border-collapse: collapse; margin: 20px 0;">';
              echo '<tr style="background-color: #f2f2f2;">
                      <th style="border: 1px solid black; padding: 8px;">Tools Used for Process</th>
                      <th style="border: 1px solid black; padding: 8px;">Chamber Size H (inches)</th>
                      <th style="border: 1px solid black; padding: 8px;">Chamber Size W (inches)</th>
                      <th style="border: 1px solid black; padding: 8px;">Chamber Size D (inches)</th>
                      <th style="border: 1px solid black; padding: 8px;">Volume (L)</th>
                      <th style="border: 1px solid black; padding: 8px;">Operating Temperature</th>
                      <th style="border: 1px solid black; padding: 8px;">Power Rating (kW)</th>
                      <th style="border: 1px solid black; padding: 8px;">RPM</th>
                      <th style="border: 1px solid black; padding: 8px;">Permeate Flow Rate (GPD)</th>
                      <th style="border: 1px solid black; padding: 8px;">Permeate Flow Rate (Liters/day)</th>
                      <th style="border: 1px solid black; padding: 8px;">Useful Tool Volume</th>
                      <th style="border: 1px solid black; padding: 8px;">Manufacturer</th>
                      <th style="border: 1px solid black; padding: 8px;">Model Name</th>
                      <th style="border: 1px solid black; padding: 8px;">Power Rating/kg</th>
                      <th style="border: 1px solid black; padding: 8px;">Reference</th>
                    </tr>';

              // Output data of each row
              while($row = $result->fetch_assoc()) {
                  // Format Operating Temperature
                  $op_temp = '';
                  $minTemp = $row["op_tmp_min"];
                  $maxTemp = $row["op_temp_max"];
                  if ((is_null($minTemp) || $minTemp == 0) && (is_null($maxTemp) || $maxTemp == 0)) {
                    $op_temp = ''; // leave blank
                  } elseif (!is_null($minTemp) && !is_null($maxTemp) && $minTemp < $maxTemp) {
                    $op_temp = htmlspecialchars($minTemp) . "°C - " . htmlspecialchars($maxTemp) . "°C";
                  } elseif (!is_null($minTemp) && $minTemp != 0) {
                    $op_temp = htmlspecialchars($minTemp) . "°C";
                  } elseif (!is_null($maxTemp) && $maxTemp != 0) {
                    $op_temp = htmlspecialchars($maxTemp) . "°C";
                  }

                  // Format RPM
                  $rpm = '';
                  $minRpm = $row["rpm_min"];
                  $maxRpm = $row["rpm_max"];
                  if (!is_null($minRpm) && !is_null($maxRpm) && $minRpm < $maxRpm) {
                      $rpm = htmlspecialchars($minRpm) . " - " . htmlspecialchars($maxRpm);
                  } elseif (!is_null($minRpm)) {
                      $rpm = htmlspecialchars($minRpm);
                  } elseif (!is_null($maxRpm)) {
                      $rpm = htmlspecialchars($maxRpm);
                  }

                  echo "<tr>
                          <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row["tool_name"] ?? '') . "</td>
                          <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row["chamber_h"] ?? '') . "</td>
                          <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row["chamber_w"] ?? '') . "</td>
                          <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row["chamber_d"] ?? '') . "</td>
                          <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row["vol"] ?? '') . " L </td>
                          <td style='border: 1px solid black; padding: 8px;'>$op_temp</td>
                          <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row["pwr_rating"] ?? '') . "</td>
                          <td style='border: 1px solid black; padding: 8px;'>$rpm</td>
                          <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row["pfr_lpd"] ?? '') . "</td>
                          <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row["pfr_lpd"] ?? '') . "</td>
                          <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row["ut_vol"] ?? '') . " L </td>
                          <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row["manufacturer"] ?? '') . "</td>
                          <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row["model_name"] ?? '') . "</td>
                          <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row["pwr_rating_kg"] ?? '') . "</td>
                          <td style='border: 1px solid black; padding: 8px;'>
                            " . (
                              (isset($row["reference"]) && preg_match('/^https?:\/\//', $row["reference"])) 
                                ? "<a href='" . htmlspecialchars($row["reference"]) . "' target='_blank'>" . htmlspecialchars($row["reference"]) . "</a>" 
                                : htmlspecialchars($row["reference"] ?? '')
                            ) . "
                          </td>
                        </tr>";
              }
              echo "</table>";
          } else {
              echo "<p>No equipment found in database.</p>";
          }
          $conn->close();
        ?>
       
    </main>
</body>

    <!-- Footer section -->
    <footer>
        <p>&copy; 2025 CMP Slurry. All rights reserved.</p>
    </footer>


</html> 