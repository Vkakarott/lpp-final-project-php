<?php
include 'header.php';
?>

<h1>Create New Post</h1>

<form action="insert.php" method="POST">
    <input name="title" placeholder="Title" required><br>
    <textarea name="content" placeholder="Content" required></textarea><br>
    <button type="submit">Publish</button>
</form>

<?php
include 'footer.php';
?>
