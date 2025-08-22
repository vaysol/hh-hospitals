<div class="container row">
    <div>
        <?php if ($events){foreach($events as $data){} ?>
        <h2>Edit Event</h2>
        <?php }else{ ?>
        <h2>Add Event</h2>
        <?php } ?>
    </div>
    <div class="col-md-8">
        <form action="<?= base_url()?>/admin/events/save/" class="was-validated1 row" method="POST"
            enctype="multipart/form-data">
            <div class="mb-3 col-md-6" hidden>
                <label for="id" class="form-label">Event Id</label>
                <input value="<?php if (!empty($data['id'])){ echo $data['id']; } ?>" type="text" class="form-control"
                    id="id" placeholder="Event Id" name="id">
            </div>
            <div class="mb-3 col-md-6">
                <label for="title" class="form-label">Title</label>
                <?php if (empty($data['id'])){ ?>
                <input value="<?php echo $data['title']; ?>" type="text" class="form-control" id="title"
                    placeholder="Title" name="title" onchange='auto_slug(this.value)' required>
                <?php }else{ ?>
                <input value="<?php echo $data['title']; ?>" type="text" class="form-control" id="title"
                    placeholder="Title" name="title" required>
                <?php } ?>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            
            <div class="mb-3 col-md-6">
                <label for="slug" class="form-label">Slug</label>
                <input value="<?php echo $data['slug']; ?>" type="text" class="form-control" id="slug"
                    placeholder="Slug" name="slug" required readonly>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea value="" type="text" class="form-control ckeditor" id="description"
                    placeholder="Description" name="description" required><?php echo html_entity_decode($data['description']); ?></textarea>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            
            <div class="mb-3 col-md-6">
                <label for="meta_title" class="form-label">Meta Title</label>
                <input value="<?php echo $data['meta_title']; ?>" type="text" class="form-control" id="meta_title"
                    placeholder="Meta Title" name="meta_title" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="meta_description" class="form-label">Meta Description:</label>
                <input value="<?php echo $data['meta_description']; ?>" type="text" class="form-control"
                    id="meta_description" placeholder="Enter Meta Description" name="meta_description" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="meta_keywords" class="form-label">Meta Keywords:</label>
                <input value="<?php echo $data['meta_keywords']; ?>" type="text" class="form-control" id="meta_keywords"
                    placeholder="Enter Meta Keywords" name="meta_keywords" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="desktop_image" class="form-label">Desktop Image:</label>
                <input value="<?php if (!empty($data['desktop_image'])){echo $data['desktop_image'];} ?>" type="file"
                    class="form-control input_form_image" aria-label="file example" id="desktop_image"
                    placeholder="Enter Desktop Image" name="desktop_image"
                    <?php if (empty($data['desktop_image'])){ echo "required"; } ?>>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="mobile_image" class="form-label">Mobile Image:</label>
                <input value="<?php if (!empty($data['mobile_image'])){ echo $data['mobile_image']; }?>" type="file"
                    class="form-control input_form_image" aria-label="file example" id="mobile_image"
                    placeholder="Enter Mobile Image" name="mobile_image"
                    <?php if (empty($data['mobile_image'])){ echo "required"; } ?>>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="desktop_inner_image" class="form-label">Desktop Inner Image:</label>
                <input value="<?php if (!empty($data['desktop_inner_image'])){echo $data['desktop_inner_image'];} ?>"
                    type="file" class="form-control input_form_image" aria-label="file example" id="desktop_inner_image"
                    placeholder="Enter Desktop Inner Image" name="desktop_inner_image"
                    <?php if (empty($data['desktop_inner_image'])){ echo "required"; } ?>>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="mobile_inner_image" class="form-label">Mobile Inner Image:</label>
                <input value="<?php if (!empty($data['mobile_inner_image'])){ echo $data['mobile_inner_image']; }?>"
                    type="file" class="form-control input_form_image" aria-label="file example" id="mobile_inner_image"
                    placeholder="Enter Mobile Inner Image" name="mobile_inner_image"
                    <?php if (empty($data['mobile_inner_image'])){ echo "required"; } ?>>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="title_text" class="form-label">Image Title Text:</label>
                <input value="<?php echo $data['title_text']; ?>" type="text" class="form-control" id="title_text"
                    placeholder="Enter Image Title Text" name="title_text" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="alt_title" class="form-label">Image Alt Text:</label>
                <input value="<?php echo $data['alt_title']; ?>" type="text" class="form-control" id="alt_title"
                    placeholder="Enter Image Alt Text" name="alt_title" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="video_link" class="form-label">Video Link:</label>
                <input value="<?php echo $data['video_link']; ?>" type="url" class="form-control" id="video_link"
                    placeholder="Enter Video Link" name="video_link" >
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="priority" class="form-label">Priority:</label>
                <input value="<?php echo $data['priority']; ?>" type="number" class="form-control" id="priority"
                    placeholder="Enter Priority" name="priority" required>
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

    <?php if ($events){ ?>
    <div class="col-md-4 row">
        <div class="col-md-6">
            <p>Desktop Thumb Image :</p>
            <img id="desktop_image_preview"
                src="<?= base_url()?>/assets/images/blog/desktop/thumbnail/<?php echo $data['desktop_image']; ?>"
                style="width: 100%;height: auto;object-fit: cover;">
        </div>
        <div class="col-md-6">
            <p>Mobile Thumb Image :</p>
            <img id="mobile_image_preview"
                src="<?= base_url()?>/assets/images/blog/mobile/thumbnail/<?php echo $data['mobile_image']; ?>"
                style="width: 100%;height: auto;object-fit: cover;">
        </div>
        <div class="col-md-6">
            <p>Desktop Inner Image :</p>
            <img id="desktop_inner_image_preview"
                src="<?= base_url()?>/assets/images/blog/desktop/inner/<?php echo $data['desktop_inner_image']; ?>"
                style="width: 100%;height: auto;object-fit: cover;">
        </div>
        <div class="col-md-6">
            <p>Mobile Inner Image :</p>
            <img id="mobile_inner_image_preview"
                src="<?= base_url()?>/assets/images/blog/mobile/inner/<?php echo $data['mobile_inner_image']; ?>"
                style="width: 100%;height: auto;object-fit: cover;">
        </div>
    </div>
    <?php }else{ ?>
    <div class="col-md-4 row">
        <div class="col-md-6" hidden="true">
            <p>Desktop Thumb Image :</p>
            <img id="desktop_image_preview" src="#" style="width: 100%;height: auto;object-fit: cover;">
        </div>
        <div class="col-md-6" hidden="true">
            <p>Mobile Thumb Image :</p>
            <img id="mobile_image_preview" src="#" style="width: 100%;height: auto;object-fit: cover;">
        </div>
        <div class="col-md-6" hidden="true">
            <p>Desktop Inner Image :</p>
            <img id="desktop_inner_image_preview" src="#" style="width: 100%;height: auto;object-fit: cover;">
        </div>
        <div class="col-md-6" hidden="true">
            <p>Mobile Inner Image :</p>
            <img id="mobile_inner_image_preview" src="#" style="width: 100%;height: auto;object-fit: cover;">
        </div>

    </div>
    <?php } ?>
</div>