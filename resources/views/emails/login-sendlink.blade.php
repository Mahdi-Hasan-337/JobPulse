<p>Pleas click the button below to login</p>
<a href="{{ $url }}"
    style="display: inline-block; padding: 10px 20px; background-color: #000000; color: white; text-decoration: none; border-radius: 5px;">Click
    here to login</a>
<br>
<p>Thanks,</p>
<p>{{ config('app.name') }}</p>
<hr>
<p>If you're having trouble clicking the "Login" button, copy and paste the URL below into your web browser:</p>
<a href="{{ $url }}">{{ $url }}</a>
