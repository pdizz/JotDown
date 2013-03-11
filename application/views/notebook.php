<?php foreach($notes as $note): ?>
<div>
<h3><?php echo $note['title']; ?></h3>
<p><?php echo $note['text']; ?></p>
</div>
<?php endforeach; ?>
