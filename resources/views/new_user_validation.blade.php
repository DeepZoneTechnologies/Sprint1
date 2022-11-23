@extends('layouts.main.master')
@section('content_main')
<style>
    .datatable_button{
        margin: -9px !important;
    }
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
    /* .custom-switch .custom-control-label::before {
        left: -1.5rem !important;
        width: 3rem !important;
    } */
    
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
                      <h3 id="new_jps_label">SENARAI PENGGUNA BAHARU AGENSI LUAR</h3>
                      <h3 id="new_nonjps_label">SENARAI PENGGUNA BAHARU JPS</h3>
                      
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
                      <button onclick="new_jps_user()">JPS</button
                      ><button onclick="new_agensi_user()" class="active">AGENSI LUAR</button>
                    </div>
                    <div class="userlist_tab_content_container">
                      <div class="userlist_tab_content">
                            <div class="userlist_tab_contents_holder">
                                <div id="new_jps_card" class="card-body table-responsive">
                                    <table id="new_jps_user" width="100%" class="display p-3 userlist_tab_content_table table">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>No. Kad Pengenalan</th>
                                                <th>Emel</th> 
                                                <th>Jabatan</th> 
                                                <th>Jawatan</th> 
                                                <th>No. Telefon</th> 
                                                <th>Tindakan</th>               
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
                            <div id="new_agensi_card" class="card-body table-responsive">
                                <table id="new_agensi_user" width="100%" class="display p-3 userlist_tab_content_table table">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>No. Kad Pengenalan</th>
                                            <th>Emel</th> 
                                            <th>Jabatan</th> 
                                            <th>Jawatan</th> 
                                            <th>No. Telefon</th> 
                                            <th>Dokumen Sokongan</th>
                                            <th>Tindakan</th>                
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
        @endsection
        @section('scripts')
        <script>
             $('#new_jps_label').hide();
            function new_agensi_user(){
                $('#new_jps_label').hide();
                $('#new_nonjps_label').show();
            }
            function new_jps_user(){
                $('#new_jps_label').show();
                $('#new_nonjps_label').hide();
            }
            $(document).ready(function () {    
          
              const api_url = document.getElementById("api_url").value;  console.log(api_url);
              const api_token = "Bearer "+ document.getElementById("token").value;  console.log(api_token);
          
              $.ajaxSetup({
                   headers: {
                          "Content-Type": "application/json",
                          "Authorization": api_token,
                          }
              });
              var data_update = {'isJps':1};
          
          
                $.ajax({
                type: "GET",
                url: api_url+"api/user/temp/list",
                contentType: "application/json",
                data: data_update, 
                success: function(response) {  
                    console.log(response.data)      
                    var jps_table =$('#new_jps_user').DataTable({     
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
                                render: function ( data, type, row, meta ) { console.log(data);
                                    if(type === 'display'){
                                        //data = '<a class="text-dark" onClick="loadView('+row.id+')">'+row.name+'</a>';
                                        data = '<a class="text-dark" href="user-profile/temp/' +row.id+ '">'+row.name+'</a>';
                                    }
                                    return data;
                                }
                            },
                            {
                                targets:3, // Start with the last
                                render: function ( data, type, row, meta ) {
                                      // console.log(row.jawatan.nama_jawatan);
                                    if(type === 'display'){
                                            data=row.jabatan.nama_jabatan;
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
                                    console.log(data);
                                    if(type === 'display'){
                                        data='<div class="d-flex datatable_button">'+
                                            '<button class="btn btn-danger m-1">Tidak Lulus</button>'+
                                            '<button class="btn btn-primary m-1" onClick="approveTempUser('+row.id+')">Lulus</button>'+
                                        '</div>'
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
                            { data: 'no_telefon'  },
                            { data: 'jawatan_id'  },
                        ],
                        
                           
                    });
                },
                error: function(response) {
                    console.log(response);
                }
                }); 
                
                var data_update = {'isJps':0};
              $('#new_agensi_user').DataTable().destroy();
              $('#new_jps_user').DataTable().destroy();
          
              $.ajaxSetup({
                   headers: {
                          "Content-Type": "application/json",
                          "Authorization": api_token,
                          }
              });
                $.ajax({
                type: "GET",
                url: api_url+"api/user/temp/list",
                contentType: "application/json",
                // dataType: "json",
                data: data_update, 
                success: function(response) {            
                    $('#new_agensi_user').DataTable({
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
                                        data = '<a class="text-dark" href="user-profile/temp/' +row.id+ '">'+row.name+'</a>';
                                    }
                                    return data;
                                }
                            },
                            {
                                targets:3, // Start with the last
                                render: function ( data, type, row, meta ) {
                                    if(type === 'display'){
                                            data="Jabatan"
                                    }
                                    return data;
                                }
                            },
                            {
                                targets:4, // Start with the last
                                render: function ( data, type, row, meta ) {
                                    if(type === 'display'){
                                            data="Jawatan"
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
                                            data ='<img class="img-thumbnail float-left" height="30px" src="images/pdf.png" alt="" onClick="downloadDoc('+row.id+')">'
                                        }
                                    }
                                    return data;
                                }
                            },
                            {
                                targets:7, // Start with the last
                                render: function ( data, type, row, meta ) {
                                    console.log(data);
                                    if(type === 'display'){
                                        data='<div class="d-flex datatable_button">'+
                                            '<button class="btn btn-danger m-1 text-nowrap">Tidak Lulus</button>'+
                                            '<button class="btn btn-primary m-1" onClick="approveTempUser('+row.id+')">Lulus</button>'+                                  
                                        '</div>'
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
                            { data: 'no_telefon'  },
                            { data: 'jawatan_id'  },
                            { data: 'jawatan_id'  },

                        ],
                    });
                },
                error: function(response) {
                    console.log(response);
                }
                });
          
            })

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
          
              function loadView(id)
              {
                  localStorage.setItem("user_id", id);
                  localStorage.setItem("user_type", "temp_user");
                  window.location.href = "{{ url('/user-profile')}}";
          
          
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
                          window.location.href = "{{ url('/pengasahan-pengguna-baharu')}}";
                      }
                  });
          
              }
          
            // function new_jps_user(){
            //     const api_url = document.getElementById("api_url").value;  console.log(api_url);
            //   const api_token = "Bearer "+ document.getElementById("token").value;  console.log(api_token);
          
            //   $.ajaxSetup({
            //        headers: {
            //               "Content-Type": "application/json",
            //               "Authorization": api_token,
            //               }
            //   });
          
            //   $('#new_agensi_user').DataTable().destroy();
            //   $('#new_jps_user').DataTable().destroy();
          
          </script>
          
         @endsection
    