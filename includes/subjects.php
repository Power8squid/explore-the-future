<?php
$fromPages = basename(dirname($_SERVER['SCRIPT_FILENAME'] ?? '')) === 'pages';
$base = $fromPages ? '..' : '.';
?>
<section class="topics" id="amnen">
    <div class="wrap topics-intro">
        <h2>Ämnen vi utforskar</h2>
        <p>Här är några av de frågor vi har fördjupat oss i — öppna dörrar in i samtalen, inte färdiga svar.</p>
    </div>
    <div class="wide">
        <div class="link-container">
            <article class="link-card is-chart">
                <a href="<?php echo $base; ?>/pages/birthrate.php">
                    <div class="card-media">
                        <img src="<?php echo $base; ?>/bilder/birthrate.jpg" alt="Kurva över sjunkande födelsetal från 1950 till 2023">
                    </div>
                    <div class="card-copy">
                        <h3>Birth Rate</h3>
                        <p>Vi har vägt om mänskligheten bör bli fler eller färre — och vad som händer när födelsetalen faller snabbare än någon vågat räkna med. Bakom kurvan finns frågor om framtidstro, familj och vilket samhälle vi vill lämna vidare.</p>
                    </div>
                </a>
            </article>
            <article class="link-card">
                <a href="<?php echo $base; ?>/pages/ledarskap.php">
                    <div class="card-media">
                        <img src="<?php echo $base; ?>/bilder/ledarskap.jpeg" alt="Personer som hjälper varandra upp på en bergstopp">
                    </div>
                    <div class="card-copy">
                        <h3>Ledarskap</h3>
                        <p>Vi har sökt efter vad som egentligen gör en ledare bra, när resultat tar år att synas och mediokerhet kan gömma sig i bruset. Vi tror att tydlig riktning, integritet och modet att kräva mer är hur vi formar bättre ledarskap framåt.</p>
                    </div>
                </a>
            </article>
            <article class="link-card">
                <div class="card-copy-wrap">
                    <div class="card-media">
                        <img src="<?php echo $base; ?>/bilder/forandring.jpg" alt="Träbrickor som bildar orden change och chance">
                    </div>
                    <div class="card-copy">
                        <h3>Trygghet i förändring</h3>
                        <p>Vi lever i en tid där det enda som är säkert är att allt skiftar. Vi utforskar hur trygghet kan byggas mitt i osäkerhet — inte genom att hålla förändringen borta, utan genom att möta den tillsammans med tillit, tydlighet och en gemensam riktning.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
