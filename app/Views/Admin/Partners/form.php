<div class="container row">
    <div>
        <?php if ($partners){foreach($partners as $data){} ?>
            <h2>Edit Partner</h2>
            <?php }else{ ?>
            <h2>Add Partner</h2>
        <?php } ?>
    </div>
    <div class="col-md-8">
        <form action="<?= base_url()?>/admin/partners/save/" class="was-validated1 row" method="POST"
            enctype="multipart/form-data">
            <div class="mb-3 col-md-6" hidden>
                <label for="partners_id" class="form-label">Partner Id</label>
                <input value="<?php if (!empty($data['id'])){ echo $data['id']; } ?>" type="text" class="form-control"
                    id="partners_id" placeholder="Partner Id" name="partners_id">
            </div>

            <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Name:</label>
                <input value="<?php echo $data['name']; ?>" type="text" class="form-control" id="name"
                    placeholder="Name" name="name" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            
            <div class="mb-3 col-md-6">
                <label for="priority" class="form-label">Priority:</label>
                <input value="<?php echo $data['priority']; ?>" type="number" class="form-control" id="priority"
                    placeholder="Enter Priority" name="priority" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea value="" type="text" class="form-control ckeditor" id="description"
                    placeholder="Description" name="description" required><?php echo html_entity_decode($data['description']); ?></textarea>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="image" class="form-label">Logo Image:</label>
                <input value="<?php if (!empty($data['image'])){echo $data['image'];} ?>" type="file"
                    class="form-control input_form_image" aria-label="file example" id="image" placeholder="Enter username"
                    name="image" <?php if (empty($data['image'])){ echo "required"; } ?>>
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
    <?php if ($partners){ ?>
    <div class="col-md-4">
        <p>Logo Image :</p>
        <img id="image_preview"
            src="<?= base_url()?>/assets/images/partner/<?php echo $data['image']; ?>"
            style="width: 100%;height: auto;object-fit: cover;">
        <p></p>
    </div>
    <?php }else{ ?>
    <div class="col-md-4">
        <div class="p-2 m-2" hidden="true">
            <p>Logo Image :</p>
            <img id="image_preview" src="#" style="width: 100%;height: auto;object-fit: cover;">
        </div>
    </div>
    <?php } ?>
</div>