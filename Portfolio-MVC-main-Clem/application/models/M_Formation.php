<?php


Class M_Formation extends CI_Model {

public $id_Formations;
public $Formations;
public $niveau;

public function recupDataF(){
$this->load->database();
$query = $this->db->query("SELECT * FROM pfc_formations");  // Produces: SELECT * FROM mytable
//print_r($query->result());
    return $query->result();
}
    
    // recupere via l'id
    
    public function recupId_Formations($id_Formations){
        $this->load->database();
        $query = $this->db->query("SELECT Formations");
            //print_r($query->result());
        return $query->result;
    }
    
    // Ajout Formations
    public function ajout_Formations($Formations,$niveau){
        $this->load->database();
        // $now = date("Y-m-d H:i:s");
        
        $data = array(
        'Formations' => $Formations,
        'niveau' => $niveau);
    //$this->db->insert('pfc_formations', $Formations);
        $query = "INSERT INTO pfc_formations
        VALUES('','$Formations','$niveau','')";
        $this->db->query($query);
    }
    
    //supprimer Formations
    public function suppr_Formations($id_Formations){
        $this->load->database();
        
        $query = "DELETE FROM pfc_formations WHERE id_formations = ?";
        $this->db->query($query, array($id_Formations));

}
    //modifier la formation
    
    public function set_Formations($id_Formations,$Formations){
        $this->load->database();
        $query = "UPDATE FROM pfc_formations WHERE id=?";
        $this->db->query($query, array($id_Formations, $Formations));
    }
    // GETTERS
      public function get_Formations($id_Formations) {
        $this->load->database();

        $query = "SELECT description FROM pfc_formations WHERE id = ?";
        $this->db->query($query, array($id_Formations));
        return $query->result();

    }
}
    

?>