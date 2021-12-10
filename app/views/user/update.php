<form method="post">
    <input type="text" name="name" value="<?php echo $user->name ?>">
    <input type="email" name="email" value="<?php echo $user->email ?>">
    <input type="password" name="password" value="<?php echo $user->password ?>">
    <input type="date" name="birthday" value="<?php echo $user->birthday ?>">
    <input type="text" name="country" value="<?php echo $user->country ?>">
    <button type="submit">Sua</button>
    <a href="index.php"><button>Back</button></a>
</form>
