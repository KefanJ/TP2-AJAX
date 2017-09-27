<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
        <FORM>
<SELECT name="nom" size="1">
<OPTION>lundi
</OPTION>
</SELECT>
     </FORM>      
        <?php
      
        foreach ($LesAgents as $agent)
            {
        ?>
        <p><?php echo $agent->nom; ?>" ><br>  <?php echo $agent->prenom ; ?>></p>
         <?php   
        }
        ?>
        
    </body>
</html>
