<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <?php 
                    foreach($nfp_view as $row){?>
                            <h5>Edit NFP Winner</h5>
                            <?php if(isset($msg) || validation_errors() !== ''): ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors();?>
                                    <?= isset($msg)? $msg: ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body font-weight-bold">
                            <form class="form-horizontal" action="<?= base_url('admin/NFP/update_data') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="image" >Image</label>
                                        <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                        <input type="file" name="image" class="form-control" value="<?= $row->image ?>" id="image" multiple>
                                        <?php echo form_error('image');?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name" >Name</label>
                                        <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                        <input type="text" name="name" class="form-control" value="<?= $row->name ?>" id="name" placeholder="Enter name">
                                        <?php echo form_error('name');?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="prize_won" >Prize Won</label>
                                        <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                        <input type="text" name="prize_won" class="form-control" value="<?= $row->prize_won ?>" id="prize_won">
                                        <?php echo form_error('prize_won');?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="month" >Month</label>
                                        <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                        <input type="text" name="month" class="form-control" value="<?= $row->month ?>" id="month" placeholder="Enter month">
                                        <?php echo form_error('month');?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="year" >Year</label>
                                        <input type="hidden" id="id" name="id" value="<?= $row->id ?>" class="form-control">
                                        <input type="text" name="year" class="form-control" value="<?= $row->year ?>" id="year" placeholder="Enter year">
                                        <?php echo form_error('year');?>
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
