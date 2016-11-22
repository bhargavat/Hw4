	// Sets the error message
	function setErrorMessage(){
		document.getElementById("error").innerHTML = "Invalid Format. Try Again.";
		setTimeout(function(){document.location.href="index.php"},3000);
	}
			
	function textareaValidate(){
		var content = document.forms["myForm"]["DataValues"].value;
		var splitContent = content.split("\n");
		// Ignore empty lines
		for (var i = 0; i < splitContent.length; i++){
			if (splitContent[i].trim() == ""){
				array.splice(splitContent[i], 1);
			}
		}
		// More than 50 lines
		if (splitContent.length > 50){
			setErrorMessage();
			return false;
		}
		// Checks if there's more than 80 characters per line
		for (var i = 0; i < splitContent.length; i++){
			if (splitContent[i].length > 80){
				setErrorMessage();
				return false;
			}
		}
		// Checks if there are at least 1 but no more than 5 coordinates
		for (var i = 0; i < splitContent.length; i++){
			var splitComma = splitContent[i].split(",");
			    if (splitComma.length < 2 || splitComma.length > 6){
				    setErrorMessage();
				    return false;
			}
		}
		//1st coordinate is not empty
		for (var i = 0; i < splitContent.length; i++){
			var splitComma = splitContent[i].split(",");
			    if (!splitComma[0]){
				    setErrorMessage();
				    return false;
			    }
		}
	}