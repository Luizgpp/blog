<h1>Resetar senha</h1>
<br>
<p>
  Clique no botão para resetar sua senha!
</p> <br>

<a class="btn waves-effect light-effect" href="{{ $link = route('password.reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}">
  Resetar!
</a>
