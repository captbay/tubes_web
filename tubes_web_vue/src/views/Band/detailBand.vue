<template>
    <!-- Header Card -->
    <div class="container">
        <div class="row header-card">
            <div class="col mt-5 mb-5 pt-md-5 pb-md-5">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img class="img-fluid rounded-start"
                                src="https://akordmusic.com/asset/example1.jpg" alt="...">
                        </div>
                        <div class="col-md-7 align-self-center">
                            <div class="card-body p-5">
                                <p class="card-title h1">Band</p>
                                <p class="card-title h3">Rp 2.000.000,-</p>
                                <p class="card-text body1">
                                    Akordkustik ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Semper duis tellus suspendisse felis, odio vitae ultrices quam placerat. 
                                    Est nisl massa placerat facilisis etiam vulputate interdum ridiculus at. 
                                    Aliquet diam sit a volutpat.
                                </p>
                                <div class="button">
                                    <a class="btn btn-success mt-auto"><router-link :to="{ name: 'detailBand' }" class="dropdown-item">Book Now</router-link></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="container-fluid">
        <div class="row about-section justify-content-center">
            <div class="col-md-8 mt-5 mb-5 pt-md-5 pb-md-5">
                <p class="h1 text-center">
                    Biografi
                </p>
                <p class="body1 text-center mt-5 mb-md-5">
                    Akordkustik ipsum dolor sit amet, consectetur adipiscing elit. 
                    Tincidunt erat velit sodales gravida ullamcorper ultrices enim mattis sed. 
                    Nibh ut est sagittis in non eget ultrices interdum. Enim egestas nibh magna amet. 
                    Lectus donec morbi laoreet id egestas leo, fringilla. Platea interdum consequat eget etiam aenean dictum. 
                    Vulputate dignissim eget at dictumst ante at in lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Tincidunt erat velit sodales gravida ullamcorper ultrices enim mattis sed. Nibh ut est sagittis in non eget ultrices interdum. 
                    Enim egestas nibh magna amet. Lectus donec morbi laoreet id egestas leo, fringilla. Platea interdum consequat eget etiam aenean dictum. 
                    Vulputate dignissim eget at dictumst ante at in lectus.
                </p>
            </div>
        </div>
    </div>
</template>