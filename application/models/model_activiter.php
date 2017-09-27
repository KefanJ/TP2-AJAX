<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_activiter
 *
 * @author user
 */
class model_activiter extends CI_Controller {
     public function GetAllActiviter() 
            {
                $sql = $this->db->query(" select * from activite ");
                return $sql->result();
            }
}
