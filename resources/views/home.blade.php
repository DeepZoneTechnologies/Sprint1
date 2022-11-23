@extends('layouts.dashboard.master_dashboard')

@section('content_dashboard')
<style>
  
.jpsBtn{
    border-bottom-width: 3.5px !important;
    border-bottom-color: #39AFD1 !important;
    border-left: none !important;
    border-right: none !important;
    border-top:none !important;
    color: #38afd1 !important;
}

.nonjpsBtn:focus{
    border-bottom-width: 3.5px !important;
    border-bottom-color: #39AFD1 !important;
    border-left: none !important;
    border-right: none !important;
    border-top:none !important;
    color: #38afd1 !important;
}
.jpsBtn:focus{
    border-bottom-width: 3.5px !important;
    border-bottom-color: #39AFD1 !important;
    border-left: none !important;
    border-right: none !important;
    border-top:none !important;
    color: #38afd1 !important;
}


.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
    color: white !important;
    /* font-weight: 900 !important; */
    border: 1px solid #38afd1 !important;
    border-radius: 50%;
    background-color: #38afd1 !important;
    background:#38afd1 !important;

}



.dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing {
    color:gray !important;
}
.dataTables_wrapper .dataTables_paginate{
    color: white !important;
}
input:checked~.custom-control-label::before {
    background-color: #0acd95 !important;
    border-color: #0acd95 !important;
}

.custom-switch .custom-control-label::before {
    left: -2.25rem !important;
    width: 3rem !important;
    height: 25px !important;
    pointer-events: all !important;
    border-radius: 1rem !important;
}

.custom-switch .custom-control-input:checked~.custom-control-label::after {
    background-color: #fff !important;
    -webkit-transform: translateX(0.75rem) !important;
    transform: translateX(1.75rem) !important;
}

.custom-switch .custom-control-label::after {
    top: calc(0.37rem + 2px) !important;
    left: calc(-2.25rem + 2px) !important;
    width: calc(1.2rem - 4px) !important;
    height: calc(1.2rem - 4px) !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button {
    min-width: 0.5em !important;
    padding: 0.5em 1em !important;
    margin-left: 0px !important;
}
/* .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
  background: none;
  color: black!important;
  border-radius: 50%;
} */
#jps{
    font-size: 1.2rem !important;
    font-weight: 500 !important;
}
#nonjps{
    font-size: 1.2rem !important;
    font-weight: 500 !important;
}

th{
    color: #656b9b !important;
}
td{
    color: #8b8c96 !important;
    font-size: 0.85rem !important;
}
tr{
    font-size: 0.85rem !important; 
}
table.dataTable thead th, table.dataTable thead td {
    border-bottom: none !important;
}
div.dataTables_wrapper div.dataTables_length label {
    color: gray !important;

    
}
div.dataTables_wrapper div.dataTables_length select {
    width: 70px !important;
    height: 35px !important;
    text-align: center;
    padding: 5px;
    border-radius: 5px;
    display: inline-block;
}
.btn {
    --ct-btn-border-width: 0px !important;
}

#temp_user_length{
  width: 50% !important;
  position: relative;
    top: 33px;
}
#temp_user_filter{
  width: 50% !important;
  position: relative;
    left: 74%;
}

#temp_user_paginate{
  position: relative;
  left: 74%;
  top: -12px;
}
#temp_user_info{
  position: relative;
    top: 9px;
}
#dashboard_thead{

}

</style>
<div class="Mainbody_content mtop">
        <input type="hidden" id="api_url" value={{env('API_URL')}}>
        <input type="hidden" id="app_url" value={{env('APP_URL')}}>
        <input type="hidden" id="token" value={{env('TOKEN')}}>
          <div class="Mainbody_content_nav_header d-flex">
            <ul class="path_nav ml-auto">
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
                <a href="#" class="active"> Pentadbir </a>
              </li>
            </ul>
          </div>
          <div class="dashboard_content_container">
            <div class="box_container row">
              <div class="col-3 box_child">
                <div class="box_content">
                  <h3 id="userCount">2,064</h3>

                  <p>Pengguna Berdaftar</p>
                </div>
              </div>
              <div class="col-3 box_child">
                <div class="box_content">
                  <h3 id="usersJps">1,738</h3>
                  <p>Pengguna JPS</p>
                </div>
              </div>
              <div class="col-3 box_child">
                <div class="box_content">
                  <h3 id="usersAgensi">326</h3>
                  <p >Pengguna Agensi</p>
                </div>
              </div>
              <div class="col-3 box_child">
                <div class="box_content">
                  <h3 id="usersTemp">20</h3>
                  <p>Permohonan Baharu</p>
                </div>
              </div>
            </div>
            <!-- dashboard_chart_table_container starts -->
            <div class="dashboard_chart_table_container">
              <div class="dashboard_chart_detail_container">
                <div class="dashboard_chart">
                  <h6>STATISTIK PELAWAT</h6>
                  <div id="bar_chart"></div>
                </div>
                <div class="dashboard_detail_container">
                  <h3>pengguna atas talian</h3>
                  <div class="dashboard_detail_content_container">
                    <div class="dashboard_detail_content d-flex">
                      <p class="profile">
                        <span class="active"></span>
                        <img src="{{ asset('assets/images/Admin pic.png') }}" alt="" />
                      </p>
                      <div class="details">
                        <h4>Fakhrul Bin Razi</h4>
                        <p>Pegawai Technologi Maklumat</p>
                      </div>
                    </div>
                    <div class="dashboard_detail_content d-flex">
                      <p class="profile">H</p>
                      <div class="details">
                        <h4>Fakhrul Bin Razi</h4>
                        <p>Pegawai Technologi Maklumat</p>
                      </div>
                    </div>
                    <div class="dashboard_detail_content d-flex">
                      <p class="profile">
                        <span class="active"></span>
                        <img src="{{ asset('assets/images/Admin pic.png') }}" alt="" />
                      </p>
                      <div class="details">
                        <h4>Fakhrul Bin Razi</h4>
                        <p>Pegawai Technologi Maklumat</p>
                      </div>
                    </div>
                    <div class="dashboard_detail_content d-flex">
                      <p class="profile"><span class="active"></span>H</p>
                      <div class="details">
                        <h4>Fakhrul Bin Razi</h4>
                        <p>Pegawai Technologi Maklumat</p>
                      </div>
                    </div>
                    <div class="dashboard_detail_content d-flex">
                      <p class="profile">
                        <span class="active"></span>
                        <img src="{{ asset('assets/images/Admin pic.png') }}" alt="" />
                      </p>
                      <div class="details">
                        <h4>Fakhrul Bin Razi</h4>
                        <p>Pegawai Technologi Maklumat</p>
                      </div>
                    </div>
                    <div class="dashboard_detail_content d-flex">
                      <p class="profile">H</p>
                      <div class="details">
                        <h4>Fakhrul Bin Razi</h4>
                        <p>Pegawai Technologi Maklumat</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="dashboard_table_container">
                <div class="dashboard_table_content">
                  <div class="dashboard_table_header">
                    <div class="dashboard_table_header_left d-flex">
                      <img src="{{ asset('assets/images/card.png') }}" alt="card" />
                      <h3>SENARAI PERMOHONAN BAHARU</h3>
                    </div>
                  </div>
                  <div class="dashboard_table_holder">
                    <table id="temp_user" class="dashboard_table table table-responsive" width="100%">
                    <thead id="dashboard_thead">
                        <tr>
                           <th width="100%">Nama</th>                           
                           <th width="100%">Emel</th> 
                           <th width="100%">Jabatan</th>
                           <th width="100%">Bahagian</th> 
                           <th width="100%">Jawatan</th>                            
                           <th width="100%">Dokumen Sokongan</th> 
                           <th width="100%">Tindakan</th>               
                        </tr>
                     </thead>
                      <tbody></tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="user_profile_footer m-0 P-3">2022 © NPIS-JPS</p>
      </div>

      <!-- Mainbody_conatiner Starts -->
    </div>

    <section>
      <div class="container"></div>
    </section>
    @push('scripts')
    <script src="{{ asset('dashboard/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/bootstrap.popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/highcharts.js') }}"></script>

    <script src="{{ asset('dashboard/assets/js/index.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/bootstrap.bundle.min.js') }}"></script>   
    <script type="text/javascript" src="{{ asset('datatables.min.js') }}" defer></script> 
    

    <script>
      
      function loadTempUser(id)
    {  
        var url = '{{ route("user.profile", ["temp",":id"])}}'
        console.log(url)
        url = url.replace(':id', id);        
        window.location.href = url;
    }

    function downloadDoc(id) {
      const api_url = document.getElementById("api_url").value;  console.log(api_url);
       const api_token = "Bearer "+ document.getElementById("token").value;  console.log(api_token);
       update_user_api = api_url+"api/user/user/download/";
       data_update = {'user_id':id, 'type':'temp'};
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
            data: {'user_id':id, 'type': 'temp'} , 
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
 
               //Check the Browser type and download the File.
               // var isIE = false || !!document.documentMode;
               // if (isIE) {
               //    window.navigator.msSaveBlob(blob, fileName);
               // } else {
                  var url = window.URL || window.webkitURL;
                  link = url.createObjectURL(blob);
                  var a = $("<a />");
                  a.attr("download", 'document.pdf');
                  a.attr("href", link);
                  $("body").append(a);
                  a[0].click();
                  $("body").remove(a);
               //}
                //window.location.href = "{{ url('/home')}}";
            }
        });
    }

    function approveTempUser(id)
    {
       //alert("approve");
       const api_url = document.getElementById("api_url").value;  console.log(api_url);
       const api_token = "Bearer "+ document.getElementById("token").value;  console.log(api_token);
       update_user_api = api_url+"api/user/approval/";
       data_update = {'id':id};
       var jsonString = JSON.stringify(data_update);
       $.ajaxSetup({
         headers: {
                    "Content-Type": "application/json",
                    "Authorization": api_token,
                    }
        });
       $.ajax({
            type: 'POST',
            url: update_user_api,
            data: jsonString, 
            success: function(response) { console.log(response.code)
                window.location.href = "{{ url('/home')}}";
            }
        });

    }
    </script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
$(document).ready(function () {   

    const api_url = document.getElementById("api_url").value;  console.log(api_url);
       const api_token = "Bearer "+ document.getElementById("token").value;  console.log(api_token);       
    var jps = {'isJps':1}; 
    var non_jps = {'isJps':0}; 
    // GET request for remote image in node.js
//     const config = {
//     headers: { Authorization: api_token }
// };

const bodyParameters = {
   isJps: 1
};
axios.defaults.headers.common["Authorization"] = api_token
        axios({
        method: 'get',
        url: api_url+"api/user/temp/all/list",
        responseType: 'json'
        })
        .then(function (response) {
            console.log(response)
            var jps_table =$('#temp_user').DataTable({     
              data: response.data.data,
              "language": {
                "lengthMenu": "Papar _MENU_ Entri",
                "zeroRecords": "Tiada rekod dijumpai",
                "info": "Paparan _PAGE_ hingga 10 dari _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": "_INPUT_",
                "searchPlaceholder": "Carian",
                "paginate": {
                "first":      "Awal",
                "last":       "Seterusnya",
                "next":       "Akhir",
                "previous":   "Sebelum"
                }, 
                },
              columnDefs: [
                  {
                      targets:0, // Start with the last
                      render: function ( data, type, row, meta ) {
                          if(type === 'display'){
                              //data=row.name
                              data = '<a value="'+row.id+'" onClick="loadTempUser('+row.id+')" class="text-dark user_name">'+row.name+'</a>';
                          }
                          return data;
                      }
                  },
                  {
                      targets:1, // Start with the last
                      render: function ( data, type, row, meta ) {
                          if(type === 'display'){
                                  data=row.email
                          }
                          return data;
                      }
                  },
                  {
                      targets:2, // Start with the last
                      render: function ( data, type, row, meta ) {
                          if(type === 'display'){
                                  data=row.jabatan.nama_jabatan
                          }
                          return data;
                      }
                  },
                  {
                      targets:3, // Start with the last
                      render: function ( data, type, row, meta ) {
                            // console.log(row.bahagian.nama_bahagian)
                          if(type === 'display'){
                                  data=row.bahagian.nama_bahagian
                          }
                          return data;
                      }
                  },
                  {
                      targets:4, // Start with the last
                      render: function ( data, type, row, meta ) {
                          if(type === 'display'){
                                  data=row.jawatan.nama_jawatan
                          }
                          return data;
                      }
                  },
                  {
                      targets:5, // Start with the last
                      render: function ( data, type, row, meta ) {
                          if(type === 'display'){                           
                           data=''
                           if(row.media.length == 1){
                              data = 
                                 '<img src="assets/images/pdf.png" alt="pdf" onClick="downloadDoc('+row.id+')"/>'
                              
                           }
                              
                          }
                          return data;
                      }
                  },
                  {
                      targets:6, // Start with the last
                      render: function ( data, type, row, meta ) {                          
                          if(type === 'display'){
                              data='<div class="d-flex">'+
                                  '<button class="btn btn-danger text-nowrap">Tidak Lulus</button>'+
                                  '<button class="btn btn-primary" onClick="approveTempUser('+row.id+')">Lulus</button>'+
                              '</div>'
                          }
                          return data;
                      }
                  },                  

              ] , 
              columns: [
                  { data: 'name'},
                  { data: 'email'  },
                  { data: 'jabatan_id'  },          
                  { data: 'bahagian_id'  },
                  { data: 'jawatan_id'  },
                  { data: 'email'  },
                  { data: 'row_status'  },
              ],
              
                 
          });
            //response.data.pipe(fs.createWriteStream('ada_lovelace.jpg'))
        });
      
        axios({
            method: 'get',
            url: api_url+"api/user/dashboard",
            responseType: 'json'
        })
        .then(function (response) {
            console.log(response.data.data)
         document.getElementById('userCount').innerHTML
                = response.data.data.users
         document.getElementById('usersJps').innerHTML
               = response.data.data.users_jps
         document.getElementById('usersAgensi').innerHTML
               = response.data.data.users_agensi
         document.getElementById('usersTemp').innerHTML
               = response.data.data.users_temp
        })

    //   $.ajax({
    //   type: "GET",
    //   url: api_url+"api/user/dashboard",
    
    // //     dataType:"json",
    // //   contentType: "application/json",
    //   header:{
    //     'contentType': "application/json",
    //     'Authorization':api_token
    //   },
    //   data:jps,
    //   success: function(response) {  
    //      console.log(response.data)
    //      document.getElementById('userCount').innerHTML
    //             = response.data.users
    //      document.getElementById('usersJps').innerHTML
    //            = response.data.users_jps
    //      document.getElementById('usersAgensi').innerHTML
    //            = response.data.users_agensi
    //      document.getElementById('usersTemp').innerHTML
    //            = response.data.users_temp
    //   },
    //   error: function(response) {
    //       console.log(response);
    //   }
       });

   //});

      </script>
    @endpush
  </body>

@endsection
