<?php
namespace Drupal\demo\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines a configuration entity class.
 *
 * @ConfigEntityType(
 *   id = "demo",
 *   label = @Translation("Demo")
 * )
 */
class Demo extends ConfigEntityBase {
    /**
     * The Entity label.
     *
     * @var string
     */
    public $label;

    /**
     * The Entity machine name.
     *
     * @var string
     */
    public $id;
}
