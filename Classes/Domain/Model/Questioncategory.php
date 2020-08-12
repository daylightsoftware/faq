<?php

declare(strict_types = 1);
/**
 * Questioncategory / Fragen Kategorie.
 */

namespace HDNET\Faq\Domain\Model;
use HDNET\Autoloader\Annotation\DatabaseField;
use HDNET\Autoloader\Annotation\DatabaseTable;

/**
 * Questioncategory / Fragen Kategorie.
 *
 * @DatabaseTable(tableName="tx_faq_questioncategory")
 */
class Questioncategory extends AbstractModel
{
    /**
     * Title.
     *
     * @var string
     * @DatabaseField(type="string")
     */
    protected $title;

    /**
     * Parent.
     *
     * @var \HDNET\Faq\Domain\Model\Questioncategory
     * @DatabaseField(type="int", sql="int(11) DEFAULT '0'")
     */
    protected $parent;

    /**
     * @var int
     * @DatabaseField(type="int")
     */
    protected $_languageUid = 0;

    /**
     * Set the title.
     *
     * @param string $title
     * @DatabaseField(type="string")
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get the title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the parent.
     *
     * @param \HDNET\Faq\Domain\Model\Questioncategory $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get the parent.
     *
     * @return \HDNET\Faq\Domain\Model\Questioncategory
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Public getter for the languageUid.
     *
     * @return int
     */
    public function getLanguageUid()
    {
        return $this->_languageUid;
    }
}
