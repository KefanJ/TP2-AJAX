<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CrtlAcceuil
 *
 * @author user
 */
class CtrlAcceuil extends CI_Controller {
    public function index()
            { 
                $this->load->model('model_activiter');
                $data['titre'] = "choix activité";
                 $data['LesActiviters'] = $this->model_activiter->GetAllActiviter();
                $this->load->view('v_activiter',$data); 
               
   
            }  
              public function afficherLesFormations()
            {
                 $numeroActivite = $_GET['numeroActivite'];
                $model = $this->load->model('model_formation');
                $data['lesFormations'] = $this->model_formation->GetFormation($numeroActivite);
                $this->load->view('v_formation',$data); 
            }  
            public function afficherLesAgents()
            {
                 $code = $_GET['code'];
                $model = $this->load->model('model_agent');
                $data['lesAgents'] = $this->model_agent->GetAgent($code);
                $this->load->view('AfficherAgent',$data); 
            }  
                      
                      
                      
         
    
}
