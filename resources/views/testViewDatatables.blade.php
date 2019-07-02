<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('css/jquery.dataTables.min.css') }}"></script>
        <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    </head>
    <body>
        <a href="{{ url('/login') }}">Login</a>
        <div class="flex-center position-ref full-height">
            <table id="myTable">
                <thead>
                    <tr>
                        <th>Test</th>
                        <th>Test</th>
                        <th>Test</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>lulululu</td>
                        <td>lulululu</td>
                        <td>lulululu</td>
                    </tr>
                    <tr>
                        <td>lalalalalala</td>
                        <td>lalalalalala</td>
                        <td>lalalalalala</td>
                    </tr>
                    <tr>
                        <td>lulululu</td>
                        <td>lulululu</td>
                        <td>lulululu</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
        </script>
    
    </body>
</html>
