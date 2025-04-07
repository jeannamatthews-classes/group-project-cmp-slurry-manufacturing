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
                <li><a href="#">Results</a></li>
                <li><a href="tab4.php">Help</a></li>
                <li><a href="tab5.php">State Ouput Emissions</a></li>
                <li><a href="tab6.php">Global Temperatures</a></li>
                <li><a href="tab7.php">All Equipment</a></li>
                <li><a href="tab8.php">Solvents</a></li>
                <li><a href="tab9.php">Precursors Chemicals</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main content area for this tab -->
    <main class="maincontent">
        <h2>Results</h2>
        <p>Pull data from Excel and have a data table with only the results of each process</p>
        <p>Below shows a data table of all the processes that have been completed and their final results</p>
        <div>
            <table style="width:100%">
                <!-- Table header -->
                <thead>
                    <tr>
                        <th>Sheet Name</th>
                        <th>Process Names</th>
                        <th>Global Warming Potential (kg CO2-eq) / Kg Ceria</th>
                        <th>Energy Use (kWh) / Kg Ceria</th>
                        <th>Water Consumption (L) / Kg Ceria</th>
                        <th>Process Yield (%)</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Process 1</td>
                        <td>Mixing</td>
                        <td>0.5</td>
                        <td>2.0</td>
                        <td>1.5</td>
                        <td>95%</td>
                    </tr>

                    <tr>
                        <td>Process 2</td>
                        <td>Calcination</td>
                        <td>0.7</td>
                        <td>3.0</td>
                        <td>2.0</td>
                        <td>90%</td>
                    </tr>

                    <tr>
                        <td>Process 3</td>
                        <td>Milling</td>
                        <td>0.6</td>
                        <td>2.5</td>
                        <td>1.8</td>
                        <td>92%</td>
                    </tr>

                    <tr>
                        <td>Process 4</td>
                        <td>Milling</td>
                        <td>0.4</td>
                        <td>1.5</td>
                        <td>1.2</td>
                        <td>93%</td>
                    </tr>

                    <tr>
                        <td>Process 5</td>
                        <td>Filtration</td>
                        <td>0.3</td>
                        <td>1.0</td>
                        <td>0.8</td>
                        <td>94%</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div >

        </div>

    </main>
</body>

    <!-- Footer section -->
    <footer>
        <p>&copy; 2025 CMP Slurry. All rights reserved.</p>
    </footer>


</html> 