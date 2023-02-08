@extends('Main.structure')

@section('container')

<link rel="stylesheet" href="/css/Profile.css">

<div class="HomeNav-Box" style="background-color:yellow;display:flex;justify-content:space-around">
    <a href="/HomeUser">Home</a>
    <a href="/CartPage">Cart</a>
    <a href="/Profile">Profile</a>
</div>

<div class="Profile_Positioning">
    <div class="Profile-Collum-Positioning">
        <form action="action/Profile" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
        <div class="Profile-Flexing" style="display:flex">
            <div class="Profile-Collum-Image">
            <img src="storage\images\1675844526.jpg" alt="Your Display Picture">
            </div>
            <div class="Profile-Collum-Left">
                <div class="form-floating mb-2" style="display: flex">
                    First Name: 
                    <div class="input-form">
                        <input type="text" name="FirstName" class="form-control @error('name') is-invalid @enderror" id="FirstName" placeholder="{{auth()->user()->FirstName}}"  style="background-color: transparent" required>
                    </div>
                </div>
                <div class="form-floating mb-2"  style="display: flex">
                    Email:
                    <div class="input-form">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="Email" placeholder="{{auth()->user()->email}}" style="background-color: transparent" required>
                    </div>
                </div>
                <div>
                    Gender:
                    <div class="input-form">
                        <input id="lk" name="gender" type="radio" name="jenis_kelamin" value="Male">
                        <label for="lk">Male</label>
                        <input id="lk" name="gender" type="radio" name="jenis_kelamin" value="Female">
                        <label for="lk">Female</label>
                    </div>
                </div>
                <div class="form-floating mb-2"  style="display: flex">
                    Password
                    <div class="input-form">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" style="background-color: transparent" required>
                    </div>
                </div>
            </div>
            
            <div class="Profile-Collum-Right">
                <div class="form-floating mb-2" style="display: flex">
                    Last Name:
                    <div class="input-form">
                        <input type="text" name="LastName" class="form-control @error('name') is-invalid @enderror" id="LastName" placeholder="{{auth()->user()->LastName}}"  style="background-color: transparent" required>
                    </div>
                </div>
                <div class="form-floating mb-2" style="display: flex">
                    Role:
                    <div class="input-form">
                        <select id="Role" name="Role" class="form-control" style="background-color: transparent" required>
                            <option value="1">User</option>
                            <option value="2">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="form-floating mb-2"  style="display: flex">
                    Display Picture
                    <div class="input-form">
                        <input class="form-control" type="file" name="Photo" id="formFile" required>
                    </div>
                </div>
                <div class="form-floating mb-2"  style="display: flex">
                    Confirm-Password
                    <div class="input-form">
                        <input type="password" name="confirm-password" class="form-control" id="floatingPasswordConfirmation" placeholder="Re-Type Password" style="background-color: transparent" required>
                    </div>
                    
                </div>
            </div>
        </div>       
        <div class="Profile-Submit-Button" style="text-align:right">
            <p><button style="font-size:18px;background-color:yellow" onclick="return confirm('Update, Continue?')">Update</button></p>
        </div>
        </form>
    </div>
</div>


@endsection