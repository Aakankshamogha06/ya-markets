<div class="pcoded-main-container dataTables_wrapper">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>View E-Book</h5>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No</th>
                                    <th scope="col">Certificate Image</th>
                                    <th scope="col">Certificate</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $c = 1;
                                foreach ($certificate_view as $row): ?>
                                <tr>
                                    <th scope="row">
                                        <?= $c++; ?>
                                    </th>
                                    <td>
                                        <?php if ($row->image) { ?>
                                        <img src="<?php echo base_url('images/') . $row->image; ?>"
                                            style="width:50px;height:80px">
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($row->certificate) { ?>
                                        <a href="<?php echo base_url('images/').$row->certificate; ?>" target="_blank"
                                            class="d-flex justify-content-between align-items-center certificate">
                                            View Certificate
                                        </a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/certificate/certificate_delete/' . $row->id); ?>"
                                            class="btn btn-danger btn-flat"
                                            onclick="return confirm('Are you sure want to delete ?');">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
    </div>
</div>
<script>
jQuery(document).ready(function($) {
    $('#table_id').DataTable();
});
</script>