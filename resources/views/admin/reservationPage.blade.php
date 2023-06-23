<?php
use Carbon\Carbon;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('admin.admincss')

</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="">
            <table class="table" style=" margin-top: 50px">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">phone</th>
                        <th scope="col">guset</th>
                        <th scope="col">time</th>
                        <th scope="col">date</th>
                        <th scope="col">messages</th>
                        <th scope="col">State</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($rev as $rev)
                        @if ($rev->date > Carbon::today())
                            <tr>
                                <th scope="row">{{ $rev->id }}</th>
                                <td>{{ $rev->name }}</td>
                                <td>{{ $rev->email }}</td>
                                <td>{{ $rev->phone }}</td>
                                <td>{{ $rev->guest }}</td>
                                <td>{{ $rev->time }}</td>
                                <td>{{ $rev->date }}</td>
                                <td>{{ $rev->message }}</td>
                                <td>history passed </td>

                            </tr>
                        @else
                            <tr>
                                <th scope="row">{{ $rev->id }}</th>
                                <td>{{ $rev->name }}</td>
                                <td>{{ $rev->email }}</td>
                                <td>{{ $rev->phone }}</td>
                                <td>{{ $rev->guest }}</td>
                                <td>{{ $rev->time }}</td>
                                <td>{{ $rev->date }}</td>
                                <td>{{ $rev->message }}</td>
                                <td style="color:red">history available </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    @include('admin.adminjs')
</body>

</html>
