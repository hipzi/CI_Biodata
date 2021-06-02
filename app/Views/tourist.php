<?= $this->extend('layout') ?>

<?= $this->section('tourist') ?>
    <section class="section tourist" data-section="section3">
        <div class="container">
        <div class="section-heading">
            <h2>Tourist</h2>
            <div class="line-dec"></div>
        </div>
        <div class="row">
            <div class="isotope-wrapper">
            <form class="isotope-toolbar">
                <label
                ><input
                    type="radio"
                    data-type="*"
                    checked=""
                    name="isotope-filter"
                />
                <span>all</span></label
                >
                <label
                ><input
                    type="radio"
                    data-type="beach"
                    name="isotope-filter"
                />
                <span>beach</span></label
                >
                <label
                ><input
                    type="radio"
                    data-type="building"
                    name="isotope-filter"
                />
                <span>building</span></label
                >
                <label
                ><input
                    type="radio"
                    data-type="nature"
                    name="isotope-filter"
                />
                <span>nature</span></label
                >
            </form>
            <div class="isotope-box">
                <div class="isotope-item" data-type="beach">
                <figure class="snip1321">
                    <img
                    src="assets/images/3-color-beach.jpg"
                    alt="sq-sample26"
                    style="width:500px;height:350px;"
                    />
                    <figcaption>
                    <a
                        href="assets/images/3-color-beach.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                    ></a>
                    <h4>First Title</h4>
                    </figcaption>
                </figure>
                </div>

                <div class="isotope-item" data-type="beach">
                <figure class="snip1321">
                    <img
                    src="assets/images/asmara-bay-beach.jpg"
                    alt="sq-sample26"
                    style="width:500px;height:350px;"
                    />
                    <figcaption>
                    <a
                        href="assets/images/asmara-bay-beach.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                    ></a>
                    <h4>First Title</h4>
                    </figcaption>
                </figure>
                </div>

                <div class="isotope-item" data-type="beach">
                <figure class="snip1321">
                    <img
                    src="assets/images/goa-china.jpg"
                    alt="sq-sample26"
                    style="width:500px;height:350px;"
                    />
                    <figcaption>
                    <a
                        href="assets/images/goa-china.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                    ></a>
                    <h4>First Title</h4>
                    </figcaption>
                </figure>
                </div>

                <div class="isotope-item" data-type="building">
                <figure class="snip1321">
                    <img
                    src="assets/images/Jodipan-Village.jpg"
                    alt="sq-sample26"
                    style="width:500px;height:350px;"
                    />
                    <figcaption>
                    <a
                        href="assets/images/Jodipan-Village.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                    ></a>
                    <h4>Second Title</h4>
                    </figcaption>
                </figure>
                </div>

                <div class="isotope-item" data-type="building">
                <figure class="snip1321">
                    <img
                    src="assets/images/singosari-temple.jpg"
                    alt="sq-sample26"
                    style="width:500px;height:350px;"
                    />
                    <figcaption>
                    <a
                        href="assets/images/singosari-temple.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                    ></a>
                    <h4>Second Title</h4>
                    </figcaption>
                </figure>
                </div>

                <div class="isotope-item" data-type="*">
                <figure class="snip1321">
                    <img
                    src="assets/images/andeman.JPG"
                    alt="sq-sample26"
                    style="width:500px;height:350px;"
                    />
                    <figcaption>
                    <a
                        href="assets/images/andeman.JPG"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                    ></a>
                    <h4>Item Third</h4>
                    </figcaption>
                </figure>
                </div>

                <div class="isotope-item" data-type="*">
                <figure class="snip1321">
                    <img
                    src="assets/images/malang-night-paradise.jpg"
                    alt="sq-sample26"
                    style="width:500px;height:350px;"
                    />
                    <figcaption>
                    <a
                        href="assets/images/malang-night-paradise.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                    ></a>
                    <h4>Item Third</h4>
                    </figcaption>
                </figure>
                </div>

                <div class="isotope-item" data-type="nature">
                <figure class="snip1321">
                    <img
                    src="assets/images/Coban-Rondo.jpg"
                    alt="sq-sample26"
                    style="width:500px;height:350px;"
                    />
                    <figcaption>
                    <a
                        href="assets/images/Coban-Rondo.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                    ></a>
                    <h4>Item Fourth</h4>
                    </figcaption>
                </figure>
                </div>

                <div class="isotope-item" data-type="nature">
                <figure class="snip1321">
                    <img
                    src="assets/images/wonosari-tea.png"
                    alt="sq-sample26"
                    style="width:500px;height:350px;"
                    />
                    <figcaption>
                    <a
                        href="assets/images/wonosari-tea.png"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                    ></a>
                    <h4>Fifth Awesome</h4>
                    </figcaption>
                </figure>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
<?= $this->endSection() ?>