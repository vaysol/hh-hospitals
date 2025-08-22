<div class="mb-3 row">
    <div class="col-md-8">
        <h3>PARTNERS</h3>
    </div>
    <div class="col-md-4">
        <a href="<?php echo base_url(); ?>/admin/partners/add" class="btn btn-dark float-end"><i
                class="fa fa-plus-circle" aria-hidden="true"></i> Add New Partner</a>
    </div>
</div>

<table id="example" class="table bg-light bg-gradient table-bordered bg-opacity-25 rounded-3" style="width:100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Logo</th>
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
        <?php $i = 0; foreach($partners as $partners){ ?>
        <tr>
            <td class="text-center"><?php echo ++$i; ?></td>
            <td><?php echo $partners['name']; ?></td>
            <td><img class="list_image" src="<?= base_url()?>/assets/images/partner/<?php echo $partners['image']; ?>"></td>
            <td><?php echo $partners['priority']; ?></td>
            <td><?php echo $partners['created_by']; ?></td>
            <td><?php echo $partners['create_date']; ?></td>
            <td><?php echo $partners['modified_by']; ?></td>
            <td><?php echo $partners['modified_date']; ?></td>
            <td><?php echo ($partners['status']== '1' ? 'Published' : 'Unpublished'); ?></td>
            <td>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/partners/edit/'.$partners['id']; ?>">
                    <i class="fa fa-pencil fa-lg mx-3" aria-hidden="true" style="color:#3a9124;"></i>
                </a>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/partners/delete/'.$partners['id']; ?>">
                    <i class="fa fa-trash fa-lg" aria-hidden="true" style="color:#b83a2c;"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>