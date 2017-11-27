;(function()
{
    $('#password').on('keyup', function(e)
    {
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var okRegex = new RegExp("(?=.{6,}).*", "g");

        if(okRegex.test($(this).val()) === false)
        {
            var span=document.querySelector("#password_etat");
            span.style.fontWeight="bold";
            span.style.color="red";
            span.textContent="Mot de passe > 6 caractères";
        }

        else if(strongRegex.test($(this).val()))
        {
            var span=document.querySelector("#password_etat");
            span.style.fontWeight="bold";
            span.style.color="green";
            span.textContent="Sécurité du mot de passe elevé";
        }

        else if (mediumRegex.test($(this).val()))
        {
            var span=document.querySelector("#password_etat");
            span.style.fontWeight="bold";
            span.style.color="orange";
            span.textContent="Sécurité du mot de passe acceptable";
        }

        else
        {
            var span=document.querySelector("#password_etat");
            span.style.fontWeight="bold";
            span.style.color="red";
            span.textContent="Sécurité du mot de passe faible";
        }
 
        return true;
    }
})()