<style>
            .class-card {
                display: flex;
                /* Flexbox kullanarak kartları hizalar */
                justify-content: center;
                /* İçerik ortalanır */
                align-items: center;
                /* İçerik dikey olarak ortalanır */
                background-color: #f8f9fa;
                /* Soft background color */
                border: 1px solid #e0e0e0;
                /* Light border */
                border-radius: 10px;
                /* Rounded corners */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                /* Soft shadow */
                transition: transform 0.2s, box-shadow 0.2s;
                /* Smooth scaling and shadow on hover */
                text-decoration: none;
                /* Alt çizgiyi kaldır */
                color: inherit;
                /* Yazı rengini miras al */
                height: 150px;
                /* Kart yüksekliğini ayarlama */
                margin-bottom: 20px;
                /* Kartlar arasında boşluk bırakma */
            }

            .class-card:hover {
                transform: scale(1.05);
                /* Slightly enlarge on hover */
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                /* Darker shadow on hover */
            }

            .card-title {
                font-size: 1 rem;
                color: #333;
                /* Darker text color for contrast */
                font-weight: bold;
                /* Bold font for emphasis */
            }
        </style>
        <!-- Ana içerik (istatistikler) -->
        <div class="container my-5">
            <h3 class="text-center mb-4">İstatistikler</h3>
            <div class="row">
                <!-- Fakülte Sayısı -->
                <div class="col-md-3">
                    <a href="#" class="class-card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fakülte Sayısı</h5>
                            <p><?php echo $facultyCount; ?></p>
                        </div>
                    </a>
                </div>

                <!-- Bölüm Sayısı -->
                <div class="col-md-3">
                    <a href="#" class="class-card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bölüm Sayısı</h5>
                            <p><?php echo $departmentCount; ?></p>
                        </div>
                    </a>
                </div>

                <!-- Öğrenci Sayısı -->
                <div class="col-md-3">
                    <a href="#" class="class-card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Öğrenci Sayısı</h5>
                            <p><?php echo $studentCount; ?></p>
                        </div>
                    </a>
                </div>

                <!-- Öğretmen Sayısı -->
                <div class="col-md-3">
                    <a href="#" class="class-card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Öğretmen Sayısı</h5>
                            <p><?php echo $teacherCount; ?></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>