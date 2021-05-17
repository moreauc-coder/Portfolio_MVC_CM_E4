<?php


Class M_Competences extends CI_Model {

public $id;
public $Competences;
public $niveau;
    

// recup toutes les competences
public function recupDataC(){
$this->load->database();
$query = $this->db->query("SELECT * FROM pfc_competences ORDER BY Competences");  // Produces: SELECT * FROM mytable
//print_r($query->result());
    return $query->result();

}
        // recupere via l'id
    
    // public function recupId($id){
    //     $this->load->database();
    //     $query = $this->db->query("SELECT Competences");
    //         print_r($query->result());
    // }
          // recupere niveau
    
    // Ajout Competences
    public function ajout_Competences($Competences,$niveau){
        $this->load->database();
        //$now = date("Y-m-d H:i:s");
        
        $data = array(
        'Competences' => $Competences,
        'niveau' => $niveau);
    //$this->db->insert('pfc_competences', $Competences);
        $query = "INSERT INTO pfc_competences
        VALUES('','$Competences','$niveau','')";
        $this->db->query($query);
    }
    
    //supprimer Competences
    public function suppr_Competences($id){
        $this->load->database();
        
        
        $query = "DELETE FROM pfc_competences WHERE id_Competences  = ? ";
        
        $this->db->query($query,array($id));
      
    
}
    //modifier le Competences
    
    public function set_Competences($id,$Competences){
        $this->load->database();
        $query = "UPDATE FROM pfc_competences WHERE id_Competences = ? ";
        $this->db->query($query, array($id, $Competences));
    }
    // GETTERS
    //   public function get_Competences($id) {
    //     $this->load->database();

    //     $query = "SELECT description FROM pfc_competences WHERE id_Competences = ?";
    //     $this->db->query($query, array($id));
    //     return $query->result();

    // }
    
    
    
}




















?>
