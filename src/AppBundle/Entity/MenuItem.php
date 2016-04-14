<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MenuItem
 */
class MenuItem
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
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var integer
     */
    private $orderNo;

    /**
     * @var boolean
     */
    private $enabled;


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
     * @return MenuItem
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
     * Set link
     *
     * @param string $link
     * @return MenuItem
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return MenuItem
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set orderNo
     *
     * @param integer $orderNo
     * @return MenuItem
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;

        return $this;
    }

    /**
     * Get orderNo
     *
     * @return integer 
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return MenuItem
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
    /**
     * @var \AppBundle\Entity\Menu
     */
    private $parentMenu;

    /**
     * @var \AppBundle\Entity\Locale
     */
    private $locale;


    /**
     * Set parentMenu
     *
     * @param \AppBundle\Entity\Menu $parentMenu
     * @return MenuItem
     */
    public function setParentMenu(\AppBundle\Entity\Menu $parentMenu)
    {
        $this->parentMenu = $parentMenu;

        return $this;
    }

    /**
     * Get parentMenu
     *
     * @return \AppBundle\Entity\Menu 
     */
    public function getParentMenu()
    {
        return $this->parentMenu;
    }

    /**
     * Set locale
     *
     * @param \AppBundle\Entity\Locale $locale
     * @return MenuItem
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $translations;

    /**
     * @var \AppBundle\Entity\MenuItem
     */
    private $original;

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
     * @param \AppBundle\Entity\MenuItem $translations
     * @return MenuItem
     */
    public function addTranslation(\AppBundle\Entity\MenuItem $translations)
    {
        $this->translations[] = $translations;

        return $this;
    }

    /**
     * Remove translations
     *
     * @param \AppBundle\Entity\MenuItem $translations
     */
    public function removeTranslation(\AppBundle\Entity\MenuItem $translations)
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
     * @return MenuItem
     */
    public function setOriginal(\AppBundle\Entity\MenuItem $original = null)
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
}
