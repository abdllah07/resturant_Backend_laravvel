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
            <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">Tile</label>
                    <input style="color:white" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required placeholder="Write a tile for food" name="title">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Price</label>
                    <input style="color:white" type="number" class="form-control" id="exampleInputPassword1" required
                        placeholder="Write a price for food" name="price">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <input style="color:white" type="text" class="form-control" id="exampleInputPassword1" required
                        placeholder="Write a dicription for food " name="description">
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
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($food as $food)
                    <tr>
                        <th scope="row">{{ $food->id }}</th>
                        <td>{{ $food->title }}</td>
                        <td>{{ $food->price }}</td>
                        <td>{{ $food->description }}</td>
                        <td><img src="/foodimage/{{ $food->image }}" alt=""></td>
                        <td><a href="{{ url('/deletefood', $food->id) }}">Delete</a>
                            <a href="{{ url('/updateview', $food->id) }}">Update</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>






    @include('admin.adminjs')
</body>

</html>
