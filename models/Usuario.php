<?php

class Usuario {
    private $id;
    private $nombre;
    private $email;
    private $password;
    private $rol;



    public function __construct($id, $nombre, $email, $password, $rol = 'lector', $suscripcionActiva) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->rol = $rol;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getRol() {
        return $this->rol;
    }

    public function isEditor(){
        return $this->rol === 'editor';
    }

    //Método para convertir el usuario en formato adecuado para guardar en JSON
    public function jsonSerialize(){
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'email' => $this->email,
            'password' => $this->password,
            'rol' => $this->rol,
        ];
    }

    //Método para guardar el usuario en la usuarios.json
    public function save(){
        //Leer JSON de usuarios
        $usuariosJson = self::getAllUsers();
        $usuarios = json_decode($usuariosJson, true);
        //Se agrega el nuevo usuario a la lista
        $usuarios[] = $this->jsonSerialize();
        //Se Guarda la lista atualizada en JSON
        file_put_contents('../data/usuarios.json', json_encode($usuarios));
    }

    //Obtener todos los usuarios del archivo JSON
    public static function getAllUsers(){ 
        $file = '../data/usuarios.json';
        if(!file_exists($file)){
            return [];
        }
        $usuariosJson = file_get_contents($file);
        return json_decode($usuariosJson, true);
    }

    //Verificar si el usuario existe (para login)
    public static function authenticate($email, $password){
        $usuarios = self::getAllUsers();
        foreach($usuarios as $usuario){
            if($usuario['email'] === $email && password_verify($password, $usuario['password'])){
                // Cuando autenticamos al usuario, ya tenemos la contraseña hasheada, así que pasamos true en $isHashed
                return new Usuario($usuario['id'], $usuario['nombre'], $usuario['email'], $usuario['password'], $usuario['rol'], true);
            }
        }
        return false;
    }        

}
?>