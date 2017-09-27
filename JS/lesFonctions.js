function afficherLesFormationInformatique()
    {
        $.ajax(
        {  
            type:"get",
            url:"index.php/CtrlAcceuil/afficherLesFormationInformatique",
            data:"numeroActivite="+numeroActivite,
            sucess:function(data)
            {
                $('#divActiviter').empty();
                $('#divActiviter').append(data);
            },
            error:function()
            {
                alet('Erreur SQL');
            }
            
        }
                );
    }
    function afficherLesFormationExploitation()
    {
        $.ajax(
        {  
            type:"get",
            url:"index.php/CtrlAcceuil/afficherLesFormationExploitation",
            data:"numeroActivite="+numeroActivite,
            sucess:function(data)
            {
                $('#divActiviter').empty();
                $('#divActiviter').append(data);
            },
            error:function()
            {
                alet('Erreur SQL');
            }
            
        }
                );
    }
       function afficherLesFormationTraction()
    {
        $.ajax(
        {  
            type:"get",
            url:"index.php/CtrlAcceuil/afficherLesFormationTraction",
            data:"numeroActivite="+numeroActivite,
            sucess:function(data)
            {
                $('#divActiviter').empty();
                $('#divActiviter').append(data);
            },
            error:function()
            {
                alet('Erreur SQL');
            }
            
        }
                );
    }
       function afficherLesFormationMateriel()
    {
        $.ajax(
        {  
            type:"get",
            url:"index.php/CtrlAcceuil/afficherLesFormationMateriel",
            data:"numeroActivite="+numeroActivite,
            sucess:function(data)
            {
                $('#divActiviter').empty();
                $('#divActiviter').append(data);
            },
            error:function()
            {
                alet('Erreur SQL');
            }
            
        }
                );
    }
       function afficherLesFormationGestion()
    {
        $.ajax(
        {  
            type:"get",
            url:"index.php/CtrlAcceuil/afficherLesFormationGestion",
            data:"numeroActivite="+numeroActivite,
            sucess:function(data)
            {
                $('#divActiviter').empty();
                $('#divActiviter').append(data);
            },
            error:function()
            {
                alet('Erreur SQL');
            }
            
        }
                );
    }
       function afficherLesFormationVoyageurs()
    {
        $.ajax(
        {  
            type:"get",
            url:"index.php/CtrlAcceuil/afficherLesFormationVoyageurs",
            data:"numeroActivite="+numeroActivite,
            sucess:function(data)
            {
                $('#divActiviter').empty();
                $('#divActiviter').append(data);
            },
            error:function()
            {
                alet('Erreur SQL');
            }
            
        }
                );
    }