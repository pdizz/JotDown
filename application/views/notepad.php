<div id="notepad">
<?php

$this->load->helper('form');

echo form_open('notes/save', 'id="notes_form"');
?>
    
    <input type="hidden" name="note_id" value="<?php echo $note['id']; ?>" />
    <label for="title">Title: </label>
    <input type="text" name="title" value="<?php echo $note['title']; ?>" id="title" maxlength="64"  />
    <textarea name="text" cols="85" rows="30" id="notes" ><?php echo $note['text']; ?></textarea>

<!-- Can't save unless user logged in -->
    <?php if ($this->ion_auth->logged_in()): ?>
    <input id="save_button" type="submit" name="save" value="Save"  />
    <?php else: ?>
    <input id="save_button" type="submit" name="save" value="Save" disabled="disabled" />
    <?php endif; ?>

<?php
echo form_close();
?>
</div>
