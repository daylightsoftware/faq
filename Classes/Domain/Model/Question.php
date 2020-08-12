<?php

declare(strict_types = 1);
/**
 * Question / Frage.
 */

namespace HDNET\Faq\Domain\Model;

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use HDNET\Autoloader\Annotation\DatabaseField;
use HDNET\Autoloader\Annotation\DatabaseTable;

/**
 * Question / Frage.
 *
 * @DatabaseTable(tableName="tx_faq_question")
 */
class Question extends AbstractModel
{
    /**
     * Title.
     *
     * @var string
     * @DatabaseField(type="string")
     */
    protected $title = '';

    /**
     * Answer.
     *
     * @var string
     * @DatabaseField(type="string")
     */
    protected $answer = '';

    /**
     * Tags.
     *
     * @var string
     * @DatabaseField(type="string")
     */
    protected $tags = '';

    /**
     * Top Counter.
     *
     * @var int
     * @DatabaseField(type="int")
     */
    protected $topCounter = 0;

    /**
     * Flop Counter.
     *
     * @var int
     * @DatabaseField(type="int")
     */
    protected $flopCounter = 0;

    /**
     * @var int
     * @DatabaseField(type="int")
     */
    protected $_languageUid = 0;

    /**
     * Categories.
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HDNET\Faq\Domain\Model\Questioncategory>
     * @DatabaseField(type="int", sql="int(11) DEFAULT '0' NOT NULL")
     */
    protected $categories;

    /**
     * Question constructor.
     */
    public function __construct()
    {
        $this->categories = new ObjectStorage();
    }

    /**
     * Set the title.
     *
     * @param string $title
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
     * Set answer.
     *
     * @param string $answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    /**
     * Get answer.
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set tags.
     *
     * @param string $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * Get tags.
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set the top counter.
     *
     * @param int $topCounter
     */
    public function setTopCounter($topCounter)
    {
        $this->topCounter = $topCounter;
    }

    /**
     * Get the top counter.
     *
     * @return int
     */
    public function getTopCounter()
    {
        return (int)$this->topCounter;
    }

    /**
     * Set the categories.
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * Get the categories.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set the Flop Counter.
     *
     * @param int $flopCounter
     */
    public function setFlopCounter($flopCounter)
    {
        $this->flopCounter = $flopCounter;
    }

    /**
     * Get the flop counter.
     *
     * @return int
     */
    public function getFlopCounter()
    {
        return (int)$this->flopCounter;
    }

    /**
     * Public getter for the languageUid.
     *
     * @return int
     */
    public function getLanguageId()
    {
        return $this->_languageUid;
    }
}
