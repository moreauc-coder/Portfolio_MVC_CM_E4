<?php


Class M_Admin extends CI_Model {

public $id;
public $identifiant;
public $mpd;
    

// recup toutes le mdp et identifiant
public function recupDataA(){
$this->load->database();
$query = $this->db->query("SELECT mdp,identifiant FROM pfc_identifiant WHERE id='1'");  // Produces: SELECT * FROM mytable
// print_r($query->result());

    return $query->result();

}
        
    
}