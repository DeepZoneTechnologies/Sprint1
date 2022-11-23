<style>
.close{
    text-align: end !important;
}

span.error {
    color:red;
}
label.active_button {
    background-color: #0acf97;
    padding-left: 16px;
    padding-right: 16px;
    padding-top: 4px;
    padding-bottom: 4px;
    color: white;
    width: 65px;
    margin-left:45%;
    margin-bottom:25px;
}
label.in_active_button {
    background-color: #fa5d7c;
    padding-top: 5px;
    padding-bottom: 5px;
    color: white;
    width: 92px;
    margin-left:40%;
    margin-bottom:25px;
}
img#gambar_image {
    width: 96%!important;
    height: 88px !important;
}
 .page-title-right{
        font-size: 18px !important;
    }
    .Mainbody_conatiner .Mainbody_content .userlist_container .userlist_content .userlist_content_header .userlist_content_header_left .iconer {
    background-color: #fff0d7;
    padding: 0.4rem 0.4rem;
    border: 0.2rem;
}
</style>
@extends('layouts.main.master')
   @section('content_main')
<?php header('Access-Control-Allow-Origin: *'); ?>

    <!-- Mainbody_conatiner Starts -->
    <div class="Mainbody_conatiner user_profile">
        <div class="Mainbody_content mtop pbottom">
          <div class="Mainbody_content_nav_header d-flex">
            <h4>Profil Pengguna</h4>
            <ul class="path_nav">
              <li>
                <a href="#"
                  ><img
                    src="{{ asset('assets/images/Vector-10.png') }}"
                    class="globe"
                    alt="globe"
                  />
                  Geo-board
                  <img
                    class="arrow_nav"
                    src="{{ asset('assets/images/arroew.png') }}"
                    alt="arroew"
                  />
                </a>
              </li>
              <li>
                <a href="#">
                  Pentadbir
                  <img
                    class="arrow_nav"
                    src="{{ asset('assets/images/arroew.png') }}"
                    alt="arroew"
                /></a>
              </li>
              <li><a href="#" class="active">Profil Pengguna</a></li>
            </ul>
          </div>
          <div class="profile_view_parent_container">
            <div class="profile_view_left_container">
              <div class="user_status_container">
                <div class="user_status_header d-flex">
                  <div class="ml-auto">
                    <label class="switch">
                      <input id="active_check" disabled  type="checkbox" checked />
                      <span class="slider round"></span>
                    </label>
                  </div>
                </div>
                <div class="user_status_body">
                  <div class="user_profile_img_container">
                    <div class="user_profile_img">
                    <img src="{{ asset('assets/user_default.jpg') }}" id="gambar_image" class="border w-25 align-self-center rounded-circle" alt="...">
                    </div>
                    <button class="cam">
                      <img src="{{ asset('dashboard/assets/images/cam.png') }}" alt="cam" />
                    </button>
                  </div>
                  <h3><label id="nama_user"></label></h3>
                  <p><label id="user_data_type"></label></p>
                  <label class="active_button" id="active_label">Aktif</label>
                  <label class="in_active_button" id="inactive_label">Tidak Aktif</label>
                  <p id="jawatan_text"></p>
                  <p id="jabatan_text"></p>
                  <p id="bahagian_text"></p>
                </div>
              </div>
              <div class="user_role_container">
                <div class="user_role_header">
                  <div class="user_role_header_left d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <img
                        src="{{ asset('dashboard/assets/images/man_hat.png') }}"
                        alt="man_hat"
                        class="man_icon"
                      />
                      <h4 class="">PERANAN</h4>
                    </div>
                    <button
                      class="ml-auto"
                      data-toggle="modal"
                      data-target="#add_role_modal"
                    >
                      <img
                        src="{{ asset('dashboard/assets/images/add_plus.png') }}"
                        alt="add_plus"
                        class=""
                      />
                      Peranan
                    </button>
                  </div>
                  <div class="user_role_content_container">
                    <div class="user_role_content d-flex">
                      <p>Pengguna JUPEM</p>
                      <button>
                        <img src="{{ asset('dashboard/assets/images/minus.png') }}" alt="minus" />
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="profile_view_right_container">
              <div class="profile_view_form_container">
                <div class="profile_view_form_header d-flex">
                  <div class="d-flex align-items-center">
                    <img
                      src="{{ asset('dashboard/assets/images/profiler.png') }}"
                      alt="profiler"
                      class="man_icon"
                    />
                    <h4 class="">PROFIL</h4>
                  </div>
                  <button class="ml-auto">
                    <img
                      src="{{ asset('dashboard/assets/images/printer.png') }}"
                      alt="add_plus"
                      class=""
                    />
                  </button>
                </div>
                <div class="profile_view_form_content">
                  <form action="#" method="post" id="profile_view_form" name="myform">
                      <input type="hidden" id="api_url" value={{env('API_URL')}}>
                      <input type="hidden" id="token" value={{env('TOKEN')}}>
                      <input type="hidden" id="user_type" value="table_users">
                      <input type="hidden" id="user_id" name="id" value="{{$user_id}}">
                    <div class="input_container_row">
                      <div class="form-group input_content">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="name" name="nama" placeholder="">
                        <span class="error" id="error_nama"></span>
                      </div>
                      <div class="form-group input_content">
                        <label for="Kad_Pengenalan">No. Kad Pengenalan</label>
                        <input type="text" class="form-control" id="no_kad_pengenalan" name="no_kad_pengenalan" placeholder="">
                        <span class="error" id="error_no_kad_pengenalan"></span>
                      </div>
                    </div>
                    <div class="input_container_row">
                      <div class="form-group input_content">
                        <label for="No_Telefon">No. Telefon</label>
                        <input type="text" class="form-control" id="no_telefon" name="no_telefon" placeholder="">
                        <span class="error" id="error_no_telefon"></span>
                      </div>
                      <div class="form-group input_content">
                        <label for="Emel_Rasmi">Emel Rasmi</label>
                        <input type="text" class="form-control" id="emel_rasmi" name="emel_rasmi" placeholder="">
                        <span class="error" id="error_emel_rasmi"></span>
                      </div>
                    </div>
                    <div class="input_container_row">
                      <div class="form-group input_content">
                        <label for="Jawatan">Jawatan</label>
                        <select id="Jawatan" class="form-control" name="Jawatan">
                        </select>
                        <span class="error" id="error_Jawatan"></span>
                      </div>
                      <div class="form-group input_content">
                        <label for="Gred">Gred</label>
                        <select id="gred" class="form-control" name="gred">
                        </select>
                        <span class="error" id="error_gred"></span>
                      </div>
                    </div>
                    <div class="form-group select_content">
                      <label for="Kementerian">Kementerian</label>
                      <select id="kementerian" name="kementerian" class="form-control">
                        <option value="1">Kementerian Alam Sekitar dan Air (KASA)</option>
                        <option value="2">Kementerian Tenaga dan Sumber Asli (KeTSA)</option>
                      </select>
                    </div>
                    <div class="input_container_row">
                      <div class="form-group input_content">
                        <label for="Jabatan">Jabatan</label>
                        <select id="Jabatan" class="form-control" name="Jabatan">
                        </select>
                        <span class="error" id="error_Jabatan"></span>
                        </select>
                      </div>

                      <div class="form-group input_content">
                        <label for="Bahagian">Bahagian</label>
                        <select id="bahagian" class="form-control" name="bahagian">
                        </select>
                        <span class="error" id="error_bahagian"></span>
                      </div>
                     
                    </div>
                    <div class="input_container_row">
                      <div class="form-group input_content">
                        <label for="negeri">Negeri</label>
                        <select id="negeri" class="form-control" name="negeri">
                        </select>
                        <span class="error" id="error_negeri"></span>
                      </div>

                      <div class="form-group input_content">
                        <label for="daerah">Daerah</label>
                        <select id="daerah" class="form-control" name="daerah">
                        <select>
                        <span class="error" id="error_daerah"></span>
                      </div>
                     
                    </div>
                    <div class="input_document_container">
                      <div class="input_document_left_content">
                        <div class="form-group input_content">
                          <label for="Status">Status</label>
                          <select id="inputState" class="form-control" name="status">
                                    <option value="0">Tidak Aktif</option>
                                    <option value="1">Aktif</option>                                
                          </select>
                        </div>
                        <div class="form-group input_content" id="doku_sec" style="display:none !important;">
                          <label for="Catatan">Dokumen Sokongan</label>
                          <div class="document d-flex">
                            <div class="pdf">
                              <img src="{{ asset('dashboard/assets/images/pdf.png') }}" alt="pdf" onClick="downloadDoc('{{$user_id}}','{{$temp_type}}')"/>
                            </div>
                            <div class="file_details">
                              <p id="document_name"></p>
                              <p id="document_size"></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="input_document_right_content">
                        <div class="form-group input_content">
                          <label for="Catatan">Catatan</label>
                          <textarea class="form-control" rows="5" id="catatan" name="catatan"></textarea>
                          <span class="error" id="error_catatan"></span>                         
                        </div>
                      </div>
                    </div>
                    <div class="input_container_row"></div>
                    <div class="profile_view_form_btn_container">
                      <button type="button" class="back">Kembali</button>
                      <button type="button" class="save" id="save">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="user_profile_footer m-0 P-3">2022 NPIS-JPS</p>

        <!-- HEADER Section Ends -->
      </div>
      <!-- Mainbody_conatiner Starts -->
    </div>
    <section>
      <div class="add_role_modal_container">
        <div
          class="modal fade"
          id="add_role_modal"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true"
        >
          <div
            class="modal-dialog modal-dialog-centered add_role_modal_dialog"
            role="document"
          >
            <div class="modal-content add_role_modal_content">
              <div class="add_role_modal_header d-flex justify-content-between">
                <div class="d-flex align-items-center">
                  <img src="{{ asset('dashboard/assets/images/add_plus.png') }}" alt="add_plus" />
                  <h5>Tambah Peranan</h5>
                </div>

                <button type="button" data-dismiss="modal" aria-label="Close">
                  <img src="{{ asset('dashboard/assets/images/close_img.png') }}" alt="close" />
                </button>
              </div>
              <div class="modal-body add_role_modal_body">
                <div class="d-flex configuration">
                  <button class="ml-auto">konfigurasi peranan</button>
                </div>
                <table class="table add_role_modak_table">
                  <thead>
                    <tr>
                      <th>Peranan</th>
                      <th class="text-center">Pilih</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Pengurusan Atasan</td>
                      <td><input type="checkbox" class="m-auto d-block" /></td>
                      <td>Pengurusan Atasan Kementerian</td>
                    </tr>
                    <tr>
                      <td>Peneyelaras Projek</td>
                      <td><input type="checkbox" class="m-auto d-block" /></td>
                      <td>Peneyelaras Projek Jabatan Bukan Teknik</td>
                    </tr>
                    <tr>
                      <td>PIC Projek</td>
                      <td><input type="checkbox" class="m-auto d-block" /></td>
                      <td>PIC Projek Bukan Teknik</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="add_role_modal_footer text-center">
                <button
                  data-toggle="modal"
                  data-target="#add_role_sucess_modal"
                  data-dismiss="modal"
                >
                  Simpan
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- add role success  Modal starts -->

    <section>
      <div class="add_role_sucess_modal_container">
        <div
          class="modal fade"
          id="add_role_sucess_modal"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true"
        >
          <div
            class="modal-dialog modal-dialog-centered add_role_sucess_modal_dialog"
            role="document"
          >
            <div class="modal-content add_role_sucess_modal_content">
              <div class="modal-body add_role_sucess_modal_body">
                <div class="add_role_sucess_modal_header text-end">
                  <button class="ml-auto" data-dismiss="modal">
                    <img src="{{ asset('dashboard/assets/images/close_img.png') }}" alt="close_img" />
                  </button>
                </div>
                <div class="add_role_sucess_modal_body_Content" id="user_pop-up" style="display:none;">
                  <h3>Maklumat anda berjaya disimpan</h3>
                  <div class="text-center">
                    <button data-dismiss="modal" class="tutup">Tutup</button>
                  </div>
                </div>

                <div class="add_role_sucess_modal_body_Content" id="tmp_user_pop-up" style="display:none;">
                  <h3>Pengesahan pengguna telah bergaja</h3>
                  <div class="text-center">
                    <button data-dismiss="modal" class="tutup">Tutup</button>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection

@section('scripts')
<script>

function downloadDoc(id,type) { 
      const api_url = document.getElementById("api_url").value;  console.log(api_url);
       const api_token = "Bearer "+ document.getElementById("token").value;  console.log(api_token);
       update_user_api = api_url+"api/user/user/download/";
       data_update = {'user_id':id, 'type': type};
       var jsonString = JSON.stringify(data_update);
       $.ajaxSetup({
         headers: {
                    "Content-Type": "application/json",
                    "Authorization": api_token,
                    }
        });
       $.ajax({
            type: 'GET',
            url: update_user_api,
            data: {'user_id':id, 'type': type} , 
            //dataType:"json",
            xhr: function () {
                    var xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 2) {
                            if (xhr.status == 200) {
                                xhr.responseType = "blob";
                            } else {
                                xhr.responseType = "text";
                            }
                        }
                    };
                    return xhr;
                },
            //contentType: "application/pdf",
            success: async function(data) { 
               console.log('downlaoded')
               console.log(data)
               //Convert the Byte Data to BLOB object.
               var blob = new Blob([data], { type: "application/octetstream" });
                  var url = window.URL || window.webkitURL;
                  link = url.createObjectURL(blob);
                  var a = $("<a />");
                  a.attr("download", 'document.pdf');
                  a.attr("href", link);
                  $("body").append(a);
                  a[0].click();
                  $("body").remove(a);
            }
        });
    }

$(document).ready(function() {
	const api_url = document.getElementById("api_url").value;  console.log(api_url);
    const api_token = "Bearer "+ document.getElementById("token").value;  console.log(api_token);

	$('#show-me').hide();   
	$('input[type="radio"]').click(function() { //alert($(this).attr('id'));
		if($(this).attr('id') == 'agensi_luar') {
			 $('#show-me').show();           
		}
 
		else {
			 $('#show-me').hide();   
		}
	});

    $.ajaxSetup({
         headers: {
                "Content-Type": "application/json",
                "Authorization": api_token,
                }
    });
	// var dropDown = document.getElementById("kementerian");
    // $.ajax({
    //     type: "GET",
    //     url: api_url+"GetKementerian/",
    //     dataType: 'json',
    //     success: function (result) { console.log(result)
    //         if (result) {
    //             $.each(result, function (key, item) {
	// 				var opt = item.id;
	// 				var el = document.createElement("option");
	// 				el.textContent = item.Name;
	// 				el.value = opt;
	// 				dropDown.appendChild(el);
    //             })
    //         }
    //         else {
    //             $.Notification.error(result.Message);
    //         }
    //     }
    // });

	var JabatandropDown =  document.getElementById("Jabatan");
    $.ajax({
        type: "GET",
        url: api_url+"api/lookup/jabatan/list/",
        dataType: 'json',
        success: function (result) { 
            // console.log(result.data)
            if (result) {
                $.each(result.data, function (key, item) {
					var opt = item.id;
					var el = document.createElement("option");
					el.textContent = item.nama_jabatan;
					el.value = opt;
					JabatandropDown.appendChild(el);
                })
            }
            else {
                $.Notification.error(result.Message);
            }
        }
    });

	var bahagiandropDown =  document.getElementById("bahagian");
    $.ajax({
        type: "GET",
        url: api_url+"api/lookup/bahagian/list/",
        dataType: 'json',
        success: function (result) { 
            // console.log(result)
            if (result) {
                $.each(result.data, function (key, item) {
					var opt = item.id;
					var el = document.createElement("option");
					el.textContent = item.nama_bahagian;
					el.value = opt;
					bahagiandropDown.appendChild(el);
                })
            }
            else {
                $.Notification.error(result.Message);
            }
        }
    });

	var negeridropDown =  document.getElementById("negeri");
    $.ajax({
        type: "GET",
        url: api_url+"api/lookup/negeri/list",
        dataType: 'json',
        success: function (result) { 
            // console.log(result)
            if (result) {
                $.each(result.data, function (key, item) {
					var opt = item.id;
					var el = document.createElement("option");
					el.textContent = item.nama_negeri;
					el.value = opt;
					negeridropDown.appendChild(el);
                })
            }
            else {
                $.Notification.error(result.Message);
            }
        }
    });

	var daerahdropDown =  document.getElementById("daerah");
    $.ajax({
        type: "GET",
        url: api_url+"api/lookup/daerah/list",
        dataType: 'json',
        success: function (result) { 
            // console.log(result)
            if (result) {
                $.each(result.data, function (key, item) {
					var opt = item.id;
					var el = document.createElement("option");
					el.textContent = item.nama_daerah;
					el.value = opt;
					daerahdropDown.appendChild(el);
                })
            }
            else {
                $.Notification.error(result.Message);
            }
        }
    });
    var jawatandropDown =  document.getElementById("Jawatan");
    $.ajax({
        type: "GET",
        url: api_url+"api/lookup/jawatan/list",
        dataType: 'json',
        success: function (result) { 
            // console.log(result)
            if (result) {
                $.each(result.data, function (key, item) {
					var opt = item.id;
					var el = document.createElement("option");
					el.textContent = item.nama_jawatan;
					el.value = opt;
					jawatandropDown.appendChild(el);
                })
            }
            else {
                $.Notification.error(result.Message);
            }
        }
    });

	var greddropDown =  document.getElementById("gred");
    $.ajax({
        type: "GET",
        url: api_url+"api/lookup/gredjawatan/list",
        dataType: 'json',
        success: function (result) { 
            // console.log(result)
            if (result) {
                $.each(result.data, function (key, item) {
					var opt = item.id;
					var el = document.createElement("option");
					el.textContent = item.nama_gred_jawatan;
					el.value = opt;
					greddropDown.appendChild(el);
                })
            }
            else {
                $.Notification.error(result.Message);
            }
        }
    });

    

     var user_id =  {{$user_id}}; console.log(user_id);
     var tmp_user = "{{$temp_type}}"; console.log(tmp_user);
    
    var list_user_api='';
    var update_user_api='';
    var data_update='';
    var kategori = '';
    if(tmp_user!='temp')
    {
         document.getElementById("save").disabled = false;
         list_user_api = api_url+"api/user/details/"+user_id;
         update_user_api = api_url+"api/user/user/update/";
         kategori = 1;
         //data_update = $('#profile_view_form').serialize();
    }
    else
    {
        document.getElementById("save").disabled = true;
        list_user_api = api_url+"api/user/details/temp/"+user_id;
        update_user_api = api_url+"api/user/approval/";
        data_update = {'id':user_id};
        kategori = 2;

    }
    var jsonString = JSON.stringify(data_update);
    console.log(list_user_api)
   //console.log(jsonString);
   
    $.ajax({
        type: "GET",
        url: list_user_api,
        dataType: 'json',
        success: function (result) { 
            console.log(result.data.user);
            
            if (result) { 
                var phone_no=result.data.user.no_telefon
                var no_telefon = phone_no.replace(/\D+/g, '').replace(/(\d{3})(\d{3})(\d{4})/, '$1-$2-$3');;
                // console.log(no_telefon);
                //console.log(document.getElementById("nama").innerHTML);
                document.getElementById("name").value= result.data.user.name;
                document.getElementById("nama_user").innerHTML= result.data.user.name;

                document.getElementById("jawatan_text").innerHTML= result.data.user.jawatan.nama_jawatan;
                document.getElementById("jabatan_text").innerHTML= result.data.user.jabatan.nama_jabatan;
                document.getElementById("bahagian_text").innerHTML= result.data.user.bahagian.nama_bahagian;

                document.getElementById("no_telefon").value=no_telefon;
                document.getElementById("emel_rasmi").value= result.data.user.email;
                document.getElementById("Jawatan").value= result.data.user.jawatan_id;
                document.getElementById("gred").value= result.data.user.gred_jawatan_id;
                //document.getElementById("kementerian").value= result.data.kementerian_id;
                document.getElementById("Jabatan").value= result.data.user.jabatan_id;
                document.getElementById("bahagian").value= result.data.user.bahagian_id;
                document.getElementById("negeri").value= result.data.user.negeri_id;
                document.getElementById("daerah").value= result.data.user.daerah_id;
                document.getElementById("catatan").value= result.data.user.catatan;
                document.getElementById("no_kad_pengenalan").value= result.data.user.no_ic;
                

                if(result.data.user.status_pengguna_id==1 && result.data.user.row_status==1)
                {
                    document.getElementById("inputState").value= 1;
                    document.getElementById("active_label").style.display = 'block';
                    document.getElementById("inactive_label").style.display = 'none';
                    
                }
                else
                {
                    document.getElementById("inputState").value= 0;
                    document.getElementById("inactive_label").style.display = 'block';
                    document.getElementById("active_label").style.display = 'none';
                    // $("#active_check").removeAttr(checked);
                    document.getElementById("active_check").removeAttribute("checked");
                }

                if(result.data.user.jenis_pengguna_id!=1)
                {
                    document.getElementById("doku_sec").style.display = 'block';
                    document.getElementById("user_data_type").innerHTML = "Pengguna Agensi Luar";
                }
                 else 
                { 
                    document.getElementById("doku_sec").style.display = 'none !important';
                    document.getElementById("user_data_type").innerHTML = "Pentadbir";
                }

                if(result.data.user.media.length==1)
                {
                  if(result.data.user.media[0].collection_name=="document")
                  { 
                    var sample2=result.data.user.media[0].original_url; console.log(sample2);
                    var docu_url = sample2.substring(sample2.indexOf('storage')); console.log(docu_url);
                    //document.getElementById("document_url").href = api_url+docu_url;
                    document.getElementById("document_name").innerHTML = result.data.user.media[0].file_name;
                    var fSExt = new Array('Bytes', 'KB', 'MB', 'GB');
                      fSize = result.data.user.media[0].size; i=0;while(fSize>900){fSize/=1024;i++;}
                      docu_size = (Math.round(fSize*100)/100)+' '+fSExt[i]; 
                    document.getElementById("document_size").innerHTML = docu_size;
                  }
                  else
                  { 
                    var sample=result.data.user.media[0].original_url; console.log(sample);
                    var substr = sample.substring(sample.indexOf('storage')); console.log(substr);
                    document.getElementById("gambar_image").src = api_url+substr;
                    document.getElementById("document_name").innerHTML = "No pdf";

                  }
                  
                }
                else if(result.data.user.media.length==2)
                {
                  var sample=result.data.user.media[1].original_url; console.log(sample);
                  var image_url = sample.substring(sample.indexOf('storage')); console.log(image_url);
                  document.getElementById("gambar_image").src = api_url+image_url;

                  var sample2=result.data.user.media[0].original_url; console.log(sample2);
                  var docu_url = sample2.substring(sample2.indexOf('storage')); console.log(docu_url);
                  //document.getElementById("document_url").href = api_url+docu_url;
                  document.getElementById("document_name").innerHTML = result.data.user.media[0].file_name;
                  var fSExt = new Array('Bytes', 'KB', 'MB', 'GB');
                      fSize = result.data.user.media[0].size; i=0;while(fSize>900){fSize/=1024;i++;}
                      docu_size = (Math.round(fSize*100)/100)+' '+fSExt[i]; 


                  document.getElementById("document_size").innerHTML = docu_size;

                }
                else{
                  document.getElementById("document_name").innerHTML = "No pdf";
                }

            }
            else {

            }
        }
    });

  
    $('.save').click(function(){ console.log(document.myform.nama.value);
        if(!document.myform.nama.value)  { 
			document.getElementById("error_nama").innerHTML="medan nama diperlukan"; 
			document.getElementById("name").focus();
			return false; 
		}
		else{
			document.getElementById("error_nama").innerHTML=""; }
        
            if(!document.myform.no_kad_pengenalan.value)  { 
			document.getElementById("error_no_kad_pengenalan").innerHTML="medan no kad pengenalan diperlukan"; 
			document.getElementById("no_kad_pengenalan").focus();
			return false; 
		}else { document.getElementById("error_no_kad_pengenalan").innerHTML=""; }

        
		if(!document.myform.no_telefon.value)  { 
			document.getElementById("error_no_telefon").innerHTML="medan no telefon diperlukan"; 
			document.getElementById("no_telefon").focus();
			return false; 
		}else{document.getElementById("error_no_telefon").innerHTML="";}

		if(!document.myform.emel_rasmi.value)  { 
			document.getElementById("error_emel_rasmi").innerHTML="medan emel rasmi diperlukan"; 
			document.getElementById("emel_rasmi").focus();
			return false; 
		}else{ document.getElementById("error_emel_rasmi").innerHTML="";}

        if(!document.myform.Jabatan.value)  { 
			document.getElementById("error_Jabatan").innerHTML="sila pilih Jabatan"; 
			document.getElementById("Jabatan").focus();
			return false; 
		}else{document.getElementById("error_Jabatan").innerHTML="";}

        if(!document.myform.gred.value)  { 
			document.getElementById("error_gred").innerHTML="sila pilih gred"; 
			document.getElementById("gred").focus();
			return false; 
		}else{document.getElementById("error_gred").innerHTML="";}

        if(!document.myform.Jawatan.value)  { 
			document.getElementById("error_Jawatan").innerHTML="sila pilih Jawatan"; 
			document.getElementById("Jawatan").focus();
			return false; 
		}else{document.getElementById("error_Jawatan").innerHTML="";}

      if(!document.myform.bahagian.value)  { 
			document.getElementById("error_bahagian").innerHTML="sila pilih bahagian"; 
			document.getElementById("bahagian").focus();
			return false; 
		}else{document.getElementById("error_bahagian").innerHTML="";}

      if(!document.myform.negeri.value)  { 
			document.getElementById("error_negeri").innerHTML="sila pilih negeri"; 
			document.getElementById("negeri").focus();
			return false; 
		}else{document.getElementById("error_negeri").innerHTML="";}

        if(!document.myform.daerah.value)  { 
			document.getElementById("error_daerah").innerHTML="sila pilih daerah"; 
			document.getElementById("daerah").focus();
			return false; 
		}else{document.getElementById("error_daerah").innerHTML="";}

        if(!document.myform.catatan.value)  { 
			document.getElementById("error_catatan").innerHTML="medan catatan diperlukan"; 
			document.getElementById("catatan").focus();
			return false; 
		}else{document.getElementById("error_catatan").innerHTML="";}

    var formData = new FormData();
		formData.append('nama', document.myform.nama.value);
		formData.append('no_kod_penganalan', document.myform.no_kad_pengenalan.value);
		formData.append('email', document.myform.emel_rasmi.value);
		formData.append('kategori',kategori);
		formData.append('no_telefon', document.myform.no_telefon.value);
		formData.append('jawatan', document.myform.Jawatan.value);
		formData.append('jabatan', document.myform.Jabatan.value);
		formData.append('gred', document.myform.gred.value);
		// formData.append('kementerian', document.myform.kementerian.value);
		formData.append('bahagian', document.myform.bahagian.value);
		formData.append('negeri', document.myform.negeri.value);
		formData.append('daerah', document.myform.daerah.value);
		formData.append('catatan', document.myform.catatan.value);

    console.log(formData)

        $.ajax({
            type: 'POST',
            url: update_user_api,
            data: FormData,
            success: function(response) { console.log(response.code)
                if(response.code=='200'){
                    $("#add_role_sucess_modal").modal('show');
                    if(tmp_user!='temp')
                    {
                        document.getElementById("user_pop-up").style.display = 'block';
                        document.getElementById("tmp_user_pop-up").style.display = 'none';
                    }
                    else
                    {
                        document.getElementById("user_pop-up").style.display = 'none';
                        document.getElementById("tmp_user_pop-up").style.display = 'block';
                    }
                }
            }
        });
    });
    $('.tutup').click(function(){
        $("#add_role_sucess_modal").modal('hide');
        if(tmp_user=='temp')
        {
             window.location.href = "{{ url('/pengasahan-pengguna-baharu')}}";
        }
        else
        {
            window.location.href = "{{ url('/users')}}";
        }
    });

    $('.back').click(function(){
        $("#add_role_sucess_modal").modal('hide');
        if(tmp_user=='temp')
        {
             window.location.href = "{{ url('/pengasahan-pengguna-baharu')}}";
        }
        else
        {
            window.location.href = "{{ url('/users')}}";
        }
    });
});
</script>
@endsection

