function Calculate(){

    ImpactAssessment();
    
    
}

function ImpactAssessment(){
    ElectricConsumOutput.value = getCummEnergyDemand();
    //Global Warming Potential 
    GlobalWarmingPotential();
    //Human Toxicity Potentia - Resource Depletion no formula
    //Cummulative Energy Demand
    CumEnergyDemandOutput.value= getCummEnergyDemand();
    //Water consumption
    CalculateWaterConsumption();
}

function GlobalWarmingPotential(){
    //C125*B111
    let CO2DataInput =""
    let TotalEnergyConsumptionInput ="";
    let AirEmissionsOneResultEmissionInput ="";
    let AirEmissionsTwoResultEmissionInput ="";
    let outPut=0;
    try{
        //D125=C125*B111==CO2DataInput*TotalEnergyConsumptionInput
        if(document.getElementById("TotalEnergyConsumptionInput").value =="" || document.getElementById("CO2DataInput").value ==""){
			//invalid = true;
		}
		else{
            
            TotalEnergyConsumptionInput = parseFloat(document.getElementById("TotalEnergyConsumptionInput").value);
            CO2DataInput = parseFloat(document.getElementById("CO2DataInput").value);
           outPut= TotalEnergyConsumptionInput * CO2DataInput;
        }
        //Get air emmissions One results
		if(document.getElementById("AirEmissionsOneResultEmissionInput").value ==""){
			//invalid = true;
            outPut= outPut +0;
		}
        
		else{
            AirEmissionsOneResultEmissionInput = parseFloat(document.getElementById("AirEmissionsOneResultEmissionInput").value);
           outPut= AirEmissionsOneResultEmissionInput+outPut;
        }
        if(document.getElementById("AirEmissionsTwoResultEmissionInput").value ==""){
			//invalid = true;
            outPut= outPut +0;
		}
		else{
            AirEmissionsTwoResultEmissionInput = parseFloat(document.getElementById("AirEmissionsTwoResultEmissionInput").value);
           outPut= AirEmissionsTwoResultEmissionInput + outPut;
        }

		GlobalWarmingPotentialOutput.value =outPut;
	}catch(err){
		GlobalWarmingPotentialOutput.value=err;
	}
}

function getCummEnergyDemand(){
    let TotalEnergyConsumptionInput ="";
    let outPut=0;
    try{
		if(document.getElementById("TotalEnergyConsumptionInput").value ==""){
			//invalid = true;
            
		}
		else{
            TotalEnergyConsumptionInput = parseFloat(document.getElementById("TotalEnergyConsumptionInput").value);
           outPut= TotalEnergyConsumptionInput;
        }


		//CumEnergyDemandOutput.value =outPut;
	}catch(err){
		//CumEnergyDemandOutput.value=err;
        outPut = err;
	}

    return outPut;
}

function CalculateWaterConsumption(){
    let WaterReactionQuantityInput = "";
    let WaterCleainingQuantityInput = "";
    let WaterToolQuantityInput = "";
    let outPut = 0;
	try{
		if(document.getElementById("WaterReactionQuantityInput").value ==""){
			//throw("field is empty");
			//invalid = true;
            outPut= outPut +0;
		}
		else{
            WaterReactionQuantityInput = parseFloat(document.getElementById("WaterReactionQuantityInput").value);
           outPut= WaterReactionQuantityInput + outPut;
        }

        if(document.getElementById("WaterCleainingQuantityInput").value ==""){
			//throw("field is empty");
			//invalid = true;
            outPut= outPut +0;
		}
		else{
            WaterCleainingQuantityInput = parseFloat(document.getElementById("WaterCleainingQuantityInput").value);
           outPut= WaterCleainingQuantityInput + outPut;
        }

        if(document.getElementById("WaterToolQuantityInput").value ==""){
			//throw("field is empty");
			//invalid = true;
            outPut= outPut +0;
		}
		else{
            WaterToolQuantityInput = parseFloat(document.getElementById("WaterToolQuantityInput").value);
           outPut= WaterToolQuantityInput + outPut;
        }

		ImpactAssWaterConsumptionOutput.value =outPut;
	}catch(err){
		ImpactAssWaterConsumptionOutput.value=err;
	}


}

function Clear(){
    ImpactAssWaterConsumptionOutput.value="";
    GlobalWarmingPotentialOutput.value="";
    document.getElementById("WaterReactionQuantityInput").value="";
    document.getElementById("WaterCleainingQuantityInput").value="";
    document.getElementById("WaterToolQuantityInput").value="";
}