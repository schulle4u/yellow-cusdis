<?php
// Cusdis extension, https://github.com/schulle4u/yellow-cusdis

class YellowCusdis {
    const VERSION = "0.9.1";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("cusdisHost", "https://cusdis.com");
        $this->yellow->system->setDefault("cusdisAppId", "");
        $this->yellow->system->setDefault("cusdisTheme", "auto");
        $this->yellow->language->setDefaults(array(
            "Language: en",
            "CusdisDescription: Cusdis comments for your website.",
            "CusdisComments: Comments",
            "Language: de",
            "CusdisDescription: Cusdis-Kommentare für deine Webseite.",
            "CusdisComments: Kommentare",
            "Language: sv",
            "CusdisDescription: Cusdis-Kommentarer till din webbplats.",
            "CusdisComments: Kommentarer"));
    }
    
    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="cusdis" && ($type=="block" || $type=="inline") && !preg_match("/exclude/i", $page->get("comment"))) {
            $host = $this->yellow->system->get("cusdisHost");
            $appId = $this->yellow->system->get("cusdisAppId");
            $theme = $this->yellow->system->get("cusdisTheme");
            $url = $this->yellow->page->getUrl(true);
            $output = "<h2>".$this->yellow->language->getTextHtml("cusdisComments").": <span data-cusdis-count-page-id=".htmlspecialchars($page->get("titleSlug")).">0</span></h2>\n";
            $output .= "<div id=\"cusdis_thread\" data-host=\"".htmlspecialchars($host)."\" data-app-id=\"".htmlspecialchars($appId)."\" data-page-id=\"".$page->getHtml("titleSlug")."\" data-page-url=\"".htmlspecialchars($url)."\" data-page-title=\"".$page->getHtml("titleContent")."\" data-theme=\"".htmlspecialchars($theme)."\" role=\"region\" aria-label=\"".$this->yellow->language->getTextHtml("cusdisComments")."\"></div>\n";
        }
        return $output;
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $host = $this->yellow->system->get("cusdisHost");
            $appId = $this->yellow->system->get("cusdisAppId");
            $output = "<script type=\"text/javascript\" defer=\"defer\" src=\"".htmlspecialchars($host)."/js/widget/lang/".$this->yellow->page->getHtml("language").".js\"></script>\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"".htmlspecialchars($host)."/js/cusdis.es.js\"></script>\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" data-host=\"".htmlspecialchars($host)."\" data-app-id=\"".htmlspecialchars($appId)."\" src=\"".htmlspecialchars($host)."/js/cusdis-count.umd.js\"></script>\n";
        }
        if ($name=="comment") {
            $output = $this->onParseContentElement($page, "cusdis", "", "", "block");
        }
        return $output;
    }
}
