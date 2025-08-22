<?php helper('custom')?>
<div class="container row">
    <div>
        <?php if ($projects){foreach($projects as $data){} ?>
        <h2>Edit Project</h2>
        <?php }else{ ?>
        <h2>Add Project</h2>
        <?php } ?>
    </div>
    <div class="col-md-8">
        <form action="<?= base_url()?>/admin/projects/save/" class="was-validated1 row" method="POST"
            enctype="multipart/form-data">
            <div class="mb-3 col-md-6" hidden>
                <label for="id" class="form-label">Project Id</label>
                <input value="<?php if (!empty($data['id'])){ echo $data['id']; } ?>" type="text" class="form-control"
                    id="id" placeholder="Project Id" name="id">
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
                <label for="address" class="form-label">Address</label>
                <input value="<?php echo $data['address']; ?>" type="text" class="form-control" id="address"
                    placeholder="Address" name="address" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="label" class="form-label">Label</label>
                <input value="<?php echo $data['label']; ?>" type="text" class="form-control" id="label"
                    placeholder="Label" name="label" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea value="" type="text" class="form-control ckeditor" id="description" placeholder="Description"
                    name="description" required><?php echo html_entity_decode($data['description']); ?></textarea>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="availability" class="form-label">Availability</label>
                <input value="<?php echo $data['availability']; ?>" type="text" class="form-control" id="availability"
                    placeholder="Availability" name="availability" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="project_amenities" class="form-label">Project Amenities</label>
                <select class="selectpicker col-12" multiple aria-label="size 3 select example" id="project_amenities"
                    placeholder="Project Amenities" name="project_amenities[]">
                    <?php if ($all_amenities){foreach($all_amenities as $all_amenities){ ?>
                    <option value="<?php echo $all_amenities['id']; ?>"
                        <?php if(!empty($data['project_amenities'])){if(match_selected($all_amenities['id'],$data['project_amenities'])){echo "selected";}}?>>
                        <?php echo $all_amenities['title']; ?></option>
                    <?php } }?>
                </select>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="project_highlights" class="form-label">Project Highlights</label>
                <select class="selectpicker col-12" multiple aria-label="size 3 select example" id="project_highlights"
                    placeholder="Project Highlights" name="project_highlights[]">
                    <?php if ($all_highlights){foreach($all_highlights as $all_highlights){ ?>
                    <option value="<?php echo $all_highlights['id']; ?>"
                        <?php if(!empty($data['project_highlights'])){if(match_selected($all_highlights['id'],$data['project_highlights'])){echo "selected";}}?>>
                        <?php echo $all_highlights['title']; ?>
                    </option>
                    <?php } }?>
                </select>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="slug" class="form-label">Slug</label>
                <input value="<?php echo $data['slug']; ?>" type="text" class="form-control" id="slug"
                    placeholder="Slug" name="slug" required>
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
                    <?php //if (empty($data['desktop_image'])){ echo "required"; } ?>>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="mobile_image" class="form-label">Mobile Image:</label>
                <input value="<?php if (!empty($data['mobile_image'])){ echo $data['mobile_image']; }?>" type="file"
                    class="form-control input_form_image" aria-label="file example" id="mobile_image"
                    placeholder="Enter Mobile Image" name="mobile_image"
                    <?php //if (empty($data['mobile_image'])){ echo "required"; } ?>>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="desktop_inner_image" class="form-label">Desktop Inner Image:</label>
                <input value="<?php if (!empty($data['desktop_inner_image'])){echo $data['desktop_inner_image'];} ?>"
                    type="file" class="form-control input_form_image" aria-label="file example" id="desktop_inner_image"
                    placeholder="Enter Desktop Inner Image" name="desktop_inner_image"
                    <?php //if (empty($data['desktop_inner_image'])){ echo "required"; } ?>>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="mobile_inner_image" class="form-label">Mobile Inner Image:</label>
                <input value="<?php if (!empty($data['mobile_inner_image'])){ echo $data['mobile_inner_image']; }?>"
                    type="file" class="form-control input_form_image" aria-label="file example" id="mobile_inner_image"
                    placeholder="Enter Mobile Inner Image" name="mobile_inner_image"
                    <?php //if (empty($data['mobile_inner_image'])){ echo "required"; } ?>>
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
                    placeholder="Enter Video Link" name="video_link">
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="floor_plan_link" class="form-label">Floor Plan Link:</label>
                <input value="<?php echo $data['floor_plan_link']; ?>" type="url" class="form-control"
                    id="floor_plan_link" placeholder="Enter Floor Plan Link" name="floor_plan_link">
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="project_walkthrough_link" class="form-label">Project Walkthrough Link:</label>
                <input value="<?php echo $data['project_walkthrough_link']; ?>" type="url" class="form-control"
                    id="project_walkthrough_link" placeholder="Enter Project Walkthrough Link"
                    name="project_walkthrough_link">
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-6">
                <label for="priority" class="form-label">Priority:</label>
                <input value="<?php echo $data['priority']; ?>" type="number" class="form-control" id="priority"
                    placeholder="Enter Priority" name="priority" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="featured" class="form-label">Featured:</label>
                <select class="form-select" aria-label="select featured" name="featured" required>
                    <option class="text-muted" <?php if (empty($data['featured'])){ echo "selected"; } ?> value=""
                        disabled>Please Select..
                    </option>
                    <option class="text-success" <?php if ($data['featured']==1){ echo "selected"; } ?> value="1">
                        Yes</option>
                    <option class="text-danger" <?php if ($data['featured']==0){ echo "selected"; }  ?> value="0">
                        No</option>
                </select>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="upcomming" class="form-label">Upcomming:</label>
                <select class="form-select" aria-label="select upcomming" name="upcomming" required>
                    <option class="text-muted" <?php if (empty($data['upcomming'])){ echo "selected"; } ?> value=""
                        disabled>Please Select..
                    </option>
                    <option class="text-success" <?php if ($data['upcomming']==1){ echo "selected"; } ?> value="1">
                        Yes</option>
                    <option class="text-danger" <?php if ($data['upcomming']==0){ echo "selected"; }  ?> value="0">
                        No</option>
                </select>
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

    <?php if ($projects){ ?>
    <div class="col-md-4 row">
        <div class="col-md-6">
            <p>Desktop Thumb Image :</p>
            <img id="desktop_image_preview" src="<?= base_url()?>/<?php echo $data['desktop_image']; ?>.webp"
                style="width: 100%;height: auto;object-fit: cover;">
        </div>
        <div class="col-md-6">
            <p>Mobile Thumb Image :</p>
            <img id="mobile_image_preview" src="<?= base_url()?>/<?php echo $data['mobile_image']; ?>.webp"
                style="width: 100%;height: auto;object-fit: cover;">
        </div>
        <div class="col-md-6">
            <p>Desktop Inner Image :</p>
            <img id="desktop_inner_image_preview"
                src="<?= base_url()?>/<?php echo $data['desktop_inner_image']; ?>.webp"
                style="width: 100%;height: auto;object-fit: cover;">
        </div>
        <div class="col-md-6">
            <p>Mobile Inner Image :</p>
            <img id="mobile_inner_image_preview" src="<?= base_url()?>/<?php echo $data['mobile_inner_image']; ?>.webp"
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