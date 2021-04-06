<?php
    $template = array(
        'table open'=>'<table border="1 cellpadding="4" cellspacing="0">',
        'table close'=>'</table>'
    );

    $this->table->set_template($template);
    $this->table->set_heading(array('No','Nama','Prodi'));
    $num=1;

    foreach($Mahasiswa as $row) {
        $this->table->add_row(array($num,$row['nama'],$row['prodi']));
        $num++;
    }

    echo $this->table->generate();
    echo "<hr>";
    echo "elapsed time : ". $this->benchmark->elapsed_time();
    echo "<br>";
    echo "memory usage : ". $this->benchmark->memory_usage();
?>