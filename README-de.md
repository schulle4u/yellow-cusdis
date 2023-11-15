<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Cusdis 0.8.1

Cusdis-Kommentare für deine Webseite.

<p align="center"><img src="cusdis-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-cusdis/archive/refs/heads/main.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man Kommentare anzeigt

Erstelle eine neue Seite in deinem Cusdis-Dashboard und trage den Hostnamen sowie App-ID aus dem Einbettungs-Code in der Datei `system/extensions/yellow-system.ini` ein. Cusdis-Kommentare sind auf Blog- und Wikiseiten automatisch verfügbar. Erstelle eine `[cusdis]`-Abkürzung, um Kommentare auf anderen Seiten anzuzeigen. Um Kommentare auf bestimmten Seiten auszuschalten, setze `Comment: exclude` in deinen [Seiteneinstellungen](https://github.com/annaesvensson/yellow-core/tree/main/README-de.md#user-content-einstellungen-seite). 

## Beispiele

Inhaltsdatei mit Cusdis-Kommentaren: 

```
---
Title: Normal page with comments
---
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [--more--]

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[cusdis]
```

Blogseite ohne Kommentare: 

```
---
Title: Made for people
Published: 2020-12-06
Author: Datenstrom
Layout: blog
Tag: Example
Comment: exclude
---
Datenstrom Yellow is for people who make small websites. Installing is unzipping one file and you are ready to go. The most important things for small websites are included. You can add features, languages and themes. Datenstrom Yellow works as content management system and static site generator.
```

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`CusdisHost` = URL deiner Cusdis-Instanz  
`CusdisAppId` = Deine Cusdis-app-ID  
`CusdisTheme` = Cusdis-Theme (light, dark oder auto)  

## Danksagung

Diese Erweiterung verwendet das quelloffene und auf eigenen Servern nutzbare [Cusdis-Kommentarsystem](https://cusdis.com/). Vielen Dank für diese Software! 

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
