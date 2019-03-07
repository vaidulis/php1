<?php
class Note extends Saskaita 
{
    public $pavadinimas, $tekstas;
    static function get($fileName)
    {
        $note = new self;
        $note->pavadinimas = $fileName;
        $note->tekstas = self::read($fileName);
        return $note;
    }
    static function getAll()
    {
        $notes_list = self::allNotes();
        foreach ($notes_list as $val) {
            $note = new self;
            $note->pavadinimas = $val['link'];
            $note->tekstas = self::read($val['link']);
            $notes[] = $note;
        }
        return $notes;
    }
}