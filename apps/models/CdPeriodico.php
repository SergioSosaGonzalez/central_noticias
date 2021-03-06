<?php
namespace Modules\Models;
class CdPeriodico extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $perid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $uid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $newid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $entid;

    /**
     * Method to set the value of field perid
     *
     * @param integer $perid
     * @return $this
     */
    public function setPerid($perid)
    {
        $this->perid = $perid;

        return $this;
    }

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
     * Method to set the value of field newid
     *
     * @param integer $newid
     * @return $this
     */
    public function setNewid($newid)
    {
        $this->newid = $newid;

        return $this;
    }

    /**
     * Method to set the value of field entid
     *
     * @param integer $entid
     * @return $this
     */
    public function setEntid($entid)
    {
        $this->entid = $entid;

        return $this;
    }

    /**
     * Returns the value of field perid
     *
     * @return integer
     */
    public function getPerid()
    {
        return $this->perid;
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
     * Returns the value of field newid
     *
     * @return integer
     */
    public function getNewid()
    {
        return $this->newid;
    }

    /**
     * Returns the value of field entid
     *
     * @return integer
     */
    public function getEntid()
    {
        return $this->entid;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("concentrado_noticias");
        $this->setSource("cd_periodico");
        $this->belongsTo('entid', '\CdEnterprise', 'entid', ['alias' => 'CdEnterprise']);
        $this->belongsTo('newid', '\CdNews', 'newid', ['alias' => 'CdNews']);
        $this->belongsTo('uid', '\CdUser', 'uid', ['alias' => 'CdUser']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cd_periodico';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CdPeriodico[]|CdPeriodico|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CdPeriodico|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
