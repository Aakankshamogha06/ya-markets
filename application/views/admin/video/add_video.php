<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Video</h5>
                        <?php if (isset($msg) || validation_errors() !== ''): ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="<?= base_url('admin/video/video_submit_data') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Video Title<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="title" parsley-trigger="change"
                                        class="form-control" id="title" placeholder="Title" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="category_id">Video Category</label>
                                    <select id="category_id" name="category_id" class="form-control">
                                        <option selected>Select Video Category</option>
                                        <?php
                                        $role_fetch_data = $this->Video_model->role_fetch();
                                        foreach ($role_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['category']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Video Link<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="video_link" parsley-trigger="change"
                                        class="form-control" id="video_link" placeholder="Video Link" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Video Image<span
                                            class="text-danger">*</span> </label>
                                    <input type="file" name="image" parsley-trigger="change"
                                        class="form-control" id="image" multiple required>
                                </div>
                            </div>
                            <input type="submit" class="btn  btn-dark" name="submit" value="Add">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ sample-page ] end -->
</div>
<!-- [ Main Content ] end -->
<script>

           CKEDITOR.replace('long_description', {

               format_tags: 'p;h1;h2;h3;h4;h5;h6'

           });

</script>