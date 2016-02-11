<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public function index(){       
        $data['postagens'] = $this->db->get('postagens')->result();        
        $this->load->view('postagens',$data);
    }
    
    function detalhes($id){
        $this->db->where('id',$id);
        $data['postagem'] = $this->db->get('postagens')->result();
        $data['postagens'] = $this->db->get('postagens')->result();        
        $this->load->view('detalhes_postagem',$data);
    }
    
    function fale_conosco(){
        $this->load->helper('form');
        $this->load->view('fale_conosco');
    }
    
    function enviar_mensagem(){        
        $this->load->library('form_validation');        
        $this->form_validation->set_rules('txt_nome', 'Email', 'required');
        $this->form_validation->set_rules('txt_email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('txt_mensagem', 'Email', 'required');        
        if($this->form_validation->run()){            
            $mensagem = "Nome: " . $this->input->post('txt_nome') . br();
            $mensagem .= "E-mail: " . $this->input->post('txt_email') . br();
            $mensagem .= "Mensagem: " . $this->input->post('txt_mensagem') . br();                    
            $this->load->library('email');
            $this->email->from("ademir.gabbardo@gmail.com","Formulário");
            $this->email->to("ademir.gabbardo@gmail.com");
            $this->email->subject('Assunto do e-mail, enviado pelo CodeIgniter');
            $this->email->message($mensagem);            
            if($this->email->send()){
                $this->load->view('sucesso_envia_contato');
            }
            else{
                print_r($this->email->print_debugger());
            }
        }
        else{
            $this->fale_conosco();
        }        
    }

    function error404(){
       $this->load->view('error404'); 
    }
    
}