<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentType
 */
class ContentType
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \AppBundle\Entity\Article
     */
    private $articles;

    /**
     * @var \AppBundle\Entity\Asset
     */
    private $assets;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ContentType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set articles
     *
     * @param \AppBundle\Entity\Article $articles
     * @return ContentType
     */
    public function setArticles(\AppBundle\Entity\Article $articles = null)
    {
        $this->articles = $articles;

        return $this;
    }

    /**
     * Get articles
     *
     * @return \AppBundle\Entity\Article 
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set assets
     *
     * @param \AppBundle\Entity\Asset $assets
     * @return ContentType
     */
    public function setAssets(\AppBundle\Entity\Asset $assets = null)
    {
        $this->assets = $assets;

        return $this;
    }

    /**
     * Get assets
     *
     * @return \AppBundle\Entity\Asset 
     */
    public function getAssets()
    {
        return $this->assets;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->assets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add assets
     *
     * @param \AppBundle\Entity\Asset $assets
     * @return ContentType
     */
    public function addAsset(\AppBundle\Entity\Asset $assets)
    {
        $this->assets[] = $assets;

        return $this;
    }

    /**
     * Remove assets
     *
     * @param \AppBundle\Entity\Asset $assets
     */
    public function removeAsset(\AppBundle\Entity\Asset $assets)
    {
        $this->assets->removeElement($assets);
    }

    /**
     * Add articles
     *
     * @param \AppBundle\Entity\Article $articles
     * @return ContentType
     */
    public function addArticle(\AppBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;

        return $this;
    }

    /**
     * Remove articles
     *
     * @param \AppBundle\Entity\Article $articles
     */
    public function removeArticle(\AppBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }
}
