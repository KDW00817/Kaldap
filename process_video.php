<!-- process_video.php -->
<?php
$videoPath = 'test.mp4';

// C++ ���ε� �Լ� ȣ��
$processVideo = new \FFI("opencv_example.so");
$processVideo->processVideo($videoPath);
?>
