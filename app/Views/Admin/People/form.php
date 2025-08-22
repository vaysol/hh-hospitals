<div class="container row">
    <div>
        <?php if ($people){foreach($people as $data){} ?>
        <h2>Edit People</h2>
        <?php }else{ ?>
        <h2>Add People</h2>
        <?php } ?>
    </div>
    <div class="col-md-8">
        <form action="<?= base_url()?>/admin/people/save/" class="was-validated1 row" method="POST"
            enctype="multipart/form-data">
            <div class="mb-3 col-md-6" hidden>
                <label for="id" class="form-label">Id</label>
                <input value="<?php if (!empty($data['id'])){ echo $data['id']; } ?>" type="text" class="form-control"
                    id="id" placeholder="Id" name="id">
            </div>

            <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Name:</label>
                <input value="<?php echo $data['name']; ?>" type="text" class="form-control" id="name"
                    placeholder="Name" name="name" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="designation" class="form-label">Designation:</label>
                <input value="<?php echo $data['designation']; ?>" type="text" class="form-control" id="designation"
                    placeholder="Designation" name="designation" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="image" class="form-label">Image:</label>
                <input value="<?php if (!empty($data['image'])){echo $data['image'];} ?>" type="file"
                    class="form-control input_form_image" aria-label="file example" id="image"
                    placeholder="Enter username" name="image" <?php if (empty($data['image'])){ echo "required"; } ?>>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="title_text" class="form-label">Image Title Text:</label>
                <input value="<?php echo $data['title_text']; ?>" type="text" class="form-control" id="title_text"
                    placeholder="Enter username" name="title_text" >
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            
            <div class="mb-3 col-md-6">
                <label for="alt_title" class="form-label">Image Alt Text:</label>
                <input value="<?php echo $data['alt_title']; ?>" type="text" class="form-control" id="alt_title"
                    placeholder="Enter username" name="alt_title" >
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="priority" class="form-label">Priority:</label>
                <input value="<?php echo $data['priority']; ?>" type="number" class="form-control" id="priority"
                    placeholder="Priority" name="priority" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
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

    <?php if ($people){ ?>
    <div class="col-md-4">
        <p>Profile Image :</p>
        <img id="image_preview" src="<?= base_url()?>/<?php echo $data['image']; ?>.png"
            style="width: 100%;height: auto;object-fit: cover;">
        <p></p>
    </div>
    <?php }else{ ?>
    <div class="col-md-4">
        <div class="p-2 m-2" hidden="true">
            <p>Profile Image :</p>
            <img id="image_preview" src="#" style="width: 100%;height: auto;object-fit: cover;">
        </div>
    </div>
    <?php } ?>
</div>