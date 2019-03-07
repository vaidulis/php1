<?php
class App {
    // public function __construct()
    // {
    //     $login = Login::getLogin();
    //     if($login->redirect) {
    //         $this->redirect($login->redirect);
    //     }
        
    //     $this->view('header');
    //     if($login->logged) {
    //         $this->view('menu', ['login' => $login]);
    //     }
    //     $this->route();
    //     $this->view('footer');
    // }
    // private function route()
    // {
    //     if (empty($_GET) && empty($_POST)) {
    //         $notes = note::getAll();
    //         $this->view('index', ['notes' => $notes]);
    //     }
    //     elseif (isset($_GET['page']) && $_GET['page'] == 'create' && empty($_POST)) {
    //         $this->view('create');
    //     }
    //     elseif (isset($_GET['page']) && $_GET['page'] == 'store' && !empty($_POST)) {
    //         $note = new Note;
    //         $note->pavadinimas = $_POST['file_name'];
    //         $note->tekstas = $_POST['text'];
    //         $note->save();
    //         $this->redirect('/');
    //     }
        
    //     elseif (isset($_GET['page']) && $_GET['page'] == 'edit' && isset($_GET['file_by_name']) && empty($_POST)) {
    //         $note = Note::get($_GET['file_by_name']);
    //         $this->view('edit', ['note' => $note]);
    //     }
        
    //     elseif (isset($_GET['page']) && $_GET['page'] == 'update' && isset($_GET['file_by_name']) && !empty($_POST)) {
    //         $note = Note::get($_GET['file_by_name']);
    //         $note->tekstas = $_POST['text'];
    //         $note->save();
    //         $this->redirect('/');
    //     }
        
    //     elseif (isset($_GET['page']) && $_GET['page'] == 'destroy' && !empty($_POST)  && isset($_POST['delete'])) {
    //         $note = Note::get($_POST['delete']);
    //         $note->delete();
    //         $this->redirect('/');
    //     }
        
    //     elseif (isset($_GET['page']) && $_GET['page'] == 'show' && isset($_GET['file_by_name']) && empty($_POST)) {
    //         $note = Note::get($_GET['file_by_name']);
    //         $this->view('show', ['note' => $note]);
    //     }
        
    //     elseif (isset($_GET['page']) && $_GET['page'] == 'login') {
    //         $this->view('login');
    //     }
    //     elseif (isset($_GET['page']) && $_GET['page'] == 'logout') {
    //         Login::getLogin()->makeLogout();
    //         $this->redirect('/?page=login');
    //     }
        
    //     else {
    //         echo 'Nerasta';
    //     }
    // }
    // private function view($file, $parametrai = [])
    // {
    //     extract($parametrai);
    //     require DIR.'front/'.$file.'.php';
    // }
    // private function redirect($location)
    // {
    //     header('Location: '.URL.$location);
    //     exit;
    // }
    
    // require DIR.'front/header.php';
    // //body
    
    
    
    // require DIR.'front/footer.php';
}
