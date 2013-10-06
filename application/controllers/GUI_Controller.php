<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GUI_Controller extends CI_Controller {
    
    public $correct_value=FALSE;

	
	public function index()
	{
            

                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');
                
		if($this->form_validation->run()==FALSE)
                    $this->load->view('Login');
                else{
                    if(!preg_match('/[^\W][[:punct:]]+/', $username= $this->input->post('username')) && !preg_match('/[^\W][[:punct:]]+/', $password=$this->input->post('password'))){
                        if($this->DB_Broker->login($username,$password)){
                            $utente=$this->DB_Broker->Utente($username,$password);
                            $dati_utente=array(
                                
                              'ID'=>$utente[0]->ID,
                              'nome'=>$utente[0]->Nome,
                              'cognome'=>$utente[0]->Cognome,
                              'account'=>$utente[0]->Tipo_Account
                                
                                
                            );
                            $corsi=$this->DB_Broker->Corsi();
                            $dati_corsi['corsi']=$corsi;
                            $this->session->set_userdata($dati_utente);
                            $this->load->view ('Home',$dati_corsi);
                        }
                        else
                            
                            $this->load->view ('Login');
                        
                    }
                    
                    else{
                        $this->correct_value=TRUE;
                        $this->load->view ('Login');
                    }    
                }
	}
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */