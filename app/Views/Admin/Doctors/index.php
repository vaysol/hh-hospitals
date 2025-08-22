<div class="mb-3 row">
    <div class="col-md-8">
        <h3>Doctors</h3>
    </div>
    <div class="col-md-4">
        <a href="<?php echo base_url(); ?>/admin/doctors/add" class="btn btn-dark float-end">
            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Doctor
        </a>
    </div>
</div>

<table id="example" class="table bg-light bg-gradient table-bordered bg-opacity-25 rounded-3" style="width:100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Title</th>
            <th>Gender</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Specialization ID</th>
            <th>Reg. Number</th>
            <th>Experience (Yrs)</th>
            <th>Qualification</th>
            <th>Consultation Fee</th>
            <th>Rating</th>
            <th>Total Reviews</th>
            <th>Created Date</th>
            <th>Modified Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0; foreach($doctors as $doctor){ ?>
        <tr>
            <td class="text-center"><?php echo ++$i; ?></td>
            <td><img class="list_image" src="<?= base_url()?>/assets/images/doctors/<?php echo $doctor['image']; ?>"></td>
            <td><?php echo $doctor['first_name']; ?></td>
            <td><?php echo $doctor['last_name']; ?></td>
            <td><?php echo $doctor['title']; ?></td>
            <td><?php echo ucfirst($doctor['gender']); ?></td>
            <td><?php echo $doctor['mobile']; ?></td>
            <td><?php echo $doctor['email']; ?></td>
            <td><?php echo $doctor['specialization_id']; ?></td>
            <td><?php echo $doctor['registration_number']; ?></td>
            <td><?php echo $doctor['experience_years']; ?></td>
            <td><?php echo $doctor['qualification']; ?></td>
            <td><?php echo $doctor['consultation_fee']; ?></td>
            <td><?php echo $doctor['rating']; ?></td>
            <td><?php echo $doctor['total_reviews']; ?></td>
            <td><?php echo $doctor['create_date']; ?></td>
            <td><?php echo $doctor['modified_date']; ?></td>
            <td>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/doctors/edit/'.$doctor['doctor_id']; ?>">
                    <i class="fa fa-pencil fa-lg mx-3" aria-hidden="true" style="color:#3a9124;"></i>
                </a>
                <a class="text-decoration-none" href="<?php echo base_url().'/admin/doctors/delete/'.$doctor['doctor_id']; ?>">
                    <i class="fa fa-trash fa-lg" aria-hidden="true" style="color:#b83a2c;"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
