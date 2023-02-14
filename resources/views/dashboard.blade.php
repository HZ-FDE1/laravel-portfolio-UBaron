<DOCTYPE html>
    <html lang="nl">

    <head>
        <meta charset="UTF8">
        <link rel="stylesheet" href="css/style-general.css">
        <link rel="stylesheet" href="css/style-dashboard.css">
        <title>Dashboard</title>
    </head>

    <body>
    <div class="sidebar">
        <a href="welcome">Home Page</a>
        <a href="profile">Profile</a>
        <a href="dashboard" class="active">Dashboard</a>
        <a href="faq">FAQ</a>
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

    <Main>
        <h1 class="dashtitle">Dashboard</h1>
        <div>
            <table class="tabel">
                <tr>
                    <th>Blok </th>
                    <th>Cursus</th>
                    <th>EC</th>
                    <th>Toets</th>
                    <th>Cijfer</th>
                </tr>
                <tr>
                    <td rowspan="3">1</td>
                    <td>1e cursus</td>
                    </td>
                    <td>5</td>
                    <td>Geschreven Tentamen</td>
                    <td class="voldoende">8.5</td>
                </tr>
                <tr>
                    <td rowspan="2"> 2e curses</th>
                    <td>5</th>
                    <td>Geschreven Tentamen</th>
                    <td class="voldoende">6.2</td>
                </tr>
                <tr>
                    <td>2,5</td>
                    <td>assesment</td>
                    <td class="voldoende">7.5</td>
                </tr>
                <tr>
                    <td rowspan="2">2</td>
                    <td rowspan="2">Object Oriented Programming</td>
                    <td rowspan="2">10</td>
                    <td>Case Study (50%)</td>
                    <td class="voldoende">5.5</td>
                </tr>
                <tr>
                    <td>Project (50%)</td>
                    <td class="voldoende">8.5</td>
                </tr>
                <tr>
                    <td rowspan="4">3</td>
                    <td>Framework Development 1</td>
                    <td> 5</td>
                    <td>Case study</td>
                    <td class="TBA">TBA</td>
                </tr>
                <tr>
                    <td rowspan="3">Framework Project 1</td>
                    <td rowspan="3">7,5</td>
                    <td>Project (33%)</td>
                    <td class="TBA">TBA</td>
                </tr>
                <tr>
                    <td>Study (33%)</td>
                    <td class="TBA">TBA</td>>
                </tr>
                <tr>
                    <td>Report (33%)</td>
                    <td class="TBA">TBA</td>
                </tr>
                <tr>
                    <td rowspan="4">4</td>
                    <td rowspan="4">Framework Prokect 2</td>
                    <td rowspan="4">10</td>
                    <td>portofolio (50%)</td>
                    <td class="TBA">TBA</td>
                </tr>
                <tr>
                    <td>Project (25%)</td>
                    <td class="TBA">TBA</td>
                </tr>
                <tr>
                    <td>Assesment (25%)</td>
                    <td class="TBA">TBA</td>
                </tr>
            </table>

            <table class="cijfers">
                <tr>
                    <th class="onvoldoende">Onvoldoende</th>
                    <th class="nietgdn">Nog niet gedaan</th>
                    <th class="voldoende">Voldoende</th>
                </tr>
            </table>
        </div>


        <div>
            <h2 class="ptitle">Mijn EC progressie:</h2>
            <label class="plabel" for="progressbar">12.5/60 EC</label>
            <progress class="pbar" id="progressbar" value="12.5" max="60"> 0%</progress>
        </div>

        <div>
            <h2 class="nbsatitle"> NBSA Boundary</h2>
            <h4 class="nbsatext"> Je moet minimaal 45 studiepunten behalen om verder te mogen gaan met de studie.</h4>
        </div>

        <div>
            <h2 class="extraec"> Extra studiepunten! </h2>
            <h3 class="ectext">In totaal kun je nog 15 "extra" studiepunten behalen, 2,5 EC en 12,5.
                De 2,5 (1,25 EC Q1 en 1,25 EC Q2) kun je behalen door goed mee te doen,
                de 12,5 kun je behalen om een goede portofolio in te leveren van het gehele jaar!
            </h3>
        </div>


    </Main>
    </body>

    </html>



    <Directhost "C:/Users/baron/Desktop/GIT PULL" <Directory "C:/Users/baron/Desktop/GIT PULL"
