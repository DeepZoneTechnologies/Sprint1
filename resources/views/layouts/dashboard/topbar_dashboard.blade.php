<!-- Mainbody_conatiner Starts -->
<div class="Mainbody_conatiner ml-auto">
        <!-- HEADER Section starts -->
        <header class="dashboard">
          <nav>
            <div class="nav_bar">
              <div class="Nav_left_Input_content">
                <div class="d-flex">
                  <input type="text" class="form-control" />
                  <button class="btn btn-outline-secondary" type="button">
                    Cari
                  </button>
                </div>
              </div>
              <div class="Nav_right_content d-flex align-items-center">
                <div class="Nav_right_img_content d-flex">
                  <div class="jata_icons">
                    <img
                      src='{{ asset("assets/images/Jata-Malaysia-Vector-01 6.png") }}'
                      alt="Jata-Malaysia"
                      class=""
                    />
                    <img
                      src='{{ asset("assets/images/logo-jab-pengairan-saliran-msia__400x293 6.png") }}'
                      alt="jab-pengairan-saliran-msia"
                    />
                  </div>
                  <div class="icons_contains">
                    <img src='{{ asset("assets/images/notification.png") }}' alt="coolicon" />
                    <img src='{{ asset("assets/images/Icon Settings.png") }}' alt="Settings" />
                    <img src='{{ asset("assets/images/Vector-11.png") }}' alt="" />
                  </div>
                </div>
                <div class="dropdown ml-5">
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
                        <img src='{{ asset("assets/images/Admin pic.png") }}' alt="Admin" />
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
                  <a href="{{ url('user/logout') }}" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>                    
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </header>
        <!-- HEADER Section Ends -->