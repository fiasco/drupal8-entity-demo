<?php
namespace Drupal\demo\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines a configuration entity class.
 *
 * @ConfigEntityType(
 *   id = "droplet",
 *   label = @Translation("Droplet")
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
