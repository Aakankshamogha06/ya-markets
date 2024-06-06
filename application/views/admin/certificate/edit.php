<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <?php 
                    foreach($ebook_view as $row){?>
                            <h5>Edit E-Book</h5>
                            <?php if(isset($msg) || validation_errors() !== ''): ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors();?>
                                    <?= isset($msg)? $msg: ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body font-weight-bold">
                            <form class="form-horizontal" action="<?= base_url('admin/ebook/ebook_update_data') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="ebook_image" >E-Book Image</label>
                                        <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                        <input type="file" name="ebook_image" class="form-control" value="<?= $row->ebook_image ?>" id="ebook_image" placeholder="Enter ebook Image">
                                        <?php echo form_error('ebook_image');?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="ebook_name" >E-Book Name</label>
                                        <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                        <input type="text" name="ebook_name" class="form-control" value="<?= $row->ebook_name ?>" id="ebook_name" placeholder="Enter ebook_name">
                                        <?php echo form_error('ebook_name');?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="ebook_price" >E-Book Price</label>
                                        <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                        <input type="text" name="ebook_price" class="form-control" value="<?= $row->ebook_price ?>" id="ebook_price" placeholder="Enter ebook price">
                                        <?php echo form_error('ebook_price');?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="ebook_type" >E-Book Type</label>
                                        <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                        <input type="text" name="ebook_type" class="form-control" value="<?= $row->ebook_type ?>" id="ebook_type" placeholder="Enter E-book Type">
                                        <?php echo form_error('ebook_type');?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="ebook_pages" >E-Book Pages</label>
                                        <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                        <input type="text" name="ebook_pages" class="form-control" value="<?= $row->ebook_pages ?>" id="ebook_pages" placeholder="Enter E-book Pages">
                                        <?php echo form_error('ebook_pages');?>
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
