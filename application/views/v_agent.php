<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title></title>

<link rel="stylesheet" href="<?php echo base_url();?>CSS/styles.css">
  <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
           <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>  
</head>
<body>
            
        <?php
      echo "<h1>Les agent</h1>";
      echo"<div id='divEnteteAgent'>";
        foreach ($LesAgents as $agent)
            {
            echo " <div class='divAgent'>";
                echo "<span>".$agent->nom."</span>";
                echo"</div>";
            }
            echo "</div>";
           
        ?>
        
    </body>
</html>
