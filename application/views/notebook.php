<?php foreach($notes as $note): ?>
<div>
<h3><?php echo $note['title']; ?></h3>
<p><?php echo $this->markdown->transform($note['text']); ?></p>
<a href="notes/edit/<?php echo $note['id']; ?>">Edit</a>
</div>
<?php endforeach; ?>
