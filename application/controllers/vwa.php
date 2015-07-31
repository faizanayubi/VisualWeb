<?php

/**
 * Description of vwa
 *
 * @author Faizan Ayubi
 */
use Shared\Controller as Controller;
use SwiftBot\Scrape as Scrape;

class VWA extends Controller {
    
    public function crawl() {
        $this->noview();
        $scrape = new Scrape('http://swiftintern.com/sitemap.xml');
        $elements = $scrape->xPathObj->query('//url/loc');
        //echo '<pre>', print_r($elements), '</pre>';
        
        foreach ($elements as $element) {
            echo $element->nodeValue;
            echo '<br>';
        }
    }
    
    public function getNodesfromXML($urls) {
        $this->JSONview();
    }
    
    public function getNodesfromURL($urls) {
        $this->JSONview();
    }
    
    public function noview() {
        $this->willRenderLayoutView = false;
        $this->willRenderActionView = false;
    }
    
    public function JSONview() {
        $this->willRenderLayoutView = false;
        $this->defaultExtension = "json";
    }
}
