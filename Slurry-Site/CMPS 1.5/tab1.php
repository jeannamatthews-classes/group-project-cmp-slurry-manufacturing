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
        <nav class="navbar">
            <!-- Clarkson University Logo -->
            <img id="Clarkson Logo" src="CU_Logo.png" alt="Clarkson Logo" style="height: 88px; width: auto; padding-top: 20px;">
            
            <!-- Navigation links for the tabs -->
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Required Info</a></li>
                <li><a href="tab2.php">Input</a></li>
                <li><a href="tab3.php">Results</a></li>
                <li><a href="tab4.php">Help</a></li>
                <li><a href="tab5.php">State Ouput Emissions</a></li>
                <li><a href="tab6.php">Global Temperatures</a></li>
                <li><a href="tab7.php">All Equipment</a></li>
                <li><a href="tab8.php">Solvents</a></li>
                <li><a href="tab9.php">Precursors Chemicals</a></li>
            </ul>
        </nav>
    </header>

    <!-- Navigation Menu -->
    

    <!-- Main content area for this tab -->
    <main class="maincontent">
        <h2>Required Information</h2>
        <h3 style="text-align: center; border: 2px solid; padding: 10px; background-color: #B5E6A2;">Before filling the form, keep the <span style="background-color: gold;">'required'</span> information ready for each process</h3>

        <div class="table-container">
            <table style="width:100%">
                <!-- Table header -->
                 <thead>
                    <tr class="header-row">
                        <th>Section</th>
                        <th>Category</th>
                        <th>Parameter</th>
                        <th>Required Details</th>
                    </tr>
                </thead>

                <!-- Table body -->
                <tbody>
                    <!-- Section: Input Material -->
                    <tr>
                        <td rowspan="3">Input Material</td>
                        <td rowspan="3">Materials</td>
                        <td class="required">Chemical Names</td>
                        <td class="required">Precusor materials and Solvents</td>
                    </tr>
                    <tr>
                        <td class="required">Quantities</td>
                        <td class="required">Each chemcial (kg)</td>
                    </tr>
                    <tr>
                        <td class="required">Water Consumption</td>
                        <td class="required">Total amount of water used per batch</td>
                    </tr>

                    <!-- Section: Equipment Specifications -->
                     <tr>
                        <td rowspan="8">Equipment Specifcations</td>
                        <td rowspan="5">Power</td>
                     </tr>
                     <tr>
                        <td class="required">Power Rating</td>
                        <td class="required">kW</td>
                     </tr>
                     <tr>
                        <td>Idle Power Consumption</td>
                        <td>kWh</td>
                     </tr>
                     <tr>
                        <td>Efficiency</td>
                        <td>Percentage (%)</td>
                     </tr>
                     <tr>
                        <td>Active Power Consumption</td>
                        <td>Typical Usuage (kWh)</td>
                     </tr>
                     <tr>
                        <td rowspan="3">Process Time</td>
                        <td class="required">Total Process Duration</td>
                        <td class="required">h</td>
                     </tr>
                     <tr>
                        <td>Typical Time Range</td>
                        <td>h</td>
                     </tr>
                     <tr>
                        <td>Tool Idle Time</td>
                        <td>h</td>
                     </tr>

                    <!-- Section: Process Parameters (if available) -->
                    <tr>
                        <td rowspan="3">Process Parameters</td>
                        <td rowspan="3">Yield Calculations</td>
                    </tr>
                    <tr>
                        <td>Actual Product Amount</td>
                        <td>Obtained during process</td>
                    </tr>
                    <tr>
                        <td>Process Yield</td>
                        <td>Percentage (%)</td>
                    </tr>
                    <tr>
                        <td rowspan="3">Environmental Metrics (if available)</td>
                        <td>Water Waste</td>
                        <td>Wastewaster Generation</td>
                        <td>Per kg of product</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Emissions Data</td>
                        <td>CO2 Equivalent Emissions</td>
                        <td>Direct emissions</td>
                    </tr>
                    <tr>
                        <td>Other Emissions</td>
                        <td>Relevant additional emissions</td>
                    </tr>

                </tbody>


            </table>
        </div>
    </main>
</body>

    <!-- Footer section -->
    <footer>
        <p>&copy; 2025 CMP Slurry. All rights reserved.</p>
    </footer>


</html> 