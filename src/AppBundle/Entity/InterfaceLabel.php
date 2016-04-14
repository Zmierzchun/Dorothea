<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterfaceLabel
 */
class InterfaceLabel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $content;


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
     * @return InterfaceLabel
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
     * Set content
     *
     * @param string $content
     * @return InterfaceLabel
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $translations;

    /**
     * @var \AppBundle\Entity\MenuItem
     */
    private $original;

    /**
     * @var \AppBundle\Entity\Locale
     */
    private $locale;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->translations = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Add translations
     *
     * @param \AppBundle\Entity\InterfaceLabel $translations
     * @return InterfaceLabel
     */
    public function addTranslation(\AppBundle\Entity\InterfaceLabel $translations)
    {
        $this->translations[] = $translations;

        return $this;
    }

    /**
     * Remove translations
     *
     * @param \AppBundle\Entity\InterfaceLabel $translations
     */
    public function removeTranslation(\AppBundle\Entity\InterfaceLabel $translations)
    {
        $this->translations->removeElement($translations);
    }

    /**
     * Get translations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Set original
     *
     * @param \AppBundle\Entity\MenuItem $original
     * @return InterfaceLabel
     */
    public function setOriginal(\AppBundle\Entity\InterfaceLabel $original = null)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return \AppBundle\Entity\MenuItem 
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * Set locale
     *
     * @param \AppBundle\Entity\Locale $locale
     * @return InterfaceLabel
     */
    public function setLocale(\AppBundle\Entity\Locale $locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return \AppBundle\Entity\Locale 
     */
    public function getLocale()
    {
        return $this->locale;
    }
}
