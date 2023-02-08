@extends('Main.structure')

@section('container')

<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/cart.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="HomeNav-Box" style="background-color:rgb(180, 180, 106);display:flex;justify-content:space-around">
    <a href="/HomeUser">Home</a>
    <a href="/CartPage">Cart</a>
    <a href="/Profile">Profile</a>
</div>

    <div class="CartPage-Body">
        <div class="CartPage-Outer-Box">
            <h4><u>Cart</u></h4>
            <div class="Detail-Flexbox">
                <div class="Image-Detail">
                    <div class="Detail-Purple-Image">
                        <img src="storage/images/B8yfYaPNqeuH1DGEFLtzJbF1Z0xr8plv8K8emb5x.jpg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="Description-Main-Detail">
                    <div class="Description-Detail">
                        <p>Camera</p>
                    </div>
                    <div class="Description-Detail">
                        <a><b>Rp.50.000,-</b></a>
                    </div>
                    <div class="Description-Detail">
                        <p>{{ $Detail->Detail }}</p>
                    </div>
                    <div class="Description-Detail">
                        <form action="/CartPage" method="get">
                            @method('delete')
                            @csrf
                        <p><button style="font-size:18px" onclick="return confirm('Are You Sure?')">Delete</button></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="CartPage-Total">
            <div class="CartPage-Total-Calculation">
                <p><b>Total: Rp.100.000,-</b></p> 
            </div>
            <div class="CartPage-Checkout-Box">
                <button style="font-size:18px;background-color:yellow;font-color:black;" onclick="location.href='/Success'"><b>Check Out</b></button>
            </div>
        </div>
    </div>
    <div class="Index-Footer">
        <div class="Index-Footer-Detail">
            <p>@ Amazing E-Grocery 2023</p>
        </div>
    </div>
@endsection