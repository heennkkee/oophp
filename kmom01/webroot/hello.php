<?php
include('config.php');
$permafrost['title'] = 'Index';
$permafrost['content'] = <<<EOD
<h1>Om mig</h1>
<p>Jag heter Henrik Aronsson,
bosatt sedan föralltid i Arboga, förutom en kort period i Luleå.
Arboga är en liten stad mittemellan Örebro och Västerås med cirkus 10 000
invånare.<br />Jag har vuxit upp på landsbygden och med alla dilemman det
innebär.... Bli hämtad utanför dörren av skolbussen, lugn och ro på
kvällarna, fin utsikt och behaglig skog. Inte jätteilla alltså!
</p>
<div class="pictureRight">
    <img src="img/storbild.jpg" width="424" alt="Bild på Henrik" />
    <p class="pictureInfo">Bild från ett fik i Vilnius, Litauen.</p>
</div>
<p>
Efter en händelselös grundskola hoppade jag på ett tekniskt program på det
lokala gymnasiet i Arboga, Vasagymnasiet. Passade mig utmärkt, har alltid haft
ett riktigt "sifferhuvud", och aldrig varit begåvad med orden, tyvärr.
</p><p>
Efter en halvintressant gymnasietid, fullspäckat av studiebesök på olika
SAAB-anläggningar land och rike runt (som skolan hade ett nära samarbete med)
så började jag på LTU, Luleås Tekniska Universitet. Vistelsen blev kort,
inte mer än 7 månader, insåg att jag inte visste vad jag ville göra och ville
verkligen inte spendera 5 år med "kanske det här".
</p><p>
Sitter i dagsläget på ett teknikföretag i Strängnäs, som utvecklar/tillverkar/säljer
konditionsövervakningsutrustning för kullager. Har där en tjänst som orderhanterare/systemadministratör,
perfekt med lite av varje i jobbet, då kanske man tillslut lär sig vad man vill
inrikta sig på!<br/>
Sitter hur som helst mycket med presentation av statistik från vårat affärssystem på jobbet
och har som ambition med det här kurspaketet att utveckla mig / kolla vilken nivå
min kunskap har hamnat på, akademiskt sett då, dessutom väldigt nyfiken på SQLite!<br/>
Hoppas min presentation är tillfredsställande för alla som orkar sig igenom den. Funderar
ni på något är det bara att höra av sig, antingen på <a href="http://www.facebook.com/haronsson1">Facebook</a> eller <a href="mailto:henrik.aronsson.94@gmail.com">Mail</a>, men dbwebb kanske är det bästa alternativet!
</p>
EOD;

//Render the page
include(PERMAFROST_THEME_PATH);
