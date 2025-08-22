<div class="mb-3 row">
    <div class="col-md-8">
        <h3>People behind HH Hospitals</h3>
    </div>
    <div class="col-md-4">
        <a href="<?php echo base_url(); ?>/admin/people/add" class="btn btn-dark float-end"><i
                class="fa fa-plus-circle" aria-hidden="true"></i> Add New People</a>
    </div>
</div>

<table id="example" class="table bg-light bg-gradient table-bordered bg-opacity-25 rounded-3" style="width:100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Priority</th>
            <th>Status</th>
            <th>Created By</th>
            <th>Create Date</th>
            <th>Modified By</th>
            <th>Modified Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0; foreach($people as $people){ ?>
        <tr>
            <td class="text-center"><?php echo ++$i; ?></td>
            <td><img class="list_image" src="<?= base_url()?>/<?php echo $people['image']; ?>.webp"></td>
            <td><?php echo $people['name']; ?></td>
            <td><?php echo $people['designation']; ?></td>
            <td><?php echo $people['priority']; ?></td>
            <td><?php echo $people['status']; ?></td>
            <td><?php echo $people['created_by']; ?></td>
            <td><?php echo $people['create_date']; ?></td>
            <td><?php echo $people['modified_by']; ?></td>
            <td><?php echo $people['modified_date']; ?></td>
            <td>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/people/edit/'.$people['id']; ?>">
                    <i class="fa fa-pencil fa-lg mx-3" aria-hidden="true" style="color:#3a9124;"></i>
                </a>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/people/delete/'.$people['id']; ?>">
                    <i class="fa fa-trash fa-lg" aria-hidden="true" style="color:#b83a2c;"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>