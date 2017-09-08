<?php

namespace Modules\Models;

class CdUser extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $uid;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    protected $name;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=false)
     */
    protected $last_name;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    protected $second_name;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=false)
     */
    protected $sex;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    protected $phone;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    protected $username;

    /**
     *
     * @var string
     * @Column(type="string", length=200, nullable=false)
     */
    protected $password;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=false)
     */
    protected $email;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $rol;

    /**
     *
     * @var string
     * @Column(type="string", length=200, nullable=true)
     */
    protected $photo;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $date_creation;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $status;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $date_last_sesion;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=true)
     */
    protected $cargo;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $type_executive;

    /**
     * Method to set the value of field uid
     *
     * @param integer $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field last_name
     *
     * @param string $last_name
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Method to set the value of field second_name
     *
     * @param string $second_name
     * @return $this
     */
    public function setSecondName($second_name)
    {
        $this->second_name = $second_name;

        return $this;
    }

    /**
     * Method to set the value of field sex
     *
     * @param string $sex
     * @return $this
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Method to set the value of field phone
     *
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Method to set the value of field username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Method to set the value of field password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field rol
     *
     * @param string $rol
     * @return $this
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Method to set the value of field photo
     *
     * @param string $photo
     * @return $this
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Method to set the value of field date_creation
     *
     * @param string $date_creation
     * @return $this
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field date_last_sesion
     *
     * @param string $date_last_sesion
     * @return $this
     */
    public function setDateLastSesion($date_last_sesion)
    {
        $this->date_last_sesion = $date_last_sesion;

        return $this;
    }

    /**
     * Method to set the value of field cargo
     *
     * @param string $cargo
     * @return $this
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Method to set the value of field type_executive
     *
     * @param string $type_executive
     * @return $this
     */
    public function setTypeExecutive($type_executive)
    {
        $this->type_executive = $type_executive;

        return $this;
    }

    /**
     * Returns the value of field uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Returns the value of field second_name
     *
     * @return string
     */
    public function getSecondName()
    {
        return $this->second_name;
    }

    /**
     * Returns the value of field sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Returns the value of field phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Returns the value of field username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the value of field password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field rol
     *
     * @return string
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Returns the value of field photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Returns the value of field date_creation
     *
     * @return string
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * Returns the value of field status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field date_last_sesion
     *
     * @return string
     */
    public function getDateLastSesion()
    {
        return $this->date_last_sesion;
    }

    /**
     * Returns the value of field cargo
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Returns the value of field type_executive
     *
     * @return string
     */
    public function getTypeExecutive()
    {
        return $this->type_executive;
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("concentrado_noticias");
        $this->setSource("Cd_User");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'Cd_User';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CdUser[]|CdUser|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CdUser|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
