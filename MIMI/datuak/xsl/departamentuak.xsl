<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html" version="5.0" indent="yes" />
    <xsl:template match="/enpresa">


        <html>

            <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <link rel="stylesheet" href="../../css/style.css" />
                <link rel="stylesheet" href="../../css/index.css" />
                <link rel="stylesheet" href="../../css/xsl.css" />
                <link rel="stylesheet" href="../../css/media.css" />
                <link rel="shortcut icon" href="../../irudiak/logoa/logo.png" />
                <title>MIMI Dep</title>
            </head>

            <body>
                <nav>
                    <div class="logo">
                        <img src="../../irudiak/logoa/logo.png" alt="Logo" />
                    </div>
                    <div class="menu-toggle" id="mobile-menu" onclick="MenuAldaketa()">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <div class="menu" id="menu">
                        <a href="../../index.html">Hasiera</a>
                        <a href="../../html/php/login.php">Login</a>
                        <a href="../../html/php/langileak.php">Langileak</a>
                        <a href="../../html/php/departamentuak.php">Departamentuak</a>
                    </div>
                    <script>
                        function MenuAldaketa() {
        document.getElementById("menu").classList.toggle("active");
        document.getElementById("mobile-menu").classList.toggle("active");
                        }
                    </script>
                </nav>
                <main>
                    <section>
                        <div>
                            <h3>Departamentuak</h3>
                        </div>


                        <div class="departamentukutxa">

                            <xsl:for-each select="departamentuak/departamentua">
                                <div class="departamentuizena">

                                    <img>
                                        <xsl:attribute name="src"><xsl:value-of select="argazkia" /></xsl:attribute>
                                    </img>
                                    <h4>
                                        <xsl:value-of select="izena"></xsl:value-of>
                                    </h4>
                                    <div class="informazioguztia">
                                        <xsl:text>Kalea: </xsl:text>
                                        <xsl:value-of select="helbidea/kalea"/><br></br>
                                        <xsl:text>Zenbakia: </xsl:text>
                                        <xsl:value-of select="helbidea/zbk"/><br></br>
                                        <xsl:text>Solairua: </xsl:text>
                                        <xsl:value-of select="helbidea/solairu"/><br></br>
                                        <xsl:text>Herria: </xsl:text>
                                        <xsl:value-of select="helbidea/herria"/><br></br>
                                        <xsl:text>Auzoa: </xsl:text>
                                        <xsl:value-of select="helbidea/auzoa"/><br></br>
                                        <xsl:text>Probintzia </xsl:text>
                                        <xsl:value-of select="helbidea/probintzia"/><br></br>
                                        <xsl:text>Mail: </xsl:text>
                                        <xsl:value-of select="mail"/><br></br>
                                        <xsl:text>Telefonoa: </xsl:text>
                                        <xsl:value-of select="telefonoa"/><br></br>
                                    </div>

                                </div>
                            </xsl:for-each>


                        </div>


                    </section>
                </main>
                <footer>
                    <div id="info">
                        <div id="datuak">
                            <h3>Informazioa</h3>
                            <p>
                                Murgildu musika-munduan MIMI-rekin, non aplikazio bakoitza
        esperientzia ahaztezina da. Aplikazio bakoitzean, MIMI sinboloaren azpian, musika-ekarpen
        berrien eta sentsazio berrien munduetara eramango zaitugu, teknologiaren eta sorkuntzaren
        bidez gidatuta.
                            </p>
                        </div>
                        <div class="kategoriak">
                            <h3>ZERBITZUAK</h3>
                            <ul>
                                <li>
                                    <a href="#">Gure Aplikazioa</a>
                                </li>
                            </ul>
                        </div>
                        <div class="kategoriak">
                            <h3>BESTE ORRIAK</h3>
                            <ul>
                                <li>
                                    <a href="../../index.html">Hasiera</a>
                                </li>
                                <li>
                                    <a href="#gureinfokutxa">Nor gara</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr />
                    <div id="footerkarratu">
                        <a class="copy" href="http://creativecommons.org/ns#">Lan honek CC lizentzia
        du <img style="height: 22px !important; margin-left: 3px; vertical-align: text-bottom;"
                                src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1"
                                alt="" />
                <img
                                style="height: 22px !important; margin-left: 3px; vertical-align: text-bottom;"
                                src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1"
                                alt="" />
                <img
                                style="height: 22px !important; margin-left: 3px; vertical-align: text-bottom;"
                                src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1"
                                alt="" />
                <img
                                style="height: 22px !important; margin-left: 3px; vertical-align: text-bottom;"
                                src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1"
                                alt="" />
                        </a>
                        <div id="saresozialak">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-label="Instagram" role="img" viewBox="0 0 512 512"
                                    fill="#000000">
                                    <g stroke-width="0"></g>
                                    <g stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g>
                                        <rect width="512" height="512" rx="15%" id="b"></rect>
                                        <use fill="url(#a)" xlink:href="#b"></use>
                                        <use fill="url(#c)" xlink:href="#b"></use>
                                        <radialGradient id="a" cx=".4" cy="1" r="1">
                                            <stop offset=".1" stop-color="#fd5"></stop>
                                            <stop offset=".5" stop-color="#ff543e"></stop>
                                            <stop offset="1" stop-color="#c837ab"></stop>
                                        </radialGradient>
                                        <linearGradient id="c" x2=".2" y2="1">
                                            <stop offset=".1" stop-color="#3771c8"></stop>
                                            <stop offset=".5" stop-color="#60f" stop-opacity="0"></stop>
                                        </linearGradient>
                                        <g fill="none" stroke="#ffffff" stroke-width="30">
                                            <rect width="308" height="308" x="102" y="102" rx="81"></rect>
                                            <circle cx="256" cy="256" r="72"></circle>
                                            <circle cx="347" cy="165" r="6"></circle>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a href="">
                                <svg viewBox="0 0 256 256" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    preserveAspectRatio="xMidYMid" fill="#000000">
                                    <g stroke-width="0"></g>
                                    <g stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g>
                                        <g>
                                            <path
                                                d="M241.871,256.001 C249.673,256.001 256,249.675 256,241.872 L256,14.129 C256,6.325 249.673,0 241.871,0 L14.129,0 C6.324,0 0,6.325 0,14.129 L0,241.872 C0,249.675 6.324,256.001 14.129,256.001 L241.871,256.001"
                                                fill="#395185"></path>
                                            <path
                                                d="M176.635,256.001 L176.635,156.864 L209.912,156.864 L214.894,118.229 L176.635,118.229 L176.635,93.561 C176.635,82.375 179.742,74.752 195.783,74.752 L216.242,74.743 L216.242,40.188 C212.702,39.717 200.558,38.665 186.43,38.665 C156.932,38.665 136.738,56.67 136.738,89.736 L136.738,118.229 L103.376,118.229 L103.376,156.864 L136.738,156.864 L136.738,256.001 L176.635,256.001"
                                                fill="#FFFFFF"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-label="Twitter"
                                    role="img" viewBox="0 0 512 512" fill="#000000">
                                    <g stroke-width="0"></g>
                                    <g stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g>
                                        <rect width="512" height="512" rx="15%" fill="#1da1f2"></rect>
                                        <path fill="#ffffff"
                                            d="M437 152a72 72 0 01-40 12a72 72 0 0032-40a72 72 0 01-45 17a72 72 0 00-122 65a200 200 0 01-145-74a72 72 0 0022 94a72 72 0 01-32-7a72 72 0 0056 69a72 72 0 01-32 1a72 72 0 0067 50a200 200 0 01-105 29a200 200 0 00309-179a200 200 0 0035-37"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </footer>
            </body>

        </html>
    </xsl:template>
</xsl:stylesheet>