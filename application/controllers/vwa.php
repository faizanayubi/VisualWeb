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
        $scrape = new Scrape('http://swiftintern.com/');
        $elements = $scrape->xPathObj->query('//a/@href');
        //echo '<pre>', print_r($elements), '</pre>';
        
        foreach ($elements as $element) {
            echo $element->nodeValue;
            echo '<br>';
        }
    }
    
    public function getNodesfromXML($urls) {
        $this->JSONview();
    }
    
    public function getNodesfromURL($url) {
        $this->JSONview();
        
        $elementos = array (
            "nodes"=>array(),
            "links"=>array(), 
            "statistics" => array(
                "nodes" => 0,
                "links" => 0,
                "bidireccional_links" => 0,
            )
        );
        
        $crawler = new Scrape($this->removeWWW($url));
        
    }
    
    protected function removeWWW($url) {
        return str_replace("http:\/\/www.", "http:\/\/", $url);
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
