(function(){
	console.log("Site is up");
	//creating variables 
	var form = document.querySelector("#js-form"),
		name = document.querySelector("#name"),
		next1 = document.querySelector("#next--1"),
		guests = document.querySelector("#guests"),
		next2 = document.querySelector("#next--2");
		
	// disabling form button until js validation
	next1.disabled = true;
	next2.disabled = true;

	function formIptCheck(ipt, btn, rot){
		
		// grabs entered value from input field
		var iptVal = ipt.value;
			
		ipt.addEventListener("input", function(){
		
			if (typeof iptVal == "string" && typeof iptVal !== null){
				console.log('passed');
				ipt.style.backgroundColor = "lightgreen";
				btn.disabled = false;
				btn.style.backgroundColor = "#4682B4";
				btn.addEventListener("click", function(){
					console.log("clicking");
					form.style.transform  = "rotateX("+ rot +"deg)";
				 })
			} 
		})
		
		
	}
	
	
	formIptCheck(name, next1, 90);
	
	formIptCheck(guests, next2, 180);
	
}())