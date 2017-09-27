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
                        afficherLesFormationInformatique($(this).click());
                    });
                }
             );
             </script>
    </head>
    <body>
       <?php
        echo "<h4>".$titre.'</h4><br>';
        foreach ($LesFormationInformatique as $formation)
            {
        ?>
        <div class="divFormation">
            
            <FORM>
            <SELECT name="form" size="1">
            <OPTION>Exploitation
            <OPTION>Traction
            <OPTION>Matériel
            <OPTION>Gestion
            <OPTION>Voyageurs
            <OPTION>Informatique    
            </SELECT>
             </FORM>            
            <input type="submit" name="formation" value="<?php echo $formation->numeroActivite; ?>"><?php echo $formation->intitule; ?>

         </div>
         <?php   
        }
        echo "</div>";
        ?>
        <br><br>
        <div id="divActiviter"></div>
    </body>
</html>
