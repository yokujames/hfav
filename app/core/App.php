<?php

class App {
    /*Buat properti untuk class App */
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        $url = $this->parseURL();
        //controller
        if(file_exists('../app/controllers/'. $url[0] . '.php')){
        $this->controller = $url[0]; /*mengganti/mengisi controller dengan array index ke 0 */
        unset($url[0]); /*menghilangkan array index ke 0 karena sudah dipakai sebagai controller */
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //method
        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //params
        if(!empty($url)){
            $this->params = array_values($url);
        }

        //jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    public function parseURL() {
        if(isset($_GET['url'])) {
            $url=rtrim($_GET['url'],'/'); /* rtrim untuk menghilangkan tanda / */
            $url = filter_var($url, FILTER_SANITIZE_URL); /*menghilangkan karakter2 lain */
            $url = explode('/',$url);
            return $url;
        }
    }

}