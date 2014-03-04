<?php
\Asgard\Core\App::get('flash')->showAll();
$form->open();
echo '<label>Utilisateur</label>'.$form->username->def().'<br>';
echo '<input type="submit" value="Envoyer">';
$form->close();
?>