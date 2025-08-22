<div class="container row">
    <div>
        <?php if (isset($doctor)) { foreach($doctor as $data){} ?>
            <h2>Edit Doctor</h2>
        <?php } else { ?>
            <h2>Add Doctor</h2>
        <?php } ?>
    </div>
    <div class="col-md-8">
        <form action="<?= base_url()?>/admin/doctors/save/" class="was-validated1 row" method="POST" enctype="multipart/form-data">
            
            <!-- Hidden ID field -->
            <div class="mb-3 col-md-6" hidden>
                <label for="doctor_id" class="form-label">Doctor Id</label>
                <input value="<?php if (!empty($data['doctor_id'])) { echo $data['doctor_id']; } ?>" type="text" class="form-control"
                       id="doctor_id" name="doctor_id">
            </div>
            
            <!-- Specialization ID -->
            <div class="mb-3 col-md-6">
                <label for="specialization_id" class="form-label">Specialization ID:</label>
                <input value="<?php echo $data['specialization_id'] ?? ''; ?>" type="number" class="form-control"
                       id="specialization_id" name="specialization_id" placeholder="Specialization ID" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <!-- Registration Number -->
            <div class="mb-3 col-md-6">
                <label for="registration_number" class="form-label">Registration Number:</label>
                <input value="<?php echo $data['registration_number'] ?? ''; ?>" type="text" class="form-control"
                       id="registration_number" name="registration_number" placeholder="Enter registration number" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            
            <!-- First and Last Name -->
            <div class="mb-3 col-md-6">
                <label for="first_name" class="form-label">First Name:</label>
                <input value="<?php echo $data['first_name'] ?? ''; ?>" type="text" class="form-control"
                       id="first_name" name="first_name" placeholder="First Name" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="last_name" class="form-label">Last Name:</label>
                <input value="<?php echo $data['last_name'] ?? ''; ?>" type="text" class="form-control"
                       id="last_name" name="last_name" placeholder="Last Name" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            
            <!-- Title -->
            <div class="mb-3 col-md-6">
                <label for="title" class="form-label">Title:</label>
                <input value="<?php echo $data['title'] ?? ''; ?>" type="text" class="form-control"
                       id="title" name="title" placeholder="Dr., Prof., etc." required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            
            <!-- Gender -->
            <div class="mb-3 col-md-6">
                <label for="gender" class="form-label">Gender:</label>
                <select class="form-select" name="gender" required>
                    <option value="" disabled <?php if (empty($data['gender'])) echo 'selected'; ?>>Please Select..</option>
                    <option value="male" <?php if (($data['gender'] ?? '')=='male') echo 'selected'; ?>>Male</option>
                    <option value="female" <?php if (($data['gender'] ?? '')=='female') echo 'selected'; ?>>Female</option>
                    <option value="other" <?php if (($data['gender'] ?? '')=='other') echo 'selected'; ?>>Other</option>
                </select>
                <div class="invalid-feedback">Please select a gender.</div>
            </div>
            
            <!-- Mobile -->
            <div class="mb-3 col-md-6">
                <label for="mobile" class="form-label">Mobile:</label>
                <input value="<?php echo $data['mobile'] ?? ''; ?>" type="text" class="form-control"
                       id="mobile" name="mobile" placeholder="Enter mobile number" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <!-- Email -->
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Email:</label>
                <input value="<?php echo $data['email'] ?? ''; ?>" type="email" class="form-control"
                       id="email" name="email" placeholder="Enter email address" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <!-- Experience Years -->
            <div class="mb-3 col-md-6">
                <label for="experience_years" class="form-label">Experience (Years):</label>
                <input value="<?php echo $data['experience_years'] ?? ''; ?>" type="number" class="form-control"
                       id="experience_years" name="experience_years" placeholder="Years of experience" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <!-- Qualification -->
            <div class="mb-3 col-md-12">
                <label for="qualification" class="form-label">Qualification:</label>
                <textarea class="form-control" id="qualification" name="qualification" rows="2" required><?php echo $data['qualification'] ?? ''; ?></textarea>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <!-- Bio -->
            <div class="mb-3 col-md-12">
                <label for="bio" class="form-label">Bio:</label>
                <textarea class="form-control" id="bio" name="bio" rows="3" required><?php echo $data['bio'] ?? ''; ?></textarea>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <!-- Profile Image -->
            <div class="mb-3 col-md-6">
                <label for="image" class="form-label">Profile Image:</label>
                <input type="file" class="form-control input_form_image" id="image"
                       name="image" <?php if (empty($data['image'])) echo 'required'; ?>>
                <div class="invalid-feedback">Please upload an image.</div>
            </div>

            <!-- Consultation Fee -->
            <div class="mb-3 col-md-6">
                <label for="consultation_fee" class="form-label">Consultation Fee (₹):</label>
                <input value="<?php echo $data['consultation_fee'] ?? ''; ?>" type="number" step="0.01" class="form-control"
                       id="consultation_fee" name="consultation_fee" placeholder="Enter fee" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <!-- Rating -->
            <div class="mb-3 col-md-6">
                <label for="rating" class="form-label">Rating:</label>
                <input value="<?php echo $data['rating'] ?? ''; ?>" type="number" step="0.01" max="5" class="form-control"
                       id="rating" name="rating" placeholder="Enter rating">
            </div>

            <!-- Total Reviews -->
            <div class="mb-3 col-md-6">
                <label for="total_reviews" class="form-label">Total Reviews:</label>
                <input value="<?php echo $data['total_reviews'] ?? ''; ?>" type="number" class="form-control"
                       id="total_reviews" name="total_reviews" placeholder="Number of reviews">
            </div>

            <div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>

    <?php if (isset($data)){ ?>
    <div class="col-md-4">
        <p>Profile Image :</p>
        <img id="image_preview" src="<?= base_url()?>/assets/images/doctors/<?php echo $data['image']; ?>" 
             style="width: 100%; height: auto; object-fit: cover;">
    </div>
    <?php } else { ?>
    <div class="col-md-4">
        <div class="p-2 m-2" hidden="true">
            <p>Profile Image :</p>
            <img id="image_preview" src="#" style="width: 100%; height: auto; object-fit: cover;">
        </div>
    </div>
    <?php } ?>
</div>
