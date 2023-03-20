<?php

echo 'Merci ' . $_POST ['user_firstName'] . ' ' . $_POST ['user_lastName'] . ' de nous avoir contacter à propos de ' . $_POST ['subject'] . '.' . PHP_EOL;
echo 'Un de nos conseillers vous contactera soit à l’adresse : ' . $_POST ['user_email'] . ' ou par téléphone au : ' . $_POST ['phone'] . ' dans les plus brefs délais pour traiter votre demande :' . PHP_EOL;
echo $_POST ['user_message']; 

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!isset($_POST['user_firstName']) || empty(trim($_POST['user_firstName'])))
    $errors[] = "Le prénom est obligatoire";
  if (!isset($_POST['user_lastName']) || empty(trim($_POST['user_lastName'])))
    $errors[] = "Le nom est obligatoire";
  if (!isset($_POST['user_email']) || filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL))
    $errors[] = "L'adresse mail est obligatoire";
  if (!isset($_POST['phone']) || empty(trim($_POST['phone'])))
    $errors[] = "Le numéro de téléphone est obligatoire";
  if (!isset($_POST['subject']) || empty(trim($_POST['subject'])))
    $errors[] = "Un sujet est obligatoire";
  if (!isset($_POST['user_message']) || empty(trim($_POST['user_message'])))
    $errors[] = "Un message est obligatoire";
};

if (empty($errors)) {
  header('thanks.php');
};