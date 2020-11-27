<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
<?php
  abstract class celebratePost {
      private $text;

    public function __construct($text) {
      $this->text = $text;
    }

    abstract public function draw();

    public function getText() {
      return $this->text;
    }
  }

  class womanPost extends celebratePost {
    public function __construct($text) {
      parent::__construct($text);
    }
    public function draw() {
      echo(
        "<div class='post' style='background: pink;'>".$this->getText()."</div>"
      );
    }
  }

  class manPost extends celebratePost {
    public function __construct($text) {
      parent::__construct($text);
    }
    public function draw() {
      echo(
        "<div class='post' style='background: orange;'>".$this->getText()."</div>"
      );
    }
  }


  class newYearPost extends celebratePost {
    public function __construct($text) {
      parent::__construct($text);
    }
    public function draw() {
      echo(
        "<div class='post' style='background: lightblue;'>".$this->getText()."</div>"
      );
    }
  }

  $womanPost = new womanPost("В прекрасный день, 8 марта, хочется пожелать любви, радости, нежности. Пусть всегда окружают внимательные, уважающие и заботливые люди! Желаю настоящего женского счастья, успехов и исполнения всех желаний!");
  $manPost = new manPost("23 февраля мы традиционно празднуем День защитника Отечества, один из важнейших праздников в календаре россиян. Это не просто день почитания солдат и бойцов, служивших и защищавших страну во время войны и невзгод — знаменательная дата уже превратилась в своеобразный неофициальный «день всех мужчин».");
  $newYearPost = new newYearPost("Поздравляю с Новым годом! Пусть старый год заберет все невзгоды и печали, а новый ― будет наполнен достижениями, богатством, любовью и здоровьем! Желаю мира, благополучия и счастья Вам, пусть в Новом Году всё получится, и задуманное сбудется!");

  $womanPost->draw();
  $manPost->draw();
  $newYearPost->draw();
?>
