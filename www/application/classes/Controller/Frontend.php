<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend extends Controller_Base {

    public $template = 'frontend/v_base_frontend';        // Базовый шаблон



    public function  before() {
        parent::before();

        $formsend = View::factory('widgets/w_formsend', array('lang' => $this->lang,
                                'controller' => $this->request->controller(),
                                'text_question' => __('Ваше запитання')));


        $static = ORM::factory('subpage')->where('page_id', '=', 8)
                                        ->and_where('parent_id', '!=', 0)
                                        ->and_where('language_id', '=', $this->lang_id)
                                        ->find_all();


        $lang = $this->request->param('lang');
        $this->template->lang = $lang;
        $this->template->formsend = $formsend;
        $this->template->static = $static;


        // Виджеты
        //$topmenu = Widget::load('topmenu', array('id' => $this->lang));
        // Вывод в шаблон
        //$this->template->styles = array('media/css/style.css', 'media/css/bootstrap.min.css', 'media/css/bootstrap-responsive.min.css',);
        //$this->template->scripts = array('media/js/bootstrap.min.js',);
        //$this->template->fotolinks = null;
        //$this->template->topmenu = $topmenu;
    }

}