<?php  
//დააგენერირე რენდომ ასოთა კომბინაცია
function randomString($n) 
{
    $characters = 'abcdefghijklmnopqrstwxyzABCDEFGHIJKLMNOPQRSTYXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {

        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }
    return $str;
}

// სურათის კომპრესირება
function compressAndSaveImage($sourcePath, $destinationPath, $quality, $maxFileSize) {
    // Get the file extension
    $fileExtension = pathinfo($sourcePath, PATHINFO_EXTENSION);

    // Check if the source image is a valid image
    $validExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];
    if (in_array($fileExtension, $validExtensions)) {
        $sourceImage = @imagecreatefromstring(file_get_contents($sourcePath));

        if ($sourceImage !== false) {
            list($width, $height) = getimagesize($sourcePath);
            $newWidth = 1920; // Adjust as needed
            $newHeight = ($height / $width) * $newWidth;

            $newImage = imagecreatetruecolor($newWidth, $newHeight);

            // Resize and compress the image
            if (imagecopyresampled($newImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height)) {
                imagejpeg($newImage, $destinationPath, $quality);

                // Check the resulting file size
                $resultingFileSize = filesize($destinationPath);
                if ($resultingFileSize > $maxFileSize) {
                    // If the resulting file size is still too large, recursively call this function with lower quality
                    compressAndSaveImage($sourcePath, $destinationPath, $quality - 2, $maxFileSize);
                }
            } else {
                // Handle the case where imagecopyresampled fails
                // You can log an error or take appropriate action here.
            }

            imagedestroy($sourceImage);
            imagedestroy($newImage);
        } else {
            // Handle the case where the source image is not a valid image
            // You can log an error or take appropriate action here.
        }
    } else {
        // Handle the case where the file extension is not supported
        // You can log an error or take appropriate action here.
    }
}

?>