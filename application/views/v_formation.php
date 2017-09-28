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
                    $("input[name='formation']").click(function(){
                       afficherLesFormation($(this).val());
                    });
                }
             );
             </script>
    </head>
    <body>
        
        <?php
         echo "<h4>".$titre.'</h4><br>';  
         echo "<div id='divEnteteFormation'>";
        foreach ($Lesformations as $formation)      
            {
       ?>  
        <div class="divFormation">
            <input type="radio" name="formation" value="<?php echo $formation->numeroActivite ; ?>"><?php echo $formation->intitule ; ?>
        </div>
        <?php
            }
            echo "</div>";
        ?>   
        <br><br>     
       
        <div id ="divAgents"></div>
         
      
        
    </body>
</html>
