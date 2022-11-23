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

/* div.dataTables_wrapper div.dataTables_length select:focus {
    filter:drop-shadow(2px 2px 2px #7adaf5);
} */




</style>
   @push('scripts')
   <script>
$(document).ready(function () {   

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
                                '<p>' + row.value + '</p>'
                              '</div>'
                              //data = '<a value="'+row.id+'" onClick="loadTempUser('+row.id+')" class="text-dark user_name">'+row.name+'</a>';
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
   @endpush
   <div class="Mainbody_content mtop">
          <div class="Mainbody_content_nav_header d-flex">
            <h4>Selenggara Data</h4>
            <ul class="path_nav">
              <li>
                <a href="#"
                  ><img
                    src="assets/images/Vector-10.png"
                    class="globe"
                    alt="globe"
                  />
                  Geo-board
                  <img
                    class="arrow_nav"
                    src="assets/images/arroew.png"
                    alt="arroew"
                  />
                </a>
              </li>
              <li>
                <a href="#">
                  Pentadbir
                  <img
                    class="arrow_nav"
                    src="assets/images/arroew.png"
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
                  <h3>SENARAI DATA NON-SPATIAL</h3>
                </div>
                <div class="userlist_content_header_right d-flex">
                  <button
                    class="add_pengguna"
                    data-target="#add_selenggara_data_modal"
                    data-toggle="modal"
                  >
                    <img src="assets/images/add_plus.png" alt="add_plus" />Data
                  </button>
                  <button class="printing">
                    <img
                      src="assets/images/printing (1) 2.png"
                      alt="printing"
                    />
                  </button>
                </div>
              </div>
              <div class="userlist_tab_container">
                <div class="userlist_tab_btn_container">
                  <button>DATA SPATIAL</button
                  ><button class="active">DATA NON-SPATIAL</button>
                </div>
                <div class="userlist_tab_content_container">                  
                  <div class="userlist_tab_content">
                    <div class="userlist_tab_contents_holder data">
                      <div class="userlist_tab_content_header">
                        
                      </div>
                      <table id="master_data" class="userlist_tab_content_table table" style="width:100%">
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
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

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
                <form>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input
                      type="text"
                      class="form-control"
                      id="nama"
                      value="Kementerian Sains, Teknologi dan inovasi (MOST)"
                    />
                  </div>
                  <div class="form-group position-relative">
                    <label for="Keterangan">Keterangan</label>
                    <textarea
                      type="text"
                      id="Keterangan"
                      class="form-control"
                    ></textarea>
                    <p class="position-absolute textarea_depender">
                      patah perkataan 0 dari 250
                    </p>
                  </div>
                </form>
                <div class="add_selenggara_data_modal_footer text-center">
                  <button
                    data-toggle="modal"
                    data-target="#add_selenggara_data_sucess_modal"
                    data-dismiss="modal"
                  >
                    Simpan
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="add_selenggara_data"></div>
    </section>

    
   @endsection