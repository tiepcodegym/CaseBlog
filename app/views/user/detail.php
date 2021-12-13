<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Country</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $user->id ?></td>
        <td><img style="width: 100px;height: auto" src="<?php echo "upload/" . $user->image ?>" alt=""></td>
        <td><?php echo $user->name ?></td>
        <td><?php echo $user->email ?></td>
        <td><?php echo $user->country ?></td>
    </tr>
    </tbody>
</table>
