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
                 $data['LesAtiviters'] = $this->model_activiter->GetAllActiviter();
                $this->load->view('v_activiter',$data); 
               
   
            }  
            public function afficherLesFormationInformatique()
            {
                $numeroActivite = $GET['numeroActivite'];
                $model = $this->load->model('model_formation');
                $data['lesFormationInformatique'] = $this->model_formation->GetFormationInformatique($numeroActivite);
                $this->load->view('v_formation',$data); 
                  
            } 
            
              public function afficherLesFormationExploitation()
            {
                $numeroActivite = $GET['numeroActivite'];
                $model = $this->load->model('model_formation');
                $data['lesFormationExploitation'] = $this->model_formation->GetFormationExploitation($numeroActivite);
                $this->load->view('v_formation',$data); 
                  
            }  
            
              public function afficherLesFormationGestion()
            {
                $numeroActivite = $GET['numeroActivite'];
                $model = $this->load->model('model_formation');
                $data['lesFormationGestion'] = $this->model_formation->GetFormationGestion($numeroActivite);
                $this->load->view('v_formation',$data); 
                  
            }     
            
               public function afficherLesFormationVoyageurs()
            {
                $numeroActivite = $GET['numeroActivite'];
                $model = $this->load->model('model_formation');
                $data['lesFormationVoyageurs'] = $this->model_formation->GetFormationVoyageurs($numeroActivite);
                $this->load->view('v_formation',$data); 
                  
            }     
               public function afficherLesFormationTraction()
            {
                $numeroActivite = $GET['numeroActivite'];
                $model = $this->load->model('model_formation');
                $data['lesFormationTraction'] = $this->model_formation->GetFormationTraction($numeroActivite);
                $this->load->view('v_formation',$data); 
                  
            }   
               public function afficherLesFormationMateriel()
            {
                $numeroActivite = $GET['numeroActivite'];
                $model = $this->load->model('model_formation');
                $data['lesFormationMateriel'] = $this->model_formation->GetFormationMateriel($numeroActivite);
                $this->load->view('v_formation',$data); 
                  
            }     
    
}
