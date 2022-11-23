@extends('layouts.main.master')

@section('content_main')

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

.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    color: #38afd1 !important;
    border:none !important;
    background: white !important;
    border-radius: 50% !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button:focus {
    border:none !important;
    background: white !important;   
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
/* .dataTables_wrapper .dataTables_paginate{
    color: white !important;
} */
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

/* div.dataTables_wrapper div.dataTables_length select:focus {
    filter:drop-shadow(2px 2px 2px #7adaf5);
} */




</style>
      <!-- Mainbody_conatiner Starts -->
      <div class="Mainbody_conatiner user_profile">
        <!-- HEADER Section starts -->
        <div class="Mainbody_content">
          <div class="Mainbody_content_nav_header d-flex">
            <h4>Profil Pengguna</h4>
            <ul class="path_nav">
              <li>
                <a href="#"
                  ><img
                    src="images/Vector-10.png"
                    class="globe"
                    alt="globe"
                  />
                  Geo-board
                  <img
                    class="arrow_nav"
                    src="images/arroew.png"
                    alt="arroew"
                  />
                </a>
              </li>
              <li>
                <a href="#">
                  Pentadbir
                  <img
                    class="arrow_nav"
                    src="images/arroew.png"
                    alt="arroew"
                /></a>
              </li>
              <li><a href="#" class="active"> Profil Pengguna</a></li>
            </ul>
          </div>
          <div class="userlist_container">
            <div class="userlist_content">
              <div class="userlist_content_header">
                <div class="userlist_content_header_left d-flex">
                  <img src="images/card.png" alt="card" />
                  <h3 id="jps_label">SENARAI PENGGUNA</h3>
                  <h3 id="nonjps_label" >SENARAI PENGGUNA AGENSI LUAR</h3>
                </div>
                <div class="userlist_content_header_right d-flex">
                  <a href="/daftar-pengguna-baharu"><button class="add_pengguna">
                    <img src="images/add_plus.png" alt="" />Pengguna
                  </button></a>
                  <button class="printing">
                    <img
                      src="images/printing (1) 2.png"
                      alt="printing"
                    />
                  </button>
                </div>
              </div>
              <input type="hidden" id="api_url" value={{env('API_URL')}}>
              <input type="hidden" id="token" value={{env('TOKEN')}}>
              <div class="userlist_tab_container">
                <div class="userlist_tab_btn_container">
                  <button onclick="jps_user()">JPS</button>
                  <button onclick="agensi_user()" class="active">AGENSI LUAR</button>
                </div>
                <div class="userlist_tab_content_container">
                  <div class="userlist_tab_content">
                        <div class="userlist_tab_contents_holder">
                            <div id="jps_card" class="card-body p-3">
                                <table id="jps_user" width="100%" class=" display p-3 userlist_tab_content_table table">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>No. Kad Pengenalan</th>
                                            <th>Emel</th> 
                                            <th>Bahagian</th> 
                                            <th>Jawatan</th> 
                                            <th>Aktif/Tidak Aktif</th> 
                                            <th>Peranan</th> 
                                            <th>Tindakan oleh</th>               
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div> <!-- end card-body-->
                        </div>
                  </div>
                  <div class="userlist_tab_content">
                    <div class="userlist_tab_contents_holder">
                        <div id="agensi_card" class="card-body p-3">
                            <table id="agensi_user" width="100%" class="display p-3 userlist_tab_content_table table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>No. Kad Pengenalan</th>
                                        <th>Emel</th> 
                                        <th>Jabatan</th> 
                                        <th>Jawatan</th> 
                                        <th>Aktif/Tidak Aktif</th>             
                                        <th>Dokumen Sokongan</th>
                                        <th>Peranan</th> 
                                        <th>Tindakan oleh</th>               
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>  <!-- end card-body-->
                    </div>
                    <div class="userlist_tab_content_table_footer">
                    </div>
                  </div>
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
    <!-- script section starts -->
    @endsection
    @section('scripts')
    <script>
        $('#jps_label').hide();
      function agensi_user(){
          $('#jps_label').hide();
          $('#nonjps_label').show();
      }
      function jps_user(){
          $('#jps_label').show();
          $('#nonjps_label').hide();
      }

        var api_url = document.getElementById("api_url").value;
        var api_token = "Bearer "+ document.getElementById("token").value;
        $.ajaxSetup({
             headers: {
                    "Content-Type": "application/json",
                    "Authorization": api_token,
                    }
        });
        // function userData(id){
        //         user_id=id
        //         // console.log(user_id)
        //         $.ajax({
        //                 type: "GET",
        //                 url: "fectchuser",
        //                 contentType: "application/json",
        //                 dataType: "json",
        //                 header:{
        //                     'contentType': "application/json",
        //                     'Authorization':api_token
        //                 },
        //                 data:{id:user_id},
        //                 success: function(response) {
        //                     if(response){
        //                         window.location.href = "user-profile";
        //                     }
        //                 },
        //                 error: function(response) {
        //                     console.log(response);
        //                 }
        //         });
        // }
        function loadView(id)
        { console.log(id)
            //var url = '{{ url("/user-profile", ":id")}}'
            var url = '{{ route("user.profile", ["appuser",":id"])}}'
            url = url.replace(':id', id);
            //url = url.replace(':temp', id);
            
            localStorage.setItem("user_id", id);
            localStorage.setItem("user_type", "temp_user");
            window.location.href = url;
        }

      
      $(document).ready(function () {   
        
        var jps = {'isJps':1}; 
        var non_jps = {'isJps':0}; 

          $.ajax({
          type: "GET",
          url: api_url+"api/user/list",
        //   url: "http://localhost:8080/api/temp/user/list",
            dataType:"json",
          contentType: "application/json",
          header:{
            'contentType': "application/json",
            'Authorization':api_token
          },
          data:jps,
          success: function(response) {  
            //   console.log(response)      
              var jps_table =$('#jps_user').DataTable({     
                  data: response.data,
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
                                  data = '<a value="'+row.id+'" onClick="loadView('+row.id+')" class="text-secondary user_name">'+row.name+'</a>';
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
                          targets:6, // Start with the last
                          render: function ( data, type, row, meta ) {
                              if(type === 'display'){
                                      data="PENGGUNA BKOR"
                              }
                              return data;
                          }
                      },
                      {
                          targets:5, // Start with the last
                          render: function ( data, type, row, meta ) {
                              console.log(row.id);
                              if(type === 'display'){
                                  if(row.jenis_pengguna_id==1 && row.row_status==1){
                                      data ='<div class="custom-control custom-switch">'+
                                    '<input type="checkbox" checked  class="custom-control-input" id="customSwitch'+row.id+'">'+
                                    '  <label class="custom-control-label" for="customSwitch'+row.id+'"></label>'+
                                    '</div>'
                                  }
                                  else{
                                      data ='<div class="custom-control custom-switch">'+
                                      '<input type="checkbox" class="custom-control-input" id="customSwitch'+row.id+'">'+
                                      '  <label class="custom-control-label" for="customSwitch'+row.id+'"></label>'+
                                      '</div>'
                                  };
                              }
                              return data;
                          }
                      },
                      {
                          targets:7, // Start with the last
                          render: function ( data, type, row, meta ) {
                              if(type === 'display'){
                                      data=""
                              }
                              return data;
                          }
                      },

    
                  ] , 
                  columns: [
                      { data: 'name'},
                      { data: 'no_ic'  },
                      { data: 'email'  },          
                      { data: 'bahagian_id'  },
                      { data: 'jawatan_id'  },
                      { data: 'row_status'  },
                      { data: 'jawatan_id'  },
                      { data: 'jawatan_id'  },
                  ],
                  
                     
              });
    
          },
          error: function(response) {
              console.log(response);
          }
          });  

          $.ajax({
            type: "GET",
            url: api_url+"api/user/list",
            //   url: "http://localhost:8080/api/temp/user/list",
                dataType:"json",
            contentType: "application/json",
            header:{
                'contentType': "application/json",
                'Authorization':api_token
            },
          data:non_jps,
          success: function(response) {            
              $('#agensi_user').DataTable({
              data: response.data,
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
                                data = '<a value="'+row.id+'" onClick="loadView('+row.id+')" class="text-secondary user_name">'+row.name+'</a>';
                              }
                              return data;
                          }
                      },
                      {
                          targets:3, // Start with the last
                          render: function ( data, type, row, meta ) {
                              if(type === 'display'){
                                      data=row.jabatan.nama_jabatan
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
                          targets:7, // Start with the last
                          render: function ( data, type, row, meta ) {
                              if(type === 'display'){
                                      data="PENGGUNA BKOR"
                              }
                              return data;
                          }
                      },
                      {
                          targets:5, // Start with the last
                          render: function ( data, type, row, meta ) {
                            //   console.log(data);
                              if(type === 'display'){
                                  if(row.jenis_pengguna_id==2 && row.row_status==1){
                                    data ='<div class="custom-control custom-switch text-center">'+
                                    '<input type="checkbox" checked  class="custom-control-input float-end" id="customSwitch'+row.id+'">'+
                                    '  <label class="custom-control-label" for="customSwitch'+row.id+'"></label>'+
                                    '</div>'
                                  }
                                  else{
                                      data ='<div class="custom-control custom-switch">'+
                                    '<input type="checkbox"  class="custom-control-input" id="customSwitch'+row.id+'">'+
                                    '  <label class="custom-control-label" for="customSwitch'+row.id+'"></label>'+
                                    '</div>'
                                  };
                              }
                              return data;
                          }
                      },
                      {
                          targets:6, // Start with the last
                          render: function ( data, type, row, meta ) {
                            //   console.log(data);
                              if(type === 'display'){
                                  if(row.jenis_pengguna_id==2 && row.row_status==1){
                                      data ='<img class="img-thumbnail float-left" width="40px" src="images/pdf.png" alt="" onClick="downloadDoc('+row.id+')">'
                                  }
                              }
                              return data;
                          }
                      },
                      {
                          targets:8, // Start with the last
                          render: function ( data, type, row, meta ) {
                              if(type === 'display'){
                                      data=""
                              }
                              return data;
                          }
                      }
                      
    
                  ] ,
              columns: [
                  { data: 'name' },
                  { data: 'no_ic'  },
                  { data: 'email'  },          
                  { data: 'bahagian_id'  },
                  { data: 'jawatan_id'  },
                  { data: 'jawatan_id'  },
                  { data: 'row_status'  },
                  { data: 'jawatan_id'  },
                  { data: 'jawatan_id'  },
              ],
              });
          },
          error: function(response) {
              console.log(response);
          }
          });   
      });

    //   let userlist_tab_btn = document.querySelectorAll(
    //   ".userlist_tab_btn_container button"
    // );
    // let userlist_tab_content = document.querySelectorAll(".userlist_tab_content ");
    </script>
    <script>
      function downloadDoc(id) {
      const api_url = document.getElementById("api_url").value;  console.log(api_url);
       const api_token = "Bearer "+ document.getElementById("token").value;  console.log(api_token);
       update_user_api = api_url+"api/user/user/download/";
       data_update = {'user_id':id, 'type':'appuser'};
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
            data: {'user_id':id, 'type': 'appuser'} , 
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
    </script>
@endsection