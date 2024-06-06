<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Blog</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">

                        <form class="form-horizontal" action="<?= base_url('admin/Blog/blog_submit_data') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="formFileMultiple" class="form-label">Blog Image</label>
                                    <input class="form-control" name="image" type="file" id="image" multiple>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Blog Name<span class="text-danger">*</span> </label>
                                    <input type="text" name="blog_name" parsley-trigger="change" class="form-control" id="blog_name" placeholder="Blog" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail14" class="form-label">Author</label><span class="text-danger">*
                                        <input class="form-control" name="author" type="text" id="author" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Date<span class="text-danger">*</span> </label>
                                    <input type="date" name="date" parsley-trigger="change" class="form-control" id="date" placeholder="Date" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Views<span class="text-danger">*</span> </label>
                                    <input type="text" name="views" parsley-trigger="change" class="form-control" id="views" placeholder="views" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> Long Description<span class="text-danger">*</span> </label>
                                    <textarea type="text" name="long_desc" parsley-trigger="change" class="form-control" id="long_desc" placeholder="write description" required></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">SEO Title<span class="text-danger">*</span> </label>
                                    <input type="text" name="seo_title" parsley-trigger="change" class="form-control" id="seo_title" placeholder="seo_title" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">SEO Description<span class="text-danger">*</span> </label>
                                    <input type="text" name="seo_desc" parsley-trigger="change" class="form-control" id="seo_desc" placeholder="seo_desc" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Meta Tags<span class="text-danger">*</span> </label>
                                    <input type="text" name="meta_tags" parsley-trigger="change" class="form-control" id="meta_tags" placeholder="meta_tags" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Slug<span class="text-danger">*</span> </label>
                                    <input type="text" name="slug" parsley-trigger="change" class="form-control" id="slug" placeholder="slug" required>
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
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>



<!-- CKEditor initialization script -->
<script>
    CKEDITOR.replace('long_desc', {
        format_tags: 'p;h1;h2;h3;h4;h5;h6',
      
    });
</script>