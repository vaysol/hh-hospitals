<div class="mb-3 row">
    <div class="col-md-8">
        <h3>Specialities</h3>
    </div>
    <div class="col-md-4">
        <a href="<?php echo base_url(); ?>/admin/specialities/add" class="btn btn-dark float-end">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Speciality
        </a>
    </div>
</div>

<table id="example" class="table bg-light bg-gradient table-bordered bg-opacity-25 rounded-3" style="width:100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Label</th>
            <th>Desktop Image</th>
            <th>Priority</th>
            <th>Status</th>
            <th>Created By</th>
            <th>Create Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0; foreach($specialities as $speciality){ ?>
        <tr>
            <td class="text-center"><?php echo ++$i; ?></td>
            <td><?php echo $speciality['title']; ?></td>
            <td><?php echo $speciality['label']; ?></td>
            <td>
                <img class="list_image" src="<?= base_url()?>/assets/images/specialities/<?php echo $speciality['desktop_image']; ?>" alt="" style="height:40px;">
            </td>
            <td><?php echo $speciality['priority']; ?></td>
            <td><?php echo $speciality['status'] ? 'Active' : 'Inactive'; ?></td>
            <td><?php echo $speciality['created_by']; ?></td>
            <td><?php echo $speciality['create_date']; ?></td>
            <td>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/specialities/edit/'.$speciality['speciality_id']; ?>">
                    <i class="fa fa-pencil fa-lg mx-3" aria-hidden="true" style="color:#3a9124;"></i>
                </a>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/specialities/delete/'.$speciality['speciality_id']; ?>">
                    <i class="fa fa-trash fa-lg" aria-hidden="true" style="color:#b83a2c;"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
