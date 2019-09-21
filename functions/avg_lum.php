<?php
function get_avg_luminance($filename, $num_samples=10) {
	if(empty($filename)){
		return;
	}
		$type = exif_imagetype($filename);
		//var_dump($type);
		//ini_set('memory_limit', '-1');
		switch ($type) {
			case IMAGETYPE_GIF:
				# code...
        		$img = imagecreatefromgif($filename);
				break;
			case IMAGETYPE_JPEG:

        		$img = imagecreatefromjpeg($filename);
				break;
			case IMAGETYPE_PNG:
        		$img = imagecreatefrompng($filename);

				break;
			default:
				var_dump($type);
				break;
		}

        $width = imagesx($img);
        $height = imagesy($img);

        $x_step = intval($width/$num_samples);
        $y_step = intval($height/$num_samples);

        $total_lum = 0;

        $sample_no = 1;

        for ($x=0; $x<$width; $x+=$x_step) {
            for ($y=0; $y<$height; $y+=$y_step) {

                $rgb = imagecolorat($img, $x, $y);
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;

                // choose a simple luminance formula from here
                // http://stackoverflow.com/questions/596216/formula-to-determine-brightness-of-rgb-color
                $lum = ($r+$r+$b+$g+$g+$g)/6;

                $total_lum += $lum;

                // debugging code
     //           echo "$sample_no - XY: $x,$y = $r, $g, $b = $lum<br />";
                $sample_no++;
            }
        }

        // work out the average
        $avg_lum  = $total_lum/$sample_no;

        

        return $avg_lum;
	}
  ?>
