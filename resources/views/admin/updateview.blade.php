<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food</title>
    <base href="/public">
    @include('admin.admincss')

</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="" style="margin-left:100px; margin-top: 50px;">
            <form action="{{ url('/foodupdate', $food->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">Tile</label>
                    <input style="color:white" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $food->title }}" required
                        placeholder="Write a tile for food" name="title">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Price</label>
                    <input style="color:white" type="number" class="form-control" id="exampleInputPassword1" required
                        value="{{ $food->price }}" placeholder="Write a price for food" name="price">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <input style="color:white" type="text" class="form-control" id="exampleInputPassword1" required
                        value="{{ $food->description }}" placeholder="Write a dicription for food " name="description">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Image</label>
                    <img height="100px" width="100px" src="/foodimage/{{ $food->image }}" alt="">
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







    @include('admin.adminjs')
</body>

</html>
