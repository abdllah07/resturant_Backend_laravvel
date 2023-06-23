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
        <div class="" style="margin-left:100px; margin-top: 50px;">
            <form action="{{ url('/uploadchefs') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input style="color:white" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required placeholder="Write a tile for food" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">job</label>
                    <input style="color:white" type="text" class="form-control" id="exampleInputPassword1" required
                        placeholder="Write a price for food" name="job">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Image</label>
                    <input style="color:white" type="File" class="form-control" id="exampleInputPassword1" required
                        name="image">
                </div>
                <button type="submit" class="btn btn-primary" value="save">Save</button>
            </form>
        </div>

    </div>

    <div style="width:100% ; display: block">
        {{-- the food from database --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">job</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chefs as $chefs)
                    <tr>
                        <th scope="row">{{ $chefs->id }}</th>
                        <td>{{ $chefs->name }}</td>
                        <td>{{ $chefs->gob }}</td>
                        <td><img src="/chefsimage/{{ $chefs->image }}" alt=""></td>
                        <td><a href="{{ url('/deletechefs', $chefs->id) }}">Delete</a>
                            <a href="{{ url('/updatechefspage', $chefs->id) }}">Update</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>






    @include('admin.adminjs')
</body>

</html>
