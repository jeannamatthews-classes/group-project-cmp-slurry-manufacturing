// waits for document to load then grabs all the elements from the ID listed in the HTML
document.addEventListener("DOMContentLoaded", () => {
    const processSelect = document.getElementById("cars");
    const collectPrecursorMaterials = document.getElementById("collectPrecursorMaterials");
    const collectSolvents = document.getElementById("collectSolvents");
    const collectWater = document.getElementById("collectWater");
    const collectTime = document.getElementById("collectTime");
    const collectPower = document.getElementById("collectPower");
    
    //gets triggured when user selects a different option
    processSelect.addEventListener("change", () => {
      console.log("Selected Process:", processSelect.value);//for debugging
    });

  // Collects input from Precursor Materials
    collectPrecursorMaterials.addEventListener('click', function () {
      const table = this.previousElementSibling;
      const rows = table.querySelectorAll('tr');

      const precursorData = [];

      for (let i = 1; i < rows.length; i++) { // Skip header row
          const inputs = rows[i].querySelectorAll('input');
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
      const PrecursorOutputDiv = document.getElementById("PrecursorOutput");
      PrecursorOutputDiv.innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(precursorData, null, 2) + "</pre>";
    });

    // Collects input from Solvents 
    collectSolvents.addEventListener('click', function () {
      const table = this.previousElementSibling;
      const rows = table.querySelectorAll('tr');

      const solventData = [];

      for (let i = 1; i < rows.length; i++) { // Skip header row
          const inputs = rows[i].querySelectorAll('input');
          if (inputs.length > 0) {
            solventData.push({
                  solvent: inputs[0].value.trim(),
                  solventQuantity: inputs[1].value.trim(),
              });
          }
      }
      const SolventOutputDiv = document.getElementById("SolventOutput");
      SolventOutputDiv.innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(solventData, null, 2) + "</pre>";
    });

    // Collects input from Water 
    collectWater.addEventListener('click', function () {
      const table = this.previousElementSibling;
      const rows = table.querySelectorAll('tr');

      const waterData = [];

      for (let i = 1; i < rows.length; i++) { // Skip header row
          const inputs = rows[i].querySelectorAll('input');
          if (inputs.length > 0) {
            waterData.push({
                  washingParticle: inputs[0].value.trim(),
                  toolWashingWater: inputs[1].value.trim(),
              });
          }
      }
      const waterOutputDiv = document.getElementById("waterOutput");
      waterOutputDiv.innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(waterData, null, 2) + "</pre>";
    });

    // Collects input from Process Time Information 
    collectTime.addEventListener('click', function () {
      const table = this.previousElementSibling;
      const rows = table.querySelectorAll('tr');

      const timeData = [];

      const processTime = rows[1].querySelectorAll("td input");
      timeData.push({
        processTime: processTime[0].value.trim()
      });
      const processTimeRange = rows[2].querySelectorAll("td input");
      timeData.push({
        processTimeRange: processTimeRange[0].value.trim()
      });
      const timeBasis = rows[3].querySelectorAll("td input");
      timeData.push({
        timeBasis: timeBasis[0].value.trim()
      });
      const warmupTime = rows[4].querySelectorAll("td input");
      timeData.push({
        warmupTime: warmupTime[0].value.trim()
      });
      const toolIdleTime = rows[5].querySelectorAll("td input");
      timeData.push({
        toolIdleTime: toolIdleTime[0].value.trim()
      });
      
      const timeOutputDiv = document.getElementById("timeOutput");
      if (timeOutputDiv) {
        timeOutputDiv.innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(timeData, null, 2) + "</pre>";
      }
    });

    // Collects input from Power
    collectPower.addEventListener('click', function () {
      const table = this.previousElementSibling;
      const rows = table.querySelectorAll('tr');

      const powerData = [];

      for (let i = 1; i < rows.length; i++) { // Skip header row
          const inputs = rows[i].querySelectorAll('input');
          if (inputs.length > 0) {
              powerData.push({
                  minimum: inputs[0].value.trim(),
                  maximum: inputs[1].value.trim(),
              });
          }
      }
      const powerOutputDiv = document.getElementById("powerOutput");
      powerOutputDiv.innerHTML = "<h4>Collected Data:</h4><pre>" + JSON.stringify(powerData, null, 2) + "</pre>";
    });

});
    