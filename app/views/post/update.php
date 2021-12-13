<form method="post">
    <input type="text" name="title" placeholder="Title" value="<?php echo $post->title?>">
    <input type="text" name="content" placeholder="Content" value="<?php echo $post->content?>">
    <input type="date" name="post_time" placeholder="Post_time" value="<?php echo $post->post_time?>">
    <button type="submit">Update</button>
    <a href="index.php?page=post-list">
        <button type="button">Back</button></a>
</form>
