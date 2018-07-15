<?php 

function createUserForm($mode, $name, $email, $password) {

    ?>

    <div class="container">
        <h1><?php echo $mode == "edit" ? "Edit user" : "Add user" ?></h1>
        <form method="POST">
            <div class="form-group">
                <label>Name:</label>
                <br>
                <input type="text" name="name" <?php echo $name !== "" ? "value='$name'" : "" ?> class="form-control" pattern="[A-Za-z1-9]+" required>
                <br>
                <label>Email:</label>
                <br>
                <input type="text" name="email" <?php echo $email !== "" ? "value='$email'" : "" ?> class="form-control" pattern="\b[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}\b" required>
                <br>
                <label>Password:</label>
                <br>
                <input type=<?php echo $mode == "edit" ? "text" : "password" ?> name="password" <?php echo $password !== "" ? "value='$password'" : "" ?> class="form-control" maxlength="21" required>
                <br>
                <button class="btn btn-primary"><?php echo $mode == "edit" ? "Save" : "Add user" ?></button>
            </div>
        </form>
    </div>


    <?php } ?>

