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
     public function GetAllFormation($numero)
             {
                $sql = $this->db->query("select * from formation where numeroActivite=".$numero);
                return $sql->result();
             }
             public function getFormationInformatique()
             {
                 
                  $sql = $this->db->query("select * from formation where numeroActivite= 6");
                  $res = $this->db->get();
                  $tab = array();
                  
                  foreach ($res->result() as $row)
                  {
                      $tab[] = $row;
                  }
                return $tab;
             }
              public function getFormationExploitation()
             {
                 
                  $sql = $this->db->query("select * from formation where numeroActivite= 1");
                  $res = $this->db->get();
                  $tab = array();
                  
                  foreach ($res->result() as $row)
                  {
                      $tab[] = $row;
                  }
                return $tab;
             }
              public function getFormationTraction()
             {
                 
                  $sql = $this->db->query("select * from formation where numeroActivite= 2");
                  $res = $this->db->get();
                  $tab = array();
                  
                  foreach ($res->result() as $row)
                  {
                      $tab[] = $row;
                  }
                return $tab;
             }
              public function getFormationGestion()
             {
                 
                  $sql = $this->db->query("select * from formation where numeroActivite= 3");
                  $res = $this->db->get();
                  $tab = array();
                  
                  foreach ($res->result() as $row)
                  {
                      $tab[] = $row;
                  }
                return $tab;
             }
              public function getFormationVoyageur()
             {
                 
                  $sql = $this->db->query("select * from formation where numeroActivite= 5");
                  $res = $this->db->get();
                  $tab = array();
                  
                  foreach ($res->result() as $row)
                  {
                      $tab[] = $row;
                  }
                return $tab;
             }
              public function getFormationMateriel()
             {
                 
                  $sql = $this->db->query("select * from formation where numeroActivite= 4");
                  $res = $this->db->get();
                  $tab = array();
                  
                  foreach ($res->result() as $row)
                  {
                      $tab[] = $row;
                  }
                return $tab;
             }
}
