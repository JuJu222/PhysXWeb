@auth()
    @if(isset($userTitle) || isset($userAvatar))
    <div class="d-flex justify-content-end mt-5 me-5">
        <a href="{{ route('profile.index') }}">
            <div class="d-flex align-items-center">
                <div>
                    <h4 class="fw-bold purple m-0 pt-3 text-right">{{ auth()->user()->name }}</h4>
                    @if ($userTitle)
                        <p class="purple m-0 mt-2 text-right">{{ $userTitle }}</p>
                    @endif
                </div>
                @if ($userAvatar)
                    <img src="{{ asset('img/avatars/' . $userAvatar) }}" class="avatar ml-3" alt="Avatar">
                @else
                    <img src="https://drive.google.com/uc?export=view&id=1iOSL63He07VAokwVnFDadFhTnyZrDSKL" class="avatar ml-3" alt="Avatar">
                @endif
            </div>
        </a>
    </div>
    @endif
@endauth
<div class="sidebar">
    <div class="logo_content">
      <div class="logo">
        <div class="logo_name">PhysX</div>
      </div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav_list">
      <li>
        <a href="/">
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
          <i class='bi bi-bag-fill bx-tada-hover'></i>
          <span class="links_settings"><b>Shop</b></span>
        </a>

      </li>
      <li>
        <a href="{{ route('profile.index') }}">
          <i class='bx bxs-user-circle bx-tada-hover'></i>
          <span class="links_profile"><b>Profile</b></span>
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

<script>
  let btn = document.querySelector("#btn");
  let sidebar = document.querySelector(".sidebar");

  btn.onclick = function(){
    sidebar.classList.toggle("active");
  }
</script>
