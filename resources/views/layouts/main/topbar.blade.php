      <!-- Mainbody_conatiner Starts -->
      <div class="Mainbody_conatiner user_profile">
        <!-- HEADER Section starts -->
        <header>
          <nav class="fixed_nav">
            <div class="nav_bar">
              <div class="Nav_left_Input_content">
                <div class="d-flex align-items-center">
                  <div class="nav_logo d-flex mr-5">
                    <a href="home"><img src="{{ asset('dashboard/assets/images/LOGO.png') }}" alt="LOGO" /></a>
                    <h3>NPIS</h3>
                  </div>
                  <div class="toggler ml-5">
                    <img id="menu" src="{{ asset('dashboard/assets/images/menu.png') }}" alt="menu" />
                  </div>
                </div>
              </div>
              <div class="Nav_right_content d-flex align-items-center">
                <div class="Nav_right_img_content d-flex">
                  <div class="jata_icons">
                    <img
                      src="{{ asset('dashboard/assets/images/Jata-Malaysia-Vector-01 6.png') }}"
                      alt="Jata-Malaysia"
                      class=""
                    />
                    <img
                      src="{{ asset('dashboard/assets/images/logo-jab-pengairan-saliran-msia__400x293 6.png') }}"
                      alt="jab-pengairan-saliran-msia"
                    />
                  </div>
                  <div class="icons_contains">
                    <img src="{{ asset('dashboard/assets/images/notification.png') }}" alt="coolicon" />
                    <img src="{{ asset('dashboard/assets/images/Icon Settings.png') }}" alt="Settings" />
                    <img src="{{ asset('dashboard/assets/images/Vector-11.png') }}" alt="Vector" />
                  </div>
                </div>
                <div class="dropdown">
                  <div
                    class=""
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <div class="profile_container d-flex">
                      <div class="profile_img">
                        <img src="{{ asset('dashboard/assets/images/Admin pic.png') }}" alt="Admin" />
                      </div>
                      <div class="profile_content">
                        <h4>Aiman Daniel</h4>
                        <p>Pentabir</p>
                      </div>
                    </div>
                  </div>
                  <div
                    class="dropdown-menu mt-3 ml-5"
                    aria-labelledby="dropdownMenuButton"
                  >
                    <a class="dropdown-item" href="{{ url('user/logout') }}">Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </header>
        