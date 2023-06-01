 
<!-- ----- debut de la page cave_acceuil -->
<?php include 'fragment/fragmentHeader.html'; ?>

<?php include 'fragment/fragmentMenu.php'; ?>

<!DOCTYPE html>

<!-- home section starts  -->

<section class="home" id="home">

    
   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
             <?php 
             if ($_SESSION['login'] == 'vide') {
                 echo '<h3>DOCTOLIB: AU SERVICE DE VOTRE SANTÉ.</h3>';
             } else {
                 echo '<h3>Bienvenu &nbsp;'.$login.'</h3>';
             }
             ?>
            
            <p>"Mettre le Pouvoir Entre les Mains des Patients, Relier les Médecins : Bienvenue sur Doctolib, la Plateforme Révolutionnaire qui Simplifie Votre Parcours de Santé.</p>
            <a href="router3.php?action=logCreate" class="link-btn">S'inscire</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="../images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>À propos de Doctolib</span>
            <h3>Soins de santé authentiques</h3>
            <p>Doctolib simplifie la gestion des rendez-vous médicaux en ligne. Avec une interface conviviale, les patients peuvent réserver facilement et en toute sécurité. La plateforme offre également des services intégrés tels que la téléconsultation pour une expérience complète.</p>
            <a href="#contact" class="link-btn">prendre rendez-vous</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">Nous avons ...</h1>

   <div class="box-container container">

      <div class="box">
         
         <h3>kinésithérapeute</h3>
      </div>

      <div class="box">
         
         <h3>ostéopathe</h3>
      </div>

      <div class="box">
         
         <h3>sage-femme</h3>
      </div>

      <div class="box">
         
         <h3>dentiste</h3>
      </div>

      <div class="box">
         
         <h3>médecin généraliste</h3>
      </div>

      <div class="box">
         
         <h3>infirmier</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">Doctolib: au service de votre santé</h1>

   <div class="box-container container">

      <div class="box">
         <img src="../images/1.svg" alt="">
         <h3>Accès Rapide.</h3>
         <p>Accédez rapidement aux disponibilités de tous vos praticiens.</p>
      </div>

      <div class="box">
         <img src="../images/2.svg" alt="">
         <h3>Communauté Médicale..</h3>
         <p>Accédez rapidement aux disponibilités de tous vos praticiens..</p>
      </div>

      <div class="box">
         <img src="../images/3.svg" alt="">
         <h3>Gestion Pratique.</h3>
         <p>Accédez rapidement aux disponibilités de tous vos praticiens.</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> Our Clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="../images/pic-1.png" alt="">
         <p>"Une Expérience Fluide, Intuitive Et Personnalisée : Optimisez Votre Parcours De Santé Avec L'interface Conviviale, Intuitive Et Personnalisée De Doctolib, Vous Permettant De Réserver Facilement Vos Rendez-Vous Et D'accéder De Manière Transparente Et Personnalisée À Une Variété De Services Essentiels."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alan Harris</h3>
         <span>Manager</span>
      </div>

      <div class="box">
         <img src="../images/pic-2.png" alt="">
         <p>"Une Plateforme Fiable, Pratique Et Innovante : Profitez De Rendez-Vous Pratiques Et D'une Plateforme De Confiance Et Innovante Avec Doctolib, Garantissant Une Expérience Rassurante Et Des Fonctionnalités Pratiques Et Innovantes Pour Gérer Vos Besoins De Santé En Toute Simplicité."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sophie Johnson</h3>
         <span>Assistant Manager</span>
      </div>

      <div class="box">
         <img src="../images/pic-3.png" alt="">
         <p>"Gestion Simplifiée Et Complète Pour Vos Rendez-Vous Médicaux : Profitez De L'expérience Conviviale De La Plateforme Doctolib Qui Vous Permet De Gérer Facilement Vos Rendez-Vous, Tout En Accédant À Une Gamme Étendue De Services Intégrés Pour Des Soins Complets Et Une Expérience Utilisateur Optimale."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>James Williams</h3>
         <span>CEO</span>
      </div>

   </div>



<!-- contact section ends -->

<?php include 'fragment/fragmentFooter.html'; ?>

  <!-- ----- fin de la page cave_acceuil -->
