<?php include "../includes/header.php"; ?>
<div class="container-scroller">
    <?php include  "../includes/navbar.php";  ?>

    <div class="container-fluid page-body-wrapper d-flex">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-4 sidebar sidebar-offcanvas">
            <?php include "../includes/sidebar.php"; ?>
        </nav>

        <!-- Main content (form) -->





        <div class="container">
            <form method="POST" action="../functions/addFunctions.php" enctype="multipart/form-data">

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="chooseFaculty">Fakülte Seçiniz..</label>
                        <?php
                      
                        include "../functions/listFunctions.php";

                        // Fakülteleri al
                        $faculties = getFaculties();

                        echo  '<select id="chooseFaculty" class="form-control" name="chooseFaculty">';

                        echo '<option selected>Seç</option>';
                        foreach ($faculties as $faculty) {
                          //  echo    '<option>' . htmlspecialchars($faculty) . '</option>';
                            echo '<option value="' . $faculty['id'] . '">' . htmlspecialchars($faculty['name']) . '</option>';

                        }
                        echo '</select>';
                        echo '</div>';
                        ?>
                        <div class="form-group col-md-6">
                            <label for="name">Bölüm Adı</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="departmentNum">Bölüm Numarası</label>
                            <input type="text" class="form-control" id="departmentNum" name="departmentNum">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="departmentHead">Bölüm Başkanı</label>
                            <input type="text" class="form-control" id="departmentHead" name="departmentHead">
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary" name="addDepartment">Kaydet</button>
            </form>
        </div>


    </div>
</div>




<?php include "../includes/footer.php"; ?>