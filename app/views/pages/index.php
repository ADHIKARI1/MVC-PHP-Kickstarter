<?php require_once(APPROOT."/views/inc/header.php") ?>

<h1>
	<?php 
		echo $data['title'];
	 ?>
</h1>

<ul>
	<?php foreach($data['posts'] as $post): ?>
		<li><?php echo $post->cname; ?></li>
	<?php endforeach;  ?>
</ul>

<?php echo APPROOT; ?>

<?php require_once(APPROOT."/views/inc/footer.php") ?>