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
</style>
      <!-- Mainbody_conatiner Starts -->
      <div class="Mainbody_conatiner user_profile">
        <!-- HEADER Section starts -->
        <div class="Mainbody_content">
          <div class="Mainbody_content_nav_header d-flex">
            <h4>Selenggara Data</h4>
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
              <li><a href="#" class="active"> Selenggara Data</a></li>
            </ul>
          </div>
          <div class="userlist_container">
            <div class="userlist_content">
              <div class="userlist_content_header">
                <div class="userlist_content_header_left d-flex">
                <img src="assets/images/Group 1.png" alt="card" />
                  <h3 id="spatial_label">DATA SPATIAL</h3>                
                  <h3 id="nonspatial_label" >DATA NON-SPATIAL</h3>
                </div>
                <div class="userlist_content_header_right d-flex">
                <button
                    class="add_pengguna"
                    data-target="#add_selenggara_data_modal"
                    data-toggle="modal"
                  >
                    <img src="images/add_plus.png" alt="" />Data
                  </button>
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
                  <button >DATA SPATIAL</button>
                  <button  class="active">DATA NON-SPATIAL</button>
                </div>
                <div class="userlist_tab_content_container">
                  <div class="userlist_tab_content">
                        <div class="userlist_tab_contents_holder">
                            <div id="jps_card" class="card-body border p-3">
                               
                            </div> <!-- end card-body-->
                        </div>
                  </div>
                  <div class="userlist_tab_content">
                    <div class="userlist_tab_contents_holder">
                        <div id="agensi_card" class="card-body p-3">
                            <table id="master_data" width="100%" class="display p-3 userlist_tab_content_table table">
                                <thead>
                                    <tr>
                                    <th class="float-left">Nama Data</th>                           
                                    <th>Catatan</th> 
                                    <th>Tarikh Kemaskini</th>
                                    <th>Dikemaskini Oleh</th> 
                                    <th>Status</th>                                                                    
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
    <section>
      <div class="add_selenggara_data_modal_container">
        <div
          class="modal fade"
          id="add_selenggara_data_modal"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true"
        >
          <div
            class="modal-dialog modal-dialog-centered add_selenggara_data_modal_dialog"
            role="document"
          >
            <div class="modal-content add_selenggara_data_modal_content">
              <div
                class="add_selenggara_data_modal_header d-flex justify-content-between"
              >
                <div class="d-flex align-items-center">
                  <img src="assets/images/add_plus.png" alt="add_plus" />
                  <h5>Tambah Peranan</h5>
                </div>

                <button type="button" data-dismiss="modal" aria-label="Close">
                  <img src="assets/images/close_img.png" alt="close_img" />
                </button>
              </div>
              <div class="modal-body add_selenggara_data_modal_body">
                <form id="lookupForm"   role="form">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input
                      type="text"
                      class="form-control"
                      id="nama"
                      name="name"
                      value=""
                    />
                  </div>
                  <div class="form-group position-relative">
                    <label for="Keterangan">Keterangan</label>
                    <textarea
                      type="text"
                      id="Keterangan"
                      name="description"
                      class="form-control"
                    ></textarea>
                    <!-- <p class="position-absolute textarea_depender">
                      patah perkataan 0 dari 250
                    </p> -->
                  </div>
                
                <div class="add_selenggara_data_modal_footer text-center">
                  <button
                    data-toggle="modal"
                    data-target="#add_selenggara_data_sucess_modal"
                    data-dismiss="modal"
                  >
                    Kembali
                  </button>
                  <input type="submit" class="btn btn-success" id="submit">
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="add_selenggara_data"></div>
    </section>
    @endsection
    @section('scripts')
    <script>
        function loadflow(data) {
            var base_url = window.location.origin;
            var url = base_url + '/' + data;
            window.location.href = url
      }
$(document).ready(function () {   

    $("#lookupForm").submit(function(event){
		submitLookupForm();
		return false;
	});
    function submitLookupForm(){
        //console.log(document.lookup.name.value)
        var formEl = document.forms.lookupForm;
        var formData = new FormData(formEl);
        formData.append('user_id', {{Auth::user()->id}})
        console.log(name)
        //console.log($('form#lookupForm').serialize())
        console.log('form submitted')

        axios({
        method: 'post',
        url: api_url+"api/lookup/master",
        responseType: 'json',
        data: formData
        })
        .then(function (response) {
            console.log(response)
            location.reload()
        })
        // $.ajax({
        //     type: "POST",
        //     url: "saveContact.php",
        //     cache:false,
        //     data: $('form#contactForm').serialize(),
        //     success: function(response){
        //         $("#contact").html(response)
        //         $("#contact-modal").modal('hide');
        //     },
        //     error: function(){
        //         alert("Error");
        //     }
        // });
    }

    $('#spatial_label').hide();
      function nonspatial(){
          $('#spatial_label').hide();
          $('#nonspatial_label').show();
      }
      function spatial(){
          $('#spatial_label').show();
          $('#nonspatial_label').hide();
      }

      
    const api_url = "{{ env('API_URL') }}"
       const api_token = "Bearer "+ "{{ env('TOKEN') }}"
    console.log('loaded')
axios.defaults.headers.common["Authorization"] = api_token
        axios({
        method: 'get',
        url: api_url+"api/lookup/master",
        responseType: 'json'
        })
        .then(function (response) {
            console.log(response)
            var jps_table =$('#master_data').DataTable({     
              data: response.data.data,
              "language": {
                    "lengthMenu": "Papar _MENU_ Entri",
                    "zeroRecords": "Nothing found - sorry",
                    "info": "Paparan _PAGE_ hinnga 10 Dari _PAGES_",
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
                              //data=row.value
                              data = '<div class="d-flex align-items-center folder">' +
                                '<img src="assets/images/file_up.png" alt="" class="m-0" />' +                                
                                '<p onClick="loadflow(\''+row.value+'\')">' + row.value + '</p>' +                                
                              '</div>'                              
                          }
                          return data;
                      }
                  },
                  {
                      targets:1, // Start with the last
                      render: function ( data, type, row, meta ) {
                          if(type === 'display'){
                                  data=row.catatan
                          }
                          return data;
                      }
                  },                  
                  {
                      targets:2, // Start with the last
                      render: function ( data, type, row, meta ) {
                            // console.log(row.bahagian.nama_bahagian)
                          if(type === 'display'){
                            const today = new Date(row.updated_at);
                            const yyyy = today.getFullYear();
                            let mm = today.getMonth() + 1; // Months start at 0!
                            let dd = today.getDate();

                            if (dd < 10) dd = '0' + dd;
                            if (mm < 10) mm = '0' + mm;

                            const formattedToday = dd + '-' + mm + '-' + yyyy;
                                  data=formattedToday
                          }
                          return data;
                      }
                  },
                  {
                      targets:3, // Start with the last
                      render: function ( data, type, row, meta ) {
                          if(type === 'display'){
                                  data=row.users.name
                          }
                          return data;
                      }
                  },
                  {
                      targets:4, // Start with the last
                      render: function ( data, type, row, meta ) {
                        if(type === 'display'){

                            if(row.row_status==1){
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
                                  //data=row.row_status
                          }
                          return data;
                      }
                  },                  
              ] , 
              columns: [
                  { data: 'value'},
                  { data: 'catatan'  },
                  { data: 'updated_at'  },          
                  { data: 'uuid'  },
                  { data: 'row_status'  },                  
              ],
              
                 
          });
            //response.data.pipe(fs.createWriteStream('ada_lovelace.jpg'))
        });

    });
        </script>
@endsection