<?php

include 'ImageManipulator.php';

class ImageHandler {

    public static function compressedProfilePicture($img) {
        $imageFileType = explode('.', $img);
        $imageFileType = $imageFileType[1];
        $targetFile = '../../../View/img/Upload/fotoProfil/' . $img;
        $tempImg = '../../../View/img/Upload/fotoProfil/_' . $img;
        $finalImg = 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_' . $img;

        if (file_exists($tempImg)) {
            unlink($tempImg);
        }

        if (!file_exists($tempImg)) {
            if (copy($targetFile, $tempImg)) {
                $size = GetimageSize($tempImg);


                $width = 500; 
                $height = round($width * $size[1] / $size[0]);


                if ($imageFileType == 'JPEG' || $imageFileType == 'jpeg' || $imageFileType == 'JPG' || $imageFileType == 'jpg') {
                    $images_orig = ImageCreateFromJPEG($tempImg);
                } else if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    $images_orig = imagecreatefrompng($tempImg);
                } else if ($imageFileType == 'GIF' || $imageFileType == 'gif') {
                    $images_orig = imagecreatefromgif($tempImg);
                } else if ($imageFileType == 'BMP' || $imageFileType == 'bmp') {
                    $images_orig = imagecreatefromwbmp($tempImg);
                }

                $photoX = ImagesX($images_orig);
                $photoY = ImagesY($images_orig);
                $images_fin = ImageCreateTrueColor($width, $height);

                if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    imagealphablending($images_fin, false);
                    imagesavealpha($images_fin, true);
                    $transparent = imagecolorallocatealpha($images_fin, 255, 255, 255, 127);
                    imagefilledrectangle($images_fin, 0, 0, $w, $h, $transparent);
                }

                ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);

                if ($imageFileType == 'JPEG' || $imageFileType == 'jpeg' || $imageFileType == 'JPG' || $imageFileType == 'jpg') {
                    ImageJPEG($images_fin, $tempImg);
                } else if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    imagepng($images_fin, $tempImg);
                } else if ($imageFileType == 'GIF' || $imageFileType == 'gif') {
                    imagegif($images_fin, $tempImg);
                } else if ($imageFileType == 'BMP' || $imageFileType == 'bmp') {
                    imagewbmp($images_fin, $tempImg);
                }

                ImageDestroy($images_orig);
                ImageDestroy($images_fin);
            } else {
                $finalImg = null;
            }
            unlink($targetFile);
        }

        return $finalImg;
    }

    public static function getProfilePicture($img) {
        $imageName = 'PP_' . $img;
        $targetFile = '../../../View/img/Upload/fotoProfil/' . $img;
        $squareImg = '../../../View/img/Upload/fotoProfil/' . $imageName;
        $finalImg = 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/' . $imageName;

        if (!file_exists($squareImg)) {

            if (copy($targetFile, $squareImg)) {
                $size = 0;
                $imS = new ImageManipulator($squareImg);

                if ($imS->getWidth() != $imS->getHeight()) {

                    if ($imS->getWidth() < $imS->getHeight()) {
                        $size = $imS->getWidth();
                    } else {
                        $size = $imS->getHeight();
                    }

                    $centreX = round($imS->getWidth() / 2);
                    $centreY = round($imS->getHeight() / 2);

                    $x1 = $centreX - ($size / 2);
                    $y1 = $centreY - ($size / 2);

                    $x2 = $centreX + ($size / 2);
                    $y2 = $centreY + ($size / 2);

                    $imS->crop($x1, $y1, $x2, $y2); 
                    $imS->save($squareImg);
                    unlink($targetFile);

                    $finalImg = self::compressedProfilePicture($imageName);
                }
            } else {
                $finalImg = null;
            }
        }

        return $finalImg;
    }

    public static function compressedStrukturOrganisasi($img) {
        $imageFileType = explode('.', $img);
        $imageFileType = $imageFileType[1];
        $targetFile = '../../../View/img/Upload/strukturOrganisasi/' . $img;
        $tempImg = '../../../View/img/Upload/strukturOrganisasi/_' . $img;
        $finalImg = 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_' . $img;

        if (file_exists($tempImg)) {
            unlink($tempImg);
        }

        if (!file_exists($tempImg)) {
            if (copy($targetFile, $tempImg)) {
                $size = GetimageSize($tempImg);

                $width = 1000; 
                $height = round($width * $size[1] / $size[0]);


                if ($imageFileType == 'JPEG' || $imageFileType == 'jpeg' || $imageFileType == 'JPG' || $imageFileType == 'jpg') {
                    $images_orig = ImageCreateFromJPEG($tempImg);
                } else if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    $images_orig = imagecreatefrompng($tempImg);
                } else if ($imageFileType == 'GIF' || $imageFileType == 'gif') {
                    $images_orig = imagecreatefromgif($tempImg);
                } else if ($imageFileType == 'BMP' || $imageFileType == 'bmp') {
                    $images_orig = imagecreatefromwbmp($tempImg);
                }

                $photoX = ImagesX($images_orig);
                $photoY = ImagesY($images_orig);
                $images_fin = ImageCreateTrueColor($width, $height);

                if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    imagealphablending($images_fin, false);
                    imagesavealpha($images_fin, true);
                    $transparent = imagecolorallocatealpha($images_fin, 255, 255, 255, 127);
                    imagefilledrectangle($images_fin, 0, 0, $w, $h, $transparent);
                }

                ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);

                if ($imageFileType == 'JPEG' || $imageFileType == 'jpeg' || $imageFileType == 'JPG' || $imageFileType == 'jpg') {
                    ImageJPEG($images_fin, $tempImg);
                } else if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    imagepng($images_fin, $tempImg);
                } else if ($imageFileType == 'GIF' || $imageFileType == 'gif') {
                    imagegif($images_fin, $tempImg);
                } else if ($imageFileType == 'BMP' || $imageFileType == 'bmp') {
                    imagewbmp($images_fin, $tempImg);
                }

                ImageDestroy($images_orig);
                ImageDestroy($images_fin);
            } else {
                $finalImg = null;
            }
            unlink($targetFile);
        }
        return $finalImg;
    }

    public static function getStrukturOrganisasi($img) {
        $imageName = 'SO_' . $img;
        $targetFile = '../../../View/img/Upload/strukturOrganisasi/' . $img;
        $squareImg = '../../../View/img/Upload/strukturOrganisasi/' . $imageName;
        $finalImg = 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/' . $imageName;

        if (!file_exists($squareImg)) {

            if (copy($targetFile, $squareImg)) {
                $size = 0;
                $imS = new ImageManipulator($squareImg);

                if ($imS->getWidth() != $imS->getHeight()) {

                    if ($imS->getWidth() < $imS->getHeight()) {
                        $size = $imS->getWidth();
                    } else {
                        $size = $imS->getHeight();
                    }

                    $centreX = round($imS->getWidth() / 2);
                    $centreY = round($imS->getHeight() / 2);

                    $x1 = $centreX - ($size);
                    $y1 = $centreY - ($size);

                    $x2 = $centreX + ($size);
                    $y2 = $centreY + ($size);

                    $imS->crop($x1, $y1, $x2, $y2);
                    $imS->save($squareImg);
                    unlink($targetFile);

                    $finalImg = self::compressedStrukturOrganisasi($imageName);
                }
            } else {
                $finalImg = null;
            }
        }

        return $finalImg;
    }

    public static function compressedSertifikat($img) {
        $imageFileType = explode('.', $img);
        $imageFileType = $imageFileType[1];
        $targetFile = '../../../View/img/Upload/sertifikat/' . $img;
        $tempImg = '../../../View/img/Upload/sertifikat/_' . $img;
        $finalImg = 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_' . $img;

        if (file_exists($tempImg)) {
            unlink($tempImg);
        }

        if (!file_exists($tempImg)) {
            if (copy($targetFile, $tempImg)) {
                $size = GetimageSize($tempImg);

                $width = 1000; 
                $height = round($width * $size[1] / $size[0]);


                if ($imageFileType == 'JPEG' || $imageFileType == 'jpeg' || $imageFileType == 'JPG' || $imageFileType == 'jpg') {
                    $images_orig = ImageCreateFromJPEG($tempImg);
                } else if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    $images_orig = imagecreatefrompng($tempImg);
                } else if ($imageFileType == 'GIF' || $imageFileType == 'gif') {
                    $images_orig = imagecreatefromgif($tempImg);
                } else if ($imageFileType == 'BMP' || $imageFileType == 'bmp') {
                    $images_orig = imagecreatefromwbmp($tempImg);
                }

                $photoX = ImagesX($images_orig);
                $photoY = ImagesY($images_orig);
                $images_fin = ImageCreateTrueColor($width, $height);

                if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    imagealphablending($images_fin, false);
                    imagesavealpha($images_fin, true);
                    $transparent = imagecolorallocatealpha($images_fin, 255, 255, 255, 127);
                    imagefilledrectangle($images_fin, 0, 0, $w, $h, $transparent);
                }

                ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);

                if ($imageFileType == 'JPEG' || $imageFileType == 'jpeg' || $imageFileType == 'JPG' || $imageFileType == 'jpg') {
                    ImageJPEG($images_fin, $tempImg);
                } else if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    imagepng($images_fin, $tempImg);
                } else if ($imageFileType == 'GIF' || $imageFileType == 'gif') {
                    imagegif($images_fin, $tempImg);
                } else if ($imageFileType == 'BMP' || $imageFileType == 'bmp') {
                    imagewbmp($images_fin, $tempImg);
                }

                ImageDestroy($images_orig);
                ImageDestroy($images_fin);
            } else {
                $finalImg = null;
            }
            unlink($targetFile);
        }
        return $finalImg;
    }

    public static function getSertifikat($img) {
        $imageName = 'S_' . $img;
        $targetFile = '../../../View/img/Upload/sertifikat/' . $img;
        $squareImg = '../../../View/img/Upload/sertifikat/' . $imageName;
        $finalImg = 'http://localhost/SIMasjid/View/img/Upload/sertifikat/' . $imageName;

        if (!file_exists($squareImg)) {

            if (copy($targetFile, $squareImg)) {
                $size = 0;
                $imS = new ImageManipulator($squareImg);

                if ($imS->getWidth() != $imS->getHeight()) {

                    if ($imS->getWidth() < $imS->getHeight()) {
                        $size = $imS->getWidth();
                    } else {
                        $size = $imS->getHeight();
                    }

                    $centreX = round($imS->getWidth() / 2);
                    $centreY = round($imS->getHeight() / 2);

                    $x1 = $centreX - ($size);
                    $y1 = $centreY - ($size);

                    $x2 = $centreX + ($size);
                    $y2 = $centreY + ($size);

                    $imS->crop($x1, $y1, $x2, $y2);
                    $imS->save($squareImg);
                    unlink($targetFile);

                    $finalImg = self::compressedSertifikat($imageName);
                }
            } else {
                $finalImg = null;
            }
        }
        return $finalImg;
    }

    public static function compressedFotoBeritaMasjid($img) {
        $imageFileType = explode('.', $img);
        $imageFileType = $imageFileType[1];
        $targetFile = '../../../View/img/Upload/beritaMasjid/' . $img;
        $tempImg = '../../../View/img/Upload/beritaMasjid/_' . $img;
        $finalImg = 'http://localhost/SIMasjid/View/img/Upload/beritaMasjid/_' . $img;

        if (file_exists($tempImg)) {
            unlink($tempImg);
        }

        if (!file_exists($tempImg)) {
            if (copy($targetFile, $tempImg)) {
                $size = GetimageSize($tempImg);

                $width = 1000;
                $height = round($width * $size[1] / $size[0]);


                if ($imageFileType == 'JPEG' || $imageFileType == 'jpeg' || $imageFileType == 'JPG' || $imageFileType == 'jpg') {
                    $images_orig = ImageCreateFromJPEG($tempImg);
                } else if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    $images_orig = imagecreatefrompng($tempImg);
                } else if ($imageFileType == 'GIF' || $imageFileType == 'gif') {
                    $images_orig = imagecreatefromgif($tempImg);
                } else if ($imageFileType == 'BMP' || $imageFileType == 'bmp') {
                    $images_orig = imagecreatefromwbmp($tempImg);
                }

                $photoX = ImagesX($images_orig);
                $photoY = ImagesY($images_orig);
                $images_fin = ImageCreateTrueColor($width, $height);

                if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    imagealphablending($images_fin, false);
                    imagesavealpha($images_fin, true);
                    $transparent = imagecolorallocatealpha($images_fin, 255, 255, 255, 127);
                    imagefilledrectangle($images_fin, 0, 0, $w, $h, $transparent);
                }

                ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);

                if ($imageFileType == 'JPEG' || $imageFileType == 'jpeg' || $imageFileType == 'JPG' || $imageFileType == 'jpg') {
                    ImageJPEG($images_fin, $tempImg);
                } else if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    imagepng($images_fin, $tempImg);
                } else if ($imageFileType == 'GIF' || $imageFileType == 'gif') {
                    imagegif($images_fin, $tempImg);
                } else if ($imageFileType == 'BMP' || $imageFileType == 'bmp') {
                    imagewbmp($images_fin, $tempImg);
                }

                ImageDestroy($images_orig);
                ImageDestroy($images_fin);
            } else {
                $finalImg = null;
            }
            unlink($targetFile);
        }
        return $finalImg;
    }

    public static function getFotoBeritaMasjid($img) {
        $imageName = 'FBM_' . $img;
        $targetFile = '../../../View/img/Upload/beritaMasjid/' . $img;
        $squareImg = '../../../View/img/Upload/beritaMasjid/' . $imageName;
        $finalImg = 'http://localhost/SIMasjid/View/img/Upload/beritaMasjid/' . $imageName;

        if (!file_exists($squareImg)) {

            if (copy($targetFile, $squareImg)) {
                $size = 0;
                $imS = new ImageManipulator($squareImg);

                if ($imS->getWidth() != $imS->getHeight()) {

                    if ($imS->getWidth() < $imS->getHeight()) {
                        $size = $imS->getWidth();
                    } else {
                        $size = $imS->getHeight();
                    }

                    $centreX = round($imS->getWidth() / 2);
                    $centreY = round($imS->getHeight() / 2);

                    $x1 = $centreX - ($size);
                    $y1 = $centreY - ($size);

                    $x2 = $centreX + ($size);
                    $y2 = $centreY + ($size);

                    $imS->crop($x1, $y1, $x2, $y2); 
                    $imS->save($squareImg);
                    unlink($targetFile);

                    $finalImg = self::compressedFotoBeritaMasjid($imageName);
                }
            } else {
                $finalImg = null;
            }
        }
        return $finalImg;
    }

    public static function compressedFotoBeritaUmum($img) {
        $imageFileType = explode('.', $img);
        $imageFileType = $imageFileType[1];
        $targetFile = '../../../View/img/Upload/beritaUmum/' . $img;
        $tempImg = '../../../View/img/Upload/beritaUmum/_' . $img;
        $finalImg = 'http://localhost/SIMasjid/View/img/Upload/beritaUmum/_' . $img;

        if (file_exists($tempImg)) {
            unlink($tempImg);
        }

        if (!file_exists($tempImg)) {
            if (copy($targetFile, $tempImg)) {
                $size = GetimageSize($tempImg);

                $width = 1000;
                $height = round($width * $size[1] / $size[0]);


                if ($imageFileType == 'JPEG' || $imageFileType == 'jpeg' || $imageFileType == 'JPG' || $imageFileType == 'jpg') {
                    $images_orig = ImageCreateFromJPEG($tempImg);
                } else if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    $images_orig = imagecreatefrompng($tempImg);
                } else if ($imageFileType == 'GIF' || $imageFileType == 'gif') {
                    $images_orig = imagecreatefromgif($tempImg);
                } else if ($imageFileType == 'BMP' || $imageFileType == 'bmp') {
                    $images_orig = imagecreatefromwbmp($tempImg);
                }

                $photoX = ImagesX($images_orig);
                $photoY = ImagesY($images_orig);
                $images_fin = ImageCreateTrueColor($width, $height);

                if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    imagealphablending($images_fin, false);
                    imagesavealpha($images_fin, true);
                    $transparent = imagecolorallocatealpha($images_fin, 255, 255, 255, 127);
                    imagefilledrectangle($images_fin, 0, 0, $w, $h, $transparent);
                }

                ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);

                if ($imageFileType == 'JPEG' || $imageFileType == 'jpeg' || $imageFileType == 'JPG' || $imageFileType == 'jpg') {
                    ImageJPEG($images_fin, $tempImg);
                } else if ($imageFileType == 'PNG' || $imageFileType == 'png') {
                    imagepng($images_fin, $tempImg);
                } else if ($imageFileType == 'GIF' || $imageFileType == 'gif') {
                    imagegif($images_fin, $tempImg);
                } else if ($imageFileType == 'BMP' || $imageFileType == 'bmp') {
                    imagewbmp($images_fin, $tempImg);
                }

                ImageDestroy($images_orig);
                ImageDestroy($images_fin);
            } else {
                $finalImg = null;
            }
            unlink($targetFile);
        }
        return $finalImg;
    }

    public static function getFotoBeritaUmum($img) {
        $imageName = 'FBU_' . $img;
        $targetFile = '../../../View/img/Upload/beritaUmum/' . $img;
        $squareImg = '../../../View/img/Upload/beritaUmum/' . $imageName;
        $finalImg = 'http://localhost/SIMasjid/View/img/Upload/beritaUmum/' . $imageName;

        if (!file_exists($squareImg)) {

            if (copy($targetFile, $squareImg)) {
                $size = 0;
                $imS = new ImageManipulator($squareImg);

                if ($imS->getWidth() != $imS->getHeight()) {

                    if ($imS->getWidth() < $imS->getHeight()) {
                        $size = $imS->getWidth();
                    } else {
                        $size = $imS->getHeight();
                    }

                    $centreX = round($imS->getWidth() / 2);
                    $centreY = round($imS->getHeight() / 2);

                    $x1 = $centreX - ($size);
                    $y1 = $centreY - ($size);

                    $x2 = $centreX + ($size);
                    $y2 = $centreY + ($size);

                    $imS->crop($x1, $y1, $x2, $y2);
                    $imS->save($squareImg);
                    unlink($targetFile);

                    $finalImg = self::compressedFotoBeritaUmum($imageName);
                }
            } else {
                $finalImg = null;
            }
        }
        return $finalImg;
    }

    public static function getGalleryPicture($img) {
        $imageName = 'GP_' . $img;
        $targetFile = '../../../View/img/Upload/galeri/' . $img;
        $squareImg = '../../../View/img/Upload/galeri/' . $imageName;
        $finalImg = 'http://localhost/SIMasjid/View/img/Upload/galeri/' . $imageName;

        if (copy($targetFile, $squareImg)) {
            $size = 0;
            $imS = new ImageManipulator($squareImg);

            if ($imS->getWidth() != $imS->getHeight()) {

                if ($imS->getWidth() < $imS->getHeight()) {
                    $size = $imS->getWidth();
                } else {
                    $size = $imS->getHeight();
                }

                $centreX = round($imS->getWidth() / 2);
                $centreY = round($imS->getHeight() / 2);

                $x1 = $centreX - ($size / 2);
                $y1 = $centreY - ($size / 2);

                $x2 = $centreX + ($size / 2);
                $y2 = $centreY + ($size / 2);

                $imS->crop($x1, $y1, $x2, $y2); 
                $imS->save($squareImg);
                unlink($targetFile);
            }
        } else {
            $finalImg = null;
        }
        return $finalImg;
    }

}

?>