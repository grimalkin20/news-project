<?php
    function cropAndSaveImage($thumb_width, $thumb_height, $file, $target, $fileType){
        
        $image ;

        switch($fileType) {
            case 'image/png':
                $image = imagecreatefrompng($file);
                break;
            case 'image/jpeg':
                $image = imagecreatefromjpeg($file);
                break;
            case 'image/gif':
                $image = imagecreatefromgif($file);
                break;
            default:
                return;
        }

        $width = imagesx($image);
        $height = imagesy($image);

        $original_aspect = $width / $height;
        $thumb_aspect = $thumb_width / $thumb_height;

        if ( $original_aspect >= $thumb_aspect )
        {
            // If image is wider than thumbnail (in aspect ratio sense)
            $new_height = $thumb_height;
            $new_width = $width / ($height / $thumb_height);
        }
        else
        {
            // If the thumbnail is wider than the image
            $new_width = $thumb_width;
            $new_height = $height / ($width / $thumb_width);
        }

        $thumb = imagecreatetruecolor( $thumb_width, $thumb_height );

        // Resize and crop
        imagecopyresampled($thumb,
                        $image,
                        0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
                        0 - ($new_height - $thumb_height) / 2, // Center the image vertically
                        0, 0,
                        $new_width, $new_height,
                        $width, $height);
        switch($fileType) {
            case 'image/png':
                imagepng($thumb, $target, 75);
                break;
            case 'image/jpeg':
                imagejpeg($thumb, $target, 75);
                break;
            case 'image/gif':
                imagegif($thumb, $target, 75);
                break;
            default:
                return;
        }
        // imagepng($thumb, $target, 5);
    }
?>