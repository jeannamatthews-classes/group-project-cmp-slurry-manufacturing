function Calculate(){

    ImpactAssessment();
    
    
}

function ImpactAssessment(){
    //Global Warming Potential 

    //Human Toxicity Potentia - Resource Depletion no formula
    //Cummulative Energy Demand
    CummEnergyDemand();
    //Water consumption
    CalculateWaterConsumption();
}

function GlobalWarmingPotential(){
    let AirEmissionsOneResultEmissionInput ="";
    let AirEmissionsTwoResultEmissionInput ="";
    let outPut=0;
    try{
        //Get air emmissions One results
		if(document.getElementById("AirEmissionsOneResultEmissionInput").value ==""){
			//invalid = true;
            outPut= outPut +0;
		}
		else{
            AirEmissionsOneResultEmissionInput = parseFloat(document.getElementById("AirEmissionsOneResultEmissionInput").value);
           outPut= AirEmissionsOneResultEmissionInput;
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

function CummEnergyDemand(){
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


		CumEnergyDemandOutput.value =outPut;
	}catch(err){
		CumEnergyDemandOutput.value=err;
	}


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
    document.getElementById("WaterReactionQuantityInput").value="";
    document.getElementById("WaterCleainingQuantityInput").value="";
    document.getElementById("WaterToolQuantityInput").value="";
}