
<?php
include_once "app/views/layout/header.php";
?>
<a href="index.php?page=post-create">Them moi</a>
<a href="index.php?page=user-list">Quay lai trang User</a>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>content</th>
        <th>post_time</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($posts) || !empty($posts)):?>
        <?php foreach ($posts as $post):?>
            <tr>
                <td><?php echo $post->id?></td>
                <td><?php echo $post->title?></td>
                <td><?php echo $post->content?></td>
                <td><?php echo $post->post_time?></td>
                <td><a class="btn btn-danger" href="index.php?page=post-delete&id=<?php echo $post->id?>">Delete</a></td>
                <td><a class="btn btn-success" href="index.php?page=post-update&id=<?php echo $post->id?>">Update</a></td>
                <td><a class="btn btn-success" href="index.php?page=post-detail&id=<?php echo $post->id?>">Detail</a></td>
            </tr>
        <?php endforeach;?>
    <?php else:?>
        <tr><td colspan="4">Khong co du lieu</td></tr>
    <?php endif;?>
    </tbody>
</table>

