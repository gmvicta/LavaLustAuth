<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
	public function register($username, $password) {
        $bind = array(
            'username' => $username,
            'password' => $password
            );

        return $this->db->table('users')->insert($bind);
    }
    public function login($username, $password) {
        $where = [
            'username' => $username,
            'password' => $password,
        ];
        return $this->db->table('users')->where($where)->get();
    }
}
?>
