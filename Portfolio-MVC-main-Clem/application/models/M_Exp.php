<?php


Class M_Exp extends CI_Model {

public $id_Exp;
public $Experiences;

    
    //recupere toute les Experiences
public function recupDataE(){
$this->load->database();
$query = $this->db->query("SELECT * FROM pfc_exp");   // Produces: SELECT * FROM mytable
// print_r($query->result());
    return $query->result();
}
    // recupere via l'id
    
    public function recupId($id_Exp){
        $this->load->database();
        $query = $this->db->query("SELECT Experiences");
            print_r($query->result());
    }
    
    // Ajout Expérience
    public function ajout_Experiences($Experiences,$niveau){
        $this->load->database();
        // $now = date("Y-m-d H:i:s");
        
        $data = array(
        'Experiences' => $Experiences,
        'niveau' => $niveau);    
    //$this->db->insert('pfc_exp', $Experiences);
        $query="INSERT INTO pfc_exp
        VALUES('','$Experiences','$niveau','')";
        $this->db->query($query);
    }
    
    //supprimer experience
    public function suppr_Exp($id){
        // echo "test";
        $this->load->database();
        
        $query = "DELETE FROM pfc_exp WHERE id_exp = ?";
        $this->db->query($query, array($id));

}
    //modifier le experience
    
    public function set_Experiences($id_Exp,$Experiences){
        $this->load->database();
        $query = "UPDATE FROM pfc_exp WHERE id=?";
        $this->db->query($query, array($id, $Experiences));
    }
    // GETTERS
      public function get_Experiences($id_Exp) {
        $this->load->database();

        $query = "SELECT description FROM pfc_exp WHERE id = ?";
        $this->db->query($query, array($id_Exp));
        return $query->result();

    }
}



















?>
