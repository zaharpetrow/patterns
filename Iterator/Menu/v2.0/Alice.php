<?php
require_once __DIR__ . '/collections/PancakeHouse/PancakeHouseMenu.php';
require_once __DIR__ . '/collections/Diner/DinerMenu.php';
require_once __DIR__ . '/Iterator/AliceIterator.php';

class Alice {

    private $arrayMenu;

    public function __construct() {
        $this->arrayMenu = new AliceIterator();
    }

    public function addMenu(Menu $menuItem) {
        $this->arrayMenu->addItem($menuItem->createIterator());
    }

    public function printMenu() {
        if ($this->arrayMenu->isEmpty()) {
            throw new Exception('Массив пуст, воспользуйтесь методом addMenu()');
        }
        ?>
        <table>
            <tbody>
                <tr>
                    <td><strong>Name</strong></td> 
                    <td><strong>Price</strong></td> 
                    <td><strong>Description</strong></td> 
                </tr>
                <?php
                while ($this->arrayMenu->hasNext()):
                    echo $this->preparePrint($this->arrayMenu->next());
                endwhile;
                ?>
            </tbody>
        </table>
        <?php
    }

    private function preparePrint(MyIterator $menuItem) {
        $list = '';
            while ($menuItem->hasNext()):
                $item = $menuItem->next();
                $list .= '<tr>';
                $list .= '<td>' . $item->getName() . '</td>';
                $list .= '<td>' . $item->getPrice() . '</td>';
                $list .= '<td>' . $item->getDescription() . '</td>';
                $list .= '</tr>';
            endwhile;

        return $list;
    }

}
