<div class="mb-3 row">
    <div class="col-md-8">
        <h3>Project Highlights</h3>
    </div>
    <div class="col-md-4">
        <a href="<?php echo base_url(); ?>/admin/projects/highlights/add" class="btn btn-dark float-end"><i
                class="fa fa-plus-circle" aria-hidden="true"></i> Add New Highlight</a>
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
        <?php $i = 0; foreach($project_highlights as $project_highlights){ ?>
        <tr>
            <td class="text-center"><?php echo ++$i; ?></td>
            <td><?php echo $project_highlights['title']; ?></td>            
            <td><img class="list_image" src="<?= base_url()?>/<?php echo $project_highlights['desktop_image']; ?>.webp"></td>
            <td><img class="list_image" src="<?= base_url()?>/<?php echo $project_highlights['mobile_image']; ?>.webp"></td>
            <td><?php echo $project_highlights['priority']; ?></td>
            <td><?php echo $project_highlights['status']; ?></td>
            <td><?php echo getUser($project_highlights['created_by']); ?></td>
            <td><?php echo $project_highlights['create_date']; ?></td>
            <td><?php echo getUser($project_highlights['modified_by']); ?></td>
            <td><?php echo $project_highlights['modified_date']; ?></td>
            <td>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/projects/highlights/edit/'.$project_highlights['id']; ?>">
                    <i class="fa fa-pencil fa-lg mx-3" aria-hidden="true" style="color:#3a9124;"></i>
                </a>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/projects/highlights/delete/'.$project_highlights['id']; ?>">
                    <i class="fa fa-trash fa-lg" aria-hidden="true" style="color:#b83a2c;"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>