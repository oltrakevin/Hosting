<?php

class Usuario{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $nombre;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $password;

    /**
     * Usuario constructor.
     * @param string $nombre
     * @param string $email
     * @param string $password
     */
    public function __construct($nombre='', $email='', $password=''){
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
    }

    public function __toString(){
        // TODO: Implement __toString() method.
    }

    public function toArray():array{
        return[
        'id'=>$this->getId(),
        'nombre'=>$this->getNombre(),
        'email'=>$this->getEmail(),
        'password'=>$this->getPassword()
        ];
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Usuario
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }


}