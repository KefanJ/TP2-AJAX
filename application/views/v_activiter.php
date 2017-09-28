<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SNCF</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
         <script type="text/javascript">
            
             $
           (
               function()
                {
                    
                    $("#lstActivites").change(function(){
                    
                    // Ce ne sont pas des input mais une liste
                    //$("input[name='formation']").click(function(){
                       afficherLesFormation($(this).val());
                    });
                }
             );
             </script>
 
    </head>
     <body>
         <h1>Choix Activter</h1>
         <select id="lstActivites">
       <?php
         echo "<h4>".$titre.'</h4><br>';       
        foreach ($LesActiviters as $activite)      
            {
            echo "<option id='opt1' value='".$activite->numero."'>".$activite->libelle."</option>";
            }
        ?> 
    
         </select><br>
         
        <br><br>
        <div id="divFormations"></div>
        <div id="divAgents"></div>
    </body>
</html>
