<div class="row">
    <div class="col-md-12">
        <h3><?php echo isset($speciality) ? 'Edit' : 'Add'; ?> Speciality</h3>
        <form action="<?php echo base_url('admin/speciality/save'); ?>" method="post" enctype="multipart/form-data">
            
            <?php if(isset($speciality['speciality_id'])) { ?>
                <input type="hidden" name="speciality_id" value="<?php echo $speciality['speciality_id']; ?>">
            <?php } ?>
            
            <!-- Title -->
            <div class="mb-3">
                <label class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control" 
                       value="<?php echo $speciality['title'] ?? ''; ?>" required>
            </div>

            <!-- Label -->
            <div class="mb-3">
                <label class="form-label">Label <span class="text-danger">*</span></label>
                <input type="text" name="label" class="form-control" 
                       value="<?php echo $speciality['label'] ?? ''; ?>" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4"><?php echo $speciality['description'] ?? ''; ?></textarea>
            </div>

            <!-- Desktop Image -->
            <div class="mb-3">
                <label class="form-label">Desktop Image <span class="text-danger">*</span></label>
                <input type="file" name="desktop_image" class="form-control" <?php echo isset($speciality) ? '' : 'required'; ?>>
                <?php if(!empty($speciality['desktop_image'])) { ?>
                    <img src="<?= base_url('assets/images/speciality/'.$speciality['desktop_image']); ?>" class="mt-2" style="height:60px;">
                <?php } ?>
            </div>

            <!-- Mobile Image -->
            <div class="mb-3">
                <label class="form-label">Mobile Image <span class="text-danger">*</span></label>
                <input type="file" name="mobile_image" class="form-control" <?php echo isset($speciality) ? '' : 'required'; ?>>
                <?php if(!empty($speciality['mobile_image'])) { ?>
                    <img src="<?= base_url('assets/images/speciality/'.$speciality['mobile_image']); ?>" class="mt-2" style="height:60px;">
                <?php } ?>
            </div>

            <!-- Desktop Inner Image -->
            <div class="mb-3">
                <label class="form-label">Desktop Inner Image</label>
                <input type="file" name="desktop_inner_image" class="form-control">
                <?php if(!empty($speciality['desktop_inner_image'])) { ?>
                    <img src="<?= base_url('assets/images/speciality/'.$speciality['desktop_inner_image']); ?>" class="mt-2" style="height:60px;">
                <?php } ?>
            </div>

            <!-- Mobile Inner Image -->
            <div class="mb-3">
                <label class="form-label">Mobile Inner Image</label>
                <input type="file" name="mobile_inner_image" class="form-control">
                <?php if(!empty($speciality['mobile_inner_image'])) { ?>
                    <img src="<?= base_url('assets/images/speciality/'.$speciality['mobile_inner_image']); ?>" class="mt-2" style="height:60px;">
                <?php } ?>
            </div>

            <!-- Meta Title -->
            <div class="mb-3">
                <label class="form-label">Meta Title</label>
                <input type="text" name="meta_title" class="form-control" 
                       value="<?php echo $speciality['meta_title'] ?? ''; ?>">
            </div>

            <!-- Meta Description -->
            <div class="mb-3">
                <label class="form-label">Meta Description</label>
                <textarea name="meta_description" class="form-control" rows="3"><?php echo $speciality['meta_description'] ?? ''; ?></textarea>
            </div>

            <!-- Meta Keywords -->
            <div class="mb-3">
                <label class="form-label">Meta Keywords</label>
                <input type="text" name="meta_keywords" class="form-control" 
                       value="<?php echo $speciality['meta_keywords'] ?? ''; ?>">
            </div>

            <!-- Slug -->
            <div class="mb-3">
                <label class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" 
                       value="<?php echo $speciality['slug'] ?? ''; ?>">
            </div>

            <!-- Alt Title -->
            <div class="mb-3">
                <label class="form-label">Alt Title</label>
                <input type="text" name="alt_title" class="form-control" 
                       value="<?php echo $speciality['alt_title'] ?? ''; ?>">
            </div>

            <!-- Title Text -->
            <div class="mb-3">
                <label class="form-label">Title Text</label>
                <input type="text" name="title_text" class="form-control" 
                       value="<?php echo $speciality['title_text'] ?? ''; ?>">
            </div>

            <!-- Priority -->
            <div class="mb-3">
                <label class="form-label">Priority</label>
                <input type="number" name="priority" class="form-control" 
                       value="<?php echo $speciality['priority'] ?? '0'; ?>">
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="1" <?php echo (isset($speciality['status']) && $speciality['status']==1) ? 'selected' : ''; ?>>Active</option>
                    <option value="0" <?php echo (isset($speciality['status']) && $speciality['status']==0) ? 'selected' : ''; ?>>Inactive</option>
                </select>
            </div>

            <!-- Created By -->
            <div class="mb-3">
                <label class="form-label">Created By (User ID)</label>
                <input type="number" name="created_by" class="form-control" 
                       value="<?php echo $speciality['created_by'] ?? ''; ?>">
            </div>

            <!-- Create Date -->
            <div class="mb-3">
                <label class="form-label">Create Date</label>
                <input type="date" name="create_date" class="form-control" 
                       value="<?php echo $speciality['create_date'] ?? ''; ?>">
            </div>

            <!-- Modified By -->
            <div class="mb-3">
                <label class="form-label">Modified By (User ID)</label>
                <input type="number" name="modified_by" class="form-control" 
                       value="<?php echo $speciality['modified_by'] ?? ''; ?>">
            </div>

            <!-- Modified Date -->
            <div class="mb-3">
                <label class="form-label">Modified Date</label>
                <input type="date" name="modified_date" class="form-control" 
                       value="<?php echo $speciality['modified_date'] ?? ''; ?>">
            </div>

            <!-- Save Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i> Save
                </button>
                <a href="<?php echo base_url('admin/speciality'); ?>" class="btn btn-secondary">
                    <i class="fa fa-arrow-left"></i> Cancel
                </a>
            </div>

        </form>
    </div>

    <?php if (isset($speciality)){ ?>
<div class="col-md-4 row">
    <div class="col-md-6">
        <p>Desktop Thumb Image :</p>
        <img id="desktop_image_preview" 
             src="<?= base_url() . '/' . $speciality['desktop_image']; ?>.webp"
             style="width: 100%; height: auto; object-fit: cover;">
    </div>
    <div class="col-md-6">
        <p>Mobile Thumb Image :</p>
        <img id="mobile_image_preview" 
             src="<?= base_url() . '/' . $speciality['mobile_image']; ?>.webp"
             style="width: 100%; height: auto; object-fit: cover;">
    </div>
    <div class="col-md-6">
        <p>Desktop Inner Image :</p>
        <img id="desktop_inner_image_preview" 
             src="<?= base_url() . '/' . $speciality['desktop_inner_image']; ?>.webp"
             style="width: 100%; height: auto; object-fit: cover;">
    </div>
    <div class="col-md-6">
        <p>Mobile Inner Image :</p>
        <img id="mobile_inner_image_preview" 
             src="<?= base_url() . '/' . $speciality['mobile_inner_image']; ?>.webp"
             style="width: 100%; height: auto; object-fit: cover;">
    </div>
</div>
<?php } else { ?>
<div class="col-md-4 row">
    <div class="col-md-6" hidden="true">
        <p>Desktop Thumb Image :</p>
        <img id="desktop_image_preview" src="#" 
             style="width: 100%; height: auto; object-fit: cover;">
    </div>
    <div class="col-md-6" hidden="true">
        <p>Mobile Thumb Image :</p>
        <img id="mobile_image_preview" src="#" 
             style="width: 100%; height: auto; object-fit: cover;">
    </div>
    <div class="col-md-6" hidden="true">
        <p>Desktop Inner Image :</p>
        <img id="desktop_inner_image_preview" src="#" 
             style="width: 100%; height: auto; object-fit: cover;">
    </div>
    <div class="col-md-6" hidden="true">
        <p>Mobile Inner Image :</p>
        <img id="mobile_inner_image_preview" src="#" 
             style="width: 100%; height: auto; object-fit: cover;">
    </div>
</div>
<?php } ?>
</div>
