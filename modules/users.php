<div class="container">
    <h1>Users</h1>

    <?php
        $result = $pdo -> query('SELECT * FROM users');
        $users = $result -> fetchAll();
    ?>

    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
            foreach ($users as $user) {
                    ?>

                    <tr>
                        <td><?php echo $user['name'];?></td>
                        <td><?php echo $user['email'];?></td>
                        <td><?php echo $user['password'];?></td>
                        <td><a href="index.php?v=edit_user&id=<?php echo $user['id'] ?>" class="btn btn-success">Edit</a></td>
                        <td><a href="index.php?v=delete_user&id=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a></td>

            <?php } ?>

    </table>

    <a href="index.php?v=add_user" class="btn btn-primary">Add user</a>
</div>
