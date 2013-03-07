<?php
$this->load->helper('form');
echo form_open('notes/save');
?>

<input type="text" name="title" value="" id="title" maxlength="64"  />
<textarea name="notes" cols="85" rows="30" id="notes" ></textarea>

<!-- Can't save unless user logged in -->
<?php if ($this->ion_auth->logged_in()): ?>
<input type="submit" name="save" value="Save"  />
<?php else: ?>
<input type="submit" name="save" value="Save" disabled="disabled" />
<?php endif; ?>

<?php
echo form_close();
?>
