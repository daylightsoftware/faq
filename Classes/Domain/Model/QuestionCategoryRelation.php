<?php

declare(strict_types = 1);
/**
 * Relation.
 */

namespace HDNET\Faq\Domain\Model;

use HDNET\Autoloader\Domain\Model\AbstractAdvancedRelation;
use HDNET\Autoloader\Annotation\DatabaseTable;
use HDNET\Autoloader\Annotation\SmartExclude;

/**
 * Relation.
 *
 * @smartExclude EnableFields,Language,Workspaces
 * @DatabaseTable(tableName="tx_faq_domain_model_questionCategoryRelation")
 */
class QuestionCategoryRelation extends AbstractAdvancedRelation
{
}
