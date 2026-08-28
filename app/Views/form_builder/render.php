<?php
/**
 * Output yang disisipkan langsung ke dalam landing page CI4
 * melalui helper eventForm() / service formBuilder->render().
 *
 * Styling container sengaja minimal agar dapat di-override oleh
 * CSS landing page masing-masing (lihat PRD section 13).
 */
echo view('form_builder/_form', [
    'event'  => $event,
    'form'   => $form,
    'fields' => $fields,
    'action' => $action,
]);
