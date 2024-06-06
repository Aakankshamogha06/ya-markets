<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h5 class="text-primary fw-bold text-uppercase wow fadeInLeftBig">Contest winners</h5>
                <h2 class="title wow fadeInLeftBig">YaMarkets NFP Facebook <span class="text-gradient">Contest Winners</span></h2>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive wow fadeInUp">
                    <table class="table contest-winner-table text-nowrap">
                        <thead class="text-uppercase">
                            <tr>
                                <th width="500">Name</th>
                                <th>Prize won</th>
                                <th>Month</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <?php
                                $c = 1;
                                foreach ($nfp_view as $row): ?>
                        <tbody>
                        
                                <tr>
                                <td>
                                    <div class="d-flex flex-wrap align-items-center gap-3">
                                        <?php if ($row->image) { ?>
                                        <img src="<?php echo base_url('images/') . $row->image; ?>" alt=""
                                            class="img-fluid" width="15%"/>
                                        <p class="text-primary mb-0"><?= $row->name?></p>
                                        <?php } ?>
                                    </div>
                                </td>
                                <td>$<?= $row->prize_won?></td>
                                <td><?= $row->month?></td>
                                <td><?= $row->year?></td>
                                <td>
                                    <a href="<?php echo base_url('images/') . $row->image; ?>"
                                        class="btn btn-outline-secondary" data-fancybox="gallery1" width="50%">View</a>
                                </td>
                                
                                </tr>
                               
                               
                        </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>