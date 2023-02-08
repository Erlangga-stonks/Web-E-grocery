<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

<div class="Navigation-Box">
    <div class="Navigation-Text">
        <div class="Company-Name">
            <a href="/">Amazing E-Grocery</a>
        </div>
        
        <div class="Navigation-content">
            <ul class="navbar-nav ms-auto">
                
                @auth
                <div class="navigation-item">
                   
                    <li class="nav-item dropdown">
                        <span><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="ml11">
                                <span class="text-wrapper">
                                    <span class="line line1"></span>
                                   <div class="letters">
                                    <span>Hello</span>
                                </div>
                                </span>
                            </span>
                            , {{auth()->user()->FirstName}}
                    </a></span></li>
                    
                        <div class="Final-dropdown-menu">
                            <a class="Final-dropdown-item" href="/Profile">Profile</a>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf 
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                                </form>
                            </li>
                        </div>
                </div>
                    @else
                    <div class="account">
                        <a href="/Register">Register</a>
                        
                        <a href="/Login">Login</a>
                    </div>
                @endauth
            </ul>
            
        </div>
        
    </div>
</div>
