<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asset
 */
class Asset
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $link;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contentType;

    /**
     * @var \AppBundle\Entity\Asset
     */
    private $parent;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contentType = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set title
     *
     * @param string $title
     * @return Asset
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Asset
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Asset
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
     * Add children
     *
     * @param \AppBundle\Entity\Asset $children
     * @return Asset
     */
    public function addChild(\AppBundle\Entity\Asset $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \AppBundle\Entity\Asset $children
     */
    public function removeChild(\AppBundle\Entity\Asset $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Add contentType
     *
     * @param \AppBundle\Entity\ContentType $contentType
     * @return Asset
     */
    public function addContentType(\AppBundle\Entity\ContentType $contentType)
    {
        $this->contentType[] = $contentType;

        return $this;
    }

    /**
     * Remove contentType
     *
     * @param \AppBundle\Entity\ContentType $contentType
     */
    public function removeContentType(\AppBundle\Entity\ContentType $contentType)
    {
        $this->contentType->removeElement($contentType);
    }

    /**
     * Get contentType
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Set parent
     *
     * @param \AppBundle\Entity\Asset $parent
     * @return Asset
     */
    public function setParent(\AppBundle\Entity\Asset $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\Asset 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add tags
     *
     * @param \AppBundle\Entity\Tag $tags
     * @return Asset
     */
    public function addTag(\AppBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \AppBundle\Entity\Tag $tags
     */
    public function removeTag(\AppBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }
    /**
     * @var boolean
     */
    private $enabled;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $modified;

    /**
     * @var \DateTime
     */
    private $published;


    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Asset
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
     * Set created
     *
     * @param \DateTime $created
     * @return Asset
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Asset
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set published
     *
     * @param \DateTime $published
     * @return Asset
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return \DateTime 
     */
    public function getPublished()
    {
        return $this->published;
    }
    /**
     * @var string
     */
    private $slug;


    /**
     * Set slug
     *
     * @param string $slug
     * @return Asset
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set contentType
     *
     * @param \AppBundle\Entity\ContentType $contentType
     * @return Asset
     */
    public function setContentType(\AppBundle\Entity\ContentType $contentType = null)
    {
        $this->contentType = $contentType;

        return $this;
    }
    /**
     * @var \AppBundle\Entity\Locale
     */
    private $locale;


    /**
     * Set locale
     *
     * @param \AppBundle\Entity\Locale $locale
     * @return Asset
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $translations;

    /**
     * @var \AppBundle\Entity\Asset
     */
    private $original;


    /**
     * Add translations
     *
     * @param \AppBundle\Entity\Asset $translations
     * @return Asset
     */
    public function addTranslation(\AppBundle\Entity\Asset $translations)
    {
        $this->translations[] = $translations;

        return $this;
    }

    /**
     * Remove translations
     *
     * @param \AppBundle\Entity\Asset $translations
     */
    public function removeTranslation(\AppBundle\Entity\Asset $translations)
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
     * @param \AppBundle\Entity\Asset $original
     * @return Asset
     */
    public function setOriginal(\AppBundle\Entity\Asset $original = null)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return \AppBundle\Entity\Asset 
     */
    public function getOriginal()
    {
        return $this->original;
    }
}
