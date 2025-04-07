function Calculate(){

    let WaterReactionQuantityInput = "";
    let WaterCleainingQuantityInput = "";
    let WaterToolQuantityInput = "";
    let outPut = ""
	try{
		if(document.getElementById("studentOne").value ==""){
			throw("Student 1's name is empty");
			invalid = true;
		}
		else{
            WaterReactionQuantityInput = parseFloat(document.getElementById("WaterReactionQuantityInput").value);
            WaterCleainingQuantityInput = parseFloat(document.getElementById("WaterCleainingQuantityInput").value);
            WaterToolQuantityInput = parseFloat(document.getElementById("WaterToolQuantityInput").value);
            output = WaterToolQuantityInput + WaterCleainingQuantityInput + WaterReactionQuantityInput;
            ImpactAssWaterConsumptionOutput = outPut;
        }
		
	}catch(err){
		ImpactAssWaterConsumptionOutput.innerHTML=err;
	}

    
}