<h1>Hello, User!</h1>
<!-- {{$user->email}} -->

@auth()

<p>Secret text!</p>
<h3>{{Auth::user()->name}}</h3>
<h3>{{Auth::user()->dob}}</h3>
@endif
{{\Illuminate\Support\Facades\Auth::check()}}

