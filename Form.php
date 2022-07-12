<?php

require('config.php');

class Form
{
  protected $form;
  protected $header;
  protected $footer;
  protected $input;


  public function __construct($action)
  {
    $this->header = "<form action='$action' method='post' class='position-absolute top-50 start-50 translate-middle'>";
    $this->footer = "</form>";
  }

  public function setTitle()
  {
    $this->input .= "
    <div class='row mb-3'>
      <label for='titre' class='col-sm-2 col-form-label'>Titre</label>
      <div class='col-sm-10'>
        <input type='text' name='titre' id='titre' class='form-control' required='required'>
      </div>
    </div>";
  }

  public function setId($id)
  {
    $this->input .= "
    <div class='row mb-3 visually-hidden'>
      <label for='id' class='form-label'>Identifiant du livre</label>
      <input type='hidden' class='form-control' id='id' name='id' value='$id'>
    </div>
    ";
  }

  public function modifyTitle($book)
  {
    $this->input .= "
    <div class='row mb-3'>
      <label for='titre' class='col-sm-2 col-form-label'>Titre</label>
      <div class='col-sm-10'>
        <input type='text' name='titre' id='titre' class='form-control text-muted' value='$book' required='required'>
      </div>
    </div>";
  }

  public function setResume()
  {
    $this->input .= "
    <div class='row mb-3'>
      <label for='inputResume' class='col-sm-2 col-form-label'>Résumé</label>
      <div class='col-sm-10'>
        <textarea id='inputResume' name='resume' class='form-control' required='required'>
        </textarea>
      </div>
    </div>
    ";
  }

  public function modifyResume($book)
  {
    $this->input .= "
    <div class='row mb-3'>
      <label for='inputResume' class='col-sm-2 col-form-label'>Résumé</label>
      <div class='col-sm-10'>
        <textarea id='inputResume' name='resume' class='form-control text-muted' required='required'>$book
        </textarea>
      </div>
    </div>
    ";
  }

  public function setAuthor()
  {
    $this->input .= "
    <div class='row mb-3'>
      <label for='inputAuteur' class='col-sm-2 col-form-label'>Auteur</label>
      <div class='col-sm-10'>
        <input type='text' name='auteur' id='inputAuteur' class='form-control' required='required'>
      </div>
    </div>";
  }

  public function modifyAuthor($book)
  {
    $this->input .= "
    <div class='row mb-3'>
      <label for='inputAuteur' class='col-sm-2 col-form-label'>Auteur</label>
      <div class='col-sm-10'>
        <input type='text' name='auteur' id='inputAuteur' class='form-control text-muted' required='required' value='$book'>
      </div>
    </div>";
  }


  public function setYear()
  {
    $this->input .= '<div class="row mb-3">
      <label for="inputDate" class="col-sm-2 col-form-label">Parution</label>
      <div class="col-sm-4">
        <input type="number" min="1000" max="2030" step="1" name="parution" id="inputDate" class="form-control" placeholder="Année" required="required">
      </div>';
  }

  public function modifyYear($book)
  {
    $this->input .= "<div class='row mb-3'>
      <label for='inputDate' class='col-sm-2 col-form-label'>Parution</label>
      <div class='col-sm-4'>
        <input type='number' min='1000' max='2030' step='1' name='parution' id='inputDate' class='form-control text-muted' required='required' value='$book'>
      </div>";
  }

  public function setQuantity()
  {
    $this->input .= '
      <label for="inputExemplaire" class="col-sm-2 col-form-label">Exemplaires</label>
      <div class="col-sm-4">
        <input type="number" name="nbExemplaire" id="inputExemplaire" class="form-control" required="required">
      </div>
    </div>';
  }

  public function modifyQuantity($book)
  {
    $this->input .= "
      <label for='inputExemplaire' class='col-sm-2 col-form-label'>Exemplaires</label>
      <div class='col-sm-4'>
        <input type='number' name='nbExemplaire' required='required' id='inputExemplaire' class='form-control text-muted' value='$book'>
      </div>
    </div>";
  }

  public function setType()
  {
    $this->input .= '
    <div class="row mb-3">
    <label for="inputType" class="col-sm-2 col-form-label">Type</label>
    <div class="col-sm-4">
      <input type="text" name="type" id="inputType" class="form-control" placeholder="Exemple : 834" required="required">
    </div>
    ';
  }

  public function modifyType($book)
  {
    $this->input .= "
    <div class='row mb-3'>
    <label for='inputType' class='col-sm-2 col-form-label'>Type</label>
    <div class='col-sm-4'>
      <input type='text' name='type' id='inputType' required='required' class='form-control text-muted' value='$book'>
    </div>
    ";
  }

  public function setCote()
  {
    $this->input .= "
      <label for='inputCote' class='col-sm-2 col-form-label'>Cote</label>
      <div class='col-sm-4'>
        <input type='text' name='cote' id='inputCote' class='form-control' required='required'> 
      </div>
    </div>
    ";
  }

  public function modifyCote($book)
  {
    $this->input .= "
      <label for='inputCote' class='col-sm-2 col-form-label'>Cote</label>
      <div class='col-sm-4'>
        <input type='text' name='cote' id='inputCote' required='required' class='form-control text-muted' value='$book'> 
      </div>
    </div>
    ";
  }

  public function setSubmit()
  {
    $this->input .= "
    <div class='col-12'>
      <button class='btn btn-primary mt-4' type='submit'>Envoyer</button>
    </div>
    ";
  }

  public function setDanger()
  {
    $this->input .= "
    <div class='col-12'>
      <button  class='btn btn-danger mt-4' type='submit'>Supprimer</button>
    </div>
    ";
  }

  public function getform()
  {
    return $this->header . $this->input . $this->footer;
  }
};
