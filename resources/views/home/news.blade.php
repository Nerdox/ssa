<div id="news" class="news container p-5-5 sectmargin">
    <div class="newshead row mx-0 mb-4">
        <div class="col-md-8">
            <h2 class="font-silka-sb text-primary">Aktuality zo sveta aktuárov</h2>
        </div>
        <div class="col-md-4 d-md-flex justify-content-md-end align-self-md-center">
            <a href="#" class="btn btn-outline-primary" role="button" aria-disabled="true">Všetky články <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>

    <div class="row mx-0 row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        @for ($i = 1; $i < 5; $i++)
        <div class="col">
            <div class="card h-100 border-0 bg-transparent">
                <img src="{{ asset('storage/news/news_'.$i.'.png') }}" class="card-img-top rounded-0" alt="news_{{ $i }}">
                <div class="card-body">
                    <div class="card-small text-gray"><span class="fw-bold">Meno Priezvisko,</span><span class="font-silka-r"> 2.6.2021</span></div>
                    <p class="card-description mb-2 font-silka-sb text-dark-purple">Nunc scelerisque lacus dapibus, porta mauris vel, molestie odioimperdiet nibh.</p>

                    <a href="#" class="card-link">Zobraziť <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>