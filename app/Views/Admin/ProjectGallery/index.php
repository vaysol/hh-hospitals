<div class="mb-3 row">
    <div class="col-md-8">
        <h3>PROJECT GALLERY</h3>
    </div>
    <div class="col-md-4">
        <a href="<?php echo base_url(); ?>/admin/projects/gallery/add" class="btn btn-dark float-end"><i
                class="fa fa-plus-circle" aria-hidden="true"></i> Add New Gallery</a>
    </div>
</div>

<table id="example" class="table bg-light bg-gradient table-bordered bg-opacity-25 rounded-3" style="width:100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Desktop Image</th>
            <th>Mobile Image</th>
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
        <?php $i = 0; foreach($gallery as $gallery){ ?>
        <tr>
            <td class="text-center"><?php echo ++$i; ?></td>
            <td><?php echo $gallery['title']; ?></td>            
            <td><img class="list_image" src="<?= base_url()?>/assets/images/project/gallery/desktop/<?php echo $gallery['desktop_image']; ?>"></td>
            <td><img class="list_image" src="<?= base_url()?>/assets/images/project/gallery/mobile/<?php echo $gallery['mobile_image']; ?>"></td>
            <td><?php echo $gallery['priority']; ?></td>
            <td><?php echo $gallery['status']; ?></td>
            <td><?php echo $gallery['created_by']; ?></td>
            <td><?php echo $gallery['create_date']; ?></td>
            <td><?php echo $gallery['modified_by']; ?></td>
            <td><?php echo $gallery['modified_date']; ?></td>
            <td>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/projects/gallery/edit/'.$gallery['id']; ?>">
                    <i class="fa fa-pencil fa-lg mx-3" aria-hidden="true" style="color:#3a9124;"></i>
                </a>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/projects/gallery/delete/'.$gallery['id']; ?>">
                    <i class="fa fa-trash fa-lg" aria-hidden="true" style="color:#b83a2c;"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>