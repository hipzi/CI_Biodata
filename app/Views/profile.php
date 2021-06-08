<?= $this->extend('layout') ?>

<?= $this->section('profile') ?>
    <section class="section about-me" data-section="section1">
        <div class="container">
            <div class="section-heading">
                <h2>About Me</h2>
                <div class="line-dec"></div>
            </div>
            <div class="card" id="profile">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-4">
                            <p class="profile-body" style="color: #000000; font-size:1vw;">
                                Full Name <br>
                                Nickname <br>
                                Gender <br>
                                Place, Date of Birth <br>
                                Age <br>
                                Nationality <br>
                                Religion <br>
                                Phone Number <br>
                                Address <br>
                                ZIP Code <br>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <p class="profile-body" style="color: #000000; font-size:1vw;">
                                : Zahratul Millah <br>
                                : Zahra <br>
                                : Female <br>
                                : Trenggalek, May 28th 2000 <br>
                                : 21 years old <br>
                                : Indonesia <br>
                                : Islam <br>
                                : 082131180100 <br>
                                : Akordion Street Number 3, Malang <br>
                                : 65143 <br>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href = "mailto: zahramillah582@gmail.com">
                                <button id="contact" type="button" class="btn btn-block" style="background-color:#d67f7d">
                                    <i class="fa fa-envelope" style="margin-right: 3px;"></i>
                                    Contact
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
$(".main-menu li:first").addClass("active");
<?= $this->endSection() ?>