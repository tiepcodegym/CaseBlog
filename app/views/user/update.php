<form method="post" enctype="multipart/form-data">
    <input class="form-control" type="text" name="name" value="<?php echo $user->name ?>">
    <input class="form-control" type="file" name="fileUpToLoad">
    <img style="width: 100px" src="<?php echo "upload/" . $user->image ?>" alt="">
    <input class="form-control" type="email" name="email" value="<?php echo $user->email ?>">
    <input class="form-control" type="password" name="password" value="<?php echo $user->password ?>">
    <input class="form-control" type="date" name="birthday" value="<?php echo $user->birthday ?>">
    <input class="form-control" type="text" name="country" value="<?php echo $user->country ?>">
    <button type="submit">Sua</button>
    <a href="index.php"><button>Back</button></a>
</form>
