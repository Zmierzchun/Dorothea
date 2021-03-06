<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 */
class Menu
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $name;


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
     * @param integer $name
     * @return Menu
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $items;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Add items
     *
     * @param \AppBundle\Entity\MenuItem $items
     * @return Menu
     */
    public function addItem(\AppBundle\Entity\MenuItem $items)
    {
        $this->items[] = $items;

        return $this;
    }

    /**
     * Remove items
     *
     * @param \AppBundle\Entity\MenuItem $items
     */
    public function removeItem(\AppBundle\Entity\MenuItem $items)
    {
        $this->items->removeElement($items);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $translations;

    /**
     * @var \AppBundle\Entity\Menu
     */
    private $original;

    /**
     * @var \AppBundle\Entity\Locale
     */
    private $locale;


    /**
     * Add translations
     *
     * @param \AppBundle\Entity\Menu $translations
     * @return Menu
     */
    public function addTranslation(\AppBundle\Entity\Menu $translations)
    {
        $this->translations[] = $translations;

        return $this;
    }

    /**
     * Remove translations
     *
     * @param \AppBundle\Entity\Menu $translations
     */
    public function removeTranslation(\AppBundle\Entity\Menu $translations)
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
     * @param \AppBundle\Entity\Menu $original
     * @return Menu
     */
    public function setOriginal(\AppBundle\Entity\Menu $original = null)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return \AppBundle\Entity\Menu 
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * Set locale
     *
     * @param \AppBundle\Entity\Locale $locale
     * @return Menu
     */
    public function setLocale(\AppBundle\Entity\Locale $locale = null)
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
