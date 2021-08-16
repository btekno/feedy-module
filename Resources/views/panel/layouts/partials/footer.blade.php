<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-12 col-lg-auto mt-4 mt-lg-0 pull-right">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                        <a href="javascript:;">{{ __('feedy::value.documentation') }}</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:;">{{ __('feedy::value.support') }}</a>
                    </li>
                    <span>{!! __('feedy::value.copyright', ['year' => '2019', 'title' => config('feedy.name')]) !!}</span>
                </ul>
            </div>
        </div>
    </div>
</footer>