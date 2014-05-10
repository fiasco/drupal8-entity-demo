<?php

namespace Drupal\demo;

use Drupal\Core\Entity\EntityForm;

class DemoFormController extends EntityForm {
    public function form(array $form, array &$form_state) {
        $form = parent::form($form, $form_state);

        $form['label'] = array(
            '#title' => $this->t('Demo Entity name'),
            '#type' => 'textfield',
            '#default_value' => $this->entity->get('label'),
            '#required' => TRUE,
            '#size' => 30,
        );
        $form['id'] = array(
            '#type' => 'machine_name',
            '#default_value' => $this->entity->id(),
            '#disabled' => !$this->entity->isNew(),
            '#machine_name' => array(
                'source' => array('label'),
                'exists' => 'demo_load',
            ),
        );
        return $form;
    }

    public function save(array $form, array &$form_state) {
        parent::submit($form, $form_state);

       // var_dump($this->entity);die;

        // Save the settings of the plugin.
        $status = $this->entity->save();

        if ($status == SAVED_UPDATED) {
            drupal_set_message(t('Demo Entity updated.'));
        }
        elseif ($status == SAVED_NEW) {
            drupal_set_message(t('New Demo Entity has been created'));
        }
    }
} 