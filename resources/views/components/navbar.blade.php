<div style="background:$333; color:white; padding:10px">
    <h3>Aplikasi Parkir</h3>

    <span>
        {{ auth()->user()->name ?? 'Guest' }}
    </spam>
     
    @auth
    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
        @csrf
        <button type="submid">Logout</button>
    </form> 
    @endauth
</div>