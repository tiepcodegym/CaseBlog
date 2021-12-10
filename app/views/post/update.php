<form method="post">
    <input type="text" name="name" value="<?php echo $post->id ?>">
    <input type="email" name="email" value="<?php echo $post->title ?>">
    <input type="password" name="password" value="<?php echo $post->content ?>">
    <input type="date" name="birthday" value="<?php echo $post->post_time ?>">
    <button type="submit">Sua</button>
    <a href="index.php"><button>Back</button></a>
</form>