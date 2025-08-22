<div class="mb-3 row">
    <div class="col-md-8">
        <h3>Users</h3>
    </div>
    <div class="col-md-4">
        <a href="<?php echo base_url(); ?>/admin/users/add" class="btn btn-dark float-end"><i
                class="fa fa-plus-circle" aria-hidden="true"></i> Add New User</a>
    </div>
</div>

<table id="example" class="table bg-light bg-gradient table-bordered bg-opacity-25 rounded-3" style="width:100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>User Name</th>
            <th>Email Address</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created By</th>
            <th>Create Date</th>
            <th>Modified By</th>
            <th>Modified Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0; foreach($users as $user){ ?>
        <tr>
            <td class="text-center"><?php echo ++$i; ?></td>
            <td><img class="list_image" src="<?= base_url()?>/assets/images/user/<?php echo $user['image']; ?>"></td>
            <td><?php echo $user['first_name']; ?></td>
            <td><?php echo $user['last_name']; ?></td>
            <td><?php echo $user['user_name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['role']; ?></td>
            <td><?php echo $user['status']; ?></td>
            <td><?php echo $user['created_by']; ?></td>
            <td><?php echo $user['create_date']; ?></td>
            <td><?php echo $user['modified_by']; ?></td>
            <td><?php echo $user['modified_date']; ?></td>
            <td>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/users/edit/'.$user['id']; ?>">
                    <i class="fa fa-pencil fa-lg mx-3" aria-hidden="true" style="color:#3a9124;"></i>
                </a>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/users/delete/'.$user['id']; ?>">
                    <i class="fa fa-trash fa-lg" aria-hidden="true" style="color:#b83a2c;"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>