<div class="container row">
    <div>
        <?php if (isset($users)){foreach($users as $data){} ?>
        <h2>Edit User</h2>
        <?php }else{ ?>
        <h2>Add User</h2>
        <?php } ?>
    </div>
    <div class="col-md-8">
        <form action="<?= base_url()?>/admin/users/save/" class="was-validated1 row" method="POST"
            enctype="multipart/form-data">
            <div class="mb-3 col-md-6" hidden>
                <label for="user_id" class="form-label">User Id</label>
                <input value="<?php if (!empty($data['id'])){ echo $data['id']; } ?>" type="text" class="form-control"
                    id="user_id" placeholder="User Id" name="user_id">
            </div>

            <div class="mb-3 col-md-6">
                <label for="first_name" class="form-label">First Name:</label>
                <input value="<?php echo $data['first_name']; ?>" type="text" class="form-control" id="first_name"
                    placeholder="First Name" name="first_name" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="last_name" class="form-label">Last Name:</label>
                <input value="<?php echo $data['last_name']; ?>" type="text" class="form-control" id="last_name"
                    placeholder="Last Name" name="last_name" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Email Address:</label>
                <input value="<?php echo $data['email']; ?>" type="text" class="form-control" id="email"
                    placeholder="Enter email address" name="email" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="user_name" class="form-label">Username:</label>
                <input value="<?php echo $data['user_name']; ?>" type="text" class="form-control" id="user_name"
                    placeholder="Enter username" name="user_name" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <?php if (empty($users)){ ?>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Password:</label>
                <input value="<?php echo $data['password']; ?>" type="password" class="form-control" id="password"
                    placeholder="Enter password" name="password" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <?php } ?>

            <div class="mb-3 col-md-6">
                <label for="role" class="form-label">Role:</label>

                <select class="form-select" aria-label="select role" name="role" required>
                    <option class="text-muted" <?php if (empty($data['role'])){ echo "selected"; } ?> value="" disabled>
                        Please Select..
                    </option>
                    <option class="text-success" <?php if ($data['role']==1){ echo "selected"; } ?> value="1">
                        Admin</option>
                </select>

                <!-- <input value="<?php echo $data['role']; ?>" type="number" class="form-control" id="role"
                    placeholder="Enter username" name="role" required> -->
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="image" class="form-label">Profile Image:</label>
                <input value="<?php if (!empty($data['image'])){echo $data['image'];} ?>" type="file"
                    class="form-control input_form_image" aria-label="file example" id="image"
                    placeholder="Enter username" name="image" <?php if (empty($data['image'])){ echo "required"; } ?>>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="status" class="form-label">Status:</label>
                <select class="form-select" aria-label="select status" name="status" required>
                    <option class="text-muted" <?php if (empty($data['status'])){ echo "selected"; } ?> value=""
                        disabled>Please Select..
                    </option>
                    <option class="text-success" <?php if ($data['status']==1){ echo "selected"; } ?> value="1">
                        Published</option>
                    <option class="text-danger" <?php if ($data['status']==0){ echo "selected"; }  ?> value="0">
                        Unpublished</option>
                </select>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>

    <?php if ($users){ ?>
    <div class="col-md-4">
        <p>Profile Image :</p>
        <img id="image_preview" src="<?= base_url()?>/assets/images/user/<?php echo $data['image']; ?>"
            style="width: 100%;height: auto;object-fit: cover;">
        <p></p>
    </div>
    <?php }else{ ?>
    <div class="col-md-4">
        <div class="p-2 m-2" hidden="true">
            <p>Profile Image :</p>
            <img id="image_preview" src="#" style="width: 100%;height: auto;object-fit: cover;">
        </div>
    </div>
    <?php } ?>
</div>