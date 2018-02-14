@if($app_footer)
{!! $app_footer !!}
@else
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                @if($show_support)
                <p>
                    {!! trans('cachet.powered_by') !!}
                    @if($show_timezone)
                    {{ trans('cachet.timezone', ['timezone' => $timezone]) }}
                    @endif
                </p>
                @endif
            </div>
            <div class="col-sm-8">
                <ul class="list-inline">
                    @if($current_user || $dashboard_link)
                    <li>
                        <a class="btn btn-link" href="{{ cachet_route('dashboard') }}">{{ trans('dashboard.dashboard') }}</a>
                    </li>
                    @endif
                    @if($current_user)
                    <li>
                        <a class="btn btn-link" href="{{ cachet_route('auth.logout') }}">{{ trans('dashboard.logout') }}</a>
                    </li>
                    @endif
                    <li>
                        <a class="btn btn-link" href="{{ cachet_route('feed.rss') }}">{{ trans('cachet.rss-feed') }}</a>
                    </li>
                    <li>
                        <a class="btn btn-link" href="{{ cachet_route('feed.atom') }}">{{ trans('cachet.atom-feed') }}</a>
                    </li>
                    @if($enable_subscribers)
                    <li>
                        <a class="btn btn-success btn-outline" href="{{ cachet_route('subscribe') }}">{{ trans('cachet.subscriber.button') }}</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</footer>
@endif

@include("partials.analytics")
