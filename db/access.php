<?php


defined('MOODLE_INTERNAL') || die();

$capabilities = array(

    'block/xcrisearch:addinstance' => array(

        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'manager' => CAP_ALLOW
        ),

        'clonepermissionsfrom' => 'moodle/site:manageblocks'
    ),
);
