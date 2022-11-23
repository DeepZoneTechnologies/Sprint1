  <!-- side_bar_Container Sarts -->
  <div class="side_bar_Container show user_profile toggle_sidebar">
   <div class="side_bar_content">
     <div class="NPIS_logo_container d-flex v_hide">
       <div class="NPIS_logo">
         <img src="{{ asset('assets/images/LOGO.png') }}" alt="LOGO" />
       </div>
       <div class="NPIS_logo_right_content">
         <h3>NPIS</h3>
         <div class="ml-auto round_parent toggler_menu">
           <div class="round d-none"></div>
           <img src="{{ asset('assets/images/menu.png') }}" alt="menu" />
         </div>
       </div>
     </div>
     <h3 class="Modul">Modul</h3>
     <div class="sidebar_list_container">
       <!-- accordion start -->
       <ul class="accordion" id="accordionParent">
         <li class="accordian_content d-flex">
           <div class="sidebar_icon">
             <img src="{{ asset('assets/images/Vector-9.png') }}" alt="Vector9" />
           </div>
           <div class="accordian_single_list">
             <div class="Accordian-header" id="headingTwo">
               <a
                 class="text-left collapsed Accordian_link"
                 data-toggle="collapse"
                 href="#collapseTwo"
                 aria-expanded="false"
                 aria-controls="collapseTwo"
               >
                 <div class="d-flex sidebar_icon_Container">
                   <div class="sidebar_icon_right_content">
                     <div class="d-flex sb_contents">
                       <p>Geo Board</p>
                       <div>
                         <img
                           src="{{ asset('assets/images/down arrow.png') }}"
                           class="d_arrow"
                           alt="d_arrow"
                         />
                       </div>
                     </div>
                   </div>
                 </div>
               </a>
             </div>
             <div
               id="collapseTwo"
               class="collapse accordian_collapse_list"
               aria-labelledby="headingTwo"
               data-parent="#accordionParent"
             >
               <ul class="">
                 <li><a href="#">Contoh</a></li>
               </ul>
             </div>
           </div>
         </li>
         <li class="accordian_content d-flex">
           <div class="sidebar_icon">
             <img src="{{ asset('assets/images/Vector-3.png') }}" alt="d_arrow" />
           </div>
           <div class="accordian_single_list">
             <div class="Accordian-header" id="headingTwo">
               <a
                 class="text-left collapsed Accordian_link"
                 data-toggle="collapse"
                 href="#pentabir"
               >
                 <div class="d-flex sidebar_icon_Container">
                   <div class="sidebar_icon_right_content">
                     <div class="d-flex sb_contents">
                       <p>Pentadbir</p>
                       <div>
                         <img
                           src="{{ asset('assets/images/down arrow.png') }}"
                           class="d_arrow"
                           alt="d_arrow"
                         />
                       </div>
                     </div>
                   </div>
                 </div>
               </a>
             </div>
             <div
               id="pentabir"
               class="collapse accordian_collapse_list"
               aria-labelledby="headingTwo"
               data-parent="#accordionParent"
             >
               <ul class="">
                 <li><a href="#">Profil Pengguna</a></li>
                 <li><a href="#">Pengesahan Pengguna Baharu</a></li>
                 <li><a href="#">Daftar Pengguna Baharu</a></li>
                 <li><a href="#">Selenggara Portal</a></li>
                 <li><a href="#">Selenggara Data</a></li>
                 <li><a href="#">Selenggara Kod Projek</a></li>
                 <li><a href="#">Selenggara Projek</a></li>
                 <li><a href="#">Selenggara Dashboard Analisis</a></li>
                 <li>
                   <a href="#">Semakan Map Services dan Integrasi</a>
                 </li>
                 <li><a href="#">Audit Trial</a></li>
               </ul>
             </div>
           </div>
         </li>
         <li class="accordian_content d-flex">
           <div class="sidebar_icon">
             <img src="{{ asset('assets/images/Vector-4.png') }}" alt="Vector" />
           </div>
           <div class="accordian_single_list">
             <div class="Accordian-header" id="headingTwo">
               <a
                 class="text-left collapsed Accordian_link"
                 data-toggle="collapse"
                 href="#permohonan"
               >
                 <div class="d-flex sidebar_icon_Container">
                   <div class="sidebar_icon_right_content">
                     <div class="d-flex sb_contents">
                       <p>Permohonan Projek</p>
                       <div>
                         <img
                           src="{{ asset('assets/images/down arrow.png') }}"
                           class="d_arrow"
                           alt="d_arrow"
                         />
                       </div>
                     </div>
                   </div>
                 </div>
               </a>
             </div>
             <div
               id="permohonan"
               class="collapse accordian_collapse_list"
               aria-labelledby="headingTwo"
               data-parent="#accordionParent"
             >
               <ul class="">
                 <li><a href="#">Projek JPS</a></li>
                 <ul class="">
                   <li><a href="#">Senarai Projek</a></li>
                   <li><a href="#">Janaan Laporan</a></li>
                 </ul>
                 <li><a href="#">Projek Bukan Teknik</a></li>
               </ul>
             </div>
           </div>
         </li>
         <li class="accordian_content d-flex">
           <div class="sidebar_icon">
             <img src="{{ asset('assets/images/Vector-1.png') }}" alt="Vector" />
           </div>
           <div class="accordian_single_list">
             <div class="Accordian-header" id="headingTwo">
               <a
                 class="text-left collapsed Accordian_link"
                 data-toggle="collapse"
                 href="#pemantauan"
               >
                 <div class="d-flex sidebar_icon_Container">
                   <div class="sidebar_icon_right_content">
                     <div class="d-flex sb_contents">
                       <p>PEMANTAUAN DAN PENILAIAN PROJEK</p>
                       <div>
                         <img
                           src="{{ asset('assets/images/down arrow.png') }}"
                           class="d_arrow"
                           alt="d_arrow"
                         />
                       </div>
                     </div>
                   </div>
                 </div>
               </a>
             </div>
             <div
               id="pemantauan"
               class="collapse accordian_collapse_list"
               aria-labelledby="headingTwo"
               data-parent="#accordionParent"
             >
               <ul class="">
                 <li><a href="#">Contoh</a></li>
                 <li><a href="#">Contoh</a></li>
                 <li><a href="#">Contoh</a></li>
               </ul>
             </div>
           </div>
         </li>
         <li class="accordian_content d-flex">
           <div class="sidebar_icon">
             <img src="{{ asset('assets/images/Vector.png') }}" alt="Vector" />
           </div>
           <div class="accordian_single_list">
             <div class="Accordian-header" id="headingTwo">
               <a
                 class="text-left collapsed Accordian_link"
                 data-toggle="collapse"
                 href="#kontrak"
               >
                 <div class="d-flex sidebar_icon_Container">
                   <div class="sidebar_icon_right_content">
                     <div class="d-flex sb_contents">
                       <p>KONTRAK</p>
                       <div>
                         <img
                           src="{{ asset('assets/images/down arrow.png') }}"
                           class="d_arrow"
                           alt="d_arrow"
                         />
                       </div>
                     </div>
                   </div>
                 </div>
               </a>
             </div>
             <div
               id="kontrak"
               class="collapse accordian_collapse_list"
               aria-labelledby="headingTwo"
               data-parent="#accordionParent"
             >
               <ul class="">
                 <li><a href="#">Contoh</a></li>
                 <li><a href="#">Contoh</a></li>
                 <li><a href="#">Contoh</a></li>
               </ul>
             </div>
           </div>
         </li>
         <li class="accordian_content d-flex">
           <div class="sidebar_icon">
             <img src="{{ asset('assets/images/Vector-6.png') }}" alt="Vector" />
           </div>
           <div class="accordian_single_list">
             <div class="Accordian-header" id="headingTwo">
               <a
                 class="text-left collapsed Accordian_link"
                 data-toggle="collapse"
                 href="#perunding"
               >
                 <div class="d-flex sidebar_icon_Container">
                   <div class="sidebar_icon_right_content">
                     <div class="d-flex sb_contents">
                       <p>PERUNDING</p>
                       <div>
                         <img
                           src="{{ asset('assets/images/down arrow.png') }}"
                           class="d_arrow"
                           alt="d_arrow"
                         />
                       </div>
                     </div>
                   </div>
                 </div>
               </a>
             </div>
             <div
               id="perunding"
               class="collapse accordian_collapse_list"
               aria-labelledby="headingTwo"
               data-parent="#accordionParent"
             >
               <ul class="">
                 <li><a href="#">Contoh</a></li>
                 <li><a href="#">Contoh</a></li>
                 <li><a href="#">Contoh</a></li>
               </ul>
             </div>
           </div>
         </li>
         <li class="accordian_content d-flex">
           <div class="sidebar_icon">
             <img src="{{ asset('assets/images/Vector-2.png') }}" alt="Vector" />
           </div>
           <div class="accordian_single_list">
             <div class="Accordian-header" id="headingTwo">
               <a
                 class="text-left collapsed Accordian_link"
                 data-toggle="collapse"
                 href="#value_management"
               >
                 <div class="d-flex sidebar_icon_Container">
                   <div class="sidebar_icon_right_content">
                     <div class="d-flex sb_contents">
                       <p>Value Management</p>
                       <div>
                         <img
                           src="{{ asset('assets/images/down arrow.png') }}"
                           class="d_arrow"
                           alt="d_arrow"
                         />
                       </div>
                     </div>
                   </div>
                 </div>
               </a>
             </div>
             <div
               id="value_management"
               class="collapse accordian_collapse_list"
               aria-labelledby="headingTwo"
               data-parent="#accordionParent"
             >
               <ul class="">
                 <li><a href="#">Contoh</a></li>
                 <li><a href="#">Contoh</a></li>
                 <li><a href="#">Contoh</a></li>
               </ul>
             </div>
           </div>
         </li>
         <li class="accordian_content d-flex">
           <div class="sidebar_icon">
             <img src="{{ asset('assets/images/Vector-5.png') }}" alt="Vector" />
           </div>
           <div class="accordian_single_list">
             <div class="Accordian-header" id="headingTwo">
               <a
                 class="text-left collapsed Accordian_link"
                 data-toggle="collapse"
                 href="#notice"
               >
                 <div class="d-flex sidebar_icon_Container">
                   <div class="sidebar_icon_right_content">
                     <div class="d-flex sb_contents">
                       <p>Notice of Change</p>
                       <div>
                         <img
                           src="{{ asset('assets/images/down arrow.png') }}"
                           class="d_arrow"
                           alt="d_arrow"
                         />
                       </div>
                     </div>
                   </div>
                 </div>
               </a>
             </div>
             <div
               id="notice"
               class="collapse accordian_collapse_list"
               aria-labelledby="headingTwo"
               data-parent="#accordionParent"
             >
               <ul class="">
                 <li><a href="#">Contoh</a></li>
                 <li><a href="#">Contoh</a></li>
                 <li><a href="#">Contoh</a></li>
               </ul>
             </div>
           </div>
         </li>
         <li class="accordian_content d-flex">
           <div class="sidebar_icon">
             <img src="{{ asset('assets/images/Vector-7.png') }}" alt="Vector" />
           </div>
           <div class="accordian_single_list">
             <div class="Accordian-header" id="headingTwo">
               <a
                 class="text-left collapsed Accordian_link"
                 data-toggle="collapse"
                 href="#rolling_plan"
               >
                 <div class="d-flex sidebar_icon_Container">
                   <div class="sidebar_icon_right_content">
                     <div class="d-flex sb_contents">
                       <p>
                         PERMOHONAN PERUNTUKAN DI LUAR ROLLING PLAN (RP)
                       </p>
                       <div>
                         <img
                           src="{{ asset('assets/images/down arrow.png') }}"
                           class="d_arrow"
                           alt="d_arrow"
                         />
                       </div>
                     </div>
                   </div>
                 </div>
               </a>
             </div>
             <div
               id="rolling_plan"
               class="collapse accordian_collapse_list"
               aria-labelledby="headingTwo"
               data-parent="#accordionParent"
             >
               <ul class="">
                 <li><a href="#">Contoh</a></li>
                 <li><a href="#">Contoh</a></li>
                 <li><a href="#">Contoh</a></li>
               </ul>
             </div>
           </div>
         </li>
         <li class="accordian_content d-flex">
           <div class="sidebar_icon">
             <img src="{{ asset('assets/images/Vector-8.png') }}" alt="Vector" />
           </div>
           <div class="accordian_single_list">
             <div class="Accordian-header" id="headingTwo">
               <a
                 class="text-left collapsed Accordian_link"
                 data-toggle="collapse"
                 href="#laporan"
               >
                 <div class="d-flex sidebar_icon_Container">
                   <div class="sidebar_icon_right_content">
                     <div class="d-flex sb_contents">
                       <p>PENJANAAN LAPORAN</p>
                       <div>
                         <img
                           src="{{ asset('assets/images/down arrow.png') }}"
                           class="d_arrow"
                           alt="d_arrow"
                         />
                       </div>
                     </div>
                   </div>
                 </div>
               </a>
             </div>
             <div
               id="laporan"
               class="collapse accordian_collapse_list"
               aria-labelledby="headingTwo"
               data-parent="#accordionParent"
             >
               <ul class="">
                 <li><a href="#">Contoh</a></li>
                 <li><a href="#">Contoh</a></li>
                 <li><a href="#">Contoh</a></li>
               </ul>
             </div>
           </div>
         </li>
       </ul>
       <!-- accordion ends -->
     </div>
   </div>
 </div>

 <!-- side_bar_Container Ends -->

 <script>
let round = document.querySelector(".round");
let overlay_sidebar = document.querySelector("body.overlay_sidebar");
// sidebar overlay
if (overlay_sidebar) {
  let toggler_img = document.querySelector(".toggler_menu .round");
  let toggler_round = document.querySelector(".toggler_menu img");

  let toggler = document.querySelectorAll(".toggler ,.toggler_menu");
  console.log(toggler);
  toggler.forEach((toggler) => {
    toggler.addEventListener("click", () => {
      console.log(toggler);
      side_bar_Container.classList.toggle("toggle_sidebar");
      toggler_img.classList.toggle("d-none");
      toggler_round.classList.toggle("d-none");
    });
  });
}
 </script>