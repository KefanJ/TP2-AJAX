
function afficherLesFormation()
    {
        $.ajax(
        {  
            type:"get",
            url:"index.php/CtrlAcceuil/AfficherFormation",
            data:"numeroActivite="+numeroActivite,
             sucess:function(data)
            {
                $('#divAgents').empty();
                $('#divAgents').append(data);
            },
            error:function()
            {
                alet('Erreur');
            }
        }
        );
    }
   