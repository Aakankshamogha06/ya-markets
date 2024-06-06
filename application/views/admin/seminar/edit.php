<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <?php
                        foreach ($seminar_view as $row) { ?>
                            <h5>Edit Blog</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                    </div>
                    <div class="card-body font-weight-bold">
                        <form class="form-horizontal" action="<?= base_url('admin/seminar/seminar_update_data') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="image">Blog Image</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="file" name="image" class="form-control" value="<?= $row->image ?>" id="image" multiple>
                                    <?php echo form_error('image'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Blog Name</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="name" class="form-control" value="<?= $row->name ?>" id="name" placeholder="Enter name">
                                    <?php echo form_error('name'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date">Blog Date</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="date" class="form-control" value="<?= $row->date ?>" id="date" placeholder="Enter blog date">
                                    <?php echo form_error('date'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="views">Blog Views</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="views" class="form-control" value="<?= $row->views ?>" id="views" placeholder="Enter blog Description">
                                    <?php echo form_error('views'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="long_desc">Long Description</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <textarea type="text" name="long_desc" class="form-control" id="blog_desc" placeholder="Enter blog Description"><?= $row->long_desc ?></textarea>
                                    <?php echo form_error('long_description'); ?>
                                </div>
                            </div>
                            <input type="submit" class="btn  btn-dark" name="submit" value="Add">
                        </form>
                    </div>
                <?php } ?>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('long_desc', {
                format_tags: 'p;h1;h2;h3;h4;h5;h6'
            });
        </script>