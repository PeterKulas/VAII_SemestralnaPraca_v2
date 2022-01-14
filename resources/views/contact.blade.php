@extends('layouts.main')

@section('title', 'Contact')

@section('content')
<div class="container-fluid g-0 ">
    <div class="row mt-5 g-0">
        <div class="main-container">
            <div class="contact-info">
                <h4>Kontaktuj nás</h4>
                <ul>
                    <li><i class="fa fa-location-arrow"></i>
                        <span>Oščadnica 188, 02301</span>
                    </li>
                    <li><i class="fa fa-envelope"></i>
                        <span>kontakt@gmail.com</span>
                    </li>
                    <li><i class="fa fa-phone-square"></i>
                        <span>(+421) 944 889 445</span>
                        <p>Podpora: 8:00-18:00</p>
                    </li>
                </ul>

                <div class="ci-footer">
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-twitter-square"></i>
                    <i class="fa fa-linkedin"></i>
                    <i class="fa fa-github-square"></i>
                </div>
            </div>
            <div class="contact-form">
                <span>Napíš nám mail</span>
                <form name="form">
                    <input type="text" id="fname" name="fname" placeholder="Meno" required><br>
                    <input type="text" id="fmail" name="fmail" placeholder="E-mail" required><br>
                    <textarea rows="6" cols="20" name="fTextArea" placeholder='Správa...' required></textarea>
                    <button type="submit" class="contact-btn">Odoslať</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection