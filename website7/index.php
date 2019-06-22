<?php
    $path = '/dir0/dir1/myfile.php';
    $file = 'file1.txt';
    // Return filename
    // echo basename($path);

    // Return filename without extension

    // Return dir name from the path
    // echo dirname($path);

    // echo file_exists($file);

    // Get absolute path
    // echo realpath($file);

    // Checks to see if file
    // echo file_exists('test');

    // check if file is writable
    // echo is_writable($file);

    // check if file is readable
    // echo is_readable($file);

    // get file size
    // echo filesize($file);

    // CREATE A FOLDER
    // mkdir('testing');

    // REMOVE DIR IF EMPTY
    // rmdir('testing');

    // Copy file
    // echo copy('file1.txt', 'file2.txt');

    // Rename file
    // rename('file2.txt', 'myfile.txt');

    // Delete file
    // unlink('myfile.txt');

    // Write from file to string
    // echo file_get_contents($file);

    // Write string to file
    // echo file_put_contents($file, 'Goodbye World');

    // Append to file
    // $current = file_get_contents($file);
    // $current .= ' Goodbye World';
    // file_put_contents($file, $current);

    // Open File for Reading
    // $handle = fopen($file, 'r');
    // $data = fread($handle, filesize($file));
    // echo $data;
    // fclose($handle);

    // Open file for Writing
    $handle = fopen('file2.txt', 'w');
    $txt = "John Doe\n";
    fwrite($handle, $txt);
    $txt = "Steve Smith\n";
    fwrite($handle, $txt);
    fclose($handle);
?>