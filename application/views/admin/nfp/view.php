<div class="pcoded-main-container dataTables_wrapper">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>View NFP Winner</h5>
                    </div>
                    <div class="card-body">
                        <div class="overflow-x-scroll">
                            <table id="table_id" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr No</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Prize Won</th>
                                        <th scope="col">Month</th>
                                        <th scope="col">Year</th>
                                        <th scope="col">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $c = 1;
                                    foreach ($nfp_view as $row): ?>
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
                                        <td><?= $row->name?></td>
                                        <td>$<?= $row->prize_won?></td>
                                        <td><?= $row->month?></td>
                                        <td><?= $row->year?></td>
                                        <td>
                                            <a href="<?= base_url('admin/NFP/nfp_edit/' . $row->id); ?>"
                                                class="btn btn-info btn-flat">
                                                Edit
                                            </a>
                                            <a href="<?= base_url('admin/NFP/nfp_delete/' . $row->id); ?>"
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
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
jQuery(document).ready(function($) {
    $('#table_id').DataTable();
});
</script>