<?php


require 'function.php';

$imageFolder = directoryrdr(directory: 'Photos');

if(!$imageFolder){
  die ('Folder not found!');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Image Gallery</title>
</head>
<body class="bg-gray-200 p-4">

<div class="max-w-6xl mx-auto ">
    <div class="flex item-center justify-between bg-gray-300 p-4 rounded-md	">
        <div class="flex">
            <div>
                <img class="w-auto h-16 mr-5  " src="logo.png" alt="logo">
            </div>
            <div>
                <h1 class="font-bold text-2xl mb-1">Photo Gallery by PHP</h1>
                <h2 class=" mb-1"> Simple Image Gallery</h4>
            </div>
        </div>
        
        <!-- Image Upload Form -->
        <form action="/upload" method="post" enctype="multipart/form-data" class="mb-4 text-gray-600	">
            <label for="imageUpload" class="pl-2 block text-sm font-medium text-gray-600 ">Upload Image</label>
            <input type="file" id="imageUpload" name="image" class="mt-1 p-2 border rounded-md">
            <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Upload
            </button>
        </form>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 border-t border-gray-300 pt-3">
        <?php foreach ($imageFolder as $image) : ?>
            <div class="hover:scale-125">
                <img class="h-auto max-w-full rounded-lg " src="<?php echo $image ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>

