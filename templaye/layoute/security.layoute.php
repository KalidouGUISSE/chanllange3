<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-[#21301c]">

<?php
  echo $containteForLayoute;
?>
      <!-- Main Content -->
      <section>

    <script>
        // Ajout d'interactivité pour les filtres
        document.querySelectorAll('select').forEach(select => {
            select.addEventListener('change', function() {
                console.log('Filtre sélectionné:', this.value);
                // Ici vous pourriez ajouter la logique de filtrage
            });
        });

        // Ajout d'interactivité pour les boutons
        document.querySelectorAll('button').forEach(button => {
            if (button.textContent === 'voir') {
                button.addEventListener('click', function() {
                    console.log('Voir la facture cliquée');
                    // Ici vous pourriez ajouter la logique pour afficher la facture
                });
            }
        });
    </script>
      </section>
</body>
</html>


