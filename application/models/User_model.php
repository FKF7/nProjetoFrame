<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Pessoa_model
 *
 * @author Fernando Fink
 */
class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($p) {
        return $this->db->insert('user', $p); //pessoa é o nome da tabela no banco
    }
    
    function deletar($id) {
        $this->db->where('idusuario',$id);
        return $this->db->delete('user');
    }
    
    function editar($idUsuario){
        $this->db->where('idusuario',$idUsuario);
        $result = $this->db->get('user');
        return $result->result();
    }
    
    function atualizar($data) {
        $this->db->where('idusuario',$data['idusuario']);
        $this->db->set($data);
        return $this->db->update('user');
    }

    /**
     * Este método retorna a lista de pessoas.
     * @return type
     */
    function listar() {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('nomeUsuario', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

}
