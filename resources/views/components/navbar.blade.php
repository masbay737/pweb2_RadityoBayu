@php
$user = auth()->user();
@endphp

<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-turbolinks="false" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-list-ul"></i></a></li>
        </ul>
        {{-- <img src="{{asset('asset/lambang_kotak.png')}}" alt="" width="30" heiht="30" >
        &nbsp;
        &nbsp;
        <p> --}}
        
        <h5 class="font-weight-bold text-2xl text-white">{{ config('Sistem Informasi Monitoring Progres Pekerjaan Jalan dan Jembatan', 'Sistem Informasi Monitoring Progres Pekerjaan Jalan dan Jembatan') }}</h5>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-turbolinks="false" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            @if (!is_null($user))
                <div class="d-sm-none d-lg-inline-block">Selamat datang , {{ $user->name }}</div></a>
            @else
                <div class="d-sm-none d-lg-inline-block">Hai, Welcome</div></a>
            @endif
            <div class="dropdown-menu dropdown-menu-right">
                <a href="/user/profile" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                @if (request()->get('is_admin'))
                <a href="/setting" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Setting
                </a>
                @endif
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('login') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
