@extends('feedy::landing.layouts.app')

@section('full-content')
    
    {{-- Header --}}
    <div class="uk-inline bg-hero">
        <img src="//cdn.btekno.id/img/illustrations/svg/illustration-0001.svg" class="bg" alt="Logo">
        <div class="uk-overlay-default uk-position-cover"></div>
        <div class="uk-overlay uk-position-center uk-dark">
            <div class="mcontainer text-center mt-20 mb-20">
                <div class="vh-md-100">
                    <br/><br/>
                    <center><img src="{{ config('feedy.assets.logo') }}" width="200" class="logo mb-10"></center>
                    <h1 class="font-bold text-4xl text-gray-600 mb-2">
                        <b>The easy way to collect feedback.</b>
                    </h1>
                    <p class="text-gray-500 text-lg py-3 mb-10">
                        Functionality &amp; simplicity at its core, {{ config('feedy.name') }} makes it easier than ever to collect <br/>
                        valuable feedback from users, with zero-fuss.
                    </p>

                    @auth
                        @if(me()->fd()->count())
                            <a href="{{ route('feedy.panel.index') }}" class="bg-blue-500 text-white hover:text-white py-3 px-5 rounded-md mb-20">
                                <i class="fa fa-code mr-1"></i>
                                <b>Console</b>
                            </a>
                        @else
                            <a href="{{ route('feedy.get-started') }}" class="bg-blue-500 text-white hover:text-white py-3 px-5 rounded-md mb-20">
                                <i class="fa fa-code mr-1"></i>
                                <b>Install {{ config('feedy.name') }}</b>
                            </a>
                        @endif
                    @else
                        <a href="{{ route('login') }}?redirect={{ request()->fullUrl() }}" class="bg-blue-500 text-white hover:text-white py-3 px-5 rounded-md mb-20">
                            <i class="fa fa-download mr-1"></i>
                            <b>Get Started</b>
                        </a>
                    @endauth

                </div>
            </div>
        </div>
    </div>

    {{-- Features --}}
    <section class="py-10 mcontainer" id="features">
        <div class="text-center mb-10">
            <div class="text-center mt-20 mb-20">
                <h2 class="text-4xl font-bold mb-2">
                    <b>Collect feedback in style.</b>
                </h2>
                <p class="text-gray-400 font-lg">
                    Feedy offers a wide range of tools to help you run an effective feedback campaign, within seconds.
                </p>
            </div>
        </div>
        <div class="grid md:grid-cols-2 grid-cols-2 divide divide-gray-200 gap-x-6 gap-y-4 mb-20 text-center">
            <div class="mb-10 px-12">
                <i class="fas fa-edit text-6xl mb-5 text-blue-500"></i>
                <h5 class="font-semibold text-xl mb-3">Advanced feedback editor</h5>
                <p class="text-gray-400">Tune your feedback to perfection with the built-in feedback editor, full of features.</p>
            </div>
            <div class="px-12">
                <i class="fas fa-desktop text-6xl mb-5 text-green-500"></i>
                <h5 class="font-semibold text-xl mb-3">Works on any device</h5>
                <p class="text-gray-400">There's no limitations. Collect feedback from users, whether they're on desktop or mobile.</p>
            </div>
            <div class="px-12">
                <i class="fas fa-columns text-6xl mb-5 text-yellow-500"></i>
                <h5 class="font-semibold text-xl mb-3">Easy integrations</h5>
                <p class="text-gray-400">Embed {{ config('feedy.name') }} on your site or use a standalone page to get feedback from anywhere.</p>
            </div>
            <div class="px-12">
                <i class="fas fa-user-secret text-6xl mb-5 text-red-500"></i>
                <h5 class="font-semibold text-xl mb-3">Privacy Mode</h5>
                <p class="text-gray-400">Flip one switch and start collecting feedback anonymously, keeping user data private.</p>
            </div>
        </div>

    </section>

    {{-- Example --}}
    <section class="py-7 bg-gray-100" id="example">
        <div class="mcontainer">
            
            <center>
                <h5 class="text-2xl font-bold mb-3 mt-20">Another "ONE DAY" Projects</h5>
                <p class="mb-5 text-md text-gray-400">
                    If you are curious and want to make something like <b>{{ config('feedy.name') }}</b>, <br/>you can simpy clone this project through my Github page. Thanks!
                </p>
                <h6 class="font-black font-bold text-md mb-2">Usage Dependencies:</h6>
                <p class="mb-0"><a href="https://github.com/laravel/laravel" target="_blank" class="text-blue-500">Laravel</a> by Taylor Otwell</p>
                <p class="mb-0"><a href="https://github.com/laravolt/avatar" target="_blank" class="text-blue-500">Avatar</a> by Laravolt</p>
                <p class="mb-4"><a href="https://github.com/fruitcake/laravel-cors" target="_blank" class="text-blue-500">Cors</a> by Fruitcake (barryvdh)</p>
                    
                <div class="bg-black inline p-5 w-20 rounded-md text-white mb-20">
                    <a href="https://github.com/novay/feedy" target="_blank" class="hover:text-white">
                        <i class="fab fa-github"></i> <br/>
                        FORK
                    </a>
                </div>
            </center>
            
            <div uk-grid class="mt-20 mb-20">
                <div class="uk-width-expand@m">
                    <h5 class="text-2xl font-bold mb-3">Plenty to love</h5>
                    <p class="mb-5 text-lg text-gray-400">
                        {{ config('feedy.name') }} is packed with features that'll help you run a successful feedback campaign. Here are just a few.
                    </p>
                </div>
                <div class="uk-width-2-3@m pr-4">
                    <div class="grid md:grid-cols-2 grid-cols-2 divide divide-gray-200 gap-x-4 gap-y-4 mb-20">
                        <div class="mb-0 px-2">
                            <p class="font-semibold text-lg mb-3">
                                <i class="fa fa-check mr-2 text-green-500"></i> Advanced feedback editor
                            </p>
                        </div>

                        <div class="mb-0 px-2">
                            <p class="font-semibold text-lg mb-3">
                                <i class="fa fa-check mr-2 text-green-500"></i> Powerful export tools
                            </p>
                        </div>
                        <div class="mb-0 px-2">
                            <p class="font-semibold text-lg mb-3">
                                <i class="fa fa-check mr-2 text-green-500"></i> Easy integration
                            </p>
                        </div>
                        <div class="mb-0 px-2">
                            <p class="font-semibold text-lg mb-3">
                                <i class="fa fa-check mr-2 text-green-500"></i> Host it yourself
                            </p>
                        </div>
                        <div class="mb-0 px-2">
                            <p class="font-semibold text-lg mb-3">
                                <i class="fa fa-check mr-2 text-green-500"></i> Privacy built-in
                            </p>
                        </div>
                        <div class="mb-0 px-2">
                            <p class="font-semibold text-lg mb-3">
                                <i class="fa fa-check mr-2 text-green-500"></i> Works on any site
                            </p>
                        </div>
                        <div class="mb-0 px-2">
                            <p class="font-semibold text-lg mb-3">
                                <i class="fa fa-check mr-2 text-green-500"></i> Support included
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('feedy::landing.layouts.partials.footer')

@endsection