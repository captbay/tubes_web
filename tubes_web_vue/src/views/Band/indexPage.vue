<template>
    <body>
        <div class="banner text">
            <div class="banner-body">
                <div class="wrapper">
                    <div class="content">
                        <div class="text-center">
                            <h2>Our Best Band List</h2>
                            <h4>
                                AMP Group always ensures events with guaranteed quality 
                                and you are sure to get the best quality events in Indonesia. 
                                We also have a wide selection of events available to suit your needs. 
                                So, you can choose an event with the needs you want.
                            </h4>

                            <!-- <div class="container px-4 text-center"> -->
                                <div class="row gx-5">
                                    <div class="col">
                                        <div class="card text-center" style="width: 18rem;">
                                            <img src="/src/assets/logo.png" class="card-img-top" alt="...">
                                            <div class="card-body overflow-hidden">
                                                <h5 class="card-title">Band 1</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <router-link :to="{name: 'detailBand'}" class="btn btn-primary">See Profile</router-link>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card text-center" style="width: 18rem;">
                                            <img src="/src/assets/logo.png" class="card-img-top" alt="...">
                                            <div class="card-body overflow-hidden">
                                                <h5 class="card-title">Band 2</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <router-link :to="{name: 'detailBand'}" class="btn btn-primary">See Profile</router-link>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card text-center" style="width: 18rem;">
                                            <img src="/src/assets/logo.png" class="card-img-top" alt="...">
                                            <div class="card-body overflow-hidden">
                                                <h5 class="card-title">Band</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <router-link :to="{name: 'detailBand'}" class="btn btn-primary">See Profile</router-link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</template>