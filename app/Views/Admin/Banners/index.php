<div class="mb-3 row">
    <div class="col-md-8">
        <h3>BANNERS</h3>
    </div>
    <div class="col-md-4">
        <a href="<?php echo base_url(); ?>/admin/banners/add" class="btn btn-dark float-end"><i
                class="fa fa-plus-circle" aria-hidden="true"></i> Add New Banner</a>
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
        <?php $i = 0; foreach($banners as $banner){ ?>
        <tr>
            <td class="text-center"><?php echo ++$i; ?></td>
            <td><?php echo $banner['title']; ?></td>
            <td><img class="list_image" src="<?= base_url().'/'.$banner['desktop_image'];?>.webp"></td>
            <td><img class="list_image" src="<?= base_url().'/'.$banner['mobile_image'];?>.webp"></td>
            <td><?php echo $banner['priority']; ?></td>
            <td><?php getStatus($banner['status']); ?></td>            
            <td><?php echo getUser($banner['created_by']); ?></td>
            <td><?php echo $banner['create_date']; ?></td>
            <td><?php echo getUser($banner['modified_by']); ?></td>
            <td><?php echo $banner['modified_date']; ?></td>
            <td>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/banners/edit/'.$banner['id']; ?>">
                    <i class="fa fa-pencil fa-lg mx-3" aria-hidden="true" style="color:#3a9124;"></i>
                </a>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/banners/delete/'.$banner['id']; ?>">
                    <i class="fa fa-trash fa-lg" aria-hidden="true" style="color:#b83a2c;"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>