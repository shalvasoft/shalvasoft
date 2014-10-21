<?php
/**
 * Created by Shalvasoft.
 * Author: Shalva kvaratskhelia
 */
    class index extends controller{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $this->view->title = 'Home';
            $this->view->render('index/index');
        }
    }