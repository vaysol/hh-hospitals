<?php 
if ($career){foreach($career as $data){}} ?>

<div class="container row">
    <div>
        <h2>Add Career</h2>
    </div>
    <div class="col-md-12">
        <form action="<?= base_url()?>/admin/careers/save/" class="was-validated1 row" method="POST"
            enctype="multipart/form-data">
            <div class="mb-3 col-md-4" hidden>
                <label for="id" class="form-label">Career Id</label>
                <input value="<?php if (!empty($data['id'])){ echo $data['id']; } ?>" type="text" class="form-control"
                    id="id" placeholder="Career Id" name="id">
            </div>

            <div class="mb-3 col-md-4">
                <label for="title" class="form-label">Title:</label>
                <?php if (empty($data['id'])){ ?>
                <input value="<?php echo $data['title']; ?>" type="text" class="form-control" id="title"
                    placeholder="Title" name="title" onchange='auto_slug(this.value)' required>
                <?php }else{ ?>
                <input value="<?php echo $data['title']; ?>" type="text" class="form-control" id="title"
                    placeholder="Title" name="title" required>
                <?php } ?>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-4">
                <label for="slug" class="form-label">Slug</label>
                <input value="<?php echo $data['slug']; ?>" type="text" class="form-control" id="slug"
                    placeholder="Slug" name="slug" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-4">
                <label for="department" class="form-label">Department:</label>
                <input value="<?php echo $data['department']; ?>" type="text" class="form-control" id="department"
                    placeholder="Department" name="department" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea value="" type="text" class="form-control ckeditor" id="description"
                    placeholder="Description" name="description" required><?php echo html_entity_decode($data['description']); ?></textarea>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-4">
                <label for="experience" class="form-label">Experience:</label>
                <input value="<?php echo $data['experience']; ?>" type="text" class="form-control" id="experience"
                    placeholder="Enter Experience" name="experience" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-4">
                <label for="location" class="form-label">Location:</label>
                <input value="<?php echo $data['location']; ?>" type="text" class="form-control" id="location"
                    placeholder="Enter Location" name="location" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-4">
                <label for="type" class="form-label">Job Type:</label>
                <input value="<?php echo $data['type']; ?>" type="text" class="form-control" id="type"
                    placeholder="Enter Job Type" name="type" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-4">
                <label for="link" class="form-label">Apply Link:</label>
                <input value="<?php echo $data['link']; ?>" type="url" class="form-control" id="link"
                    placeholder="Enter Apply Link" name="link" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

           

            <div class="mb-3 col-md-4">
                <label for="priority" class="form-label">Priority:</label>
                <input value="<?php echo $data['priority']; ?>" type="number" class="form-control" id="priority"
                    placeholder="Enter Priority" name="priority" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-4">
                <label for="status" class="form-label">Status:</label>
                <select class="form-select" aria-label="select status" name="status" required>
                    <option class="text-muted" <?php if (empty($data['status'])){ echo "selected"; } ?> value=""
                        disabled>Please Select..
                    </option>
                    <option class="text-success" <?php if ($data['status']==1){ echo "selected"; } ?> value="1">
                        Published</option>
                    <option class="text-danger" <?php if ($data['status']==0){ echo "selected"; }  ?> value="0">
                        Unpublished</option>
                </select>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>