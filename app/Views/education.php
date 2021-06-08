<?= $this->extend('layout') ?>

<?= $this->section('education') ?>
    <section class="section education" data-section="section2">
        <div class="container">
        <div class="section-heading">
            <h2>Education</h2>
            <div class="line-dec"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="service-item">
                <div class="first-service-icon service-icon"></div>
                <h4>Elementary School</h4>
                <p>
                    SDIT Insan Permata
                </p>
            </div>
            </div>
            <div class="col-md-6">
            <div class="service-item">
                <div class="second-service-icon service-icon"></div>
                <h4>Junior High School</h4>
                <p>
                    SMP Al Izzah International Islamic Boarding School
                </p>
            </div>
            </div>
            <div class="col-md-6">
            <div class="service-item">
                <div class="third-service-icon service-icon"></div>
                <h4>Senior High School</h4>
                <p>
                    SMA Al Izzah International Islamic Boarding School
                </p>
            </div>
            </div>
            <div class="col-md-6">
            <div class="service-item">
                <div class="fourth-service-icon service-icon"></div>
                <h4>College</h4>
                <p>
                    Sepuluh Nopember Institute of Technology
                </p>
            </div>
            </div>
        </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
$(".main-menu li:eq(1)").addClass("active");
<?= $this->endSection() ?>