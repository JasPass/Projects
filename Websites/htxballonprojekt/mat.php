<?php
	require 'php/core.inc.php';
	require 'php/connect.inc.php';
    ?>
<!Doctype html>

<html>
<head>
<meta charset="windows-1252"/>
<link type="text/css" rel="stylesheet" href="css/main.css">
<link type="text/css" rel="stylesheet" href="css/styles.css">
<link rel="shortcut icon" href="http://icons.iconarchive.com/icons/mixthepix/jules-verne/32/Hot-Air-Balloon-icon.png">
<script type="text/javascript" src="http://latex.codecogs.com/latexit.js"></script>
<title>BPM - Keep Organized</title>
</head>
<body>
<?php require 'php/top_of_site.inc.php'; ?>
<div class="frame">
<section >
<h2>GeoGebra</h2>
<div class="text" >
I denne guide kan du lære hvordan man kan anvende matematik programmet GeoGebra til de matematiske aspekter af Ballon Projektet.<br>
Følgende punkter vil blive gennemgået i denne guide:<br>
<ul style="list-style-type:circle; margin: 5px 0px 5px 25px" >
<em>
<li>Hvordan man indtegner funktion, og anvender variabler</li>
<li>Hvordan man anvender skydere</li>
<li>Hvordan man konstruerer geometriske figure i GeoGebra</li>
</em>
</ul>
</div>
<h3>Funktioner og varibabler i GeoGebra</h3>
<div class="text" >
For at indtegne en funktion i Geogebra behøver man blot, at skrive sin funktionsforskrift i inutfeltet.<br>
Funktioner kunne fx. skrives således:<br>
<ul style="list-style-type: circle; margin: 5px 0px 5px 25px" >
<em>
<li>f(x)=x</li>
<li>y=x<sup>2</sup></li>
<li>e<sup>x</sup></li>
</em>
</ul>
</div>
<applet name="ggbApplet" code="geogebra.GeoGebraApplet" archive="geogebra.jar"
codebase="http://www.geogebra.org/webstart/3.2/unsigned/"
width="580" height="375"mayscript="true" >
<param name="ggbBase64" value="UEsDBBQACAAIACuNpUIAAAAAAAAAAAAAAAAMAAAAZ2VvZ2VicmEueG1s5VZLb9swDD6vv0LQaQPWxk6adgXsFlkHDBu6DWi6HnaTbcbWqkieJKdOfv0oycqjxYAedutJFElTHz8+kuyqXwqyAm24kjlNTxJKQJaq4rLOaWcXxx/o1eVRVoOqodCMLJReMpvTycmYOn3HL4/eZKZRj4QJ73LP4TGnVndAiWk1sMo0ADaoF0wY1LOu54Izvf5R/IbSmp0hxPgi287GIOWyuuEmXkf+vVZw+4mveAWaCFXm9GyKyFG6B215yUROT5OgGWNa5+mBEVUTZ22U5hslrXPfBResAIH5z+1aACErZ50E0wKdCTF8Axh07HTZyFOQQVcKXnEmXZ4eIjoR8sgr2+Dn51N8DXjdOOpOz0O0UildzdfGwpL0v0Arh/TClWB9cDMIGR+cJt60f/NhYDUHaxGwIawHE2mrNa+2vLrLF/NRiZ2qVVzaa9baTvtiTwaVTzun+JR2eGeyFjDokMWygfKhUP08cDAJoe/Wrf/E4ynqayWUJjqn4ynmXQ9nEU7v44BuvRLvk3iPIYYLurWnF2Pv4c8inKFSXAZoQ+JpzDpN4jPcEKdwLGKPRm58iXNKSSe5vYkX7I2HXabO/3u3LHA29rtjGzL9TyGz0ZPeyR5ASxChQyQWtlOdCW0YSudxVFDyJV6DYSCEuWL9RABBW0GtIeIOkxXo8tZkvwufqLNRBOEwGMRaWtwQmI91ubgJtjg9Ob1uNM4mYn9PvoJpcRxVTW6ZWSLk9OSM3N59pqRi1n3kxqTHjWDcsgmEEcwJN07f4vm2f0dy0vvnQcAScNasb6xFJ/3zW5YX9LD8tkGeJQZ2TAwfDen51aT8mnlSqj0y0f6PbsSN1DYMpThtgq0xyX0CfbhvqjqklUksj+cM57t1AVwDtAChdSJG0mJAP397cF6QGHZNoOgZWVgvXm6TLF89U7ggeQ1yhWkpbQjpk4CRrJPhB28ThT7N6bGX1ungtEmDzQdCmJr3ZJZEt1l0m42jMInCaRSmThj2HvyRAa4JSwE7X/CS22clfT4n9TAndZgTlFF4ybDUr74F9pkd7e8z//s9/LW5/AtQSwcIEKFkwiADAAAMCQAAUEsBAhQAFAAIAAgAK42lQhChZMIgAwAADAkAAAwAAAAAAAAAAAAAAAAAAAAAAGdlb2dlYnJhLnhtbFBLBQYAAAAAAQABADoAAABaAwAAAAA="/>
<param name="image" value="http://www.geogebra.org/webstart/loading.gif"  />
<param name="boxborder" value="false"  />
<param name="centerimage" value="true"  />
<param name="java_arguments" value="-Xmx512m -Djnlp.packEnabled=true" />
<param name="cache_archive" value="geogebra.jar, geogebra_main.jar, geogebra_gui.jar, geogebra_cas.jar, geogebra_export.jar, geogebra_properties.jar" />
<param name="cache_version" value="3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0" />
<param name="framePossible" value="true" />
<param name="showResetIcon" value="true" />
<param name="showAnimationButton" value="true" />
<param name="enableRightClick" value="true" />
<param name="errorDialogsActive" value="true" />
<param name="enableLabelDrags" value="false" />
<param name="showMenuBar" value="false" />
<param name="showToolBar" value="false" />
<param name="showToolBarHelp" value="false" />
<param name="showAlgebraInput" value="true" />
<param name="allowRescaling" value="true" />
This is a Java Applet created using GeoGebra from www.geogebra.org - it looks like you don't have Java installed, please go to www.java.com
</applet>
<div class="text" >
For at indsætte en variabel i GeoGebra skal man blot gå ned i input feltet og indtaste sin variabels navn og værdi.<br>
<ul style="list-style-type: circle; margin: 5px 0px 5px 25px" >
<em>
<li>fx. x=5</li>
</em>
</ul>
Når man har defineret sine varibaler kan man efterfølgende bruge dem i sine funktioner således:<br>
<ul style="list-style-type: circle; margin: 5px 0px 5px 25px" >
<em>
<li>a=2</li>
<li>b=3</sup></li>
<li>f(x)=ax+b &rarr; f(x)=2x+3</li>
</em>
</ul>
<em>Note: i vinduet nedenfor kan man kun se at der er brugt variabler i funktionen ved, at den ligger under afhængie objekter</em>
</div>
<applet name="ggbApplet" code="geogebra.GeoGebraApplet" archive="geogebra.jar"
codebase="http://www.geogebra.org/webstart/3.2/unsigned/"
width="580" height="375"mayscript="true">
<param name="ggbBase64" value="UEsDBBQACAAIACKSpUIAAAAAAAAAAAAAAAAMAAAAZ2VvZ2VicmEueG1s3VVNb9QwED3Dr7B84nM32e22VEpaQZFQUQGpW3rg5iSzialjR7azzfbXM7aT7EdVARInTo5nJuP33szYyXlXC7IGbbiSKY0nESUgc1VwWaa0tau37+j52fOkBFVCphlZKV0zm9L5ZEadveVnz58lplL3hAkfcsvhPqVWt0CJaTSwwlQANphXTBi0s7bjgjO9+Zb9hNyarSPkuJRNa4ckeV1ccTNsp/68RnD7ka95AZoIlaf0eIHI8esWtOU5Eyk9ioJlhrRO4j0nmubOWynNH5S0LnybXLAMBPJf2o0AQtbOOw+uFQYTYvgDYNKZsyVTL0ECbS54wZl0PD1EDCLknhe2wt9PFnga8LJy0h2dhGy5UrpYboyFmnQ/QCuH9NSVYLO3MwgZD1xE3rW782lgvQRrEbAhrAMzyFZqXoy6us2l+aDE1tQoLu0Fa2yrfbHnvcnTTikepR3e97IU0NtQxbyC/C5T3TJoMA+pbzaN/8XjycoLJZQmOqWzBfIu+zULq49xQMeoyMdEPqLP4ZKO/vh05iP8moU1VIrLAK0nHg+s42g4hhviDE5F7NFBG1/ilFLSSm6vhg32xt2WqYv/2tYZzsZud4wp43+UMpke9E5yB1qCCB0isbCtak1ow1A6j6OAnNe4DY5eEOaK9R0BBGsBpYYBd5isIJf3RrtdeGBOpgMIh8Eg1tziDYF8rOPiJtji9KT0otI4m4j9DfkMpsFxVCW5ZqZGyPHkmFzffKKkYNb95MZEQA04Q9Y3jGxr0DwfxWPUAUIUbY9lNvS4v2CUvyzGBu5/2tEEA55oKrxYmorh1yQehnyDWHd18Om+qKI/Oh4URZU9dRzTJiTAaw0gdIDtG580mNCP0QgH6xrI/pZ2dkh7/r/Q7vD+N+5pGVHj89JhvtWL7iVJCSOvSEdek4yS6SOZVq30TbelTPeH3lY4XRIPcP0/Ynos3N6A/qVu0R/qFh3eSE+C2xVoujtc/jHp39mzX1BLBwi/UF9z6QIAAJkHAABQSwECFAAUAAgACAAikqVCv1Bfc+kCAACZBwAADAAAAAAAAAAAAAAAAAAAAAAAZ2VvZ2VicmEueG1sUEsFBgAAAAABAAEAOgAAACMDAAAAAA=="/>
<param name="image" value="http://www.geogebra.org/webstart/loading.gif"  />
<param name="boxborder" value="false"  />
<param name="centerimage" value="true"  />
<param name="java_arguments" value="-Xmx512m -Djnlp.packEnabled=true" />
<param name="cache_archive" value="geogebra.jar, geogebra_main.jar, geogebra_gui.jar, geogebra_cas.jar, geogebra_export.jar, geogebra_properties.jar" />
<param name="cache_version" value="3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0" />
<param name="framePossible" value="true" />
<param name="showResetIcon" value="true" />
<param name="showAnimationButton" value="true" />
<param name="enableRightClick" value="true" />
<param name="errorDialogsActive" value="true" />
<param name="enableLabelDrags" value="false" />
<param name="showMenuBar" value="false" />
<param name="showToolBar" value="false" />
<param name="showToolBarHelp" value="false" />
<param name="showAlgebraInput" value="true" />
<param name="allowRescaling" value="true" />
This is a Java Applet created using GeoGebra from www.geogebra.org - it looks like you don't have Java installed, please go to www.java.com
</applet><br><br>
<h3>Skydere i GeoGebra</h3>
<div class="text">
I GeoGebra kan skydere bruges til at manuelt at ændre på en variabels værdi.<br>
Skydere kan indsættes på 2 måder:
<ul style="list-style-type: circle; margin: 5px 0px 5px 25px" >
<em>
<li>fra top menuen - det næstsidste felt</li>
<li>ved at højreklikke på en variabel i algebra-vinduet og trykke: vis objekt.</li>
</em>
</ul>
</div>
<applet name="ggbApplet" code="geogebra.GeoGebraApplet" archive="geogebra.jar"
codebase="http://www.geogebra.org/webstart/3.2/unsigned/"
width="580" height="375"mayscript="true">
<param name="ggbBase64" value="UEsDBBQACAAIAEGUpUIAAAAAAAAAAAAAAAAMAAAAZ2VvZ2VicmEueG1szVXBTtwwED2Xr7B8Lmyyy7JFSkAtlSoqWiSWcujNSWYTFyeObAeyfH3H4yS7IKFWaiv15HjGHr+ZN2+SnPe1Yg9grNRNyuOjiDNocl3Ipkx55zaH7/j52UFSgi4hM4JttKmFS/niaM69vZNnB28SW+lHJhQduZPwmHJnOuDMtgZEYSsAF8wboSzaRddLJYXZXmc/IHd25wgxLpu2c2OQvC6upB23M3qvVdJ9lA+yAMOUzlN+skTk+HUHxslcqJQfR8Eyx7RW8TMnmhbeW2kjn3Tj/PFdcCUyUJj/2m0VMPbgvYvg2uBhxqx8Agw697ZkRiVIoMuVLKRofJ4EEQ8x9igLV+H11RJfA1lWvnTHqxAt19oU6611ULP+OxjtkZ56CrbPdhYh44PLiFz7OwoDD2twDgFbJnrY1bI0shhr6L8v7Qetisndatm4C9G6zhDZi8FEaaccnzIe7/umVDDYsIp5Bfl9pvt1qMEihL7dtnSF8GTlhVbaMJPy+RLzLoc1Cyud8UCnUxGdiejEEMMHnfzx6ZxO0JqFNTAlmwBtSDwek46j8RlpmTf4KmKPTskTxynnrGukuxo32Bz3u1T9ha9dnaE49ttjihn/rZjJ7EX3JPdgGlChRxqkttOdDY0Y3iIgBeSyxm1wDCURnq5vCCBYCygNjMCDtkLByBvt9+ELczIbQXgMFrHmDmcE5uN8Ll7DDvWT8ovKoDoR+1v2GWyLgtQluxG2Rsjx0Qm7uf3EWSGcv+SFoqAGVJGjlmm6GozMp+IJ7gEhim7EMnY5jRhN42Js6uHOjhp0v9JUOFjaSvhw8SjyLSLdrwJFu95sLDjWp/wwRrq2uK723F90MeAawlhFI6iWODwPl16ftcDL9CUyq1XnYJ0jBc2VzoWjIRvAD5MhjkjVvdfSnPTtJwvJfiN72Mn1lVk1KcBV2GgNWOtbYajuqIIG+4TIw1HThiLgaAYITTyeZS0WhUbB1GTYmYGuXxKX/R5xz6Wy18x/Tt0/5SYwgtzM/0tuZvsSpZ/S8L8++wlQSwcIIwCDlggDAADhBwAAUEsBAhQAFAAIAAgAQZSlQiMAg5YIAwAA4QcAAAwAAAAAAAAAAAAAAAAAAAAAAGdlb2dlYnJhLnhtbFBLBQYAAAAAAQABADoAAABCAwAAAAA="/>
<param name="image" value="http://www.geogebra.org/webstart/loading.gif"  />
<param name="boxborder" value="false"  />
<param name="centerimage" value="true"  />
<param name="java_arguments" value="-Xmx512m -Djnlp.packEnabled=true" />
<param name="cache_archive" value="geogebra.jar, geogebra_main.jar, geogebra_gui.jar, geogebra_cas.jar, geogebra_export.jar, geogebra_properties.jar" />
<param name="cache_version" value="3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0" />
<param name="framePossible" value="true" />
<param name="showResetIcon" value="true" />
<param name="showAnimationButton" value="true" />
<param name="enableRightClick" value="true" />
<param name="errorDialogsActive" value="true" />
<param name="enableLabelDrags" value="false" />
<param name="showMenuBar" value="false" />
<param name="showToolBar" value="true" />
<param name="showToolBarHelp" value="false" />
<param name="showAlgebraInput" value="true" />
<param name="allowRescaling" value="true" />
This is a Java Applet created using GeoGebra from www.geogebra.org - it looks like you don't have Java installed, please go to www.java.com
</applet>
<div class="text">
Skydere, variabler og funktioner kan bruges i sammenhæng for at få et overblik over hvilken effekt en funktions varibaler har.<br>
Her et eksempel med cirklens ligning hvor alle varibaler kan indstilles ved hjælp af en skydere.<br><br>
<em>Note: man kan ændre skyderes engenskaber ved at højreklikke på dem og trykke: egenskaber</em>
</div>
<applet name="ggbApplet" code="geogebra.GeoGebraApplet" archive="geogebra.jar"
codebase="http://www.geogebra.org/webstart/3.2/unsigned/"
width="580" height="450"mayscript="true">
<param name="ggbBase64" value="UEsDBBQACAAIAFWVpUIAAAAAAAAAAAAAAAAMAAAAZ2VvZ2VicmEueG1s3VZRb9s2EH5efgXBpxRbYsmOkwawUngZULTINiDu+tCHApR0lrhQpEpSjpxfvyMp2qqLoGnRh3RPJO9Ox+/uuztx8apvBNmANlzJjKanCSUgC1VyWWW0s+uTl/TV1dGiAlVBrhlZK90wm9HZ6ZQ6ecevjn5ZmFrdEya8yXsO9xm1ugNKTKuBlaYGsEG8ZsKgnHU9F5zp7d/5v1BYs1cEH29k29nopGjKG27iceLvawW3f/ANL0EToYqMns8ROe7eg7a8YCKjZ0mQTDGsi/QzJYpmTlsrzR+UtM5871ywHATGv7JbAYRsnHYWVGs0JsTwB0CnUydbTHwKFtAVgpecSRenh4hGhNzz0tb4+cUcbwNe1S51ZxfBW6GULldbY6Eh/QfQyiG9dBRsPzsZhIwXzhOvGp+8G9iswFoEbAjrwcS0VZqX4/0b87sS5S7TreLSXrPWdtpzPRtEPuqM4k3awV3KSsAgwyQWNRR3uepXIQWz4PrdtvWfeDh5da2E0kRndDrHsKthzcPqbRzOnVXibRJvMfhwTnf69HLqLfyahzUQxWWANsSdxqDTJF7DDXECl0Qs0ZgOz3BGKekktzfxgKVxt4/U2f/VNTm2xrg4di7TH+RyMTkoncUdaAkiFIhEXjvVmVCFgTqPo4SCN3gMiiEhzJH1DwII0hIqDRF3aKyQLq9NxkV4IF5MIgiHwSDWwuKAwHisi8U1sMXmyeh1rbE1Eftv5C2YFrtRVeSWmQYhp6fn5Pbda0pKZt1HrksENIAtZH3ByK4BzYtd8hh1gBBFF7HEEvfzRflZcZDwPTOofqSkcKq0NXPu0tjhW0Q6zoL39qcqh4sHOyP8gGk4jsaTqeu+hvWYbbdjuVGis7AqMMfyRhXM+hEa0A19nya+Z3s3b3zz4qDyM3bNe9j34iNzaFfetsY6kmCMY3pIXixxiWXgucEx0oYYcewChBKNtqTFmH2f72oICy+w8VVe8v8xL9PpZSQm+emI0YfEpM+IGB+w5yX9Hl4iLbPk5XPkpceXjXGPpphXZAWFGT3uyQlhLz4eYzW+IL+S4y2e83jOiA47SiZf0IujdkRuQZ8c0+Nsj/4YT6E7eSLdyTckHF89IDcITWlDSJ8M9bBNwoXkIUr6FLs5jMl0ED2ko5pG2jTvyTLaL6PVEt9zJ2E3G5wuz6Kv5XzYBTCfZABswl+ZN/iSLLg95Hcy/u35V97wAL76D1BLBwjfbPC/lAMAADILAABQSwECFAAUAAgACABVlaVC32zwv5QDAAAyCwAADAAAAAAAAAAAAAAAAAAAAAAAZ2VvZ2VicmEueG1sUEsFBgAAAAABAAEAOgAAAM4DAAAAAA=="/>
<param name="image" value="http://www.geogebra.org/webstart/loading.gif"  />
<param name="boxborder" value="false"  />
<param name="centerimage" value="true"  />
<param name="java_arguments" value="-Xmx512m -Djnlp.packEnabled=true" />
<param name="cache_archive" value="geogebra.jar, geogebra_main.jar, geogebra_gui.jar, geogebra_cas.jar, geogebra_export.jar, geogebra_properties.jar" />
<param name="cache_version" value="3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0" />
<param name="framePossible" value="true" />
<param name="showResetIcon" value="true" />
<param name="showAnimationButton" value="true" />
<param name="enableRightClick" value="true" />
<param name="errorDialogsActive" value="true" />
<param name="enableLabelDrags" value="false" />
<param name="showMenuBar" value="false" />
<param name="showToolBar" value="true" />
<param name="showToolBarHelp" value="false" />
<param name="showAlgebraInput" value="true" />
<param name="allowRescaling" value="true" />
This is a Java Applet created using GeoGebra from www.geogebra.org - it looks like you don't have Java installed, please go to www.java.com
</applet>
<br><br>
<h3>Geometriske konstruktioner i GeoGebra</h3>
<div class="text">
Man kan i GeoGebra konstruerer dynamiske figure ved hjælp af de værktøjer man kan finde i top menuen.<br>
Man kan nemt lave simple geometiske figure som fx. trapezer og cirkler.<br>
Her et emskempel hvor følgende værktøjer er brugt:
<ul style="list-style-type: circle; margin: 5px 0px 5px 25px" >
<em>
<li>Nyt punkt - fra det 2. felt</li>
<li>Linjestykke mellem to punkter - fra det 3. felt</li>
<li>Cirkel udfra centrum og radius - fra det 6. felt</li>
</em>
</ul>
</div>
<applet name="ggbApplet" code="geogebra.GeoGebraApplet" archive="geogebra.jar"
codebase="http://www.geogebra.org/webstart/3.2/unsigned/"
width="580" height="450"mayscript="true">
<param name="ggbBase64" value="UEsDBBQACAAIAMuepUIAAAAAAAAAAAAAAAAMAAAAZ2VvZ2VicmEueG1s3VhLc9s2ED43vwLDc22RetjNjOgMLXc67iT1TOTmkBtIrijUIMACoC3513fxICVZiRt14k7kE4ndxWL3+3YBkNN3q5qTe1CaSZFGyWkcERCFLJmo0qg1i5NfoncXb6YVyApyRclCqpqaNBqdDiMrb9nFm5+meikfCOXO5BODhzRaUK4hIrpRQEu9BDA7ctquGGdUrW/yv6AweqPwTq5F0+IqRrUoK+ryPdPdcOAWbDgzV+yelaAIl0UanU0wdHz7BMqwgvI0GsdeMsS8zpMdJYpGVruUij1KYaz5xjmnOXAEYG7WHAi5t9qRVy3QmBDNHgGdDq1sOnAYTKEtOCsZFTZPFyIaEfLASrNMo8nkDFcDVi0tduNz762QUpXztTZQk9VnUDKNhueOg7UfJecjO9IYMi44iZ1qe+TcwP0cjMGANaEr2GBZKVZ2GNr3a30pedmrG8mEmdHGtMqxPQoil3Ya4VLKxpuJikOQIYrFEoq7XK7mHoORd327btwUF09ezSSXiihMZzJBg/DM/dPZ2EB7q9jZxM4i+LBOe33ydugs3DP3T88UEz60kHjSJZ3E3TJMEyuwKGKR9sk7jtMoIq1g5n03wOK426RqJ/zR1jl2x3Z59D6T7+VzOnhSPdM7UAK4rxGB1Lay1b4Q/VoukBIKVuPQKwIk1NL1JwbgpSVUCrrAfW95wJw23q7DJ+LpoAvCxqAx1sLgJoH5GJuL7WGD/ZNGs6XC7sTYfya/g26wIWVFPlJdY8jJ6Rn5ePtbREpq7CTbKBxqwC4yrmRcxfXQZVG/m0i3MXTlG/QbElD9xfJxhUZ5s6Qo6RqE0zVGtZ2x83ezWGgwZIWbB7bVru6DLHcxogKxdgBguzbWuWWzASjDtmlCC5AGl3MNtUWVQ1jbpU4mronxxc169LOdke8+u21sthwsDY/XvyB3+b8i93LojAM63xWc2SsBZ/gS4Fy9EnCSF+mrX18HOqMATnwoNoWsaypKImiN68yYKjg4SJi9oREaW4gITTDPzqVsTacqvLvgZA9qPFdY0UNZRLtHulniySlAa3u29YkOnudjK/uvERL/dzq+KTi85YG4x9Ck0oSs4sDUOu7g7yQrRO3E3+mSrqmTLW6QecVWJOvss84qw/urO0ayUfCZjdGVIzmbBKc+lr+Fj1f7GwiWTsEWrHie5jlUVv6E50vP82yPZfo8yzp46yiiPz7Pm8aJQ+MMQ+Oc9GX+bbXwBH9W44dLwUyPIbdNey0M3gfB3a/2r3l3AI29X9+IW0WFtl9g3mbr+ngQkVdfIzI/jMj8mIjsD8/+fHD9cuRUhp7M9qgsD6OyPCYq95h8e/xEZp7Iqz0i4TAi4ZiI7DbXceBx/GPzONj+DnZ/fsJfsYt/AFBLBwjRb5oQDwQAAEcTAABQSwECFAAUAAgACADLnqVC0W+aEA8EAABHEwAADAAAAAAAAAAAAAAAAAAAAAAAZ2VvZ2VicmEueG1sUEsFBgAAAAABAAEAOgAAAEkEAAAAAA=="/>
<param name="image" value="http://www.geogebra.org/webstart/loading.gif"  />
<param name="boxborder" value="false"  />
<param name="centerimage" value="true"  />
<param name="java_arguments" value="-Xmx512m -Djnlp.packEnabled=true" />
<param name="cache_archive" value="geogebra.jar, geogebra_main.jar, geogebra_gui.jar, geogebra_cas.jar, geogebra_export.jar, geogebra_properties.jar" />
<param name="cache_version" value="3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0" />
<param name="framePossible" value="true" />
<param name="showResetIcon" value="true" />
<param name="showAnimationButton" value="true" />
<param name="enableRightClick" value="true" />
<param name="errorDialogsActive" value="true" />
<param name="enableLabelDrags" value="false" />
<param name="showMenuBar" value="false" />
<param name="showToolBar" value="true" />
<param name="showToolBarHelp" value="false" />
<param name="showAlgebraInput" value="true" />
<param name="allowRescaling" value="true" />
This is a Java Applet created using GeoGebra from www.geogebra.org - it looks like you don't have Java installed, please go to www.java.com
</applet>
<div class="text">
Man kan desuden kobinere flere figure på forskellige måder for at lave mere komplekse figure.<br>
Her et eksempel hvor en cirkel og en trapez er bundet sammen i en konstruktion hvor trapezens sidder tangerer cirklen.<br>
Følgende værktøjer er brugt:
<ul style="list-style-type: circle; margin: 5px 0px 5px 25px" >
<em>
<li>Nyt punkt - fra det 2. felt</li>
<li>Skæringspunkt mellem to objekter - fra det 2. felt</li>
<li>Linjestykke mellem to punkter - fra det 3. felt</li>
<li>Tangenter - fra det 4. felt</li>
<li>Cirkel udfra centrum og radius - fra det 6. felt</li>
</em>
</ul>
</div>
<applet name="ggbApplet" code="geogebra.GeoGebraApplet" archive="geogebra.jar"
codebase="http://www.geogebra.org/webstart/3.2/unsigned/"
width="580" height="450"mayscript="true">
<param name="ggbBase64" value="UEsDBBQACAAIAGiqpUIAAAAAAAAAAAAAAAAMAAAAZ2VvZ2VicmEueG1s3Vffb9s2EH5e/wqCz7Ot35YAK4XjAUOHbgOarA99oyja5iKJGkk5dv76HUlJttPGbYqlGPIk8u50vPu+uxO1eLuvK7RjUnHR5NifehixhoqSN5scd3o9SfHbqzeLDRMbVkiC1kLWROc4nAbYyDt+9eanhdqKe0Qqa/KRs/scr0mlGEaqlYyUasuYPpOTbs8rTuThz+JvRrU6KpyTd03bwSladiCjdfmeq2E7swe2Fde/8B0vmUSVoDlOYggdVh+Z1JySKseR5yQB5DX3z5QgCo12KyR/EI025kfnFSlYBQDc6EPFENoZbehUazBGSPEHBk4DI1vMLAYL1tGKl5w0Jk8bIhghdM9Lvc1xHCdwGuObrcEumjtvVAhZ3hyUZjXaf2JS5DhII8PBwe38zDKiIGQ4MPas6nRn3bDdDdMaAlaI7NkRy43k5YChWb9T16IqR3UreKNXpNWdtGyHvcimnWM4Spp4l82mYr0MUKRbRu8Ksb9xGITO9e2hta/YeIrNSlRCIgnpxDEY9M/CPa2NCXS08qyNZy16H8bpqPezwFrYZ+GejineuND6xP0had8bjuEKGYFBEYp0TN5ynGOMuobr98MGiuPumKp54Y+uLqA7Tstj9On/Vz4Xs0fVs7hjsmGVq5EGqO1Ep1whurNsICWjvIatU/SQEEPXXxCAk5ZsI9kQuOstB5jVeqd1+Ei8mA1BmBgUxEo1DAnIR5tcTA9r6J8cr7YSuhNi/xn9xlQLDSk26ANRNYTsTxP04fZXjEqizUumUSpWM+gibUvGVtwI3RKP00TYwTCUb68/kgDqL5aPLTRStVsCkqFBKnKAqE4ztv5+F+U5DqQBPG2S0JKtcWAYaxkr+9Go+zJHLbi0TXNCh0VRoX2OJ9b4AIvALB7c29bIdZgZDcexAvQ7TL6CzvXrQOdlwFm9DnC8Hhz/udhQUdekKVFDajhnxSWtmIWEm08pIp6BCBEf8hxcik4PKurc9U4+gxoGAKcjlBSfz169hRHXMKXMEBoTnV3m4yT7pwjxvp+ObwoOPses2UFoQiqE9t5Qml5Pw8Mg2QNqE8eMP1Djn3ADzEu+R8vBfjlYLeGiMQntKuydLqPB1zLuJ4UL5p/GBazctwJqh/I1p5d5voVxD/JHRC8d0fQzmolTFJfZNuCNPJHvJPv8m/iybJ9N3tD3fC/wYj+KwjCJQttOUPNJlmRhGsVJkmXe3DZXME2DLEjjJMzSLImibP6c6nlEGK/hTkq5vjy0zrAt/v+NdAJtMA1SwGmeRSlcZ5MwTt0Y96bpGbZJasGdwEX2HN0XAPdbuuH6qW4onYI9oxvK18DYE4T9CL4uQMtexaCZfHnSTH7IqJmdXtTtr2n/2371L1BLBwiZHT1xBgQAAOgPAABQSwECFAAUAAgACABoqqVCmR09cQYEAADoDwAADAAAAAAAAAAAAAAAAAAAAAAAZ2VvZ2VicmEueG1sUEsFBgAAAAABAAEAOgAAAEAEAAAAAA=="/>
<param name="image" value="http://www.geogebra.org/webstart/loading.gif"  />
<param name="boxborder" value="false"  />
<param name="centerimage" value="true"  />
<param name="java_arguments" value="-Xmx512m -Djnlp.packEnabled=true" />
<param name="cache_archive" value="geogebra.jar, geogebra_main.jar, geogebra_gui.jar, geogebra_cas.jar, geogebra_export.jar, geogebra_properties.jar" />
<param name="cache_version" value="3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0" />
<param name="framePossible" value="true" />
<param name="showResetIcon" value="true" />
<param name="showAnimationButton" value="true" />
<param name="enableRightClick" value="true" />
<param name="errorDialogsActive" value="true" />
<param name="enableLabelDrags" value="false" />
<param name="showMenuBar" value="false" />
<param name="showToolBar" value="true" />
<param name="showToolBarHelp" value="false" />
<param name="showAlgebraInput" value="true" />
<param name="allowRescaling" value="true" />
This is a Java Applet created using GeoGebra from www.geogebra.org - it looks like you don't have Java installed, please go to www.java.com
</applet>
<applet name="ggbApplet" code="geogebra.GeoGebraApplet" archive="geogebra.jar"
codebase="http://www.geogebra.org/webstart/3.2/unsigned/"
width="580" height="450"mayscript="true">
<param name="ggbBase64" value="UEsDBBQACAAIAM6qpUIAAAAAAAAAAAAAAAAMAAAAZ2VvZ2VicmEueG1s3VhNc9s2ED03vwLDcyXxW+SM6IwsZzrupO1M7ObQGwhCEmqSYAHQlvzruwBISZRjJXbiTOITyN3lYve93QWk2dtNVaJbKiTjdeZ4Y9dBtCa8YPUqc1q1HCXO27M3sxXlK5oLjJZcVFhlTjD2HS1v2dmbX2Zyze8QLo3JR0bvMmeJS0kdJBtBcSHXlKqBHLcbVjIstn/l/1Ki5F5hnVzWTQu7KNGCjFTFeyb714nZsCmZumC3rKAClZxkThxB6PD0kQrFCC4zJ3StxIe8pt5ACaJAa9dcsHteK22+d17inJYAwJXalhShW60NrGoJxghJdk/Bqa9ls4nBYEZbUrKC4VrnaUIEI4TuWKHWmRNFMexG2WqtsQun1hvhXBRXW6lohTb/UMEzx09CzcHWvnmpYURCyLBh5BrV4ZtxQ2+vqFIQsER4Q/dYrgQregz186U852WxUzec1WqBG9UKw3bQiUzamQNbCR3vvF6VtJMBimRNyU3ON1cWg8C6vt425hMTT75a8JILJCCdKAKDbs3tamx0oDsr19i4xqLzoZ3u9F7qGwuz5na1TLHahtYl7vVJe26/DZNICzSKUKS75A3HmeOgtmbqff8CxXGzT1V/8Gdb5dAdh+Wx8+l9K5+zyVH1zG6oqGlpa6QGalveSluIdi8TSEEJq+DVKjpIsKbrbwjASgu6ErQP3PaWBcxo3cM6PBLPJn0QOgYJsRIFQwLyUToX3cMK+idzFmsB3Qmx/4p+p7KBhuQr9AHLCkL2xjH6cP2bgwqs9Ee6UUpaUegiZUrGVNwOurmzmybcDIa+fDv9ngRQf7J8TKHhslljkPQNUuItRHWYsfH3By+GOOAa8DRJQks22oFmrKG06Eaj6socNeDSNM0BHQZFiTaZMzLGW3jw9cO9/doY2Q7To2E/VoB+i8ln0Dl/Hei8DDiL1wGO24HjPRUbwqsK1wWqcQX7LJggJTWQMH2UIuxqiBD2IM/eJW9VryLWXefkAdQwABjZQUmc4exVaxhxNZVSD6FdopPTfBxk/xgh7vPp+KLg4Dim9S2ExoVEaOP2pel2NNz3kg2gNrLMeD013gE3wLxgGzTv7ee91RwuGqPAPAWd03nY+5pH3aSwwfxX24ClPSugdghbMnKa52sY9yA/InpuiSYPaMZWkZ9mW4O34wk/k+zhmfiybA8mb+C5nuu7kReGQRCHgWknqPk4jdMgCaM4TlN3aprLHyd+6idRHKRJGodhOn1K9RwRxiq4kxKmTg+tAbb5z4WtP/YTAGqahgncZ+MgSuwcd8fJANw4MeiO4CY7hPcF0P2Sdjh/rB0Kq6BPaIfiVVD2CGPfg7AT2NKfC9tHRs3o07Nm9F2GzbAdLmsFvzMAo6OGIAfHwKAhLk53wvDGdfGsG1ccGiL0ktvlm1DxsJ5NmR9Vf/w1d6rPoFk8QPPdU9B898Og+UJgTg5/RZr/Tbr/lM7+B1BLBwhQUmpmSwQAAIUSAABQSwECFAAUAAgACADOqqVCUFJqZksEAACFEgAADAAAAAAAAAAAAAAAAAAAAAAAZ2VvZ2VicmEueG1sUEsFBgAAAAABAAEAOgAAAIUEAAAAAA=="/>
<param name="image" value="http://www.geogebra.org/webstart/loading.gif"  />
<param name="boxborder" value="false"  />
<param name="centerimage" value="true"  />
<param name="java_arguments" value="-Xmx512m -Djnlp.packEnabled=true" />
<param name="cache_archive" value="geogebra.jar, geogebra_main.jar, geogebra_gui.jar, geogebra_cas.jar, geogebra_export.jar, geogebra_properties.jar" />
<param name="cache_version" value="3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0" />
<param name="framePossible" value="true" />
<param name="showResetIcon" value="true" />
<param name="showAnimationButton" value="true" />
<param name="enableRightClick" value="true" />
<param name="errorDialogsActive" value="true" />
<param name="enableLabelDrags" value="false" />
<param name="showMenuBar" value="false" />
<param name="showToolBar" value="true" />
<param name="showToolBarHelp" value="false" />
<param name="showAlgebraInput" value="true" />
<param name="allowRescaling" value="true" />
This is a Java Applet created using GeoGebra from www.geogebra.org - it looks like you don't have Java installed, please go to www.java.com
</applet>
<applet name="ggbApplet" code="geogebra.GeoGebraApplet" archive="geogebra.jar"
codebase="http://www.geogebra.org/webstart/3.2/unsigned/"
width="580" height="450"mayscript="true">
<param name="ggbBase64" value="UEsDBBQACAAIAAarpUIAAAAAAAAAAAAAAAAMAAAAZ2VvZ2VicmEueG1s3Vndc5s4EH++/hUans82X8YwY9JxPuYmN+11psn14d5kkLEugDhJpHb++ltJgI3duHWuycV5AnaX1e7vt7sImL5fFTm6J1xQVsaWM7QtRMqEpbTMYquWi0FovT97N80Iy8icY7RgvMAytryhayl5Tc/e/TIVS/YV4VybfKHka2wtcC6IhUTFCU7FkhDZk+N6RXOK+frT/G+SSLFRGCfXZVXDKpLXIEuK9AMV7eVIL1jlVF7Se5oSjnKWxFYwhtDh7AvhkiY4jy3fNhIX8po4PSWIPKVdMk4fWCmV+cZ5juckBwBu5DonCN0rrWdUCzBGSNAHAk5dJZuONAZTUic5TSkuVZ46RDBC6CtN5TK2xuMAViM0Wyrs/InxljDG05u1kKRAq78IZ7Hlhr7iYG2unEgzIiBkWHBsa9X2lXZD7m+IlBCwQHhFNlhmnKYthur8WpyzPO3UFaOlvMCVrLlm22tEOu3YgqW4indWZjlpZIBisiTJ3ZytbgwGnnF9u670LTqeeXbBcsYRh3TGYzBojnNz1DYq0M7K1ja2tmh8KKed3olcbaGPc3M0TNHShNYk7rRJO3a7DBVICRSKUKRd8prj2LJQXVL5ob2A4rjbpKpu+KMu5tAd2+XR+XR+ls/paKd6pneElyQ3NVICtTWrhSlEs5YOJCUJLeDSKBpIsKLrTwjASFOScdIGbnrLAKa19nYd7oinozYIFYOAWBMJQwLykSoX1cMS+ie2LpYcuhNi/xX9TkQFDcky9BmLAkJ2hgH6fPubhVIs1U2qUXJSEOgiqUtGV1wH3czqpgnTg6Et30a/IQHU3ywfXWg4r5YYJG2D5HgNUW1nrP19ZGkfB1wCnjpJaMlKOVCMVYSkzWiUTZmjClzqptmiQ6Mo0Cq2Btp4DSeuOnkwd2sj02FqNGzGCtBvMPkOOudvA53nAefibYBjN+A4x2KTsKLAZYpKXMA6F5QnOdGQUPUoRdhWECHsQJ6tS1bLVpUYd42TPahhANCkgzKx+rNXLmHElUQINYS6REeH+djK/jFC7KfT8UPBweOYlPcQGuMCoZXdlqbd0PDQSlaA2sAw47TUOFvcAPOcrtCstZ+1VjPYaAw8feY1Tmd+62s2biaFCeaf0gQszLMCaiehC5oc5vkWxj3Id4ieGaKTPZqxUcwPs63A63jCTyS7/0x8XrZ7k9dzbMd27bHj+54X+J5uJ6j5IAoiL/THQRBF9kQ3lzsM3cgNx4EXhVHg+9HkmOrZIYwWsCdNqDw8tHrYzk8LW3fohgDUJPJD2M8G3jg0c9wehj1wg1CjO4CdbB/eZ0D3R9rh/LF2SI2CHNEO6Zug7BHGXoKwA9iS08L2kVEz+PasGbzIsOm3w3Up4T0DMNppiGTrMdBriMvDndDfcV0+accV+JoIdZibw0+hYr+edZnvVH/wX/ZU30Ez3UPz6hg0r14Nmi8C5g3Jiv1JfWmgnO1BuTgMpWi8dTPg9e9QN3i/jhmt4c7Vm0lX5/A2s//R4Y6QSn3t+VTeclwK9T3Q2Gx9zDiK82azer7HeXYc59kpcd6+5rWvwH7n6mR5bHZZV3s8Lo/jcXlKPL6SDdb/RvrlY6TT40inp0R627zecOIBxZMgcjwg1PHME1G904e+7dshbA0nE89vv3m/TppH21939f+M5l/P2b9QSwcIUevToeUEAAAdGgAAUEsBAhQAFAAIAAgABqulQlHr06HlBAAAHRoAAAwAAAAAAAAAAAAAAAAAAAAAAGdlb2dlYnJhLnhtbFBLBQYAAAAAAQABADoAAAAfBQAAAAA="/>
<param name="image" value="http://www.geogebra.org/webstart/loading.gif"  />
<param name="boxborder" value="false"  />
<param name="centerimage" value="true"  />
<param name="java_arguments" value="-Xmx512m -Djnlp.packEnabled=true" />
<param name="cache_archive" value="geogebra.jar, geogebra_main.jar, geogebra_gui.jar, geogebra_cas.jar, geogebra_export.jar, geogebra_properties.jar" />
<param name="cache_version" value="3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0" />
<param name="framePossible" value="true" />
<param name="showResetIcon" value="true" />
<param name="showAnimationButton" value="true" />
<param name="enableRightClick" value="true" />
<param name="errorDialogsActive" value="true" />
<param name="enableLabelDrags" value="false" />
<param name="showMenuBar" value="false" />
<param name="showToolBar" value="true" />
<param name="showToolBarHelp" value="false" />
<param name="showAlgebraInput" value="true" />
<param name="allowRescaling" value="true" />
This is a Java Applet created using GeoGebra from www.geogebra.org - it looks like you don't have Java installed, please go to www.java.com
</applet>
<div class="text" >
Vi kan nu ved hjælp af skydere og variabler justere dimnetionerne på konstruktionen.<br>
Ved at lade A og B's afstand til origo være variabel kan vi ændre hele konstruktionen.<br>
Dette kan kan gøres på følgende måde: 
<ul style="list-style-type: circle; margin: 5px 0px 5px 25px" >
<em>
<li>oprette først en skyder. Kald den fx. a<sub>afstand</sub></li>
<li>
    dobbeltklik på punktet A og sæt x-korodinaten til: &ndash; a &frasl; 2<br>
<li>
    dobbeltklik på punktet B og sæt x-korodinaten til: a &frasl; 2<br>
</li>
</em>
</ul>
</div>
    <applet name="ggbApplet" code="geogebra.GeoGebraApplet" archive="geogebra.jar"
        codebase="http://www.geogebra.org/webstart/3.2/unsigned/"
        width="580" height="450"mayscript="true">
        <param name="ggbBase64" value="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"/>
        <param name="image" value="http://www.geogebra.org/webstart/loading.gif"  />
        <param name="boxborder" value="false"  />
        <param name="centerimage" value="true"  />
        <param name="java_arguments" value="-Xmx512m -Djnlp.packEnabled=true" />
        <param name="cache_archive" value="geogebra.jar, geogebra_main.jar, geogebra_gui.jar, geogebra_cas.jar, geogebra_export.jar, geogebra_properties.jar" />
        <param name="cache_version" value="3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0, 3.2.47.0" />
        <param name="framePossible" value="true" />
        <param name="showResetIcon" value="true" />
        <param name="showAnimationButton" value="true" />
        <param name="enableRightClick" value="true" />
        <param name="errorDialogsActive" value="true" />
        <param name="enableLabelDrags" value="false" />
        <param name="showMenuBar" value="false" />
        <param name="showToolBar" value="true" />
        <param name="showToolBarHelp" value="false" />
        <param name="showAlgebraInput" value="true" />
        <param name="allowRescaling" value="true" />
        This is a Java Applet created using GeoGebra from www.geogebra.org - it looks like you don't have Java installed, please go to www.java.com
    </applet>
</section>
<footer>
<p>Made by: Christian, Jesper og Rasmus 1.6 RTG</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script src="js/jquery.reveal.js" ></script>
<script src="js/logs.js"></script>
</body>
</html>
