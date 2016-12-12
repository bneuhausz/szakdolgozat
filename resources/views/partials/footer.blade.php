<footer class="main-footer">
        <nav>
            <form action="{{ route('language') }}" method="post">
                <select name="locale">
                    <option value="en" {{ Config::get('app.locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="hu" {{ Config::get('app.locale') == 'hu' ? 'selected' : '' }}>Hungarian</option>
                </select>
                {{ csrf_field() }}
                <input class="btn btn-primary" type="submit" value="Submit">
                @if (Auth::check())
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                @endif
            </form>
            {{ trans('auth.failed') }}
        </nav>
</footer>
