@extends('Main.structure')

@section('container')

<div class="HomeNav-Box" style="background-color:yellow;display:flex;justify-content:space-around">
    <a href="/HomeUser">Home</a>
    <a href="/CartPage">Cart</a>
    <a href="/Profile">Profile</a>
    <a href="/AccountMaintenance"><u>Account Maintenance</u></a>
    <a href="/AddProduct">Add Product?</a>
</div>

<div class="Main-Body-Home">

    <div class="Home-Box-Main">
        <div class="Home-FlexBox">
            <div class="Box-Scroll">
                @foreach ($Home2 as $Variable)
                @if($Home2->count() > 0)
                <div class="Main-Body-Items">
                    <div class="Main-Body-Purple-Image">
                        <img src="{{ url('storage/'.$Variable->Photo) }}" class="card-img-top" alt="...">
                    </div>
                    <div class="Main-Body-Item-Description">
                        {{ $Variable->Name }}
                        <br/>
                        <a href="/ProductDetailCustomer/{{ $Variable->id }}">Detail</a>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="Home-Pagination-Controller">
        {{ $Home2->links() }}
    </div>
</div>
<div class="Index-Footer">
    <div class="Index-Footer-Detail">
        <p>@ Amazing E-Grocery 2023</p>
    </div>
</div>
@endsection
