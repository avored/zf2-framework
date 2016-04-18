<?php

namespace Calendar\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Calendar\Model\LeapYear;
use Mage2\View;

class LeapYearController {

    protected $view;
    public function __construct() {
        $this->view = new View();
    }

    private function _isLeapYear($year = null) {
        if (null === $year) {
            $year = date('Y');
        }

        return 0 == $year % 400 || (0 == $year % 4 && 0 != $year % 100);
    }

    public function indexAction(Request $request, $year) {
        if ($this->_isLeapYear($year)) {
            return $this->view->render('index');
        }

        return 'No, not a leap year.';
    }

}
