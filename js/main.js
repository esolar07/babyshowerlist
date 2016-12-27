(function(){
	
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
			if (iptVal == String && iptVal != null){
				console.log('passed');
				ipt.style.backgroundColor = "green";
				btn.disabled = false;
				ipt.addEventListener("click", function(){
					console.log("clicking");
					form.style.transform  = "rotateX("+ rot +"deg)";
				 })
			}  else if(iptVal == null ){
				ipt.style.backgroundColor = "white";
			}
		})
		
		
	}
	
	
	formIptCheck(name, next1, 90);
}())