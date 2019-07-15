<h2>Ada yang salah dengan akun anda, hubungi admin yang bersangkutan</h2>

<div>
    <a class="dropdown-item" role="presentation" href="{{ route('logout') }}" style="font-family: Montserrat, sans-serif;font-weight: bold; font-size: 14px;"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        Kembali
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>