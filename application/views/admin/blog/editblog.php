<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <?php
                        foreach ($blog_view as $row) { ?>
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
                        <form class="form-horizontal" action="<?= base_url('admin/Blog/blog_update_data') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="image">Blog Image</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="file" name="image" class="form-control" value="<?= $row->image ?>" id="image" placeholder="Enter blog Image">
                                    <?php echo form_error('image'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="blog_name">Blog Name</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="blog_name" class="form-control" value="<?= $row->blog_name ?>" id="blog_name" placeholder="Enter name">
                                    <?php echo form_error('blog_name'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="author">Blog Author</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="author" class="form-control" value="<?= $row->author ?>" id="author" placeholder="Enter blog Author">
                                    <?php echo form_error('author'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date">Blog Date</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="date" name="date" class="form-control" value="<?= $row->date ?>" id="date" placeholder="Enter blog date">
                                    <?php echo form_error('date'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="views">Views</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="views" class="form-control" value="<?= $row->views ?>" id="views" placeholder="views">
                                    <?php echo form_error('views'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="long_desc">Long Description</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <textarea type="text" name="long_desc" class="form-control" id="long_desc" placeholder="Enter blog Description"><?= $row->long_desc ?></textarea>
                                    <?php echo form_error('long_desc'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="seo_title">SEO Title</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="seo_title" class="form-control" value="<?= $row->seo_title ?>" id="seo_title" placeholder="seo_title">
                                    <?php echo form_error('seo_title'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="seo_desc">SEO Description</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="seo_desc" class="form-control" value="<?= $row->seo_desc ?>" id="seo_desc" placeholder="seo_desc">
                                    <?php echo form_error('seo_desc'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="meta_tags">Meta Tags</label>
                                    <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                    <input type="text" name="meta_tags" class="form-control" value="<?= $row->meta_tags ?>" id="meta_tags" placeholder="meta_tags">
                                    <?php echo form_error('meta_tags'); ?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="meta_tags">Slug</label>
                                    <input type="text" name="slug" class="form-control" value="<?= $row->slug ?>" id="slug" placeholder="slug">
                                    <?php echo form_error('slug'); ?>
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