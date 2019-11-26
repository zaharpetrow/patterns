<?php

/**
 * Издатель владеет некоторым важным состоянием и оповещает наблюдателей о его изменениях
 */
class Subject implements SplSubject {

    /**
     * @var int Для удобства в этой переменной хранится состояние Издателя, необходимое всем подписчикам
     */
    public $state;

    /**
     * @var array Список подписчиков. В реальной жизни список подписчиков может 
     * храниться в более подробном виде (классифицируется по типу события и т.д.)
     */
    private $observers = [];

    /**
     * Методы управления подпиской
     */

    /**
     * Метод добавляет наблюдателя
     * 
     * @param \SplObserver $observer Экземляр класса SplObserver - подписчик на событие
     */
    public function attach(\SplObserver $observer) {
        print ("Subject: Добавлен наблюдатель.\n");
        $this->observers[] = $observer;
    }

    /**
     * Метод удаляет наблюдателя
     * 
     * @param \SplObserver $observer Экземляр класса SplObserver - подписчик на событие
     */
    public function detach(\SplObserver $observer) {
        foreach ($this->observers as $key => $s) {
            if ($s === $observer) {
                unset($this->observers[$key]);
                print("Subject: Удален наблюдатель.\n");
            }
        }
    }

    /**
     * Запуск обновления в каждом наблюдателе
     */
    public function notify() {
        print("Subject: Уведомление наблюдателей...\n");
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Обычно логика подписки – только часть того, что делает Издатель. Издатели
     * часто содержат некоторую важную бизнес-логику, которая запускает метод
     * уведомления всякий раз, когда должно произойти что-то важное (или после
     * этого).
     */
    public function someBusinessLogic() {
        print("\nSubject: Я делаю что-то важное.\n");
        $this->state = rand(0, 10);

        print("Subject: Мой <strong>state</strong> был просто изменен в: <strong>{$this->state}</strong>\n");
        $this->notify();
    }

}
