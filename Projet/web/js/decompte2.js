;(function()
{
	var compteur = document.getElementById("decompte2");
	setInterval(function()
	{
		compteur.textContent-=1
		if(compteur.textContent==0)
		{
			document.location.href="index.php";
		}

	}, 5000)
})();