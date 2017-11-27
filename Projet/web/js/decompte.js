;(function()
{
	var compteur = document.getElementById("decompte");
	setInterval(function()
	{
		compteur.textContent-=1
		if (compteur.textContent==0)
		{
			document.location.href="index.php";
		}
	}, 500)
})();