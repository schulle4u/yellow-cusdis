<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Cusdis 0.8.1

Cusdis comments for your website.

<p align="center"><img src="cusdis-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/schulle4u/yellow-cusdis/archive/refs/heads/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to show comments

Create a site in your Cusdis dashboard, and enter the hostname and app ID from the generated embed code in `system/extensions/yellow-system.ini`. Cusdis comments are automatically available for blog and wiki pages. To embed Cusdis into any other page, create a `[cusdis]` shortcut. To exclude comments from a page, set `Comment: exclude` in your [page settings](https://github.com/annaesvensson/yellow-core#user-content-settings-page). 

## Examples

Content file with Cusdis comments: 

```
---
Title: Normal page with comments
---
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [--more--]

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

[cusdis]
```

Blog page without comments: 

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

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`CusdisHost` = URL of your Cusdis instance  
`CusdisAppId` = Your Cusdis app ID  
`CusdisTheme` = Cusdis Theme (light, dark or auto)  

## Acknowledgements

This extension uses the open-source and self-hostable [Cusdis comments system](https://cusdis.com/). Thank you for the software! 

## Developer

Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).
