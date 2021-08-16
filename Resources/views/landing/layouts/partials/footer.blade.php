{{-- Footer --}}
<section class="mcontainer footer py-6" id="contact">
    <div uk-grid class="mt-20 mb-20">
        <div class="uk-width-expand@m">
            <h2 class="text-xl font-bold mb-3">About {{ config('feedy.name') }}</h2>
            <p class="font-small mb-3 text-gray-400 leading-1">
                {{ config('feedy.name') }} offers a wide range of tools to help you run an effective feedback campaign, within seconds.
            </p>
            <div>
                <a href="https://novay.web.id" target="_blank" class="p-2 bg-transparent hover:bg-blue-500 hover:text-white rounded-md"><i class="fa fa-globe"></i></a>
                <a href="https://facebook.com/404vay" target="_blank" class="p-2 bg-transparent hover:bg-blue-500 hover:text-white rounded-md"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/404vay" target="_blank" class="p-2 bg-transparent hover:bg-blue-500 hover:text-white rounded-md"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="uk-width-1-2@m">
            <h5 class="text-xl font-bold mb-3">Part of BTEKNO!</h5>
            <p class="mb-5 text-md text-gray-400">
                &copy; 2019 {{ config('feedy.name') }} - {{ config('feedy.tagline') }}<br/>
                Some rights reserved.
            </p>
            <p class="text-gray-400 text-sm">Handcrafted by <a href="https://facebook.com/404vay" class="text-black">@404vay</a></p>
        </div>
    </div>
</section>