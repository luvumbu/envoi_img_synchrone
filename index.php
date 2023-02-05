<form>
  <input type="file" id="fileInput">
  <button type="button" id="uploadButton">Envoyer</button>
</form>




<script>
 // Référence au champ de fichier HTML
var fileInput = document.getElementById('fileInput');

// Référence au bouton HTML
var uploadButton = document.getElementById('uploadButton');

// Ajout d'un écouteur d'événement click au bouton
uploadButton.addEventListener('click', function() {
  // Création d'une nouvelle instance de XMLHttpRequest
  var xhr = new XMLHttpRequest();

  // Ouverture d'une requête POST vers upload.php
  xhr.open('POST', 'upload.php', true);

  // Définition de la fonction de gestion de la réponse
  xhr.onreadystatechange = function() {
    // Vérification que la requête est terminée et a réussi
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Affichage d'un message dans la console
      console.log('Upload terminé !');
    }
  };

  // Création d'une instance de FormData pour envoyer les données
  var formData = new FormData();

  // Ajout de la photo au formulaire
  formData.append('photo', fileInput.files[0]);

  // Envoi de la requête
  xhr.send(formData);
});




</script>