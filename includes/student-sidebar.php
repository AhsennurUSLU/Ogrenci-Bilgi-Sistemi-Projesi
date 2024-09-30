<style>
        /* Sidebar Stilleri */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
            padding-bottom: 20px;
            overflow-y: auto; /* Uzun içerik olursa kaydırma çubuğu ekler */
        }

        .sidebar .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto;
            display: block;
        }

        .sidebar .student-name {
            color: #ffffff;
            text-align: center;
            margin-top: 10px;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .sidebar .menu {
            margin-top: 20px;
            padding-left: 10px;
        }

        .sidebar .menu a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1rem;
            display: block;
            padding: 10px 0;
        }

        .sidebar .menu a:hover {
            background-color: #495057;
            border-radius: 5px;
            padding-left: 10px;
        }

       
    </style>


<div class="sidebar">
        <img src="https://via.placeholder.com/100" alt="Profil Fotoğrafı" class="profile-img">
        <div class="student-name">
            Öğrenci İsmi
        </div>
        <div class="menu">
            <a href="#">Anasayfa</a>
            <a href="#">Notlarım</a>
            <a href="#">Devamsızlık</a>
            <a href="#">Ders Kayıt</a>
            <a href="#">Transkript</a>
            <a href="#">Danışmanlık</a>
        </div>
    </div>

    <!-- İçerik -->
    <div class="content">
        <div class="card-container">
            <!-- Kartlar burada -->
            <div class="card">
                <a href="pages/student_login.php">
                    <img src="../assets/images/kep.png" alt="Student">
                    <div class="card-body">
                        <h5 class="card-title">Not Bilgilerim</h5>
                    </div>
                </a>
            </div>

            <div class="card">
                <a href="pages/teacher_login.php">
                    <img src="../assets/images/kep.png" alt="Teacher">
                    <div class="card-body">
                        <h5 class="card-title">Devamsızlık Bilgilerim</h5>
                    </div>
                </a>
            </div>

            <div class="card">
                <a href="pages/admin_login.php">
                    <img src="../assets/images/kep.png" alt="Admin">
                    <div class="card-body">
                        <h5 class="card-title">Ders Kaydı</h5>
                    </div>
                </a>
            </div>

            <div class="card">
                <a href="pages/admin_login.php">
                    <img src="../assets/images/kep.png" alt="Admin">
                    <div class="card-body">
                        <h5 class="card-title">Transkript</h5>
                    </div>
                </a>
            </div>

            <div class="card">
                <a href="pages/admin_login.php">
                    <img src="../assets/images/kep.png" alt="Admin">
                    <div class="card-body">
                        <h5 class="card-title">Danışmanlık İşlemleri</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
