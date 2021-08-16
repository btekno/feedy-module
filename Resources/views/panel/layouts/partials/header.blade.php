<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="#">
                <img src="{{ config('feedy.assets.logo') }}" class="header-brand-img mr-2" alt="Logo">
                <span class="hidden-sm-down">{{ config('feedy.name') }}</span>
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                <div class="nav-item d-none d-md-flex">
                    <a href="javascript:;" class="btn btn-sm pl-4 pr-4 bg-camp">{{ __('feedy::value.help') }}</a>
                </div>
                <div class="dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <img class="avatar" src="{{ me()->photo }}">
                        <span class="ml-2 d-none d-lg-block">
                            <span class="text-default">{{ me()->name }}</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="{{ route('feedy.index') }}">
                            <i class="dropdown-icon fe fe-arrow-left"></i> Back to Home
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="dropdown-icon fe fe-log-out"></i> {{ __('feedy::value.logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}?redirect={{ config('feedy.url') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>