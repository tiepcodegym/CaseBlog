<a href="index.php?page=post-list">Back</a>
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Post_time</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $post->id ?></td>
        <td><?php echo $post->title ?></td>
        <td><?php echo $post->content ?></td>
        <td><?php echo $post->post_time ?></td>
    </tr>
    </tbody>
</table>