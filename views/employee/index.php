
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <title>PENYEWAAN STADION</title>
        <style>
        body {
            background-color:lightskyblue;
        }
        </style>
        
    </head>
    <body>
    <nav class="navbar bg-warning fixed-top">
  <div class="container-fluid">
       <img src="http://localhost/DATA-SEWA-STADION/ciamis1.png" width="20">
       <center>
        <a class="navbar-brand" href="#" style="color:#4B0082">Data Penyewaan Stadion</a>
        </center>
    <button class="navbar-toggler" style="color:#8A2BE2"type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start text-light" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"style="background-color:#50394c">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu Utama</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link text-warning" aria-current="page" href="#"><i class="bi bi-house-door-fill"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" aria-current="page" href="http://localhost/DATA-SEWA-STADION/views/employee/index.php"><i class="bi bi-clipboard-data-fill"></i> Data Penyewa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-warning" href="http://localhost/DATA-SEWA-STADION/views/employee/login.php"><i class="bi bi-arrow-left-circle-fill"></i> Logout</a>
          </li>

        </ul>

      </div>
    </div>
  </div>
</nav>
    <div class="row mt-5">
        <div class="col-md-12 mt-4">

        <center>

            <img src="http://localhost/DATA-SEWA-STADION/logo-std.png" width="200">
            <br>
        </center>
    </div>
    <div class="card-category">
        <center>
        Jl. Letnan Samuji, Ciamis, Kec. Ciamis, Kabupaten Ciamis, Jawa Barat 46211
        </center>
						</div>

        <div class="container">
            <div id="message">
            </div>

            <h1 class="mt-4 mb-4 text-center text-purple">DATA SEWA STADION</h1>
            <span id="message"></span>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col col-sm-9">Penyewaan</div>
                        <div class="col col-sm-3">
                            <button type="button" id="add_data" class="btn btn-success btn-sm float-end">Add</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="sample_data">
                            <thead>
                                <tr>
                                    <th>Nama Pemesan</th>
                                    <th>Email</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Selesai</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" tabindex="-1" id="action_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" id="sample_form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="dynamic_modal_title"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Nama Pemesan</label>
                                <input type="text" name="nama_pemesan" id="nama_pemesan" class="form-control" />
                                <span id="nama_error" class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email  " name="email" id="email" class="form-control" />
                                <span id="tanggal_error" class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Waktu Mulai</label>
                                    <input type="time" name="designation" id="waktu_mulai" class="form-control" />
                                    <span id="mulai_error" class="text-danger"></span>
                                </div>
                            <div class="mb-3">
                                <label class="form-label">Waktu Selesai</label>
                                <input type="time" name="waktu_selesai" id="waktu_selesai" class="form-control" />
                                <span id="selesai_error" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" id="id" />
                            <input type="hidden" name="action" id="action" value="Add" />
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="action_button">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script>
        $(document).ready(function() {
            showAll();
            $('#add_data').click(function(){

                $('#dynamic_modal_title').text('Add Data');

                $('#sample_form')[0].reset();

                $('#action').val('Add');

                $('#action_button').text('Add');

                $('.text-danger').text('');

                $('#action_modal').modal('show');

            });

            $('#sample_form').on('submit', function(event){

                event.preventDefault();
                
                if($('#action').val() == "Add"){
                    var formData = {
                        'nama_pemesan'          : $('#nama_pemesan').val(),
                        'email'               : $('#email').val(),
                        'waktu_mulai'           : $('#waktu_mulai').val(),
                        'waktu_selesai'         : $('#waktu_selesai').val()
                    }
                    $.ajax({
                        url:"http://localhost/DATA-SEWA-STADION/api/employee/create.php",
                        method:"POST",
                        data: JSON.stringify(formData),
                        success:function(data){
                            $('#action_button').attr('disabled', false);
                            $('#message').html('<div class="alert alert-success">'+data.message+'</div>');
                            $('#action_modal').modal('hide');
                            $('#sample_data').DataTable().destroy();
                            showAll();
                        },
                        error: function(err) {
                            console.log(err);
                    }
                });
                }else if($('#action').val() == "Update"){
                    var formData = {
                        'id'                    : $('#id').val(),
                        'nama_pemesan'          : $('#nama_pemesan').val(),
                        'email'               : $('#email').val(),
                        'waktu_mulai'           : $('#waktu_mulai').val(),
                        'waktu_selesai'         : $('#waktu_selesai').val()
                    }
                    $.ajax({
                        url:"http://localhost/DATA-SEWA-STADION/api/employee/update.php",
                        method:"PUT",
                        data: JSON.stringify(formData),
                        success:function(data){
                            $('#action_button').attr('disabled', false);
                            $('#message').html('<div class="alert alert-success">'+data.message+'</div>');
                            $('#action_modal').modal('hide');
                            $('#sample_data').DataTable().destroy();
                            showAll();
                        },
                        error: function(err) {
                            console.log(err);
                        }
                    });
                }
                
            });
        });

        function showAll() {
            $.ajax({
                    type: "GET",
                    contentType: "application/json",
                    url: "http://localhost/DATA-SEWA-STADION/api/employee/read.php",
                    success: function(response) { 
                        // console.log(response);
                        var json = response.body;
                        
                        var dataSet=[];
                        for (var i = 0; i < json.length; i++) {
                            var sub_array = {
                                'nama_pemesan' : json[i].nama_pemesan,
                                'email' : json[i].email,
                                'waktu_mulai' : json[i].waktu_mulai,
                                'waktu_selesai' : json[i].waktu_selesai,
                                'action' : '<button onclick="showOne('+json[i].id+')" class="btn btn-sm btn-warning">Edit</button>'+
                                            '<button onclick="deleteOne('+json[i].id+')" class="btn btn-sm btn-danger">Delete</button>'  
                            };
                            dataSet.push(sub_array);
                        }
                        $('#sample_data').DataTable({
                            data: dataSet,
                            columns : [
                                { data : "nama_pemesan" },
                                { data : "email" },
                                { data : "waktu_mulai" },
                                { data : "waktu_selesai" },
                                { data : "action" }
                            ]
                        });
                    },
                    error: function(err) {
                        console.log(err);
                    }
            });
        } 
        function showOne(id) {
            $('#dynamic_modal_title').text('Edit Data');

            $('#sample_form')[0].reset();

            $('#action').val('Update');

            $('#action_button').text('Update');

            $('.text-danger').text('');

            $('#action_modal').modal('show');

            $.ajax({
                    type: "GET",
                    contentType: "application/json",
                    url: "http://localhost/DATA-SEWA-STADION/api/employee/read.php?id="+id,
                    success: function(response) { 
                        $('#id').val(response.id);
                        $('#nama_pemesan').val(response.nama_pemesan);
                        $('#email').val(response.email);
                        $('#waktu_mulai').val(response.waktu_mulai);
                        $('#waktu_selesai').val(response.waktu_selesai);
                        
                    },
                    error: function(err) {
                        console.log(err);
                    }
            });


        }
        function deleteOne(id) {
            alert('Yakin untuk hapus data ?');
            $.ajax({
                url:"http://localhost/DATA-SEWA-STADION/api/employee/delete.php",
                method:"DELETE",
                data: JSON.stringify({"id" : id}),
                success:function(data){
                    $('#action_button').attr('disabled', false);
                    $('#message').html('<div class="alert alert-success">'+data+'</div>');
                    $('#action_modal').modal('hide');
                    $('#sample_data').DataTable().destroy();
                    showAll();
                },
                error: function(err) {
                    console.log(err);
                }
            });
        }
    </script>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#5000ca" fill-opacity="1" d="M0,224L26.7,224C53.3,224,107,224,160,234.7C213.3,245,267,267,320,261.3C373.3,256,427,224,480,208C533.3,192,587,192,640,208C693.3,224,747,256,800,266.7C853.3,277,907,267,960,234.7C1013.3,203,1067,149,1120,160C1173.3,171,1227,245,1280,250.7C1333.3,256,1387,192,1413,160L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
</svg>
    </body>
</html>