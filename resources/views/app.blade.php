<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TaskList</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/ext/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">

    {{--<script src="/js/angular.min.js"></script>--}}

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-route.js"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

    </script>

</head>
<body ng-app="TaskList">
@include('partials.global.header')
@yield('content')
<script src="/js/app.js"></script>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>

<script src="/app/app.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@yield('scripts')
</body>
</html>
