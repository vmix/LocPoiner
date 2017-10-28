<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel: upload multiple file using drag and drop feature</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>
</head>
<body>
<h1>Laravel 5.4 : Upload multiple file using dropzone</h1>
{!! Form::open([ 'route' => [ 'dropzone.uploadfile' ], 'files' => true, 'class' => 'dropzone','id'=>"image-upload"]) !!}
{!! Form::token() !!}

{!! Form::close() !!}
<button><a href="/dropzoneFile">Send files</a></button>

<script type="text/javascript">
    Dropzone.options.imageUpload = {
        maxFilesize  : 4,
        acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };
</script>
</body>
</html>