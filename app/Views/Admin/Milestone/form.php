<?php 
if ($milestone){foreach($milestone as $data){}} ?>

<div class="container row">
    <div>
        <h2>Add Milestone</h2>
    </div>
    <div class="col-md-8">
        <form action="<?= base_url()?>/admin/milestone/save/" class="was-validated1 row" method="POST"
            enctype="multipart/form-data">
            <div class="mb-3 col-md-6" hidden>
                <label for="milestone_id" class="form-label">Milestone Id</label>
                <input value="<?php if (!empty($data['id'])){ echo $data['id']; } ?>" type="text" class="form-control"
                    id="milestone_id" placeholder="Milestone Id" name="milestone_id">
            </div>

            <div class="mb-3 col-md-6">
                <label for="title" class="form-label">Title:</label>
                <input value="<?php echo $data['title']; ?>" type="text" class="form-control" id="title"
                    placeholder="Title" name="title" required>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="description" class="form-label">Description:</label>
                <input value="<?php echo $data['description']; ?>" type="text" class="form-control" id="description"
                    placeholder="Description" name="description" required>
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
</div>