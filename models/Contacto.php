<?php

namespace Model;

class Contacto extends ActiveRecord {
    protected static $tabla = 'contactos';
    protected static $columnasDB = ['id', 'nombre', 'numero', 'email', 'mensaje'];

    public $id;
    public $nombre;
    public $apellido;
    public $numero;
    public $email;
    public $mensaje;
    
    public function __construct($args = []){
        $this->id = s($args['id'] ?? null);
        $this->nombre = s($args['nombre'] ?? '');
        $this->apellido = s($args['apellido'] ?? '');
        $this->numero = s($args['numero'] ?? '');
        $this->email = s($args['email'] ?? '');
        $this->mensaje = s($args['mensaje'] ?? '');
    }

    //Validar el Contacto
    public function validar_contacto() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->numero) {
            self::$alertas['error'][] = 'El Número es Obligatorio';
        }
        if(!$this->email) {
            self::$alertas['error'][] = 'El correo electrónico es Obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            self::$alertas['error'][] = 'Correo electrónico no válido';
        }
        if(!$this->mensaje) {
            self::$alertas['error'][] = 'El Mensaje es Obligatorio';
        }
        return self::$alertas;
    }

    public function validar_contacto_dos() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->apellido) {
            self::$alertas['error'][] = 'El Apellido es Obligatorio';
        }
        if(!$this->numero) {
            self::$alertas['error'][] = 'El Número es Obligatorio';
        }
        if(!$this->email) {
            self::$alertas['error'][] = 'El correo electrónico es Obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            self::$alertas['error'][] = 'Correo electrónico no válido';
        }
        if(!$this->mensaje) {
            self::$alertas['error'][] = 'El Mensaje es Obligatorio';
        }
        return self::$alertas;
    }
}