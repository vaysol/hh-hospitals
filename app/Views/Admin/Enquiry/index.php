<div class="mb-3 row">
    <div class="col-md-8">
        <h3>Enquiries</h3>
    </div>
</div>

<table id="example" class="table bg-light bg-gradient table-bordered bg-opacity-25 rounded-3" style="width:100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email Address</th>
            <th>Message</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php  $i = 0; foreach($enquiry as $enquiry){ ?>
        <tr>
            <td class="text-center"><?php echo ++$i; ?></td>
            <td><?php echo $enquiry['name']; ?></td>
            <td><?php echo $enquiry['mobile']; ?></td>
            <td><?php echo $enquiry['email']; ?></td>
            <td><?php echo $enquiry['message']; ?></td>
            <td><?php echo $enquiry['create_date']; ?></td>
            <td>
                <!-- <a class="text-decoration-none" href="<?php //echo base_url().'/admin/enquiry/edit/'.$enquiry['id']; ?>">
                    <i class="fa fa-pencil fa-lg mx-3" aria-hidden="true" style="color:#3a9124;"></i>
                </a> -->
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/enquirys/delete/'.$enquiry['id']; ?>">
                    <i class="fa fa-trash fa-lg" aria-hidden="true" style="color:#b83a2c;"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>