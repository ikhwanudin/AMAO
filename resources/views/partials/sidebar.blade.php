<div class="list-group">
  <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action {{ Request::is('dashboard') ? 'active' : ''}}">Dashboard</a>
  <a href="{{ route('absensi' )}}" class="list-group-item list-group-item-action {{ Request::is('dashboard/absensi') ? 'active' : ''}} ">Absensi</a>
  <a href="#" class="list-group-item list-group-item-action">Kas</a>
  <a href="#" class="list-group-item list-group-item-action">Administrasi</a>
  <a href="#" class="list-group-item list-group-item-action">Kuisoner</a>
</div>