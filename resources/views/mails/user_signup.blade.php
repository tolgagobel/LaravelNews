<h1>{{config('app.name')}}</h1>
<p>Hello {{ $user->namesurname }} ,your registration has been done successfully.</p>
<p>To activate your registration <a href="{{ config('app.url') }}/user/activation/{{ $user->activation_key }}">Click</a>or open below link in browser</p>
<p>{{ config('app.url') }}/user/activation/{{ $user->activation_key }}</p>
