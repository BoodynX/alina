@extends('layouts.app')

@section('content')
    <div class="container">

        <h6>Jak nie robić</h6>
        <div class="row">
            <div class="vid-in-list">
                <div><a href="videos/pokrecony_spawacz.mp4">
                        <video width="<?=$width?>" height="<?=$height?>" src="videos/pokrecony_spawacz.mp4" type="video/mp4"></video>
                </a></div>
                <div class="vtitle"><a href="videos/pokrecony_spawacz.mp4">Pokręcony spawacz</a></div>
            </div>
            <div class="vid-in-list">
                <div><video width="<?=$width?>" height="<?=$height?>" src="videos/dzwig_na_szczycie.mp4" type="video/mp4" controls></video></div>
                <div class="vtitle"><a href="videos/dzwig_na_szczycie.mp4">Dźwig na szczycie</a></div>
            </div>
            <div class="vid-in-list">
                <div><video width="<?=$width?>" height="<?=$height?>" src="videos/kolekcja_zdjec.mp4" type="video/mp4" controls></video></div>
                <div class="vtitle"><a href="videos/kolekcja_zdjec.mp4">Kolekcja zdjęć</a></div>
            </div>
        </div>
        <hr>
        <h6>Droga do bezpieczeństwa</h6>
        <div class="row">
            <div class="vid-in-list">
                <div><video width="<?=$width?>" height="<?=$height?>" src="videos/home_assesment.mp4" type="video/mp4" controls></video></div>
                <div class="vtitle"><a href="videos/home_assesment.mp4">HSE Home</a></div>
            </div>
            <div class="vid-in-list">
                <div><video width="<?=$width?>" height="<?=$height?>" src="videos/wirtualne_wypadki_i_zabezpieczenia.mp4" type="video/mp4" controls></video></div>
                <div class="vtitle"><a href="videos/wirtualne_wypadki_i_zabezpieczenia.mp4">Wirtualne wypadki i zabezpieczenie</a></div>
            </div>
            <div class="vid-in-list">
                <div><video width="<?=$width?>" height="<?=$height?>" src="videos/wypadek_vs_bezpieczenstwo.mp4" type="video/mp4" controls></video></div>
                <div class="vtitle"><a href="videos/wypadek_vs_bezpieczenstwo.mp4">Wypadek vs bezpieczeństwo</a></div>
            </div>
        </div>
        <hr>
        <h6>Wypadki</h6>
        <div class="row">
            <div class="vid-in-list">
                <div><video width="<?=$width?>" height="<?=$height?>" src="videos/upadek_z_rusztowania.mp4" type="video/mp4" controls></video></div>
                <div class="vtitle"><a href="videos/upadek_z_rusztowania.mp4">Upadek z rusztowania</a></div>
            </div>
        </div>

    </div>
@endsection
