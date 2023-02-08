@extends('Main.structure')

@section('container')

<link rel="stylesheet" href="/css/AccountMaintenance.css">

<div class="HomeNav-Box" style="background-color:yellow;display:flex;justify-content:space-around">
    <a href="/HomeUser">Home</a>
    <a href="/Profile">Profile</a>
    <a href="/AccountMaintenance"><u>Account Maintenance</u></a>
</div>

<div class="AccountMaintenance-Body">
    <div class="AccountMaintenance-Positioning">
        <div class="AccountMaintenance-Title-Left">
            <h4><u><b>Account</b></u></h4>
            @foreach ($Prof as $tag)
                <div class="AccountMaintenance-Box">
                    <div class="AccountMaintenance-Detail">
                        {{ $tag->FirstName }} - {{ $tag->Role }}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="AccountMaintenance-Title-Right">
            <h4><u><b>Action</b></u></h4>
            @foreach ($Prof as $tag)
            <div class="AccountMaintenance-Box">
                <div class="AccountMaintenance-Detail">
                    <a href="/UpdateRole/{{ $tag->id }}">Update Role</a> - <a href="/action/DeleteRole/{{ $tag->id }}">Delete</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
<div class="Index-Footer">
    <div class="Index-Footer-Detail">
        <p>@ Amazing E-Grocery 2023</p>
    </div>
</div>
@endsection
