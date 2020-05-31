<?php

class client{
    /**
     * @var int
     */
    private $idClient;
    /**
     * @var string
     */
    private $dni;
    /**
     * @var string
     */
    private $nom;
    /**
     * @var string
     */
    private $cognoms;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $telefon;
    /**
     * @var string
     */
    private $adreca;
    /**
     * @var string
     */
    private $localitat;
    /**
     * @var int
     */
    private $cp;
    /**
     * @var string
     */
    private $pais;
    /**
     * @var string
     */
    private $domini;
    /**
     * @var string
     */
    private $ipAddress;
    /**
     * @var string
     */
    private $dataAlta;
    /**
     * @var string
     */
    private $plaHosting;

    /**
     * client constructor.
     * @param string $dni
     * @param string $nom
     * @param string $cognoms
     * @param string $email
     * @param string $telefon
     * @param string $adreca
     * @param string $localitat
     * @param int $cp
     * @param string $pais
     * @param string $domini
     * @param string $ipAddress
     * @param string $dataAlta
     * @param string $plaHosting
     */
    public function __construct($dni='', $nom='', $cognoms='', $email='', $telefon='', $adreca='', $localitat='', $cp=0, $pais='', $domini='', $ipAddress='', $dataAlta='', $plaHosting=''){
        $this->dni = $dni;
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->email = $email;
        $this->telefon = $telefon;
        $this->adreca = $adreca;
        $this->localitat = $localitat;
        $this->cp = $cp;
        $this->pais = $pais;
        $this->domini = $domini;
        $this->ipAddress = $ipAddress;
        $this->dataAlta = $dataAlta;
        $this->plaHosting = $plaHosting;
    }
    public function __toString(){
        // TODO: Implement __toString() method.
    }

    public function toArray():array{
        return[
            'idClient'=>$this->getIdClient(),
            'dni'=>$this->getDni(),
            'nom'=>$this->getNom(),
            'cognoms'=>$this->getCognoms(),
            'email'=>$this->getEmail(),
            'telefon'=>$this->getTelefon(),
            'adreca'=>$this->getAdreca(),
            'localitat'=>$this->getLocalitat(),
            'cp'=>$this->getCp(),
            'pais'=>$this->getPais(),
            'domini'=>$this->getDomini(),
            'ipAddress'=>$this->getIpAddress(),
            'dataAlta'=>$this->getDataAlta(),
            'plaHosting'=>$this->getPlaHosting()
        ];
    }

    /**
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param int $idClient
     * @return client
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
        return $this;
    }

    /**
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param string $dni
     * @return client
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
        return $this;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getCognoms()
    {
        return $this->cognoms;
    }

    /**
     * @param string $cognoms
     * @return client
     */
    public function setCognoms($cognoms)
    {
        $this->cognoms = $cognoms;
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
     * @return client
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * @param string $telefon
     * @return client
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdreca()
    {
        return $this->adreca;
    }

    /**
     * @param string $adreca
     * @return client
     */
    public function setAdreca($adreca)
    {
        $this->adreca = $adreca;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocalitat()
    {
        return $this->localitat;
    }

    /**
     * @param string $localitat
     * @return client
     */
    public function setLocalitat($localitat)
    {
        $this->localitat = $localitat;
        return $this;
    }

    /**
     * @return int
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param int $cp
     * @return client
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
        return $this;
    }

    /**
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param string $pais
     * @return client
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomini()
    {
        return $this->domini;
    }

    /**
     * @param string $domini
     * @return client
     */
    public function setDomini($domini)
    {
        $this->domini = $domini;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     * @return client
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataAlta()
    {
        return $this->dataAlta;
    }

    /**
     * @param string $dataAlta
     * @return client
     */
    public function setDataAlta($dataAlta)
    {
        $this->dataAlta = $dataAlta;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlaHosting()
    {
        return $this->plaHosting;
    }

    /**
     * @param string $plaHosting
     * @return client
     */
    public function setPlaHosting($plaHosting)
    {
        $this->plaHosting = $plaHosting;
        return $this;
    }




}