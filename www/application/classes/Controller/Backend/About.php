<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_About extends Controller_Backend
{

    public function  before()
    {
        parent::before();

    }


    public function action_index()
    {
        $this->template->page_title = 'Адмінка';
    }

    public function action_add() {

        $this->template->page_title = 'Додавання';

        $languages = Model::factory('Main')->get_languages();
        $content = View::factory('backend/about/v_about_add', array('languages' => $languages));

        $this->template->content = $content;



        if (isset($_POST['submit'])) {
            $from_form = Arr::extract($_POST, array('language', 'text'));
            $subpage_id = Model::factory('Main')->add_main(2, $from_form['language'], $from_form['text']);
            //$subpages = ORM::factory('subpage');

            try{
                // Работа с изображениями
                if (!empty($_FILES['images']['name'][0]))
                {
                    foreach ($_FILES['images']['tmp_name'] as $image)
                    {
                        $filename = $this->_upload_img($image);

                        // Запись в БД
                        $im_db = ORM::factory('Image');
                        $im_db->subpage_id = $subpage_id;
                        $im_db->image_href = $filename;
                        $im_db->save();
                    }
                }

                $this->redirect('admin/about/edit/' );
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }

        }

        // Вывод в шаблон
        $this->template->content = $content;
    }

    public function action_edit()
    {
        $this->template->page_title = 'Редагування';

        //$languages = Model::factory('main')->get_languages();
        //$content = View::factory('/backend/main/v_main_edit', array('languages' => $languages));
        //$this->template->content = $content;

        $languages = Model::factory('Main')->get_languages();

        $page_id = 2;

        $i = DB::select('id')
            ->from('subpage')
            ->where('page_id', '=', $page_id)
            ->and_where('language_id', '=', $this->lang_id)
            ->execute();

        $id = $i[0]['id'];


        //$languages = Model::factory('main')->get_languages();
        //$images = Model::factory('subpage')->get_images($id);
        $text = ORM::factory('Subpage')->get_text($page_id, $this->lang_id);


        if (isset($_POST['submit'])) {
            $post = Validation::factory($_POST);
            $post->rule('text', 'not_empty')
                 ->labels(array('text' => 'Текст'));

            if($post->check()) {
                $from_form = Arr::extract($_POST, array('text'));
                Model::factory('Main')->edit_main($id, $page_id, $this->lang_id, $from_form['text']);
                $this->redirect('admin/about/edit/' . $this->lang);
            }

            $errors = $post->errors('validation');
        }

        $content = View::factory('/backend/about/v_about_edit', array('text' => $text,
                                                                    'lang' => $this->lang,
                                                                    'languages' => $languages,
                                                                    'lang_id' => $this->lang_id))
                                                               ->bind('errors', $errors);

        // Вывод в шаблон
        $this->template->content = $content;
    }

    /*public function _upload_img($file, $ext = NULL, $directory = NULL){

        if($directory == NULL)
        {
            $directory = 'media/uploads';
        }

        if($ext== NULL)
        {
            $ext= 'jpg';
        }

        // Генерируем случайное название
        $symbols = '0123456789abcdefghijklmnopqrstuvwxyz';

        $filename = '';
        for($i = 0; $i < 10; $i++)
        {
            $filename .= rand(1, strlen($symbols));
        }

        // Изменение размера и загрузка изображения
        $im = Image::factory($file);

        if($im->width > 150)
        {
            $im->resize(150);
        }
        $im->save("$directory/small_$filename.$ext");

        $im = Image::factory($file);
        $im->save("$directory/$filename.$ext");

        return "$filename.$ext";
    }*/

}