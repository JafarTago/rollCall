<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div class="">

            <div>
                <a href="{{ route('students') }}">新增學生</a>
            </div>
            <br>
            <div>
                <form action="{{ route('check') }}" method="POST">
                    {{ csrf_field() }}
                    點名號碼：<input type="text" name="studentId">
                </form>
            </div>

            <div>
                <table>
                    <tr>
                        <td> 已點名的學生姓名 </td>
                    </tr>
                    @foreach ($checkStudents as $student)
                        <tr>
                            <td> {{ $student->students->name }} </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </body>
</html>
