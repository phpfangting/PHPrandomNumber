<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <script src="/javascript/common/imgUpload.js"></script>
</head>
<body>
<div id="container">

</div>
<form method="post" action="/php/upload.php"  enctype="multipart/form-data" >
    <input type="file" id="file" name="picture" onchange="imgUploadObj.init()" >
    <input type="submit" value="ok">
</form>



<script>
     window.onload = function (){
          imgUploadObj = new ImgUpload({
             fileId: 'file',
             containerId: 'container',
             style: 'width:80px;height:70px;margin:10px;'
         });
     }



</script>
</body>
</html>