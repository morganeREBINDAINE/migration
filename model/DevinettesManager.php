<?php

class DevinettesManager
 {
   private $db;

   public function __construct(){
     $this->db = new PDO("mysql:host=localhost;dbname=devinettes;charset=utf8", "root", "");
     $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
   }

   public function all() {
     $req = $this->db->query("SELECT * FROM devinette");
     $req->setFetchMode(PDO::FETCH_CLASS, 'Devinette');
     $devinettes = $req->fetchAll();
     return $devinettes;
   }

   public function find($id) {
     $req=$this->db->prepare('SELECT * FROM devinette WHERE id =?');
     $req->execute(array($id));
     $req->setFetchMode(PDO::FETCH_CLASS, 'Devinette');
     $dev = $req->fetch();
     return $dev;
   }

   public function update($datas) {
     $req=$this->db->prepare('UPDATE devinette SET name=?, question=?, answer=? WHERE id=?');
     return $req->execute(array($datas['name'], $datas['question'], $datas['answer'], $datas['id']));
   }

   public function add($datas) {
     $req = $this->db->prepare('INSERT INTO devinette (name, question, answer, created_at) VALUES (?,?,?,NOW())');
     return $req->execute(array($datas['name'], $datas['question'], $datas['answer']));
   }

   public function delete($id) {
     $req = $this->db->prepare('DELETE FROM devinette WHERE id=?');
     return $req->execute(array($id));
   }
 }
