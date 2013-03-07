<?php

$this->load->helper('form');
echo form_open('notes/save');

echo form_input(array(
    'name' => 'title',
    'id' => 'title',
    'maxlength' => '64'
    ));

echo form_textarea(array(
    'name' => 'notes',
    'id' => 'notes',
    'rows' => '35',
    'cols' => '85'
    ));

echo form_submit('save', 'Save');
echo form_close();

?>
