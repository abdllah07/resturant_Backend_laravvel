<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">

                    @foreach ($food as $data)
                        <form action="{{ url('addcart', $data->id) }}" method="post">
                            @csrf
                            <div class="item">
                                <div class='card' style="background-image: url('/foodimage/{{ $data->image }}')">
                                    <div class="price">
                                        <h6>{{ $data->price }}</h6>
                                    </div>
                                    <div class='info'>
                                        <h1 class='title'>{{ $data->title }}</h1>
                                        <p class='description'>{{ $data->description }}</p>
                                        <div class="main-text-button">
                                            <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                        class="fa fa-angle-down"></i></a></div>
                                        </div>
                                    </div>

                                </div>



                                <div class="input-group mb-3">

                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Add To
                                        Cart</button>
                                    <input type="number" name="quantity" class="form-control" placeholder="how Many ? "
                                        aria-label="Example text with button addon" aria-describedby="button-addon1">

                                </div>
                            </div>
                        </form>
                    @endforeach

                </div>
            </div>

        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
</body>

</html>
