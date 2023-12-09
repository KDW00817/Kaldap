<!-- process_video.php -->
<?php
$videoPath = 'test.mp4';

// C++ 바인딩 함수 호출
$processVideo = new \FFI("opencv_example.so");
$processVideo->processVideo($videoPath);
?>
