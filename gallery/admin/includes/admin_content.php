<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php 
            
                $user_1 = User::find_user_by_id(1);
                echo $user_1->username;

                // $users = User::find_all_users();

                // foreach($users as $user) {
                //     echo $user->username . "<br>";
                // }


            ?>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->