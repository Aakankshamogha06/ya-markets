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
                                   
                                    <th scope="col">Sr NO</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Message</th>
                                    
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $c = 1;
                                foreach ($contest_lead_view as $row): ?>
                                    <tr>
                                        
                                        <td><?= $c++?> </td>
                                        <td><?= $row->name ?> </td>
                                        <td><?= $row->email ?> </td>
                                        <td><?= $row->mobile_no ?> </td>
                                        <td><?= $row->message ?> </td>
                                        
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