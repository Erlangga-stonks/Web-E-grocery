@extends('Main.structure')

@section('container')
    
    <div class="Register-Page">

        <div class="Register-Title">
            <h4><u>Register</u></h4>
        </div>

            <div class="Register-Card">
                <form action="/Register" method="post" style="margin:auto;padding-left: 20px">
                    @csrf

                    <div class="Register-Collum-Positioning">
                        <div class="Register-Collum-Left">
                            <div class="form-floating mb-2" style="display: flex">
                                First Name:
                                <div class="input-form">
                                    <input type="text" name="FirstName" class="form-control @error('name') is-invalid @enderror" id="FirstName" placeholder="Enter Your Name"  style="background-color: transparent" required>
                                </div>
                            </div>
                            <div class="form-floating mb-2"  style="display: flex">
                                Email:
                                <div class="input-form">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="Email" placeholder="Enter Your Email" style="background-color: transparent" required>
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
                        
                        <div class="Register-Collum-Right">
                            <div class="form-floating mb-2" style="display: flex">
                                Last Name:
                                <div class="input-form">
                                    <input type="text" name="LastName" class="form-control @error('name') is-invalid @enderror" id="LastName" placeholder="Enter Your Name"  style="background-color: transparent" required>
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
                                    <input type="password" name="confirm-password" class="form-control" id="floatingPasswordConfirmation" placeholder="Re-Type Your Password" style="background-color: transparent" required>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="Remember-Button">
                          <button class="Register-btn" type="submit">Submit</button>
                    </div>

                </form>
              
                <div class="Register-Text">
                    <a href="/Login">Already have an account? click here to Log in</a>
                </div>
            </div>
    </div>

    <div class="Index-Footer">
        <div class="Index-Footer-Detail">
            <p>@ Amazing E-Grocery 2023</p>
        </div>
    </div>
    
@endsection