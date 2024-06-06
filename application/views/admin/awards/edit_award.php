<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <?php 
                    foreach($awards_view as $row){?>
                        <h5>Edit</h5>
                        <?php if(isset($msg) || validation_errors() !== ''): ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?= validation_errors();?>
                            <?= isset($msg)? $msg: ''; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body font-weight-bold">
                        <form class="form-horizontal"
                            action="<?= base_url('admin/awards/awards_update_data') ?>" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="award_name">Award Name</label>
                                    
                                    <input type="text" name="award_name" class="form-control"
                                        value="<?= $row->award_name ?>" id="award_name" placeholder="Enter Job Title">
                                    <?php echo form_error('award_name');?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="position">Award Image</label>
                                    
                                    <input type="file" name="award_image" class="form-control"
                                        value="<?= $row->award_image ?>" id="award_image" multiple>
                                    <?php echo form_error('award_image');?>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="description">Description</label>
                                    
                                    
                                    <textarea name="award_desc" parsley-trigger="change" class="form-control" id="award_desc" required><?=$row->award_desc?></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="description">Year</label>
                                    
                                    <input type="text" name="award_year" parsley-trigger="change"
                                        class="form-control" id="award_year" value="<?=$row->award_year?>"
                                        placeholder="write description" required></textarea>
                                    <?php echo form_error('description');?>
                                </div>
                            </div>
                            <input type="submit" class="btn  btn-dark" name="submit" value="Add">
                        </form>
                    </div>
                    <?php }?>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <script>
        CKEDITOR.replace('award_desc', {
            format_tags: 'p;h1;h2;h3;h4;h5;h6'
        });
        </script>
        <!-- [ Main Content ] end -->