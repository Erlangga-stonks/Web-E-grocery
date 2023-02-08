@extends('Main.structure')

@section('container')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="HomeNav-Box" style="background-color:yellow;display:flex;justify-content:space-around">
    <a href="/HomeUser">Home</a>
    <a href="/CartPage">Cart</a>
    <a href="/Profile">Profile</a>
    <a href="/AccountMaintenance"><u>Account Maintenance</u></a>
    <a href="/AddProduct">Add Product?</a>
</div>

<div class="ManageProduct-Body">
    <div class="Top-Things-ManageProduct">
    
        <button type="button" class="btn btn-primary" onclick="window.location.href='/AddProduct';"
            style="--bs-btn-padding-y: 5px; --bs-btn-padding-x: 30px; --bs-btn-font-size: 15px; white-space: nowrap; background-color: gray">
            <a>Add Product +</a>
        </button>
    </div>

    @foreach ($Manage as $Items)
    <div class="Product-Display-ManageProduct">
        <div class="ManageProduct-Outer-Box">
            <div class="ManageProduct-Left-Image">
                <img src="{{ url('storage/images/'.$Items->Photo) }}" class="card-img-top" alt="...">
            </div>  
            <div class="ManageProduct-Right-Detail">
                <a>{{ $Items["Name"] }}</a>
            </div>
            <div class="ManageProduct-Button">
                <p><button type="button" class="btn btn-default btn-sm" onclick="window.location.href='{{url('Update',['id' =>$Items->id]) }}';">
                    <span class="glyphicon glyphicon-pencil"></span>
                </button>
                </p>
                <form action="/ManageProduct/{{ $Items->id }}" method="get">
                    @method('delete')
                    @csrf
                <p><button style="font-size:18px" onclick="return confirm('Are You Sure?')"><i class="fa fa-trash-o"></i></button></p>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>



@endsection