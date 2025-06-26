<?php
$filename = "submissions.csv";

if (file_exists($filename)) {
    header('Content-Type: text/csv');
    header("Content-Disposition: attachment; filename=\"$filename\"");
    readfile($filename);
    exit;
} else {
    echo "No submissions yet.";
}
?>

