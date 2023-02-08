@extends('Main.structure')

@section('container')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="HomeNav-Box" style="background-color:yellow;display:flex;justify-content:space-around">
    <a href="/HomeUser">Home</a>
    <a href="/CartPage">Cart</a>
    <a href="/Profile">Profile</a>
    <a href="/AccountMaintenance"><u>Account Maintenance</u></a>
</div>

<div class="AddProduct-Body">
    <div class="Top-Things-AddProduct">
        <button type="button" class="btn btn-default btn-sm" onclick="window.location.href='/ManageProduct';">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Manage Product
        </button>
    </div>

    <div class="AddProduct-Box">
        <div class="Add-Product-Title">
            <b>Add Product</b>
        </div>


        <form action="/AddProduct" method="post" enctype="multipart/form-data">
            @csrf
            <div class="AddProduct-Input-Form">
                <label for="Name">Name</label>
                <input type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" placeholder="First name" aria-label="First name" required autofocus>
            </div>
            <div class="AddProduct-Input-Form">
                <label for="Category">Category</label>
                <select class="form-select" aria-label="Default select example" name="Category" required>
                    <option value="1">Vegetable</option>
                    <option value="2">Tools</option>
                    <option value="3">Device</option>
                    <option value="4">Other</option>
                </select>
            </div>
            <div class="AddProduct-Input-Form mb-3 mt-3">
                <label for="comment">Comments:</label>
                <textarea class="form-control" rows="5" name="Detail" id="comment" name="text" required></textarea>
            </div>
            <div class="AddProduct-Input-Form">
                <label for="Price">Price</label>
                <input type="text" class="form-control" name="Price" placeholder="Price" aria-label="Price" required>
            </div>
            <div class="AddProduct-Input-Form mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" name="Photo" id="formFile" required>
            </div>
            <div class="AddProduct-Button">
                <button type="submit" class="btn btn-light">Add</button>
            </div>
        </form>
    </div>

</div>
<div class="Index-Footer">
    <div class="Index-Footer-Detail">
        <p>@ Amazing E-Grocery 2023</p>
    </div>
</div>

@endsection