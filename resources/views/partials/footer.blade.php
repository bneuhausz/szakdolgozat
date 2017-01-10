<footer class="footer">
    <div class="container">
        <div class="pull-right">
            <form action="{{ route('language') }}" method="post" class="language-switcher">
                <select name="locale">
                    <option value="en" {{ Config::get('app.locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="hu" {{ Config::get('app.locale') == 'hu' ? 'selected' : '' }}>Magyar</option>
                </select>
                {{ csrf_field() }}
                <input class="btn btn-primary btn-xs" type="submit" value="{{ trans('general.submit') }}">
                @if (Auth::check())
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                @endif
            </form>
        </div>
    </div>
</footer>
