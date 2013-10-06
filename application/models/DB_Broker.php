<?php


class DB_Broker extends CI_Model {
    
    function login($username,$password){


        $result=$this->db->query("SELECT Username,Passwd FROM Login WHERE Username='".$username."' AND Passwd='".$password."'");
        
        if($result->num_rows()!=0)
            
            return TRUE;
        
        else
            return FALSE;
    }
    
    function Utente($username,$password){
        
        $result=$this->db->query("SELECT ID,Nome,Cognome,Tipo_Account FROM Login WHERE Username='".$username."' AND Passwd='".$password."'");
        
        foreach ($result->result() as $key => $value) {
            
            $utente[]=$value;
        }
        
        return $utente;
    }
    
    function Corsi() {
        
        $corso=$this->db->query("SELECT * FROM Corsi");
        
        foreach ($corso->result() as $key => $value) {
            
            $corsi[]=$value;
        }
        
        return $corsi;
    }
    
    
    
}

?>
