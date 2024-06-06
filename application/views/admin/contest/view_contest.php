<div class="pcoded-main-container dataTables_wrapper">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="me-auto p-2">
                            <h3>View Contest</h3>
                        </div>

                    </div>
                    <div class="card-body">
                        <table id="table_id" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Contest Name</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $c = 1;
                                foreach ($contest_view as $row): ?>
                                    <tr>

                                        <td><?= $row->contest_name ?></td>

                                        <td><a href="<?= base_url('admin/contest/contest_lead_dtl/' . str_replace(' ', '-', strtolower($row->contest_name))); ?>"
                                                class="btn btn-success btn-flat">
                                                View Leads
                                            </a></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td>Tradable Bonus</td>
                                    <td><a href="<?= base_url('admin/contest/contest_lead_dtl_other/tradable_bonus') ?>"
                                            class="btn btn-success btn-flat">
                                            View Leads
                                        </a></td>
                                </tr>
                                <tr>
                                    <td>South Africa Seminar</td>
                                    <td><a href="<?= base_url('admin/contest/contest_lead_dtl_other/south_africa_seminar') ?>"
                                            class="btn btn-success btn-flat">
                                            View Leads
                                        </a></td>
                                </tr>
                                <tr>
                                    <td>Gadget Reward</td>
                                    <td><a href="<?= base_url('admin/contest/contest_lead_dtl_other/gadget_reward') ?>"
                                            class="btn btn-success btn-flat">
                                            View Leads
                                        </a></td>
                                </tr>
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
    jQuery(document).ready(function ($) {
        $('#table_id').DataTable();
    });
</script>