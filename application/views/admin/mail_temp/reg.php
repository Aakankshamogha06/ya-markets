
<?php foreach($mail_data_view as $row): ?>
    Session Title: <?$row->session_name?>,
    Session Date: <?$row->session_date?>,
    Session Time: <?$row->session_time?>,
    Session Location: <?$row->session_location?>,
<?php endforeach ?>