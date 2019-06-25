<?php include('conn.php');

$backup_file = $dbname . date("Y-m-d-H-i-s") . '.gz';

$command = "mysqldump --opt -h $username -p $password ". "upenDB | gzip > $backup_file";

system($command);
echo "Backup created";

 ?>
