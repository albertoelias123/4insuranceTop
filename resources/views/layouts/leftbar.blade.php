<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="{{url('/')}}" class="logo logo-large"><img src="{{ asset('assets/images/4others_insurance_black.png') }}" class="img-fluid" alt="logo"></a>
            <a href="{{url('/')}}" class="logo logo-small"><img src="{{ asset('assets/images/4others_insurance_black_small.png') }}" class="img-fluid" alt="logo"></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Profilebar -->
        <div class="profilebar text-center">
            <img src="{{ asset('assets/images/users/profile.svg') }}" class="img-fluid" alt="profile">
            <div class="profilename">
              <p>{{ Auth::user()->currentTeam->name }}</p>
            </div>
            <div class="userbox">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="/user/profile" class="profile-icon">
                            <img src="{{ asset('assets/images/svg-icon/user.svg') }}" class="img-fluid" alt="user">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/teams/{{ Auth::user()->currentTeam->id }}" class="profile-icon">
                            <img src="{{ asset('assets/images/svg-icon/advanced.svg') }}" class="img-fluid" alt="email">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                class="profile-icon">
                                <img src="{{ asset('assets/images/svg-icon/logout.svg') }}" class="img-fluid" alt="logout">
                            </a>
                        </form>
                    </li>
                </ul>
              </div>
        </div>
        <!-- End Profilebar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li class="vertical-header">
                    @lang('Basic Registrations')
                </li>

                <li>
                    <a href="javaScript:void();">
                        <img src="{{ asset('assets/images/svg-icon/tables.svg') }}" class="img-fluid" alt="dashboard"/>
                        <span>Usuários</span>
                    </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="{{ asset('assets/images/svg-icon/tables.svg') }}" class="img-fluid" alt="dashboard"/>
                        <span>Operadoras</span>
                    </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="{{ asset('assets/images/svg-icon/tables.svg') }}" class="img-fluid" alt="dashboard"/>
                        <span>Representantes</span>
                    </a>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="{{ asset('assets/images/svg-icon/tables.svg') }}" class="img-fluid" alt="dashboard"/>
                        <span>Colaboradores</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>
