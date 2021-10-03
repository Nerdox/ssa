<div id="partners" class="partners sectmargin">
    <div class="container">
        <div class="partnershead text-center mb-5">
            <h2 class="font-silka-sb text-primary">Partneri projektu</h2>
            <div class="font-silka-r text-gray mw-50">Ďakujeme všetkým partnerom za ich veľkú podporu pri vzniku projektu, <br>ktorý zviditeľňuje aktuárstvo a ukazuje dôležitosť tohto povolania.</div>
        </div>

        <div class="plist text-center mb-5 p-5-5">

            <div class="border-top pt-4 pb-5">
                <h2 class="mb-4 font-silka-sb" style='color: goldenrod;'>Gold</h2>

                @foreach(File::glob(public_path('images').'/partners/gold/*') as $path)
                    <img class="mx-4 mt-3 mt-lg-0" src="{{ str_replace(public_path(), '', $path) }}" style="max-height: 90px;">
                @endforeach
            </div>

            <div class="border-top pt-4 pb-5">
                <h3 class="mb-4 font-silka-sb" style='color: #988ad3;'>Silver</h3>

                @foreach(File::glob(public_path('images').'/partners/silver/*') as $path)
                    <img class="mx-4 mt-3 mt-lg-0" src="{{ str_replace(public_path(), '', $path) }}" style="max-height: 60px;">
                @endforeach
            </div>

            <div class="border-top pt-4 pb-5">
                <h4 class="mb-4 font-silka-sb" style='color: #9c6f6b;'>Bronze</h4>

                @foreach(File::glob(public_path('images').'/partners/bronze/*') as $path)
                    <img class="mx-4 mt-3 mt-lg-0" src="{{ str_replace(public_path(), '', $path) }}" style="max-height: 50px;">
                @endforeach
            </div>

        </div>
    </div>
</div>