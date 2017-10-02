<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_agent
 *
 * @author user
 */
class model_agent extends CI_Model {
   public function GetAgent($numeroFormation) 
        {
                $sql = $this->db->query("SELECT prenom,nom FROM agent, inscription WHERE Agent.code = inscription.codeAgent and numFormation='".$numeroFormation."'");
               
                $tab = array();
                
                foreach ($sql->result() as $row)
                    {
                        $tab[] = $row;
                    }
                
                return $tab;
             }
}
