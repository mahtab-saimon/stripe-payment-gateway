<?php
if(isset($_POST['submit_image']))
{
for($i=0;$i<count($_FILES["image"]["name"]);$i++)
{
 $uploadfile=$_FILES["image"]["tmp_name"][$i];
 $folder="image/";
 move_uploaded_file($_FILES["image"]["tmp_name"][$i], "$folder".$_FILES["image"]["name"][$i]);
}
exit();
}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container py-5">
        <form action="">
            <div class="form-group">
                <label for="exampleInputFile">image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file"  class="custom-file-input" id="image" name="image[]" onchange="preview_image();" multiple >
                        <label class="custom-file-label">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>
            <div id="preview">

            </div>
        </form>

    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function()
        {
            $('form').ajaxForm(function()
            {
                alert("Uploaded SuccessFully");
            });
        });

        function preview_image()
        {
            var total_file=document.getElementById("image").files.length;
            for(var i=0;i<total_file;i++)
            {
                $('#preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' height='100px' width='150px'><br>");
            }
        }
    </script>

</body>
</html>