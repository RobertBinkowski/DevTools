<!-- ?php
    // $subTitle = "Image Converter";

    // $imageSRC = "C:\Users\binko\Documents\GitHub\DevTools\image_converter\image.jpeg";
    // // $img = scandir($folder);
    // $image = imagecreatefromjpeg($imageSRC);

    // $fileName = './image_converter/image.avif';
    // file_put_contents($fileName, file_get_contents(imageavif($image, 'image.avif')));-->
<!--$_COOKIE-->

<!-- Register worker -->
<script src="reg.js">
    import * as sharp from 'photos';

    sharp('input.jpeg')
        .toFormat('heif', {
            quality: 30,
            compression: 'av1'
        })
        .toFile('output.avif')
        .then(info => console.log(info));
</script>

<!-- Can embed AVIF with IMG tag now -->
<img src="./photos/image.jpeg" style="height: 10em;">