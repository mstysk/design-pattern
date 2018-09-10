<?php
namespace Pattern\AbstractFactory\TableFactory;
use Pattern\AbstractFactory\Factory\Page;

class TablePage extends Page
{
    public function makeHtml()
    {
        $buff = [];
        $buff[] = "<html><hread><title>{$this->title}</title></head>\n";
        $buff[] = '<body>\n';
        $buff[] = "<h1>{$this->title}</h1>\n";
        $buff[] = '<table>\n';
        foreach ($this->content as $content) {
            $buff[] = "<tr>{$content->makeHtml()}</tr>";
        }
        $buff[] = '</table>\n';
        $buff[] = "<hr><address>{$this->author}</address>";
        $buff[] = "</body></html>\n";

        return implode('', $buff);
    }
}
