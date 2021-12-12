@extends('layouts.apps')
@section('content')
  <div class="sidebar">
    <div class="logo_content">
      <div class="logo">
        <div class="logo_name">PhysX</div>
      </div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav_list">
      <li>
        <a href="#">
          <i class='bx bxs-home bx-tada-hover'></i>
          <span class="links_home"><b>Rumah</b></span>
        </a>

      </li>
      <li>
        <a href="#">
          <i class='bx bxs-trophy bx-tada-hover' ></i>
          <span class="links_leaderboard"><b>Peringkat</b></span>
        </a>

      </li>
      <li>
        <a href="#">
          <i class='bx bx-time-five bx-tada-hover' ></i>
          <span class="links_challenge"><b>Sejarah</b></span>
        </a>

      </li>
      <li>
        <a href="{{ route('shop.index') }}">
          <i class='bx bxs-cog bx-tada-hover'></i>
          <span class="links_settings"><b>Shop</b></span>
        </a>

      </li>
    </ul>
    <div class="profile_content">
      <div class="profile">
        <div class="profile_details">
          <div class="name_job">
          <div class="name">PhysX</div>
          <div class="job">Web Development</div>
          </div>
        </div>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <i class='bx bx-log-out' id="logOut"></i>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
          </form>
      </div>
    </div>
  </div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

<script>
  let btn = document.querySelector("#btn");
  let sidebar = document.querySelector(".sidebar");

  btn.onclick = function(){
    sidebar.classList.toggle("active");
  }
</script>
@endsection
