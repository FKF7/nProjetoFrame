<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Pessoa
 *
 * @author Fernando Fink
 */
class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('Login');
        }
        $this->load->model('user_model', 'user'); //user é um apelido para o model
    }

    public function index() {
        $lista['users'] = $this->user->listar();
        $this->load->view('userCadastro', $lista);
    }

    public function inserirUser() {
        //o nome no vetor deve ser o mesmo que o do campo na tabela
        $dados['nomeUsuario'] = $this->input->post('nomeUsuario');
        $dados['user'] = $this->input->post('user');
        $dados['senha'] = md5(mb_convert_case($this->input->post('senha'), MB_CASE_LOWER));
        $dados['perfilAcesso'] = $this->input->post('perfilAcesso');

        $result = $this->user->inserir($dados);
        if ($result == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('user');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('user');
        }
    }

    public function excluir($id) {
        $result = $this->user->deletar($id);
        if ($result == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('user');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('user');
        }
    }

    public function editar($idUsuario) {
        $data['user'] = $this->user->editar($idUsuario);
        $this->load->view('userEditar', $data);
    }

    public function atualizar() {
        // o nome no vetor deve ser o mesmo nome que o do campo na tabela
        $dados['idusuario'] = $this->input->post('idusuario');
        $dados['nomeUsuario'] = $this->input->post('nomeUsuario');
        $dados['user'] = $this->input->post('user');
        $dados['senha'] = md5(mb_convert_case($this->input->post('senha'), MB_CASE_LOWER));
        $dados['perfilAcesso'] = $this->input->post('perfilAcesso');

        if ($this->user->atualizar($dados) == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('user');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('user');
        }
    }

}
