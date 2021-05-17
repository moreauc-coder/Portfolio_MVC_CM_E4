<?php

Class C_Global extends CI_Controller{
    
    

    public function index(){

        $this->Accueil();
    
    }

    public function Admin(){
        $this->load->view('Layout');
        $this->load->model('M_Competences');
        $this->load->model('M_Formation');
        $this->load->model('M_Exp');  

        //data treatement
        $Experiences = $this->get_Experiences();
        $Competences = $this->get_Competences();
       $Formations = $this->get_Formations();
        //print_r($Competences);
        $nb_Experiences = sizeof($Experiences);
            
       $data["Experiences"] = $Experiences;
       $data["nb_Experiences"] = $nb_Experiences;
       
        $nb_Formations = sizeof($Formations);
        
        //$nb_niveau = sizeof($niveau);
            
       //$data["niveau"] = $niveau;
       //$data["nb_niveau"] = $nb_niveau;
            
       $data["Formations"] = $Formations;
       $data["nb_Formations"] = $nb_Formations;
        
        $nb_Competences = sizeof($Competences);
            
       $data["Competences"] = $Competences;
       $data["nb_Competences"] = $nb_Competences;
        $this->load->view('V_Admin', $data);
        // $this->load->view('V_Adminl',$data);
        
//       print_r($data["Competences"]);
        
            $Competences=$this->M_Competences->recupDataC();
            $Formation=$this->M_Formation->recupDataF();
            $Exp=$this->M_Exp->recupDataE();


    }
    public function Accueil(){
        $this->load->view('Layout');
        $this->load->view('V_Accueil');
        
    

        

    }

    public function Apropos(){
            $this->load->model('M_Competences');
            $this->load->model('M_Formation');
            $this->load->model('M_Exp');
            // $this->load->helper('url');
            
            $this->load->view('Layout');

          //data treatement
        $Experiences = $this->get_Experiences();
        $Competences = $this->get_Competences();
       $Formations = $this->get_Formations();
        //print_r($Competences);
        $nb_Experiences = sizeof($Experiences);
            
       $data["Experiences"] = $Experiences;
       $data["nb_Experiences"] = $nb_Experiences;
       
        $nb_Formations = sizeof($Formations);
        
        //$nb_niveau = sizeof($niveau);
            
       //$data["niveau"] = $niveau;
       //$data["nb_niveau"] = $nb_niveau;
            
       $data["Formations"] = $Formations;
       $data["nb_Formations"] = $nb_Formations;
        
        $nb_Competences = sizeof($Competences);
            
       $data["Competences"] = $Competences;
       $data["nb_Competences"] = $nb_Competences;
        $this->load->view('V_Apropos', $data);
        // $this->load->view('V_Accueil',$data);
        
//       print_r($data["Competences"]);
        
            $Competences=$this->M_Competences->recupDataC();
            $Formation=$this->M_Formation->recupDataF();
            $Exp=$this->M_Exp->recupDataE();
        
    }
    
        //recupere toutes les compétences
    public function get_Competences() {
        $Competences = $this->M_Competences->recupDataC();
        $res = array();
        for ($i = 0; $i < sizeof($Competences); $i++) {
            $index = $i +1;
            $res["Competences$index"] = $Competences[$i];
        }
        
        return $res;
    }
            //recupere toutes les Experiences
    public function get_Experiences() {
        $Experiences = $this->M_Exp->recupDataE();
        $res = array();
        for ($i = 0; $i < sizeof($Experiences); $i++) {
            $index = $i +1;
            $res["Experiences$index"] = $Experiences[$i];
        }
        
        return $res;
    }
            //recupere toutes les Formations
    public function get_Formations() {
        $Formations = $this->M_Formation->recupDataF();
        $res = array();
        for ($i = 0; $i < sizeof($Formations); $i++) {
            $index = $i +1;
            $res["Formations$index"] = $Formations[$i];
        }
        
        return $res;
    }

    

    //ajoute un projet a la bdd, acces a la fonction via formulaire
    public function ajout_Competences() {
        $this->load->model('M_Competences');
    // echo " je fonctionne? ";
        
        //test si les données ont été renseigné
        if (null!==($_POST['Competences'] AND $_POST['Liste_niveau'])) {
            if (!empty($_POST['Competences'] AND $_POST['Liste_niveau'])){
                
                // echo "et ici?";
                $Liste_niveau = $this->input->post('Liste_niveau');
                $Competences = $this->input->post('Competences');
                
        $this->M_Competences->ajout_Competences($Competences,$Liste_niveau);
               
        redirect('/C_Global/Admin', 'refresh');
                // $base_url = base_url();
                header("/projet/Portfolio-MVC-main-Clem/");
            } else {
                return "Veuillez remplir les champs.";
            }
        
                
        }
            
}
        //recupere une experience par le biais de son id
    public function RecupId_Experiences($id_Exp) {
        $project = $this->M_Exp->RecupId($id_Exp);
      return $Experiences;
    }
    

    //ajoute un projet a la bdd, acces a la fonction via formulaire
 
    public function ajout_Experiences() {
        $this->load->model('M_Exp');
    
        
        //test si les données ont été renseigné
        if (isset($_POST['Experiences'])AND $_POST['Liste_niveau']) {
            if (!empty($_POST['Experiences']) AND $_POST['Liste_niveau']){

                
                
                $Liste_niveau = $this->input->post('Liste_niveau');
                $Experiences = $this->input->post('Experiences');
                

                $this->M_Exp->ajout_Experiences($Experiences,$Liste_niveau);

                redirect('/C_Global/Admin', 'refresh');
                // $base_url = base_url();
                header("/projet/Portfolio-MVC-main-Clem/");
            } else {
                return "Veuillez remplir les champs.";
            }
        
                
        }
    
            
}
       
    //recupere une formation par le biais de son id
    public function RecupId_Formations($id_Formations) {
        $project = $this->M_Formation->RecupId_Formations($id_Formation);
      return $Formations;
    }
    //ajout d'ue formation à la base de donnée
    public function ajout_Formations(){
        $this->load->model('M_Formation');
        
        //test si les données ont été renseigné
           if (isset($_POST['Formations']) AND $_POST['Liste_niveau']) {
            if (!empty($_POST['Formations']) AND $_POST['Liste_niveau']){
                
                $Liste_niveau = $this->input->post('Liste_niveau');
                $Formations = $this->input->post('Formations');
                
                

                $this->M_Formation->ajout_Formations($Formations,$Liste_niveau);

                // $base_url = base_url();
                redirect('/C_Global/Admin', 'refresh');
                header("/projet/Portfolio-MVC-main-Clem/");
            } else {
                return "Veuillez remplir les champs.";
            }
        
                
        }
        
        
        
    }
    
    
    public function suppr_Competences(){
        $this->load->model('M_Competences');
        // echo"1";
        // print_r($_POST);
        $liste_C = $this->input->post('liste_C');
                
//   echo "$liste_C";
        
        
                $this->M_Competences->suppr_Competences($liste_C);
    
            redirect('/C_Global/Admin', 'refresh');
                //$base_url = base_url();
        $this->load->model('M_Competences');
        header("/projet/Portfolio-MVC-main-Clem/index.php");
       
    }

    public function suppr_Exp(){
        $this->load->model('M_Exp');
        // echo"1";
        // print_r($_POST);
        $liste_E = $this->input->post('liste_E');
                
    //   echo "$liste_E";
        
        
                $this->M_Exp->suppr_Exp($liste_E);
    
            redirect('/C_Global/Admin', 'refresh');
                //$base_url = base_url();
        $this->load->model('M_Exp');
        header("/projet/Portfolio-MVC-main-Clem/index.php");
       
    }
    public function suppr_Formations(){
        $this->load->model('M_Formation');
        // echo"1";
        // print_r($_POST);
        $liste_F = $this->input->post('liste_F');
                
    //   echo "$liste_F";
        
        
                $this->M_Formation->suppr_Formations($liste_F);
    
            redirect('/C_Global/Admin', 'refresh');
                //$base_url = base_url();
        $this->load->model('M_Formation');
        header("/projet/Portfolio-MVC-main-Clem/index.php");

       
    }

    //admin
    public function getIdentifiant(){
        $this->load->model('M_Admin');
        $id_mdp = $this->M_Admin->recupDataA();
        

        if (isset($_POST['Identifiant'])AND $_POST['MotDePasse']) {
            if (!empty($_POST['Identifiant']) AND $_POST['MotDePasse']){

                $identif = $this->input->post('Identifiant');
                $mot_de_passe = $this->input->post('MotDePasse');


                $verified = password_verify($mot_de_passe, $id_mdp[0]->mdp);
                

                if ($id_mdp[0]->identifiant == $identif){
                    if ($verified == TRUE){
                        // echo "Wallah c'est hyper good";
                        $this->Admin();
                        // session_start();
                        // print_r($_SESSION);
                        // $_SESSION['admin'] = 'admin';

                    }else{ echo 'fuck';
                        $this->Accueil();}

                }else{ echo 'fuck';
                    $this->Accueil();}

                
            } else {
                $this->Accueil();}
                return "Veuillez remplir les champs.";
            }
        
            redirect(base_url(), 'refresh');
        }
    }
    





    ?>
