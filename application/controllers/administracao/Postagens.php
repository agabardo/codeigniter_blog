<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postagens extends CI_Controller {
           
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        if(!$this->session->userdata('logado')){
            redirect("administracao/login");
        }
    }
           
    public function index(){
        $data['postagens'] = $this->db->get('postagens')->result();        
        $this->load->helper('form');
        $this->load->view('administracao/nova_postagem',$data);
    }
    
    
    function adicionar(){
        $data['titulo'] = $this->input->post('txt_titulo');
        $data['texto'] = $this->input->post('txt_texto');
        if($this->db->insert('postagens',$data)){
            redirect(base_url('administracao/postagens'));    
        }
        else{
            echo "Não foi possível gravar a postagem no banco de dados";   
        }
    }    
    
    function alterar($id){
        $this->db->where('id',$id);
        $data['postagem'] = $this->db->get('postagens')->result();        
        $this->load->helper('form');
        $this->load->view('administracao/alterar_postagem',$data);
    }
    
    function salvar_alteracao(){
        $data['titulo'] = $this->input->post('txt_titulo');
        $data['texto'] = $this->input->post('txt_texto');
        $this->db->where('id',$this->input->post('id'));
        if($this->db->update('postagens',$data)){
            redirect(base_url('administracao/postagens'));    
        }
        else{
            echo "Não foi possível gravar alteração da postagem no banco de dados";   
        }
    }
    
    function excluir($id){        
        $this->db->where('id',$id);
        if($this->db->delete('postagens')){
            redirect(base_url('administracao/postagens'));    
        }
        else{
            echo "Não foi possível excluir a postagem no banco de dados";   
        }
    }
    
}