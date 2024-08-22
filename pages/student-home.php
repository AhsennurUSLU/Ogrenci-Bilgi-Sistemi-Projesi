<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>

<style>
    .card {
        border-radius: 50%;
        overflow: hidden;
        width: 150px;
        height: 150px;
        margin: 10px;
        /* Kartlar arasındaki mesafeyi azaltmak için */
        text-align: center;
        transition: transform 0.2s;
    }

    .card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .card-title {
        font-size: 1rem;
        margin-top: 10px;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card a {
        text-decoration: none;
        color: inherit;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        min-height: 60vh;
    }

    @media (min-width: 576px) {
        .card {
            width: 120px;
            height: 120px;
        }
    }

    @media (min-width: 768px) {
        .card {
            width: 140px;
            height: 140px;
        }
    }

    @media (min-width: 992px) {
        .card {
            width: 160px;
            height: 160px;
        }
    }

    @media (min-width: 1200px) {
        .card {
            width: 180px;
            height: 180px;
        }
    }
</style>

<div class="container mt-5">
    <div class="card-container">
        <!-- Kartlar burada -->
        <div class="card">
            <a href="pages/student_login.php">
                <img src="../assets/images/student.png" alt="Student">
                <div class="card-body">
                    <h5 class="card-title">Öğrenci Girişi</h5>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="pages/teacher_login.php">
                <img src="../assets/images/teacher.png" alt="Teacher">
                <div class="card-body">
                    <h5 class="card-title">Öğretmen Girişi</h5>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="pages/admin_login.php">
                <img src="../assets/images/admin.png" alt="Admin">
                <div class="card-body">
                    <h5 class="card-title">Admin Girişi</h5>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="pages/admin_login.php">
                <img src="../assets/images/admin.png" alt="Admin">
                <div class="card-body">
                    <h5 class="card-title">Admin Girişi</h5>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="pages/admin_login.php">
                <img src="../assets/images/admin.png" alt="Admin">
                <div class="card-body">
                    <h5 class="card-title">Admin Girişi</h5>
                </div>
            </a>
        </div>
        

        <!-- Diğer kartlar da burada -->
    </div>
</div>

<?php include "../includes/footer.php"; ?>
