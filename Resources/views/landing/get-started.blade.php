@extends('feedy::landing.layouts.app')
@section('title', 'Get Started - ')

@section('content')
    
    <p class="uppercase text-gray-400 font-semibold mb-0 text-sm">GET STARTED</p>
    <h3 class="text-2xl font-bold mb-2">{{ config('feedy.name') }} - {{ config('feedy.tagline') }}</h3>
    <hr class="mb-10" />

    {!! Form::open(['class' => 'bt-form']) !!}

        <h3 class="font-semibold text-lg">First time register</h3>
        <p class="text-gray-400 text-sm mb-5">All you need to do is touch the submit button.</p>

        <div class="bg-white rounded-md border p-4 mb-5">
            <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <img class="h-10" src="{{ me()->photo }}" alt="{{ me()->name }}">
                </div>
                <div class="uk-width-expand">
                    <h4 class="font-semibold">{{ me()->name }}</h4>
                    <p class="text-gray-400 text-sm">This account will associate as the site owner.</p>
                </div>
            </div>
        </div>

        <button class="rounded-md border-blue-600 py-2 px-5 bg-blue-500 text-white font-semibold mb-20" type="submit">
            Submit
        </button>
    {!! Form::close() !!}

    @include('feedy::landing.layouts.partials.footer')
@endsection