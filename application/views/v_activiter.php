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
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
         
         <script type="text/javascript">
            
            
             
             
             
             
             
             
             
             
             
             
             </script>
    </head>
    <body>
        <h4>Choix activité</h4>
        <form>
            <select name="nom" size="1">
                <option> 
                    Exploitation
                <option> 
                    Traction
                    <option> 
                    Matériel
                    <option> 
                  Gestion
                    <option> 
                    Voyageur
                    <option> 
                    Informatique
                </option>
            </select>
        </form>
            
            <?php
        
        foreach ($LesAtiviters as $activite)
            {
        ?>
      
         <?php   
        }
        ?>
    </body>
</html>
