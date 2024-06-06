<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add NFP WINNER</h5>
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

                        <form class="form-horizontal" action="<?= base_url('admin/NFP/nfp_submit_data') ?>"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="formFileMultiple" class="form-label">Image</label>
                                    <input class="form-control" name="image" type="file" id="nmage"
                                        multiple>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Name<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="name" parsley-trigger="change" class="form-control"
                                        id="name" placeholder="Contestant Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail14" class="form-label">Prize Won</label><span
                                        class="text-danger">*
                                        <input class="form-control" name="prize_won" type="number" id="prize_won"
                                            required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Month<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="month" parsley-trigger="change" class="form-control"
                                        id="month" placeholder="Month" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Year<span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="year" parsley-trigger="change" class="form-control"
                                        id="year" placeholder="Year" required>
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