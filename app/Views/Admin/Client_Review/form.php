<div class="container row">
    <div>
        <?php if ($client_review){foreach($client_review as $data){} ?>
        <h2>Edit Client Review</h2>
        <?php }else{ ?>
        <h2>Add Client Review</h2>
        <?php } ?>
    </div>
    <div class="col-md-8">
        <form action="<?= base_url()?>/admin/client_review/save/" class="was-validated1 row" method="POST"
            enctype="multipart/form-data">
            <div class="mb-3 col-md-6" hidden>
                <label for="id" class="form-label">Client Review Id</label>
                <input value="<?php if (!empty($data['id'])){ echo $data['id']; } ?>" type="text" class="form-control"
                    id="id" placeholder="Client Review Id" name="id">
            </div>
            <div class="mb-3 col-md-6">
                <label for="title" class="form-label">Title</label>
                <input value="<?php echo $data['title']; ?>" type="text" class="form-control" id="title"
                    placeholder="Title" name="title" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="type" class="form-label">Type:</label>
                <select class="form-select" aria-label="select type" name="type" required>
                    <option class="text-muted" <?php if (empty($data['type'])){ echo "selected"; } ?> value=""
                        disabled>Please Select..
                    </option>
                    <option class="text-success" <?php if ($data['type']==1){ echo "selected"; } ?> value="1">
                        Written</option>
                    <option class="text-danger" <?php if ($data['type']==2){ echo "selected"; }  ?> value="2">
                        Video</option>
                </select>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            
            <div class="mb-3 col-md-6">
                <label for="name" class="form-label">Client Name</label>
                <input value="<?php echo $data['name']; ?>" type="text" class="form-control" id="name"
                    placeholder="Client Name" name="name" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea value="" type="text" class="form-control ckeditor" id="description"
                    placeholder="Description" name="description" required><?php echo html_entity_decode($data['description']); ?></textarea>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            
            <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Address:</label>
                <input value="<?php echo $data['address']; ?>" type="text" class="form-control" id="address"
                    placeholder="Enter Image Title Text" name="address">
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="client_image" class="form-label">Client Image:</label>
                <input value="<?php if (!empty($data['client_image'])){echo $data['client_image'];} ?>" type="file"
                    class="form-control input_form_image" aria-label="file example" id="client_image"
                    placeholder="Enter username" name="client_image"
                    <?php if (empty($data['client_image'])){ echo "required"; } ?>>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="desktop_image" class="form-label">Desktop Image:</label>
                <input value="<?php if (!empty($data['desktop_image'])){echo $data['desktop_image'];} ?>" type="file"
                    class="form-control input_form_image" aria-label="file example" id="desktop_image"
                    placeholder="Enter username" name="desktop_image"
                    <?php if (empty($data['desktop_image'])){ echo "required"; } ?>>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="mobile_image" class="form-label">Mobile Image:</label>
                <input value="<?php if (!empty($data['mobile_image'])){ echo $data['mobile_image']; }?>" type="file"
                    class="form-control input_form_image" aria-label="file example" id="mobile_image"
                    placeholder="Enter username" name="mobile_image"
                    <?php if (empty($data['mobile_image'])){ echo "required"; } ?>>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="video_link" class="form-label">Video Link:</label>
                <input value="<?php echo $data['video_link']; ?>" type="url" class="form-control" id="video_link"
                    placeholder="Enter Video Link" name="video_link">
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

    <?php if ($client_review){ ?>
    <div class="col-md-4">
        <p>Client Image :</p>
        <img id="client_image_preview" src="<?= base_url()?>/assets/images/client_review/client/<?php echo $data['client_image']; ?>" style="width: 100%;height: auto;object-fit: cover;">
        <p></p>
        <p>Desktop Image :</p>
        <img id="desktop_image_preview"
            src="<?= base_url()?>/assets/images/client_review/desktop/<?php echo $data['desktop_image']; ?>"
            style="width: 100%;height: auto;object-fit: cover;">
        <p></p>
        <p>Mobile Image :</p>
        <img id="mobile_image_preview"
            src="<?= base_url()?>/assets/images/client_review/mobile/<?php echo $data['mobile_image']; ?>"
            style="width: 100%;height: auto;object-fit: cover;">
    </div>
    <?php }else{ ?>
    <div class="col-md-4">
        <div class="p-2 m-2" hidden="true">
            <p>Client Image :</p>
            <img id="client_image_preview" src="#" style="width: 100%;height: auto;object-fit: cover;">
        </div>
        <div class="p-2 m-2" hidden="true">
            <p>Desktop Image :</p>
            <img id="desktop_image_preview" src="#" style="width: 100%;height: auto;object-fit: cover;">
        </div>
        <div class="p-2 m-2" hidden="true">
            <p>Mobile Image :</p>
            <img id="mobile_image_preview" src="#" style="width: 100%;height: auto;object-fit: cover;">
        </div>
    </div>
    <?php } ?>
</div>