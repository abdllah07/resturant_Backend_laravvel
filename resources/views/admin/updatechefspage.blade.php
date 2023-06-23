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
            <form action="{{ url('/updatechefs', $chefs->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">name</label>
                    <input style="color:white" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $chefs->name }}" required
                        placeholder="Write a tile for food" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">job</label>
                    <input style="color:white" type="text" class="form-control" id="exampleInputPassword1" required
                        placeholder="Write a price for food"value="{{ $chefs->gob }}" required name="job">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Image</label>
                    <img height="100px" width="100px" src="/chefsimage/{{ $chefs->image }}" alt="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Image</label>
                    <input style="color:white" type="File" class="form-control" id="exampleInputPassword1"
                        name="image">
                </div>
                <button type="submit" class="btn btn-primary" value="save">Save</button>
            </form>
        </div>

    </div>






    @include('admin.adminjs')
</body>

</html>
