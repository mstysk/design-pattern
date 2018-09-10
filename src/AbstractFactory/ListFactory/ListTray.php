<?php
namespace Pattern\AbstractFactory\ListFactory;
use Pattern\AbstractFactory\Factory\Tray;

class ListTray extends Tray
{
    public function makeHtml()
    {
        $buff = [];
        $buff[] = '<li>\n';
        $buff[] = "{$this->caption}\n";
        $buff[] = '<ul>\n';
        foreach ($this->tray as $tray) {
            $buff[] = $tray->makeHtml();
        }
        $buff[] = '</ul>\n';
        $buff[] = '</li>\n';

        return implode('', $buff);
    }
}
