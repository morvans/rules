<?php

/**
 * @file
 * Contains \Drupal\rules\Context\Annotation\ContextDefinition.
 */

namespace Drupal\rules\Context\Annotation;

use Drupal\Core\Annotation\ContextDefinition as CoreContextDefinition;
use Drupal\rules\Context\ContextDefinition as RulesContextDefinition;

/**
 * Extends the core context definition annotation object for Rules.
 *
 * Ensures context definitions use
 * \Drupal\rules\Context\ContextDefinitionInterface.
 *
 * @Annotation
 *
 * @ingroup plugin_context
 */
class ContextDefinition extends CoreContextDefinition {

  /**
   * The ContextDefinitionInterface object.
   *
   * @var \Drupal\rules\Context\ContextDefinitionInterface
   */
  protected $definition;

  /**
   * {@inheritdoc}
   */
  public function __construct(array $values) {
    $this->definition = RulesContextDefinition::createFromArray($values);
  }

  /**
   * Returns the value of an annotation.
   *
   * @return \Drupal\rules\Context\ContextDefinitionInterface.
   */
  public function get() {
    return $this->definition;
  }

}
