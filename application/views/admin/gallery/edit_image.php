<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <?php 
                    foreach($gallery_view as $row){?>
                            <h5>Edit Gallery Image</h5>
                            <?php if(isset($msg) || validation_errors() !== ''): ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors();?>
                                    <?= isset($msg)? $msg: ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body font-weight-bold">
                            <form class="form-horizontal" action="<?= base_url('admin/gallery/gallery_update_data') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="ebook_image" >Gallery Image</label>
                                        <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                        <input type="file" name="image" class="form-control" value="<?= $row->image ?>" id="image" placeholder="Enter Gallery Image">
                                        <?php echo form_error('image');?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="image_name" >Image Name</label>
                                        <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                        <input type="text" name="image_name" class="form-control" value="<?= $row->image_name ?>" id="image_name" placeholder="Enter Image Name">
                                        <?php echo form_error('image_name');?>
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
        <!-- [ Main Content ] end -->
