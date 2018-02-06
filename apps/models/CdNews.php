<?php
namespace Modules\Models;
class CdNews extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $newid;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    protected $title;

    /**
     *
     * @var string
     * @Column(type="string", length=75, nullable=true)
     */
    protected $permalink;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    protected $subtitle;

    /**
     *
     * @var string
     * @Column(type="string", length=200, nullable=true)
     */
    protected $description;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $content;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    protected $images;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $type;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $author;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $calification;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $date_creation;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $subid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $visits;

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
     * Method to set the value of field title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Method to set the value of field permalink
     *
     * @param string $permalink
     * @return $this
     */
    public function setPermalink($permalink)
    {
        $this->permalink = $permalink;

        return $this;
    }

    /**
     * Method to set the value of field subtitle
     *
     * @param string $subtitle
     * @return $this
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Method to set the value of field images
     *
     * @param string $images
     * @return $this
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Method to set the value of field type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Method to set the value of field author
     *
     * @param string $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Method to set the value of field calification
     *
     * @param string $calification
     * @return $this
     */
    public function setCalification($calification)
    {
        $this->calification = $calification;

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
     * Method to set the value of field subid
     *
     * @param integer $subid
     * @return $this
     */
    public function setSubid($subid)
    {
        $this->subid = $subid;

        return $this;
    }

    /**
     * Method to set the value of field visits
     *
     * @param integer $visits
     * @return $this
     */
    public function setVisits($visits)
    {
        $this->visits = $visits;

        return $this;
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
     * Returns the value of field title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the value of field permalink
     *
     * @return string
     */
    public function getPermalink()
    {
        return $this->permalink;
    }

    /**
     * Returns the value of field subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Returns the value of field images
     *
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Returns the value of field type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the value of field author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Returns the value of field calification
     *
     * @return string
     */
    public function getCalification()
    {
        return $this->calification;
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
     * Returns the value of field subid
     *
     * @return integer
     */
    public function getSubid()
    {
        return $this->subid;
    }

    /**
     * Returns the value of field visits
     *
     * @return integer
     */
    public function getVisits()
    {
        return $this->visits;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("concentrado_noticias");
        $this->setSource("cd_news");
        $this->hasMany('newid', 'CdGallery', 'newid', ['alias' => 'CdGallery']);
        $this->hasMany('newid', 'CdPeriodico', 'newid', ['alias' => 'CdPeriodico']);
        $this->belongsTo('subid', '\CdSubcategory', 'subid', ['alias' => 'CdSubcategory']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cd_news';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CdNews[]|CdNews|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CdNews|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
