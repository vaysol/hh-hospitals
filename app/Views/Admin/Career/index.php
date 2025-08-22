<div class="mb-3 row">
    <div class="col-md-8">
        <h3>Careers</h3>
    </div>
    <div class="col-md-4">
        <a href="<?php echo base_url(); ?>/admin/careers/add" class="btn btn-dark float-end"><i
                class="fa fa-plus-circle" aria-hidden="true"></i> Add New Opening</a>
    </div>
</div>

<table id="example" class="table bg-light bg-gradient table-bordered bg-opacity-25 rounded-3" style="width:100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Department</th>
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
        <?php $i = 0; foreach($career as $career){ ?>
        <tr>
            <td class="text-center"><?php echo ++$i; ?></td>
            <td><?php echo $career['title']; ?></td>
            <td><?php echo $career['department']; ?></td>
            <td><?php echo $career['priority']; ?></td>
            <td><?php echo $career['status']; ?></td>
            <td><?php echo $career['created_by']; ?></td>
            <td><?php echo $career['create_date']; ?></td>
            <td><?php echo $career['modified_by']; ?></td>
            <td><?php echo $career['modified_date']; ?></td>
            <td>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/careers/edit/'.$career['id']; ?>">
                    <i class="fa fa-pencil fa-lg mx-3" aria-hidden="true" style="color:#3a9124;"></i>
                </a>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/careers/delete/'.$career['id']; ?>">
                    <i class="fa fa-trash fa-lg" aria-hidden="true" style="color:#b83a2c;"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>