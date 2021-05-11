<!DOCTYPE html>

<!--Dette er siden for å få tilgang til alt i nettsiden min som har med PHP å gjøre-->

<html lang="en" lang="no">
<head>
    <!--Setter bredden på siden til 1, gjør at grids kan bli oppgitt i prosent-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <!--Gir ÆØÅ-->
    <meta charset="utf-8" />
    <!--Linker extern css sheet-->
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">

    <meta http-equiv="refresh" content="3000">

    <!--Website tab icon-->
    <link rel="icon" href="../mainbilder/minilogo.png">
    <title>Henrik Hub</title>
</head>
<body>

    <!--Selve siden er her-->
    <section id="phppageexp">

        <!--Meny og dropdown meny er her-->
        <div class="header"> <div class="homebtn"> <a href="../../index.html">Henrik's Hub</a></div> </div>

        <div class="header-menu">
            <!--Her er dropdown menyen-->
            <div class="dropdown">
                <button class="dropbtn">Fag</button>
                <div class="dropdown-content">
                    <a href="../undernettsider/teknologiforstaelse/tekno.html">Teknologiforståelse</a>
                    <a href="../undernettsider/404.html">Konsept og koding</a>
                    <a href="../undernettsider/prod-his-form/prod-his-form.html">Historie og prod</a>
                    <a href="../undernettsider/404.html">Naturfag</a>
                    <a href="../undernettsider/404.html">Engelsk</a>
                    <a href="../undernettsider/404.html">Kroppsøving</a>
                    <a href="../undernettsider/404.html">Matte</a>
                </div>
            </div>  

            <div class="dropdown">
                <button class="dropbtn">Annet skolerelatert</button>
                <div class="dropdown-content">
                    <a href="../undernettsider/tverrfaglig/tver-video-main.html">Tverrfaglige videoer</a>
                    <a href="../undernettsider/tverrfaglig/stream.html">Stream</a>
                    <a href="#">Raspi Værstasjon</a>
                </div>
            </div>

        </div>


        <!--Left space og right space gir mellomrommet på sidene-->
        <div class="left-space"></div>
        <div class="right-space"></div>
        <main>

            <!--Her er innholdet på siden -->
            <h2 class="phpmain1">Så, kort forklaring?</h2>

            <div class="php_paramain1">

                <p1>I denne oppgaven har vi laget to forskjellige programmer. 
                Vi lagde et program som er ansvarlig for å ta et bilde med kameraet for å så laste det opp til FTP serveren, 
                og et som tar realtime målinger av temperatur, luftfuktighet og trykk for å så laste det opp til SQL serveren vi ble tildelt. </p1>
                </br></br>
                <p1>Siden det var servere vi ble tildelt og vi ikke administrerte de selv, så hadde vi ikke mulighet for å lage egne kontoer osv. 
                Et problem med det er at innloggingen som står i php siden har tilgang til hele databasen vår, i motsetning til et system vi kunne 
                satt opp hvor php nettsiden bare kunne lese databasen. </p1>
                </br></br>
                <p1>Bildene vi tar med pien er tatt i .jpg format. Det er fordi det tar mindre plass og kvalitet ikke er nødvendig i dette prosjektet. 
                For å ha personvern, har vi tatt på en kraftig blur effekt som gjør at personer på mer en 2 m avstand er ugjenkjennelige. 
                Bildene som blir tatt lagres i en temp.jpg fil som overskrives og holdes oppdatert. Vi tar også en kopi med timestamp og legger den i arkivet. 
                Hensynet ved det er å se hvor mange som bruker grupperommet og når det er i bruk. </p1>
                </br></br>
                <a href="">Alt dette er lov i følge personvernprinsippene. <a>
                <p1>Plikten til oss som administrerer er å sørge for at dataene forblir anonyme, at dataene sikres og at de holdes oppdaterte. 
                Fotoene forblir anonyme ved blur effekten, iallefall nok til dette prosjektet. 
                Etter å ha skumlest i lovverket, ser det ut til at alle sensitiv personopplysninger skal slettes etter maks en uke. 
                Siden det er en så kraftig blur effekt, antar vi at det ikke er behov for å slette bildene innen det tidsrommet. </p1>

            </div>


            
            </div>


        </main>  
        <div class="footer"><p class="fotp">Henrik made this</p></div>
    </section>

</body>
</html>