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
        var_dump($scrape);
    }
    
    public function noview() {
        $this->willRenderLayoutView = false;
        $this->willRenderActionView = false;
    }
}
