const IdleElectricityConsumptionInput =document.getElementById("IdleElectricityConsumptionInput");
const ActiveElectConsumptionInput=document.getElementById("ActiveElectConsumptionInput")
const HeatingCoolingEnergyInput=document.getElementById("HeatingCoolingEnergyInput");





function CalculateTotalEnergyConsum(){
    let idleElecFloat =  0;
    let activeElecFloat =  0;
    let heatingCoolingElecFloat =  0;
   let totalSum = 0;

    try{
		if(document.getElementById("IdleElectricityConsumptionInput").value ==""){
			//throw("field is empty");
			//invalid = true;
            totalSum=totalSum +0;
		}
		else{
            idleElecFloat = parseFloat(document.getElementById("IdleElectricityConsumptionInput").value);
            totalSum= idleElecFloat + totalSum;
        }
        if(document.getElementById("ActiveElectConsumptionInput").value ==""){
			//throw("field is empty");
			//invalid = true;
            totalSum=totalSum +0;
		}
		else{
            activeElecFloat = parseFloat(document.getElementById("ActiveElectConsumptionInput").value);
            totalSum= activeElecFloat + totalSum;
        }
        if(document.getElementById("HeatingCoolingEnergyInput").value ==""){
			//throw("field is empty");
			//invalid = true;
            totalSum=totalSum +0;
		}
		else{
            heatingCoolingElecFloat = parseFloat(document.getElementById("HeatingCoolingEnergyInput").value);
            totalSum= heatingCoolingElecFloat + totalSum;
        }
    TotalEnergyConsumptionInput.value = totalSum;
	}catch(err){
		ImpactAssWaterConsumptionOutput.value=err;
	}
}

IdleElectricityConsumptionInput.addEventListener('input', CalculateTotalEnergyConsum);
ActiveElectConsumptionInput.addEventListener('input', CalculateTotalEnergyConsum);
HeatingCoolingEnergyInput.addEventListener('input', CalculateTotalEnergyConsum); 
