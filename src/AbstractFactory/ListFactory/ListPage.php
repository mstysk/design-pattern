<?php
namespace Pattern\AbstractFactory\ListFactory;
use Pattern\AbstractFactory\Factory\Page;

class ListPage extends Page
{
    public function makeHtml()
    {
        $buff = [];
        $buff[] = "<html><hread><title>{$this->title}</title></head>\n";
        $buff[] = '<body>\n';
        $buff[] = "<h1>{$this->title}</h1>\n";
        $buff[] = '<ul>\n';
        foreach ($this->content as $content) {
            $buff[] = $content->makeHtml();
        }
        $buff[] = '</ul>\n';
        $buff[] = "<hr><address>{$this->author}</address>";
        $buff[] = "</body></html>\n";

        return implode('', $buff);
    }
}
