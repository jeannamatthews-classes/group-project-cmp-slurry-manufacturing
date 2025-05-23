<!DOCTYPE html>

<!-- HTML Layout -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMP Slurry Website</title>
    <link rel="stylesheet" href="style.css">
    <script  src="ProcessInputCalculate.js" type="text/javascript"></script>
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
              <li><a href="#">Input</a></li>
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

    <!-- Main content area for this tab -->
    <main class="maincontent">
        <h2>Start Process</h2>
        <!-- <p>would need to come back and add things to this</p> -->
        <form name ='ProcessInformationForm'>
          <div><!-- Start of section 1-->
            
            <h3>Process Information</h3>
            <select class="Required" name="ProcessStep" id="ProcessStep">
              <option  value="precursorSynthesis">Precursor Synthesis</option>
              <option value="calcination">Calcination</option>
              <option value="milling">Milling</option>
              <option value="Filtering">Filtering</option>
              <option value="Washing">Washing</option>
              <option value="Drying">Drying</option>
            </select>
            <h3>Input Materials</h3>

            <h4>1.1 Precursor Materials</h4>
              <table style="border: 1px solid black">
                <tr>
                  <td></td>
                  <td>Chemical Name</td>
                  <td>Chemical Formula</td>
                  <td>Quantity(kg)</td>
                  <td>Final Chemical formula</td>
                  <td>Stoichometic Ration(Final:initial)</td>
                  <td>Maximum Obtainable Product(kg)</td>
                </tr>
                <tr>
                  <td>Precursor Chemical 1:</td>
                  <td> <input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                </tr>
                <tr>
                  <td>Precursor Chemical 2:</td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                </tr>
              </table>

            <h4>1.2 Solvents</h4> 
              <table style="border: 1px solid black">
                <tr>
                  <td></td>
                  <td>Choose Solvent</td>
                  <td>Enter Solvent (Quantity(L or Kg))</td>
                </tr>
                <tr>
                  <td>Solvent 1:</td>
                  <td> <input type="text" ></td>
                  <td><input type="text" ></td> 
                </tr>
                <tr>
                  <td>Solvent 2:</td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>    
                </tr>
              </table>

            <h4>1.3 Water</h4> 
              <table style="border: 1px solid black">
                <tr>
                  <td></td>
                  <td>Purification Type</td>
                  <td>Quantity (L)</td>
                </tr>
                <tr>
                  <td>Water used for reaction</td>
                  <td> <input type="text" ></td>
                  <td><input id="WaterReactionQuantityInput"type="text" ></td>
                </tr>
                <tr>
                  <td>Cleaning/Washing Particle</td>
                  <td> <input type="text" ></td>
                  <td><input id="WaterCleainingQuantityInput" type="text" ></td>
                </tr>
                <tr>
                  <td>Tool Washing water</td>
                  <td><input type="text" ></td>
                  <td><input id="WaterToolQuantityInput" type="text" ></td>
                </tr>
              </table>
          </div><!-- End of section 1-->

          <div>
            <h3>Process Time Information</h3>
            <table style="border: 1px solid black">
              <tr>
                <td></td>
                <td>Replace with your Process Time</td>
              </tr>
              <tr>
                <td>Process Time (h):</td>
                <td> <input class="Required" type="text" ></td>
              </tr>
              <tr>
                <td>Typical Process Time Range (h):</td>
                <td> <input type="text" ></td>
              </tr>
              <tr>
                <td>Time Basis:</td>
                <td> <input type="text" ></td>
              </tr>
              <tr>
                <td>Warmup Time(h):</td>
                <td> <input type="text" ></td>
              </tr>
              <tr>
                <td>Tool Idle Time (h):</td>
                <td> <input type="text" ></td>
              </tr>
            </table>

            <h4>Equipment Power Information</h4>
            <table style="border: 1px solid black">
              <tr>
                <td></td>
                <td>Minimum</td>
                <td>Maximum</td>
                <td>Average</td>
              </tr>
              <tr>
                <td>Power Rating (kW)</td>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
                <td><input class="Required" type="text" ></td>
              </tr>
              <tr>
                <td>Idle Power Consumption (kWh)</td>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
              </tr>
              <tr>
                <td>Efficiency(%)</td>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
              </tr>
              <tr>
                <td>Typical Power Active Consumption (kW)</td>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
              </tr>
            </table>

            <h4>Process Conditions</h4>
              <table style="border: 1px solid black">
                <tr>
                  <td></td>
                  <td>Minimum</td>
                  <td>Maximum</td>
                  <td>Average</td>
                </tr>
                <tr>
                  <td>Operating Temperature (C)</td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                </tr>
                <tr>
                  <td>Operating Pressure (atm)</td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                </tr>
              </table>
            <h4>Equipment</h4>
              <table style="border: 1px solid black">
                  <tr>
                    <td>Production Volume per Batch (L)</td>
                    <td><input type="text" ></td>
                    <td>based on all the Input materials (1L=~1Kg)</td>
                  </tr>
                  <tr>
                    <td>Equipment Volume(L)</td>
                    <td><input type="text" ></td>
                    <td>Replace with your volume</td>
                  </tr>
                  <tr>
                    <td>Equipment Volume(L)</td>
                    <td><input type="text" ></td>
                    <td>Volume Utilzed fraction is Production:Equipment Volume</td>
                  </tr>
              </table>

            <h3>1.3 Energy Consumption Estimation</h3>
            <h4>Best Estimate: With idle Electricity</h4>
            <table style="border: 1px solid black">
              <tr>
                <td>Idle Electricity Consumption(kWh)</td>
                <td><input type="text" ></td>
              </tr>
              <tr>
                <td>Active Electricity Consumption(kWh)</td>
                <td><input type="text" ></td>
              </tr>
              <tr>
                <td>Heating/Cooling Energy(kWh)</td>
                <td><input type="text" ></td>
              </tr>
              <tr>
                <td>Total Energy Consumption(kWh)</td>
                <td><input id="TotalEnergyConsumptionInput" type="text" ></td>
              </tr>
            </table>

            <h3>1.4 Carbon Dioxide Equivalent Estimate</h3>
            <h4>1.4.1 Good Estimate</h4>
            <table style="border: 1px solid black">
            <tr>
              <td></td>
              <td></td>
              <td>CO2e(kg/kWh)</td>
            </tr>  
            <tr>
                <td>Energy source(State)</td>
                <td><input class="Required" type="text" ></td>
                <td><input  type="text" ></td>
              </tr>
            </table>

            <div class="table-container" style="overflow: auto; max-width: 90%;">
              <table style=" margin: 0; border: 1px solid black">
                <tr>
                  <td>Coal</td>
                  <td>Oil</td>
                  <td>Gas</td>
                  <td>Nuclear</td>
                  <td>Hydro</td>
                  <td>Biomass</td>
                  <td>Wind</td>
                  <td>Solar</td>
                  <td>Geo-thermal</td>
                </tr>
                <tr>
                  <td><input class="Required" type="text" ></td>
                  <td><input class="Required" type="text" ></td>
                  <td><input class="Required" type="text" ></td>
                  <td><input class="Required" type="text" ></td>
                  <td><input class="Required" type="text" ></td>
                  <td><input class="Required" type="text" ></td>
                  <td><input class="Required" type="text" ></td>
                  <td><input class="Required" type="text" ></td>
                  <td><input class="Required" type="text" ></td>
                </tr>
                <tr>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                  <td><input type="text" ></td>
                </tr>
              </table>
            </div>
            <h4>Yield Calculation for this process</h4>
            <table style="border: 1px solid black">
              <tr>
                <td>Theoritical Product Yield(Kg)</td>
                <td><input type="text" ></td>
              </tr>
              <tr>
                <td>Obtained Product(Kg)</td>
                <td><input class="Required" type="text" ></td>
              </tr>
              <tr>
                <td>Yield of this Process Step(%)</td>
                <td><input type="text" ></td>
              </tr>
              <tr>
                <td>Yield Loss in this Process Step(Kg)</td>
                <td><input type="text" ></td>
              </tr>              
            </table>

          </div>

          <!--Part 2 Output -->
          <div>
            <h3>2. Outputs</h3>
            <h4>2.1 Products</h4>
            <table style="border: 1px solid black">
              <tr>
                <td>Obtained Ceria Nanoparticle:</td>
                <td><input type="text" ></td>
              </tr>
              <tr>
                <td>By-product/Co-product 1:</td>
                <td><input type="text" ></td>
              </tr>
              <tr>
                <td>Water Waste Generation</td>
                <td><input type="text" ></td>
              </tr>
              <tr>
                <td>Total Products</td>
                <td><input type="text" ></td>
              </tr>            
              <tr>
                <td>Total Volume</td>
                <td><input type="text" ></td>
              </tr> 
            </table>

            <h4>2.2 Emissions</h4>
            <table style="border: 1px solid black">
              <tr>
                <td></td>
                <td>GHG</td>
                <td>Indicator</td>
                <td>GWP kgCO2e/kg GHG</td>
                <td>Amount(kg)</td>
                <td>Resulting Emission</td>
              </tr>
              <tr>
                <td>Air Emissions 1:</td>
                <td> <input type="text" ></td>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
                <td><input id="AirEmissionsOneResultEmissionInput" type="text" ></td>
              </tr>
              <tr>
                <td>Air Emissions 2:</td>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
                <td><input type="text" ></td>
                <td><input  id="AirEmissionsTwoResultEmissionInput" type="text" ></td>
              </tr>
              <tr>
                <td>Solid Waste 1:</td>
                <td><input type="text" disabled></td>
                <td><input type="text" disabled></td>
                <td><input type="text" disabled></td>
                <td><input type="text" disabled></td>
                <td><input  type="text" disabled></td>
              </tr>
            </table>

            <h4>2.3 Water Consumption</h4>
            <table style="border: 1px solid black">
              <tr>
                <td>Water Consumption (L/kg Ceria):</td>
                <td><input id="WaterConsumptionOutput" type="text" ></td>
              </tr>
              <tr>
                <td>Wastewater Generation (L/kg Ceria):</td>
                <td> <input id="WaterGenerationOutput" type="text" ></td>
              </tr>
            </table>

            <h4>2.4 Emission Outputs</h4>
            <table style="border: 1px solid black">
              <tr>
                <td>Direct CO2e Emissions (kg CO2/kg Ceria):</td>
                <td><input id="EmissionsOutput" type="text" ></td>
              </tr>
              <tr>
                <td>Other Emissions:</td>
                <td> <input type="text" ></td>
              </tr>
            </table>

            <h4>2.5 Energy Consumption Calculation</h4>
            <table style="border: 1px solid black">
              <tr>
                <td><label>Electricity Consumption(kWh/kg Ceria)</label></td>
                <td><input id="ElectricConsumOutput" type="text" ></td>
              </tr>
            </table>
                
          </div>
          <!--Part 2 Output END -->
          <div>
            <h4>3.0 Impact Assessment</h4>
            <table style="border: 1px solid black">
              <tr>
                <td>Global Warming Potential (kg CO2-eq):</td>
                <td><input id="GlobalWarmingPotentialOutput" type="text" ></td>
              </tr>
              <tr>
                <td>Human Toxicity Potential:</td>
                <td> <input type="text" disabled></td>
              </tr>
              <tr>
                <td>Ecotoxicity Potential:</td>
                <td><input type="text" disabled></td>
              </tr>
              <tr>
                <td>Resource Depletion:</td>
                <td><input type="text" disabled></td>
              </tr>
              <tr>
                <td>Cummulative Energy Demand (kWh):</td>
                <td><input id="CumEnergyDemandOutput" type="text" ></td>
              </tr>
              <tr>
                <td>Water Consumption (L):</td>
                <td><input id="ImpactAssWaterConsumptionOutput" type="text" ></td>
              </tr>
            </table>
            
          </div>
         
        </form>
        <button type="button" onClick ="Calculate();">Calculate</button>
        <button type="button">Add Process</button>
        <button type="button" onClick="Clear();">Clear</button>
    </main>
    
</body>

    <!-- Footer section -->
    <footer>
        <p>&copy; 2023 CMP Slurry. All rights reserved.</p>
    </footer>


</html> 