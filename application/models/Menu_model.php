<?php
class Menu_model extends CI_Model {
    public function insert_menu($data) {
        $this->db->insert('menus', $data);
    }
}
