<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_Formation
 *
 * @author user
 */
class model_formation extends CI_Model {
     public function GetFormation($numeroActivite)
             {
                $sql = $this->db->select('intitule')->from('formation')->where('numFormation',$numeroActivite);
                $res = $this->db->get();
                $tab = array();
                
                foreach ($res->result() as $row)
                    {
                        $tab[] = $row;
                    }
                
                return $tab;
             }
           
}     

