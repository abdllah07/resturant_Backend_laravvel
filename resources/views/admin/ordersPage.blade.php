<?php
use Carbon\Carbon;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food</title>
    @include('admin.admincss')

</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div style="width:100% ; display: block ; margin-top:100px">
            {{-- the food from database --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Food Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Adress</th>
                        <th scope="col">Price</th>
                        <th scope="col">State</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($order as $order)
                        @if ($order->created_at > Carbon::today())
                            <p>Today</p>
                            <tr>
                                <th scope="row" style="color:white">{{ $i++ }}</th>
                                <td>{{ $user_name->name }}</td>
                                <td>{{ $order->food_name }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->Adres }}</td>
                                <td>{{ $order->price }}</td>
                                <td>Today</td>
                                <td><a href="{{ url('/deleteorder', $order->id) }}">Delete</a>
                                </td>
                            </tr>
                        @else
                            <tr>
                                <th scope="row" style="color:white">{{ $i++ }}</th>
                                <td>{{ $user_name->name }}</td>
                                <td>{{ $order->food_name }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->Adres }}</td>
                                <td>{{ $order->price }}</td>
                                <td>Not Today</td>
                                <td><a href="{{ url('/deleteorder', $order->id) }}">Delete</a>
                                </td>
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
