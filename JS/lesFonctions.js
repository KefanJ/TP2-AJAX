
function afficherLesFormation(numeroActivite)
    {
        $.ajax(
        {  
            type:"get",
            url:"index.php/CtrlAcceuil/afficherLesFormations",
            data:"numeroActivite="+numeroActivite,
             success:function(data)
            {
                $('#divFormations').empty();
                $('#divFormations').append(data);
            },
            error:function()
            {
                alert('Erreur');
            }
        }
        );
    }
   