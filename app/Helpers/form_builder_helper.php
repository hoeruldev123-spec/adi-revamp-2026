<?php

use App\Services\FormBuilder;

if (! function_exists('eventForm')) {
    /**
     * Render form berdasarkan Event ID dari dalam view CI4.
     *
     * Contoh:
     *   <?= eventForm('EVT-2026-DATAIKU-001') ?>
     */
    function eventForm(string $eventCode, array $options = []): string
    {
        helper('form');
        return service('formBuilder')->render($eventCode, $options);
    }
}

if (! function_exists('renderEventForm')) {
    /**
     * Alias dari eventForm().
     */
    function renderEventForm(string $eventCode, array $options = []): string
    {
        return eventForm($eventCode, $options);
    }
}
