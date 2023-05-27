<div class="modal fade" id="modalUser">
    <div class="modal-dialog" id="large_modal_dialog">
        <div class="modal-content" role="document">
            <div class="modal-header bg-danger" style="padding:8px;">
                <h5 class="modal-title text-center" id="large_modal_title">Add User</h5>
            </div>
            <div class="modal-body" id="large-modal-content" style="padding: 0">
                <form id="frmAddUser" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Fullname"
                                name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                        </div>
                        <div class="form-group">
                            <label for="position">Position</label>
                            <input type="text" class="form-control" id="position" placeholder="Position"
                                name="position">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Position"
                                name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Position"
                                name="password">
                        </div>
                        <div class="input-group-btn text-center" style="padding:10px;margin:auto;">
                            <button class="btn btn-sm btn-outline-primary" type="submit" id="btn_submit"><span
                                    class="fa fa-plus-circle"></span> ADD USER</button>
                            <button class="btn btn-sm btn-outline-danger" type="button" data-dismiss="modal"><span
                                    class="fa fa-times-circle"></span> CLOSE</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <p>
                    <center>zechSolution &trade;</center>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    function addUser() {
        $("#modalUser").modal('show');
    }
    $('#frmAddUser').submit(function(e) {
        e.preventDefault();
        $("#btn_submit").prop('disabled', true);
        $("#btn_submit").html("<span class='fa fa-spin fa-spinner'></span> Adding User ....");
        var data = $(this).serialize();
        var url = 'http://localhost/mvc-basic/app/controller/api.php?uri=add-user';
        $.post(url, data, function(res) {
            getUsers();
            $("#btn_submit").prop('disabled', false);
            $("#btn_submit").html(`<span class="fa fa-plus-circle"></span> Add New User`);
            $("#modalUser").modal('hide');
            // if (res == 1) {
            //     swalMe("success", " Good, Product successfully added");
            // } else if (res == 2) {
            //     swalMe("error", " Oops, Username already exist!");
            // } else {
            //     swalMe("error", "Error occur while procesing data");
            // }
        });
    });
</script>