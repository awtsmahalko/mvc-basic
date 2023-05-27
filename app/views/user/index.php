<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">

        <div class="row p-2">
            <div class="col-12" style="display: flex;flex-direction: column;justify-content: center;">
                <div class="pull-right">
                    <div class="btn-group" style="float:right;">
                        <button class="btn btn-outline-secondary btn-sm" type="button" onclick="addUser()">
                            <span class="fa fa-plus-circle"></span> Add New User</button>
                        </button>
                        <button class="btn btn-outline-danger btn-sm" type="button" onclick="removeSales()">
                            <span class="fa fa-trash"></span> Delete</button>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Manage Users</h3>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="5px">#</th>
                            <th>Fullname</th>
                            <th>Address</th>
                            <th>Position</th>
                            <th>Date Added</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<?php require 'modal_user.php' ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        getUsers();
    });

    function getUsers() {
        $("#example2").DataTable().destroy();
        $('#example2').DataTable({
            "processing": true,
            "ajax": {
                "url": 'http://localhost/mvc-basic/app/controller/api.php?uri=get-users',
            },
            "columns": [{
                "data": "count"
            },
            {
                "data": "fullname"
            },
            {
                "data": "address"
            },
            {
                "data": "position"
            },
            {
                "data": "date"
            }
            ]
        });
    }
</script>