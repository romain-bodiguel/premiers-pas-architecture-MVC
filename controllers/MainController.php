<?php

class MainController 
{

    public function homeAction() {
        // Délègue l'affichage à la méthode "show" du MainController
        $this->show('home');
    }

    public function storeAction() {
        // On veut connaître la date du jour
        $currentDay = date('l');

        // Tableau des horaires d'ouverture
        $weekOpeningHours = [
            'Sunday' => 'Closed', 
            'Monday' => '7:00 AM to 8:00 PM',
            'Tuesday' => '7:00 AM to 8:00 PM',
            'Wednesday' => '7:00 AM to 8:00 PM',
            'Thursday' => '7:00 AM to 8:00 PM',
            'Friday' => '7:00 AM to 8:00 PM',
            'Saturday' => '9:00 AM to 5:00 PM'
        ];

        $dataContent = [
            'week_opening_hours'    => $weekOpeningHours,
            'current_day'           => $currentDay
        ];

        $this->show('store', $dataContent);
    }

    public function productsAction() {
        $this->show('products');
    }

    public function aboutAction() {
        $this->show('about');
    }

    public function show($viewName, $viewData = []) {
        // $viewData est disponible dans chaque fichier de vue
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}