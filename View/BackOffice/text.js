document.getElementById("inscription").addEventListener("submit", function(e){
	var erreur;
	var inputs = document.getElementsByTagName("input");

	for (var i = 0;i<inputs.length; i++){
		if(!inputs[i].value)
		{
			erreur = "veuillez remplir tous les champs";
		}
	}
	if(erreur)
	{
		e.preventDefault();
		document.getElementById("erreur").innerHTML = erreur;
		return false;	}
		else{
			alert('Feedback envoyé !');
		}
})