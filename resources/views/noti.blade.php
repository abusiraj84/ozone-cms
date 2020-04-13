<!DOCTYPE html>
<html lang="ar"dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ url('assets/plugins/global/plugins.bundle.css' )}}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
    .close {
    float: left;
    font-size: 2.5rem;
    font-weight: 700;
    line-height: 1;
    color: #037755;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
}
</style>
</head>
<body>
    
<div id="app">
   <h3 > تحت الإستعداد من السيرفر ...</h3>
    <post-component></post-component>
    <example-component></example-component>

    
</div>

<script src="{{asset('/js/app.js')}}"></script>

</body>
</html>