<?php
class Usuario
{
    private $db;
    public function __construct()
    {
        $this->db = new Base;
    }
    public function getUsuario($datosUsuario)
    {
        $this->db->query('SELECT * FROM usuarios WHERE usuario =:user');
        $this->db->bind(':user', $datosUsuario['usuario']);
        return $this->db->register();
    }
    
    public function verificarUsuario($datosUsuario)
    {
        $this->db->query('SELECT usuario FROM usuarios WHERE usuario =:user');
        $this->db->bind(':user', $datosUsuario['usuario']);
        $this->db->register();

        if ($this->db->rowCount()) {
            return false;
        } else {
            return true;
        }
    }

    public function register($datosUsuario)
    {

        $this->db->query('INSERT INTO usuarios (idusuario, idPrivilegio, correo, usuario, contrasena, fecha_registro) 
VALUES (NULL, :privilegio, :correo, :usuario, :contrasena, current_timestamp())');

        // Vincular los parámetros
        $this->db->bind(':privilegio', $datosUsuario['privilegio']);
        $this->db->bind(':correo', $datosUsuario['email']);
        $this->db->bind(':usuario', $datosUsuario['usuario']);
        $this->db->bind(':contrasena', $datosUsuario['contrasena']);

        // Ejecutar la consulta
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }



    }

}