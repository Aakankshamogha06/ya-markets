<div class="pcoded-main-container dataTables_wrapper">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>View Seminar</h5>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Speaker</th>
                                     
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $c = 1;
                                foreach ($webinar_view as $row): ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $c++; ?>
                                        </th>
                                        <td><?= $row->date?></td>
                                        
                                        <td><?= $row->time?></td>
                                        <td><?= $row->topic?></td>
                                         <td><?= $row->speaker?></td>
                                       
                                      
                                        <td>
                                            <a href="<?= base_url('admin/webinar/webinar_edit/' . $row->id); ?>"
                                                class="btn btn-info btn-flat">
                                                Edit
                                            </a>
                                            <a href="<?= base_url('admin/webinar/user_webinar_dtl/' . $row->id); ?>"
                                                class="btn btn-success btn-flat">
                                               View Leads
                                            </a>
                                            <a href="<?= base_url('admin/webinar/webinar_delete/' . $row->id); ?>"
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
<script>
    jQuery(document).ready(function ($) {
        $('#table_id').DataTable();
    });
</script>