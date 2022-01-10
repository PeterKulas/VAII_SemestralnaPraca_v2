@extends('layouts.main')

@section('title', 'Domov')

@section('content')
<div class="container-fluid g-0 min-vh-100 ">
    <div class="row g-0">
        <div class="col-sm-12 nadpis g-0">
            <h1>Vitajte na stránke BookRentu</h1>
            <label>“Svet je ako kniha a tí, ktorí necestujú, sú len na jednej strane.“
                ― Augustine of Hippo</label>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-sm-2 sluzby g-0">
            <span>Ponúkame vám:</span>
            <ul class="index-zoznamSluzieb">
                <li>Výpožička kníh</li>
                <li>Výmena kníh</li>
                <li>Vyhľadávanie kníh</li>
                <li>Čitateľský kútik</li>
                <li>Tlačenie dokumentov</li>
                <li>Vytváranie researchu</li>
                <li>Viazanie prác</li>
            </ul>
        </div>

        <div class="col-sm-5 g-0 justify-content-center">
            <div class="row boxes">
                <div class="row">
                    <div class="box col-sm-5 g-0">
                        <h3>Čo u nás nájdeš?</h3>
                        • množstvo domácich aj zahraničných titulov, od celosvetovo uznávaných autorov.
                    </div>
                    <div class="box col-sm-5 g-0">
                        <h3>Vytvor si účet!</h3>
                        • vytvorením účtu získaš prístup ku knihám, ktoré si môžeš požičiať.
                        Tak isto máš možnosť pridávať si knihy do obľúbených.
                    </div>
                </div>
                <div class="row">
                    <div class="box col-sm-5 g-0">
                        <h3>Chceš nám pomôcť ?</h3>
                        • neboj sa nás zazdieľať na jednej zo sociálnych sieti.

                        *TODO pridaj linky s iconami na IG, FB, ...
                    </div>
                    <div class="box col-sm-5 g-0">
                        <h3>Máš otázky?</h3>
                        • neváhaj nás kontaktovať na nižšie uvedenom linku.
                        Naši spolupracovníci pracuvú denne a budú sa ti snažiť
                        odpísať čo najskôr.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 image g-0 justify-content-center">
            <img class="imgIndex g-0" src="../images/book.png" alt="book">
        </div>
    </div>
</div>
@endsection