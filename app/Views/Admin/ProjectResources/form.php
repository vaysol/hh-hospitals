<div class="container row">
    <div>
        <?php if ($project_resources){foreach($project_resources as $data){} ?>
        <h2>Edit Project Resource</h2>
        <?php }else{ ?>
        <h2>Add Project Resource</h2>
        <?php } ?>
    </div>
    <div class="col-md-4">
        <form action="<?= base_url()?>/admin/projects/resources/save/" class="was-validated1 row" method="POST"
            enctype="multipart/form-data">
            <div class="mb-3 col-md-12" hidden>
                <label for="id" class="form-label">ProjectResource Id</label>
                <input value="<?php if (!empty($data['id'])){ echo $data['id']; } ?>" type="text" class="form-control"
                    id="id" placeholder="ProjectResource Id" name="id">
            </div>

            <div class="mb-3 col-md-12">
                <label for="title" class="form-label">Title:</label>
                <input value="<?php echo $data['title']; ?>" type="text" class="form-control" id="title"
                    placeholder="Name" name="title" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-12">
                <label for="document" class="form-label">Document:</label>
                <input value="<?php if (!empty($data['document'])){echo $data['document'];} ?>" type="file"
                    class="form-control input_form_image" aria-label="file example" id="document"
                    placeholder="Enter username" name="document"
                    <?php if (empty($data['document'])){ echo "required"; } ?>>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            <div class="mb-3 col-md-12">
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

            <?php if ($project_resources){ ?>
            <label for="doc_link" class="form-label">Document Link:</label>
            <div class="input-group mb-3 col-md-12">
                <input id="doc_link" type="text" class="form-control" placeholder="<?= base_url($data['document']); ?>" value="<?= base_url($data['document']); ?>" >
                <button class="btn btn-secondary" type="button" onclick="copy_text(`<?php echo (base_url().'/'.$data['document']) ; ?>`)">Copy Link</button>
            </div>
            <?php } ?>

            <div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
    <?php if ($project_resources){ ?>
    <div class="col-md-8">
        <p>Document :</p>
        <img id="document_preview" src="<?= base_url($data['document']); ?>.webp"
            style="width: 100%;height: auto;object-fit: cover;">
        <p></p>
    </div>
    <?php }else{ ?>
    <div class="col-md-4">
        <div class="p-2 m-2" hidden="true">
            <p>Document :</p>
            <img id="document_preview" src="#" style="width: 100%;height: auto;object-fit: cover;">
        </div>
    </div>
    <?php } ?>
</div>