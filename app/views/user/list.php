<?php include_once "app/views/layout/header.php"?>
<a href="index.php?page=post-list">Post</a>
<a href="index.php?page=user-list">User</a>
<a href="index.php?page=user-create">Create ADD new user</a><br>

<h3 align="center">HIỂN THỊ THÔNG TIN NGƯỜI DÙNG</h3>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Country</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($users) || !empty($users)):?>
    <?php foreach ($users as $user):?>
    <tr>
        <td><?php echo $user->id?></td>
        <td><img style="width: 100px;height: auto" src="<?php echo "upload/" . $user->image ?>" alt=""></td>
        <td><?php echo $user->name?></td>
        <td><?php echo $user->email?></td>
        <td><?php echo $user->country?></td>
        <td><a class="btn btn-danger" href="index.php?page=user-delete&id=<?php echo $user->id?>">Delete</a></td>
        <td><a class="btn btn-success" href="index.php?page=user-update&id=<?php echo $user->id?>">Update</a></td>
        <td><a class="btn btn-success" href="index.php?page=user-detail&id=<?php echo $user->id?>">Detail</a></td>
    </tr>
    <?php endforeach;?>
    <?php else:?>
    <tr><td colspan="4">Khong co du lieu</td></tr>
    <?php endif;?>
    </tbody>
</table>

