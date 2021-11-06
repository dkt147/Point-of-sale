
<!-- Header -->
    <?php require 'main_pages/header.php';?>
<!-- Header -->



            <div id="temp_msg" style="display: none" class="alert alert-success">
            </div>
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Users
                        </h6>

                        <div class="element-box">
                            <a href="add_user.php" class="btn btn-primary">Add User</a>
                        </div>
                        <div class="element-box">
                            <div class="table table-hover table-responsive table-striped">
                                <table id="myTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Haris Jamil</td>
                                            <td>harisj594@gmail.com</td>
                                            <td>Super Admin</td>
                                            <td>
                                                <a href="add_user.php" class="edit_item btn btn-success">
                                                    <i class="fa fa-edit" style="font-size: 16px; color: #fff;"></i>
                                                </a>
                                                <a href="" class="remove_item btn btn-danger">
                                                    <i class="fa fa-trash" style="font-size: 16px; color: #fff;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>Haris Jamil</td>
                                            <td>harisj594@gmail.com</td>
                                            <td>Super Admin</td>
                                            <td>
                                                <a href="add_user.php" class="edit_item btn btn-success">
                                                    <i class="fa fa-edit" style="font-size: 16px; color: #fff;"></i>
                                                </a>
                                                <a href="" class="remove_item btn btn-danger">
                                                    <i class="fa fa-trash" style="font-size: 16px; color: #fff;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

<!-- footer -->
    <?php require 'main_pages/footer.php';?>
<!-- footer -->