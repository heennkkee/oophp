<?php
include('config.php');
$permafrost['title'] = 'Index';
$permafrost['content'] = <<<EOD
<h1>Rapporter</h1>
<p>Här finns alla rapporter för den här kursen.</p>
<h2>KMOM01</h2>
<p>
<b>Vilken utvecklingsmiljö använder du?</b><br>
Jag använder mig av Atom som texteditor och XAMPP som webserver, samma setup som från HTMLPHP. Använder mig av Cygwin som terminal.<br>
<b>Berätta hur det gick att jobba igenom guiden “20 steg för att komma igång PHP”, var något nytt eller kan du det?</b><br>
Jag läste igenom allting, hade redan gjort allting i början på HTMLPHP, så såg bara till att jag kom ihåg den.<br>
<b>Vad döpte du din webbmall Anax till?</b><br>
Jag döpte den till permafrost. Resonerade att 'väder'fenomen är ett enkelt tema att hitta på nya namn till. Namnet blev lite långt dock.<br>
<b>Vad anser du om strukturen i Anax, gjorde du några egna förbättringar eller något du hoppade över?</b><br>
Jag gillar tankesättet med att ha en grundlig mall som är enkel att bygga ut. Jag skapade ingen inläsning av javascript, eftersom jag inte laddade några. <br>
Jag flyttade in delar av min hemsida i <code>config.php</code>, exempelvis min meny/header/footer.<br>
<b>Gick det bra att inkludera source.php? Gjorde du det som en modul i ditt Anax?</b><br>
Jag hade en del strul med det, men det var eftersom jag glömt att skriva in <code>spl_autoload_register('myAutoloader')</code>, när jag fick dit det så gick allting bra.<br>
<b>Gjorde du extrauppgiften med GitHub?</b><br>
Ja det gjorde jag. Det är absolut bra att ha lite idéer om hur GitHub fungerar, det mesta finns liksom där.
</p>
<h2>KMOM02</h2>
<p></p>
<h2>KMOM03</h2>
<p></p>
EOD;

//Render the page
include(PERMAFROST_THEME_PATH);
