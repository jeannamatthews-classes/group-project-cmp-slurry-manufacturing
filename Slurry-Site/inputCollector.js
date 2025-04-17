// waits for document to load then grabs all the elements from the ID listed in the HTML
document.addEventListener("DOMContentLoaded", () => {
    const collectAll  = document.getElementById("calculate"); // Calculate button
    const processSelect = document.getElementById("ProcessStep"); //Process drop down
    
    //gets triggured when user selects a different option
    processSelect.addEventListener("change", () => {
      console.log("Selected Process:", processSelect.value);//for debugging!!
    });

  // Collects input from Precursor Materials
    collectAll.addEventListener('click', function () {
      const precursorTable = document.getElementById("precursorTable"); //ID for Precursor Materials Table
      const precursorRows = precursorTable.querySelectorAll('tr');
      const precursorData = [];

      for (let i = 1; i < precursorRows.length; i++) {
        const inputs = precursorRows[i].querySelectorAll('input');
        if (inputs.length > 0) {
            precursorData.push({
                chemicalName: inputs[0].value.trim(),
                chemicalFormula: inputs[1].value.trim(),
                quantityKg: inputs[2].value.trim(),
                finalFormula: inputs[3].value.trim(),
                stoichiometricRatio: inputs[4].value.trim(),
                maxProductKg: inputs[5].value.trim()
            });
        }
    }
    document.getElementById("PrecursorOutput").innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(precursorData, null, 2) + "</pre>"; //For debugging

    // Collects input from Solvents
    const solventTable = document.getElementById("solventTable"); // ID for Solvent Table
    const solventRows = solventTable.querySelectorAll('tr');
    const solventData = [];
    for (let i = 1; i < solventRows.length; i++) {
      const inputs = solventRows[i].querySelectorAll('input');
      if (inputs.length > 0) {
          solventData.push({
              solvent: inputs[0].value.trim(),
              solventQuantity: inputs[1].value.trim(),
          });
      }
    }
    document.getElementById("SolventOutput").innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(solventData, null, 2) + "</pre>"; //For debugging

    // Collects input from water table
    const waterTable = document.getElementById("waterTable"); // ID for water Table
    const waterRows = waterTable.querySelectorAll('tr');
    const waterData = [];

    for (let i = 1; i < waterRows.length; i++) {
        const inputs = waterRows[i].querySelectorAll('input');
        if (inputs.length > 0) {
            waterData.push({
                washingParticle: inputs[0].value.trim(),
                toolWashingWater: inputs[1].value.trim(),
            });
        }
    }
    document.getElementById("waterOutput").innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(waterData, null, 2) + "</pre>"; //For debugging
      
    //Collects input from time table
      const timeTable = document.getElementById("timeTable"); //ID for time Table
      const timeRows = timeTable.querySelectorAll('tr');
      const timeData = [];

      timeData.push({ processTime: timeRows[1].querySelector("td input").value.trim() });
      timeData.push({ processTimeRange: timeRows[2].querySelector("td input").value.trim() });
      timeData.push({ timeBasis: timeRows[3].querySelector("td input").value.trim() });
      timeData.push({ warmupTime: timeRows[4].querySelector("td input").value.trim() });
      timeData.push({ toolIdleTime: timeRows[5].querySelector("td input").value.trim() });

      document.getElementById("timeOutput").innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(timeData, null, 2) + "</pre>"; //For debugging

      //Collects input from power table
      const powerTable = document.getElementById("powerTable"); //ID for power Table
      const powerRows = powerTable.querySelectorAll('tr');
      const powerData = [];

      for (let i = 1; i < powerRows.length; i++) { // Skip header row
        const cells = powerRows[i].querySelectorAll("td");
        const label = cells[0].textContent.trim();
        const min = cells[1].querySelector("input").value.trim();
        const max = cells[2].querySelector("input").value.trim();
        const avg = cells[3].querySelector("input").value.trim();
      
        powerData.push({
          label,
          min,
          max,
          avg
        });
      }

      document.getElementById("powerOutput").innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(powerData, null, 2) + "</pre>"; //For debugging

      //Collects input from Process Condition table
      const processConditionTable = document.getElementById("processConditionTable"); //ID for process condition Table
      const processConditionRows = processConditionTable.querySelectorAll('tr');
      const processConditionData = [];

      for (let i = 1; i < processConditionRows.length; i++) { // Skip header row
        const cells = processConditionRows[i].querySelectorAll("td");
        const label = cells[0].textContent.trim();
        const min = cells[1].querySelector("input").value.trim();
        const max = cells[2].querySelector("input").value.trim();
        const avg = cells[3].querySelector("input").value.trim();
      
        processConditionData.push({
          label,
          min,
          max,
          avg
        });
      }

      document.getElementById("processConditionOutput").innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(processConditionData, null, 2) + "</pre>"; //For debugging

      //input from Equipment, Best Estimate: With idle Electricity, and Energy source(State) are collected through input IDs

      //collects input form Good Estimate table
      const goodEstimateTable = document.getElementById("goodEstimate"); // ID for good Estimate table
      const estimateRows = goodEstimateTable.querySelectorAll("tr");
      const energySources = [];
      const goodEstimateData = [];

      const headerCells = estimateRows[0].querySelectorAll("td");
      headerCells.forEach(cell => {
        energySources.push(cell.textContent.trim());
      });
      
      for (let i = 1; i < estimateRows.length; i++) {
        const inputs = estimateRows[i].querySelectorAll("input");
        const rowData = {};
        for (let j = 0; j < inputs.length; j++) {
          rowData[energySources[j]] = inputs[j].value.trim();
        }
        goodEstimateData.push(rowData);
      }

      document.getElementById("goodEstimateOutput").innerHTML = "<h4>Collecteing Data:</h4><pre>" + JSON.stringify(goodEstimateData, null, 2) + "</pre>"; //For debugging

      //Yield Calculation for this process and products under outputs were done through input ID
      const emissionsTable = document.getElementById("emissionsTable"); // ID for emissions table
      const emissionsRows = emissionsTable.querySelectorAll("tr");
      const emissionsData = [];

      for (let i = 1; i < emissionsRows.length; i++) {
        const cells = emissionsRows[i].querySelectorAll("td");
        const label = cells[0].textContent.trim();
        const ghg = cells[1].querySelector("input").value.trim();
        const indicator = cells[2].querySelector("input").value.trim();
        const gwp = cells[3].querySelector("input").value.trim();
        const amount = cells[4].querySelector("input").value.trim();
        const result = cells[5].querySelector("input").value.trim();
      
        emissionsData.push({
          label,
          GHG: ghg,
          Indicator: indicator,
          GWP_kgCO2e_per_kg_GHG: gwp,
          Amount_kg: amount,
          Resulting_Emission: result
        });
      }

      document.getElementById("emissionsOutput").innerHTML = "<h4>Collected Emissions Data:</h4><pre>" + JSON.stringify(emissionsData, null, 2) + "</pre>"; //For debugging

      // Water Consumption, Emission Outputs, Energy Consumption Calculation, and Impact Assessment done by input ID



      });
      



    // // Collects input from Solvents 
    // collectSolvents.addEventListener('click', function () {
    //   const table = this.previousElementSibling;
    //   const rows = table.querySelectorAll('tr');

    //   const solventData = [];

    //   for (let i = 1; i < rows.length; i++) { // Skip header row
    //       const inputs = rows[i].querySelectorAll('input');
    //       if (inputs.length > 0) {
    //         solventData.push({
    //               solvent: inputs[0].value.trim(),
    //               solventQuantity: inputs[1].value.trim(),
    //           });
    //       }
    //   }
    //   const SolventOutputDiv = document.getElementById("SolventOutput");
    //   SolventOutputDiv.innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(solventData, null, 2) + "</pre>";
    // });

    // // Collects input from Water 
    // collectWater.addEventListener('click', function () {
    //   const table = this.previousElementSibling;
    //   const rows = table.querySelectorAll('tr');

    //   const waterData = [];

    //   for (let i = 1; i < rows.length; i++) { // Skip header row
    //       const inputs = rows[i].querySelectorAll('input');
    //       if (inputs.length > 0) {
    //         waterData.push({
    //               washingParticle: inputs[0].value.trim(),
    //               toolWashingWater: inputs[1].value.trim(),
    //           });
    //       }
    //   }
    //   const waterOutputDiv = document.getElementById("waterOutput");
    //   waterOutputDiv.innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(waterData, null, 2) + "</pre>";
    // });

    // // Collects input from Process Time Information 
    // collectTime.addEventListener('click', function () {
    //   const table = this.previousElementSibling;
    //   const rows = table.querySelectorAll('tr');

    //   const timeData = [];

    //   const processTime = rows[1].querySelectorAll("td input");
    //   timeData.push({
    //     processTime: processTime[0].value.trim()
    //   });
    //   const processTimeRange = rows[2].querySelectorAll("td input");
    //   timeData.push({
    //     processTimeRange: processTimeRange[0].value.trim()
    //   });
    //   const timeBasis = rows[3].querySelectorAll("td input");
    //   timeData.push({
    //     timeBasis: timeBasis[0].value.trim()
    //   });
    //   const warmupTime = rows[4].querySelectorAll("td input");
    //   timeData.push({
    //     warmupTime: warmupTime[0].value.trim()
    //   });
    //   const toolIdleTime = rows[5].querySelectorAll("td input");
    //   timeData.push({
    //     toolIdleTime: toolIdleTime[0].value.trim()
    //   });
      
    //   const timeOutputDiv = document.getElementById("timeOutput");
    //   if (timeOutputDiv) {
    //     timeOutputDiv.innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(timeData, null, 2) + "</pre>";
    //   }
    // });

    // // Collects input from Power
    // collectPower.addEventListener('click', function () {
    //   const table = this.previousElementSibling;
    //   const rows = table.querySelectorAll('tr');

    //   const powerData = [];

    //   for (let i = 1; i < rows.length; i++) { // Skip header row
    //       const inputs = rows[i].querySelectorAll('input');
    //       if (inputs.length > 0) {
    //           powerData.push({
    //               minimum: inputs[0].value.trim(),
    //               maximum: inputs[1].value.trim(),
    //           });
    //       }
    //   }
    //   const powerOutputDiv = document.getElementById("powerOutput");
    //   powerOutputDiv.innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(powerData, null, 2) + "</pre>";
    // });

});
    