;(function(){
	
	var password = document.querySelector("#password");
	var password_confirm=document.querySelector("#password_confirm");
	var identifiant=document.querySelector("#identifiant");
	var nom=document.querySelector("#nom");
	var prenom=document.querySelector("#prenom");
	var email=document.querySelector("#email");
	var datedn=document.querySelector("#datedn");
	var telephone=document.querySelector("#numpad");
	var adresse=document.querySelector("#adresse");
	var codepost=document.querySelector("#codepost");
	var ville=document.querySelector("#ville");

	if(identifiant.value==''){
		var span=document.querySelector("#identifiant_span");
		span.style.fontWeight="bold";
		span.style.color="red";
		span.textContent="* Champ obligatoire";
	}
	if(nom.value==''){
		var span=document.querySelector("#nom_span");
		span.style.fontWeight="bold";
		span.style.color="red";
		span.textContent="* Champ obligatoire";
	}
	if(prenom.value==''){
		var span=document.querySelector("#prenom_span");
		span.style.fontWeight="bold";
		span.style.color="red";
		span.textContent="* Champ obligatoire";
	}
	if(email.value==''){
		var span=document.querySelector("#email_span");
		span.style.fontWeight="bold";
		span.style.color="red";
		span.textContent="* Champ obligatoire";
	}
	if(datedn.value==''){
		var span=document.querySelector("#datedn_span");
		span.style.fontWeight="bold";
		span.style.color="red";
		span.textContent="* Champ obligatoire";
	}
	if(password.value==''){
		var span=document.querySelector("#password_span_init");
		span.style.fontWeight="bold";
		span.style.color="red";
		span.textContent="* Champ obligatoire";
	}
	if(password_confirm.value==''){
		var span=document.querySelector("#password_span");
		span.style.fontWeight="bold";
		span.style.color="red";
		span.textContent="* Champ obligatoire";
	}
	if(telephone.value=='')
	{
		var span=document.querySelector("#telephone_span");
		span.style.fontWeight="bold";
		span.style.color="red";
		span.textContent="* Champ obligatoire";
	}
	if(adresse.value=='')
	{
		var span=document.querySelector("#adresse_span");
		span.style.fontWeight="bold";
		span.style.color="red";
		span.textContent="* Champ obligatoire";
	}
	if(codepost.value=='')
	{
		var span=document.querySelector("#codepost_span");
		span.style.fontWeight="bold";
		span.style.color="red";
		span.textContent="* Champ obligatoire";
	}
	if(ville.value=='')
	{
		var span=document.querySelector("#ville_span");
		span.style.fontWeight="bold";
		span.style.color="red";
		span.textContent="* Champ obligatoire";
	}
	password_confirm.addEventListener("keyup",function (e) {
		var span=document.querySelector("#password_span");
		if(password_confirm.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
		else{
			if(password.value===password_confirm.value){
				span.style.fontWeight="bold";
				span.style.color="green";
				span.textContent="Les mots de passe correspondent";
			}
			else{
				span.style.fontWeight="bold";
				span.style.color="red";
				span.textContent="Les mots de passe ne correspondent pas";
			}
		}
	});
	password_confirm.addEventListener("focus",function (e) {
		var span=document.querySelector("#password_span");
		if(password_confirm.value!=''){
			if(password.value===password_confirm.value){
				span.style.fontWeight="bold";
				span.style.color="green";
				span.textContent="Les mots de passe correspondent";
			}
			else{
				span.style.fontWeight="bold";
				span.style.color="red";
				span.textContent="Les mots de passe ne correspondent pas";
			}
		}
		else if(password.value!=''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="Les mots de passe ne correspondent pas";
		}
	});
	password.addEventListener("focus",function (e) {
		var span=document.querySelector("#password_span");
		if(password.value!=''){
			if(password.value===password_confirm.value){
				span.style.fontWeight="bold";
				span.style.color="green";
				span.textContent="Les mots de passe correspondent";
			}
			else{
				span.style.fontWeight="bold";
				span.style.color="red";
				span.textContent="Les mots de passe ne correspondent pas";
			}
		}
	});
	password.addEventListener("keyup",function (e) {
		var span=document.querySelector("#password_span");
		if(password.value==''){
			document.querySelector("#password_span_init").style.color="red";
			document.querySelector("#password_span_init").textContent="* Champ obligatoire";
			if(password.value!=password_confirm.value){
				span.style.fontWeight="bold";
				span.style.color="red";
				span.textContent="Les mots de passe ne correspondent pas";
			}
		}
		else{
			document.querySelector("#password_span_init").textContent='';
			if(password.value===password_confirm.value){
				span.style.fontWeight="bold";
				span.style.color="green";
				span.textContent="Les mots de passe correspondent";
			}
			else{
				span.style.fontWeight="bold";
				span.style.color="red";
				span.textContent="Les mots de passe ne correspondent pas";
			}
		}
	});
	identifiant.addEventListener("focus",function (e) {
		var span=document.querySelector("#identifiant_span");
		if(identifiant.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
	});
	identifiant.addEventListener("keyup",function (e) {
		var span=document.querySelector("#identifiant_span");
		if(identifiant.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
		else{
			if(identifiant.value.match(/^[a-zA-Z0-9]+$/)==null){
				span.style.fontWeight="bold";
				span.style.color="red";
				span.textContent="L'identifiant ne doit pas contenir de caractère(s) spécial(s)";
			}
			else{
				span.textContent='';
			}
		}
	});
	nom.addEventListener("focus",function (e) {
		var span=document.querySelector("#nom_span");
		if(nom.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
	});
	nom.addEventListener("keyup",function (e) {
		var span=document.querySelector("#nom_span");
		if(nom.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
		else{
			if(nom.value.match(/^[a-zA-Zéèëï]+$/)==null){
				span.style.fontWeight="bold";
				span.style.color="red";
				span.textContent="Le nom ne doit contenir que des lettres";
			}
			else{
				span.textContent='';
			}
		}
	});
	prenom.addEventListener("focus",function (e) {
		var span=document.querySelector("#prenom_span");
		if(prenom.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
	});
	prenom.addEventListener("keyup",function (e) {
		var span=document.querySelector("#prenom_span");
		if(prenom.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
		else{
			if(prenom.value.match(/^[a-zA-Zéèëï]+$/)==null){
				span.style.fontWeight="bold";
				span.style.color="red";
				span.textContent="Le prénom ne doit contenir que des lettres";
			}
			else{
				span.textContent='';
			}
		}
	});
	adresse.addEventListener("focus",function (e) {
		var span=document.querySelector("#adresse_span");
		if(adresse.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
	});
	adresse.addEventListener("keyup",function (e) {
		var span=document.querySelector("#adresse_span");
		if(adresse.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
		else{
			if(adresse.value.match(/^[a-zA-Z0-9éèëïù ,]+$/)==null){
				span.style.fontWeight="bold";
				span.style.color="red";
				span.textContent="L'adresse postale ne doit contenir que des lettres et chiffres";
			}
			else{
				span.textContent='';
			}
		}
	});
	codepost.addEventListener("focus",function (e) {
		var span=document.querySelector("#codepost_span");
		if(codepost.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
	});
	codepost.addEventListener("keyup",function (e) {
		var span=document.querySelector("#codepost_span");
		if(codepost.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
		else{
			if(codepost.value.match(/^[0-9]+$/)==null){
				span.style.fontWeight="bold";
				span.style.color="red";
				span.textContent="Le code postal ne doit contenir que des lettres";
			}
			else{
				span.textContent='';
			}
		}
	});
	ville.addEventListener("focus",function (e) {
		var span=document.querySelector("#ville_span");
		if(ville.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
	});
	ville.addEventListener("keyup",function (e) {
		var span=document.querySelector("#ville_span");
		if(ville.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
		else{
			if(ville.value.match(/^[a-zA-Zéèêëàâîïôöûü -]+$/)==null){
				span.style.fontWeight="bold";
				span.style.color="red";
				span.textContent="La ville ne doit contenir que les caractères : [a-zA-Zéèêëàâîïôöûü- ]";
			}
			else{
				span.textContent='';
			}
		}
	});
	email.addEventListener("focus",function (e) {
		var span=document.querySelector("#email_span");
		if(email.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
	});
	email.addEventListener("keyup",function (e) {
		var span=document.querySelector("#email_span");
		if(email.value==''){
			span.style.fontWeight="bold";
			span.style.color="red";
			span.textContent="* Champ obligatoire";
		}
		else{
			if(email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)==null){
				span.style.fontWeight="bold";
				span.style.color="red";
				span.textContent="Veuillez entrer une adresse mail valide";
			}
			else{
				span.style.fontWeight="bold";
				span.style.color="green";
				span.textContent="Adresse e-mail valide !";
			}
		}
	});
	datedn.addEventListener("click",function (e) {
		document.querySelector("#datedn_span").textContent='';
	});

	telephone.addEventListener("click",function (e) {
		document.querySelector("#telephone_span").textContent='';
	});
})();