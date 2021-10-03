<div id="career" class="career sectmargin bg-light-gray mx-2 mx-lg-5">
    <div class="container p-5-5">
        <div class="careerhead row mx-0 mb-4">
            <div class="col-md-8">
                <h2 class="font-silka-sb text-primary">Voľné pracovné pozície</h2>
            </div>
            <div class="col-md-4 d-md-flex justify-content-md-end align-self-md-center">
                <a href="#" class="btn btn-outline-primary" role="button" aria-disabled="true">Zobraziť všetko <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>

        <div class="row mx-0 row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @for ($i = 0; $i < 8; $i++)
            <div class="col">
                <div class="card h-100 rounded-0">
                    <div class="card-body p-4">
                        <p class="card-text">Junior Analyst</p>
                        <p class="card-description mb-3">Nunc scelerisque lacus dapibus, porta mauris vel</p>
                        <div class="card-small text-gray mb-5"><span class="font-silka-r">Nástup:</span> 20.8.2021</div>

                        <a href="#" class="card-link">Zobraziť <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>