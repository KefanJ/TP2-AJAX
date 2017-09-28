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
class model_agent extends CI_Controller  {
   public function GetAgent($code) 
        {
                $sql = $this->db->select('nom')->from('agent')->where('numAgent',$code);
                $res = $this->db->get();
                $tab = array();
                
                foreach ($res->result() as $row)
                    {
                        $tab[] = $row;
                    }
                
                return $tab;
             }
}
