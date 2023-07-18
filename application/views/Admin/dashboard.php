<!-- Dashboard Content Start -->
    <section class="dashboardContent">
        <div class="d-flex flex-row">
            <!-- Sidebar Section Start -->
                <?php $this->load->view('template/__Sidebar');?>
            <!-- Sidebar Section End -->
            <div class="container">
                <div class="content p-4">
                    <div class="d-flex flex-row">
                        <p class="fw-bold">Admin / Dashboard</p>
                        <p class="fw-bold ms-auto"><?= $user['username']?></p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>
<!-- Dashboard Content End -->