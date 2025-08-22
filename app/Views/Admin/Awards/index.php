<div class="mb-3 row">
    <div class="col-md-8">
        <h3>AWARDS</h3>
    </div>
    <div class="col-md-4">
        <a href="<?php echo base_url(); ?>/admin/awards/add" class="btn btn-dark float-end"><i
                class="fa fa-plus-circle" aria-hidden="true"></i> Add New Award</a>
    </div>
</div>

<table id="example" class="table bg-light bg-gradient table-bordered bg-opacity-25 rounded-3" style="width:100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Presenter</th>
            <th>Image</th>
            <th>Priority</th>
            <th>Created By</th>
            <th>Create Date</th>
            <th>Modified By</th>
            <th>Modified Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0; foreach($awards as $awards){ ?>
        <tr>
            <td class="text-center"><?php echo ++$i; ?></td>
            <td><?php echo $awards['title']; ?></td>
            <td><?php echo $awards['presenter']; ?></td>
            <td><img class="list_image" src="<?= base_url()?>/assets/images/award/<?php echo $awards['image']; ?>"></td>
            <td><?php echo $awards['priority']; ?></td>
            <td><?php echo $awards['created_by']; ?></td>
            <td><?php echo $awards['create_date']; ?></td>
            <td><?php echo $awards['modified_by']; ?></td>
            <td><?php echo $awards['modified_date']; ?></td>
            <td><?php echo ($awards['status']== '1' ? 'Published' : 'Unpublished'); ?></td>
            <td>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/awards/edit/'.$awards['id']; ?>">
                    <i class="fa fa-pencil fa-lg mx-3" aria-hidden="true" style="color:#3a9124;"></i>
                </a>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/awards/delete/'.$awards['id']; ?>">
                    <i class="fa fa-trash fa-lg" aria-hidden="true" style="color:#b83a2c;"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>