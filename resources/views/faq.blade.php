<DOCTYPE html>
    <html lang="nl">

    <head>
        <meta charset="UTF8">
        <link rel="stylesheet" href="css/style-general.css">
        <link rel="stylesheet" href="css/style-faq.css">
        <title>FAQ</title>
    </head>

    <body>
    <div class="sidebar">
        <a href="welcome">Home Page</a>
        <a href="profile">Profile</a>
        <a href="dashboard">Dashboard</a>
        <a href="faq" class="active">FAQ</a>
        <a href="blog">Blog</a>
        <a>&nbsp</a>
        <a href="https://teams.microsoft.com/l/channel/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/Algemeen?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&amp;tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Teams</a>
        <a>------------------</a>
        <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/NL/5.-Onderwijs-examenregelingen/Onderwijs-en-examenregeling/OER-HZ-Bacheloropleiding-voltijd-2022-2023-DEF-13-juni.pdf">Examen Regeling </a>
        <a>------------------</a>
        <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf">ICT Implementation</a>
        <a>------------------</a>
        <a href="https://learn.hz.nl/course/view.php?id=23602#section-1">HZ Learn</a>
        <a class="hzlogo" href="https://hz.nl/"> <img src="img/hz-logo%20(1)_low.png" alt="HZ Logo" width="150" height="150"></a>
    </div>

    <header>
        <a class="twitterlink" href="http://www.twitter.com/@TubieSwims">
            <img src="img/twitterwit.png" alt="Twitter" width="50" height="50">
        </a>
        <a class="instalink" href="https://www.instagram.com/uriel.baron/">
            <img src="img/TQnew-Instagram-Qlogo-white-glyph-1200x1199.png" alt="Instagram" width="45" height="45">
        </a>
        <a class="maillink" href="mailto:baro0002@hz.nl ?subject=[Contact]">
            <img src="img/mail.png" alt="mail" width="55" height="55">
        </a>
        <a class="Githublink" href="https://github.com/UBaron">Ontdek mijn werk!</a>
    </header>

    <ul class="faq-list">
        @foreach($faq as $faq)
            <li>{{ $faq->question }}</li>
            <li>{{ $faq->answer }}</li>
            <li>{{ $faq->link }}</li>
        @endforeach
    </ul>

    <Main>
        <h2 class="faqtitle">frequently asked questions</h2>

        <div class="flip-box1">
            <div class="flip-box-inner1">
                <div class="flip-box-front1">
                    <h2 class="printtitle">Hoe print je iets uit op HZ?</h2>
                </div>
                <div class="flip-box-back1">
                    <ol>
                        <li>Kies je document die je wilt uitprinten.</li>
                        <li>Stuur een request naar de printer.</li>
                        <li>Ga met je studentenpas naar de printer.</li>
                        <li>Scan je studentenpas en selecteer je bestand.</li>
                        <li>Print daarna je bestand uit!</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flip-box2">
            <div class="flip-box-inner2">
                <div class="flip-box-front2">
                    <h2 class="scantitle">Hoe scan je een Document naar je laptop?</h2>
                </div>
                <div class="flip-box-back2">
                    <h2>Hier een video!</h2>
                    <a class="ScanLink" href="https://www.youtube.com/watch?v=fBV5OeNGiCU&t=115s"> Youtube</a>
                </div>
            </div>
        </div>

        <div class="flip-box3">
            <div class="flip-box-inner3">
                <div class="flip-box-front3">
                    <h2 class="scantitle">Hoe koop je iets in de HZ web shop?</h2>
                </div>
                <div class="flip-box-back3">
                    <ol class="shoptext">
                        <li>Ga naar <a class="shoplink"
                                       href="https://webshop.hz.nl/webshopapp/defaulten.aspx?menu=082076044027019251066025111065201099237062130097">HZ
                                Web Shop.</a> </li>
                        <li>Klik op het producht dat je wilt kopen/heen wilt gaan. </li>
                        <li>Doe het product in je winkelwagen.</li>
                        <li>Klik daarna op Checkout, en betaal je!</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flip-box4">
            <div class="flip-box-inner4">
                <div class="flip-box-front4">
                    <h2 class="covidtitle">Heb je Covid-19 opgelopen? Hier wat instructies!</h2>
                </div>
                <div class="flip-box-back4">
                    <h2>Covid-19? Geen stress! Hier wat instructies en een stappenplan!</h2>
                    <a class="CovidLink" href="https://hz.nl/actualiteiten/coronavirus/positief-getest"> Instructies HZ</a>
                </div>
            </div>
        </div>

        <div class="flip-box5">
            <div class="flip-box-inner5">
                <div class="flip-box-front5">
                    <h2 class="restitle">Hoe reserveer je een ruimte?</h2>
                </div>
                <div class="flip-box-back5">
                    <ol class="restext">
                        <li>Klik →<a class="reslink"
                                     href="https://hzuniversity.topdesk.net/tas/public/ssp/52a63378-addd-4b21-b808-571200fd8d0c">hier</a>←
                            om een reservering te maken! </li>
                        <li>Kies dan of je een werkplek, werkruimte, of een AV middel wilt reserveren. </li>
                        <li> Selecteer de dag en tijdstip.</li>
                        <li> Reserveren!</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="flip-box6">
            <div class="flip-box-inner6">
                <div class="flip-box-front6">
                    <h2 class="cartitle">Waar mag je parkeren? En hoe?</h2>
                </div>
                <div class="flip-box-back2">
                    <h2>Hier een link met alle instructies!</h2>
                    <a class="CarLink" href="https://hz.nl/over-de-hz/contact/middelburg#panel1185176"> HZ Parkeren</a>
                </div>
            </div>
        </div>
    </Main>
    </body>

    </html>




    <Directhost "C:/Users/baron/Desktop/GIT PULL" <Directory "C:/Users/baron/Desktop/GIT PULL"
