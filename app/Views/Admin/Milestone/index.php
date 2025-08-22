<div class="mb-3 row">
    <div class="col-md-8">
        <h3>MILESTONES</h3>
    </div>
    <div class="col-md-4">
        <a href="<?php echo base_url(); ?>/admin/milestone/add" class="btn btn-dark float-end"><i
                class="fa fa-plus-circle" aria-hidden="true"></i> Add Milestone</a>
    </div>
</div>

<table id="example" class="table bg-light bg-gradient table-bordered bg-opacity-25 rounded-3" style="width:100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
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
        <?php $i = 0; foreach($milestone as $milestone){ ?>
        <tr>
            <td class="text-center"><?php echo ++$i; ?></td>
            <td><?php echo $milestone['title']; ?></td>
            <td><?php echo $milestone['description']; ?></td>
            <td><?php echo $milestone['priority']; ?></td>
            <td><?php echo $milestone['status']; ?></td>
            <td><?php echo $milestone['created_by']; ?></td>
            <td><?php echo $milestone['create_date']; ?></td>
            <td><?php echo $milestone['modified_by']; ?></td>
            <td><?php echo $milestone['modified_date']; ?></td>
            <td>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/milestone/edit/'.$milestone['id']; ?>">
                    <i class="fa fa-pencil fa-lg mx-3" aria-hidden="true" style="color:#3a9124;"></i>
                </a>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/milestone/delete/'.$milestone['id']; ?>">
                    <i class="fa fa-trash fa-lg" aria-hidden="true" style="color:#b83a2c;"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>