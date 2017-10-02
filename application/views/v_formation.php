        <?php

        foreach ($lesFormations as $formation)      
        {
            echo "<input type='radio' onclick='afficherLesAgent(this.value)'  name='rdoFormation'   value='".$formation->code. "'>".$formation->intitule;
        }

        ?>   