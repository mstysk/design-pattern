<?php
namespace Pattern\AbstractFactory\TableFactory;
use Pattern\AbstractFactory\Factory\Tray;

class TableTray extends Tray
{
    public function makeHtml()
    {
        $buff = [];
        $buff[] = '<td>\n';
        $buff[] = '<table><tr>\n';
        $buff[] = "{$this->caption}\n";
        $buff[] = '</tr>\n';
        $buff[] = '<tr>\n';
        foreach ($this->tray as $tray) {
            $buff[] = $tray->makeHtml();
        }
        $buff[] = '</tr></table>\n';
        $buff[] = '</td>\n';

        return implode('', $buff);
    }
}
