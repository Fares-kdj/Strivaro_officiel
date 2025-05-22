<?php
// Inclure la connexion à la base de données
include './portfolio/includes/db.php';

// Récupérer les projets
$sql = "SELECT * FROM projects";
$stmt = $conn->query($sql);
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr" class="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Strivaro - À propos</title>
    <link rel="icon" href="./src/images/logo/favicon.ico">
    <link href="style9.4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
  </head>

  <body class="dark:bg-dark">
   <!-- ===== Header Start ===== -->
<header class="header absolute top-0 left-0 w-full">
  <div
    class="flex w-full flex-wrap px-5 lg:flex-nowrap lg:items-center lg:px-5 xl:px-10 2xl:px-20"
  >
    <div class="relative z-99 max-w-[250px] lg:w-full xl:max-w-[350px]">
      <a href="index.php" class="inline-block">
        <img
          src="src/images/logo/logo-dark.svg"
          alt="logo"
          class="hidden h-[50px] dark:block"
        />
        <img
          src="src/images/logo/logo-light.svg"
          alt="logo"
          class="h-[50px] dark:hidden"
        />
      </a>
    </div>
    <div
      class="menu-wrapper dark:bg-dark fixed top-0 left-0 z-50 h-screen w-full justify-center bg-white p-5 lg:visible lg:static lg:flex lg:h-auto lg:justify-start lg:bg-transparent lg:p-0 lg:opacity-100 dark:lg:bg-transparent"
    >
      <div class="w-full self-center">
        <nav>
          <ul
            class="navbar flex flex-col items-center justify-center space-y-5 text-center lg:flex-row lg:justify-start lg:space-y-0 lg:space-x-10"
          >
            <li>
              <a
                href="./index.php"
                class="menu-scroll font-heading text-dark-text hover:text-primary inline-flex items-center justify-center text-center text-base dark:hover:text-white"
              >
                Accueil
              </a>
            </li>
            <li>
              <a
                href="./index.php#features"
                class="menu-scroll font-heading text-dark-text hover:text-primary inline-flex items-center justify-center text-center text-base dark:hover:text-white"
              >
                Nos Services
              </a>
            </li>
             <li>
              <a
                href="./about.php"
                class="menu-scroll font-heading text-dark-text hover:text-primary inline-flex items-center justify-center text-center text-base dark:hover:text-white"
              >
                À Propos
              </a>
            </li>
            <li>
              <a
                href="./portfolio.php"
                class="menu-scroll active font-heading text-dark-text hover:text-primary inline-flex items-center justify-center text-center text-base dark:hover:text-white"
              >
                Nos Projets
              </a>
            </li>
            <li>
              <a
                href="./audit.php"
                class="menu-scroll font-heading text-dark-text hover:text-primary inline-flex items-center justify-center text-center text-base dark:hover:text-white"
              >
                Audit
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div
      class="absolute top-1/2 right-5 z-50 flex -translate-y-1/2 items-center lg:static lg:translate-y-0"
    >
      <label
        for="darkToggler"
        class="bg-gray-2 dark:bg-dark-bg relative z-40 flex h-9 w-9 cursor-pointer items-center justify-center rounded-full text-black md:h-14 md:w-14 dark:text-white"
      >
        <input
          type="checkbox"
          name="darkToggler"
          id="darkToggler"
          class="sr-only"
          aria-label="darkToggler"
        />
        <svg
          viewBox="0 0 23 23"
          class="h-5 w-5 stroke-current md:h-6 md:w-6 dark:hidden"
          fill="none"
        >
          <path
            d="M9.55078 1.5C5.80078 1.5 1.30078 5.25 1.30078 11.25C1.30078 17.25 5.80078 21.75 11.8008 21.75C17.8008 21.75 21.5508 17.25 21.5508 13.5C13.3008 18.75 4.30078 9.75 9.55078 1.5Z"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
        <svg
          viewBox="0 0 25 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
          class="hidden h-5 w-5 md:h-6 md:w-6 dark:block"
        >
          <mask id="path-1-inside-1_977:1934" fill="white">
            <path
              d="M12.0508 16.5C10.8573 16.5 9.71271 16.0259 8.8688 15.182C8.02489 14.3381 7.55078 13.1935 7.55078 12C7.55078 10.8065 8.02489 9.66193 8.8688 8.81802C9.71271 7.97411 10.8573 7.5 12.0508 7.5C13.2443 7.5 14.3888 7.97411 15.2328 8.81802C16.0767 9.66193 16.5508 10.8065 16.5508 12C16.5508 13.1935 16.0767 14.3381 15.2328 15.182C14.3888 16.0259 13.2443 16.5 12.0508 16.5ZM12.0508 18C13.6421 18 15.1682 17.3679 16.2934 16.2426C17.4186 15.1174 18.0508 13.5913 18.0508 12C18.0508 10.4087 17.4186 8.88258 16.2934 7.75736C15.1682 6.63214 13.6421 6 12.0508 6C10.4595 6 8.93336 6.63214 7.80814 7.75736C6.68292 8.88258 6.05078 10.4087 6.05078 12C6.05078 13.5913 6.68292 15.1174 7.80814 16.2426C8.93336 17.3679 10.4595 18 12.0508 18ZM12.0508 0C12.2497 0 12.4405 0.0790176 12.5811 0.21967C12.7218 0.360322 12.8008 0.551088 12.8008 0.75V3.75C12.8008 3.94891 12.7218 4.13968 12.5811 4.28033C12.4405 4.42098 12.2497 4.5 12.0508 4.5C11.8519 4.5 11.6611 4.42098 11.5205 4.28033C11.3798 4.13968 11.3008 3.94891 11.3008 3.75V0.75C11.3008 0.551088 11.3798 0.360322 11.5205 0.21967C11.6611 0.0790176 11.8519 0 12.0508 0V0ZM12.0508 19.5C12.2497 19.5 12.4405 19.579 12.5811 19.7197C12.7218 19.8603 12.8008 20.0511 12.8008 20.25V23.25C12.8008 23.4489 12.7218 23.6397 12.5811 23.7803C12.4405 23.921 12.2497 24 12.0508 24C11.8519 24 11.6611 23.921 11.5205 23.7803C11.3798 23.6397 11.3008 23.4489 11.3008 23.25V20.25C11.3008 20.0511 11.3798 19.8603 11.5205 19.7197C11.6611 19.579 11.8519 19.5 12.0508 19.5ZM24.0508 12C24.0508 12.1989 23.9718 12.3897 23.8311 12.5303C23.6905 12.671 23.4997 12.75 23.3008 12.75H20.3008C20.1019 12.75 19.9111 12.671 19.7705 12.5303C19.6298 12.3897 19.5508 12.1989 19.5508 12C19.5508 11.8011 19.6298 11.6103 19.7705 11.4697C19.9111 11.329 20.1019 11.25 20.3008 11.25H23.3008C23.4997 11.25 23.6905 11.329 23.8311 11.4697C23.9718 11.6103 24.0508 11.8011 24.0508 12ZM4.55078 12C4.55078 12.1989 4.47176 12.3897 4.33111 12.5303C4.19046 12.671 3.99969 12.75 3.80078 12.75H0.800781C0.601869 12.75 0.411103 12.671 0.270451 12.5303C0.129799 12.3897 0.0507813 12.1989 0.0507812 12C0.0507813 11.8011 0.129799 11.6103 0.270451 11.4697C0.411103 11.329 0.601869 11.25 0.800781 11.25H3.80078C3.99969 11.25 4.19046 11.329 4.33111 11.4697C4.47176 11.6103 4.55078 11.8011 4.55078 12ZM20.5363 3.5145C20.6769 3.65515 20.7559 3.84588 20.7559 4.04475C20.7559 4.24362 20.6769 4.43435 20.5363 4.575L18.4153 6.6975C18.3455 6.76713 18.2628 6.82235 18.1717 6.86C18.0806 6.89765 17.983 6.91699 17.8845 6.91692C17.6855 6.91678 17.4947 6.83758 17.354 6.69675C17.2844 6.62702 17.2292 6.54425 17.1915 6.45318C17.1539 6.36211 17.1345 6.26452 17.1346 6.16597C17.1348 5.96695 17.214 5.77613 17.3548 5.6355L19.4758 3.5145C19.6164 3.3739 19.8072 3.29491 20.006 3.29491C20.2049 3.29491 20.3956 3.3739 20.5363 3.5145ZM6.74678 17.304C6.88738 17.4446 6.96637 17.6354 6.96637 17.8342C6.96637 18.0331 6.88738 18.2239 6.74678 18.3645L4.62578 20.4855C4.48433 20.6221 4.29488 20.6977 4.09823 20.696C3.90158 20.6943 3.71347 20.6154 3.57442 20.4764C3.43536 20.3373 3.35648 20.1492 3.35478 19.9526C3.35307 19.7559 3.42866 19.5665 3.56528 19.425L5.68628 17.304C5.82693 17.1634 6.01766 17.0844 6.21653 17.0844C6.4154 17.0844 6.60614 17.1634 6.74678 17.304ZM20.5363 20.4855C20.3956 20.6261 20.2049 20.7051 20.006 20.7051C19.8072 20.7051 19.6164 20.6261 19.4758 20.4855L17.3548 18.3645C17.2182 18.223 17.1426 18.0336 17.1443 17.8369C17.146 17.6403 17.2249 17.4522 17.3639 17.3131C17.503 17.1741 17.6911 17.0952 17.8877 17.0935C18.0844 17.0918 18.2738 17.1674 18.4153 17.304L20.5363 19.425C20.6769 19.5656 20.7559 19.7564 20.7559 19.9552C20.7559 20.1541 20.6769 20.3449 20.5363 20.4855ZM6.74678 6.6975C6.60614 6.8381 6.4154 6.91709 6.21653 6.91709C6.01766 6.91709 5.82693 6.8381 5.68628 6.6975L3.56528 4.575C3.49365 4.50582 3.43651 4.42306 3.39721 4.33155C3.3579 4.24005 3.33721 4.14164 3.33634 4.04205C3.33548 3.94247 3.35445 3.84371 3.39216 3.75153C3.42988 3.65936 3.48557 3.57562 3.55598 3.5052C3.6264 3.43478 3.71014 3.37909 3.80232 3.34138C3.89449 3.30367 3.99325 3.2847 4.09283 3.28556C4.19242 3.28643 4.29083 3.30712 4.38233 3.34642C4.47384 3.38573 4.5566 3.44287 4.62578 3.5145L6.74678 5.6355C6.81663 5.70517 6.87204 5.78793 6.90985 5.87905C6.94766 5.97017 6.96712 6.06785 6.96712 6.1665C6.96712 6.26515 6.94766 6.36283 6.90985 6.45395C6.87204 6.54507 6.81663 6.62783 6.74678 6.6975Z"
            />
          </mask>
          <path
            d="M12.0508 16.5C10.8573 16.5 9.71271 16.0259 8.8688 15.182C8.02489 14.3381 7.55078 13.1935 7.55078 12C7.55078 10.8065 8.02489 9.66193 8.8688 8.81802C9.71271 7.97411 10.8573 7.5 12.0508 7.5C13.2443 7.5 14.3888 7.97411 15.2328 8.81802C16.0767 9.66193 16.5508 10.8065 16.5508 12C16.5508 13.1935 16.0767 14.3381 15.2328 15.182C14.3888 16.0259 13.2443 16.5 12.0508 16.5ZM12.0508 18C13.6421 18 15.1682 17.3679 16.2934 16.2426C17.4186 15.1174 18.0508 13.5913 18.0508 12C18.0508 10.4087 17.4186 8.88258 16.2934 7.75736C15.1682 6.63214 13.6421 6 12.0508 6C10.4595 6 8.93336 6.63214 7.80814 7.75736C6.68292 8.88258 6.05078 10.4087 6.05078 12C6.05078 13.5913 6.68292 15.1174 7.80814 16.2426C8.93336 17.3679 10.4595 18 12.0508 18ZM12.0508 0C12.2497 0 12.4405 0.0790176 12.5811 0.21967C12.7218 0.360322 12.8008 0.551088 12.8008 0.75V3.75C12.8008 3.94891 12.7218 4.13968 12.5811 4.28033C12.4405 4.42098 12.2497 4.5 12.0508 4.5C11.8519 4.5 11.6611 4.42098 11.5205 4.28033C11.3798 4.13968 11.3008 3.94891 11.3008 3.75V0.75C11.3008 0.551088 11.3798 0.360322 11.5205 0.21967C11.6611 0.0790176 11.8519 0 12.0508 0V0ZM12.0508 19.5C12.2497 19.5 12.4405 19.579 12.5811 19.7197C12.7218 19.8603 12.8008 20.0511 12.8008 20.25V23.25C12.8008 23.4489 12.7218 23.6397 12.5811 23.7803C12.4405 23.921 12.2497 24 12.0508 24C11.8519 24 11.6611 23.921 11.5205 23.7803C11.3798 23.6397 11.3008 23.4489 11.3008 23.25V20.25C11.3008 20.0511 11.3798 19.8603 11.5205 19.7197C11.6611 19.579 11.8519 19.5 12.0508 19.5ZM24.0508 12C24.0508 12.1989 23.9718 12.3897 23.8311 12.5303C23.6905 12.671 23.4997 12.75 23.3008 12.75H20.3008C20.1019 12.75 19.9111 12.671 19.7705 12.5303C19.6298 12.3897 19.5508 12.1989 19.5508 12C19.5508 11.8011 19.6298 11.6103 19.7705 11.4697C19.9111 11.329 20.1019 11.25 20.3008 11.25H23.3008C23.4997 11.25 23.6905 11.329 23.8311 11.4697C23.9718 11.6103 24.0508 11.8011 24.0508 12ZM4.55078 12C4.55078 12.1989 4.47176 12.3897 4.33111 12.5303C4.19046 12.671 3.99969 12.75 3.80078 12.75H0.800781C0.601869 12.75 0.411103 12.671 0.270451 12.5303C0.129799 12.3897 0.0507813 12.1989 0.0507812 12C0.0507813 11.8011 0.129799 11.6103 0.270451 11.4697C0.411103 11.329 0.601869 11.25 0.800781 11.25H3.80078C3.99969 11.25 4.19046 11.329 4.33111 11.4697C4.47176 11.6103 4.55078 11.8011 4.55078 12ZM20.5363 3.5145C20.6769 3.65515 20.7559 3.84588 20.7559 4.04475C20.7559 4.24362 20.6769 4.43435 20.5363 4.575L18.4153 6.6975C18.3455 6.76713 18.2628 6.82235 18.1717 6.86C18.0806 6.89765 17.983 6.91699 17.8845 6.91692C17.6855 6.91678 17.4947 6.83758 17.354 6.69675C17.2844 6.62702 17.2292 6.54425 17.1915 6.45318C17.1539 6.36211 17.1345 6.26452 17.1346 6.16597C17.1348 5.96695 17.214 5.77613 17.3548 5.6355L19.4758 3.5145C19.6164 3.3739 19.8072 3.29491 20.006 3.29491C20.2049 3.29491 20.3956 3.3739 20.5363 3.5145ZM6.74678 17.304C6.88738 17.4446 6.96637 17.6354 6.96637 17.8342C6.96637 18.0331 6.88738 18.2239 6.74678 18.3645L4.62578 20.4855C4.48433 20.6221 4.29488 20.6977 4.09823 20.696C3.90158 20.6943 3.71347 20.6154 3.57442 20.4764C3.43536 20.3373 3.35648 20.1492 3.35478 19.9526C3.35307 19.7559 3.42866 19.5665 3.56528 19.425L5.68628 17.304C5.82693 17.1634 6.01766 17.0844 6.21653 17.0844C6.4154 17.0844 6.60614 17.1634 6.74678 17.304ZM20.5363 20.4855C20.3956 20.6261 20.2049 20.7051 20.006 20.7051C19.8072 20.7051 19.6164 20.6261 19.4758 20.4855L17.3548 18.3645C17.2182 18.223 17.1426 18.0336 17.1443 17.8369C17.146 17.6403 17.2249 17.4522 17.3639 17.3131C17.503 17.1741 17.6911 17.0952 17.8877 17.0935C18.0844 17.0918 18.2738 17.1674 18.4153 17.304L20.5363 19.425C20.6769 19.5656 20.7559 19.7564 20.7559 19.9552C20.7559 20.1541 20.6769 20.3449 20.5363 20.4855ZM6.74678 6.6975C6.60614 6.8381 6.4154 6.91709 6.21653 6.91709C6.01766 6.91709 5.82693 6.8381 5.68628 6.6975L3.56528 4.575C3.49365 4.50582 3.43651 4.42306 3.39721 4.33155C3.3579 4.24005 3.33721 4.14164 3.33634 4.04205C3.33548 3.94247 3.35445 3.84371 3.39216 3.75153C3.42988 3.65936 3.48557 3.57562 3.55598 3.5052C3.6264 3.43478 3.71014 3.37909 3.80232 3.34138C3.89449 3.30367 3.99325 3.2847 4.09283 3.28556C4.19242 3.28643 4.29083 3.30712 4.38233 3.34642C4.47384 3.38573 4.5566 3.44287 4.62578 3.5145L6.74678 5.6355C6.81663 5.70517 6.87204 5.78793 6.90985 5.87905C6.94766 5.97017 6.96712 6.06785 6.96712 6.1665C6.96712 6.26515 6.94766 6.36283 6.90985 6.45395C6.87204 6.54507 6.81663 6.62783 6.74678 6.6975Z"
            fill="black"
            stroke="white"
            stroke-width="2"
            mask="url(#path-1-inside-1_977:1934)"
          />
        </svg>
      </label>

      <button
        class="menu-toggler text-dark relative z-50 lg:hidden dark:text-white"
      >
        <svg
          width="28"
          height="28"
          viewBox="0 0 28 28"
          class="cross hidden fill-current"
        >
          <path
            d="M14.0002 11.8226L21.6228 4.20001L23.8002 6.37745L16.1776 14L23.8002 21.6226L21.6228 23.8L14.0002 16.1774L6.37763 23.8L4.2002 21.6226L11.8228 14L4.2002 6.37745L6.37763 4.20001L14.0002 11.8226Z"
          />
        </svg>
        <svg
          width="22"
          height="22"
          viewBox="0 0 22 22"
          class="menu fill-current"
        >
          <path
            d="M2.75 3.66666H19.25V5.49999H2.75V3.66666ZM2.75 10.0833H19.25V11.9167H2.75V10.0833ZM2.75 16.5H19.25V18.3333H2.75V16.5Z"
          />
        </svg>
      </button>
    </div>
  </div>
</header>
<!-- ===== Header End ===== -->



<!-- ===== Projects Section Start ===== -->
<section id="projects" class="relative z-40 overflow-hidden pt-12 pb-24 sm:pt-16 lg:pt-20 lg:pb-28" style="margin-top: 50px;">
  <div class="px-4 xl:container">
    <div class="mx-auto mb-12 max-w-[530px] text-center">
      <span class="wow fadeInUp bg-primary/5 font-heading text-primary mb-8 inline-block rounded-full px-5 py-[10px] text-base dark:bg-white/10 dark:text-white" data-wow-delay=".2s">
        <span class="bg-primary mr-2 inline-block h-2 w-2 rounded-full"></span>
        Nos Projets
      </span>
      <h2 class="wow fadeInUp font-heading mb-5 text-2xl font-semibold sm:text-3xl md:text-4xl dark:text-white" data-wow-delay=".3s">
        Découvrez Nos Réalisations
      </h2>
      <p class="wow fadeInUp text-dark-text mb-12 text-base dark:text-white/70" data-wow-delay=".4s">
        Explorez une sélection de nos projets récents, mettant en avant notre expertise en design graphique, développement web, réalisation de films et montage vidéo.
      </p>
    </div>
    <!-- Filtrage par catégorie -->
    <ul class="wow fadeInUp flex justify-center space-x-4 mb-8 filter-wrapper" data-wow-delay=".5s">
      <li><a href="#" data-filter="*" class="text-primary font-heading text-base selected">All</a></li>
      <li><a href="#" data-filter=".Design-Graphique" class="text-primary font-heading text-base">Graphic Design</a></li>
      <li><a href="#" data-filter=".Développement-Web" class="text-primary font-heading text-base">Web Development</a></li>
      <li><a href="#" data-filter=".Réalisation-de-Films" class="text-primary font-heading text-base">FilmMaking</a></li>
      <li><a href="#" data-filter=".Montage-Vidéo" class="text-primary font-heading text-base">Video Editing</a></li>
    </ul>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 iso-box-section">
      <div class="grid-sizer"></div>
      <?php if (empty($projects)): ?>
        <div class="text-center col-span-full">
          <p class="text-dark-text dark:text-white/70">Aucun projet disponible pour le moment.</p>
        </div>
      <?php else: ?>
        <?php foreach ($projects as $project): ?>
          <div class="wow fadeInUp rounded-lg bg-white p-6 shadow-md dark:bg-dark-bg iso-box <?php echo htmlspecialchars(str_replace(' ', '-', $project['category'])); ?>" data-wow-delay=".3s">
            <!-- Carousel Container (Hidden by Default) -->
            <div class="carousel-container hidden relative z-50 mb-6 bg-dark-bg dark:bg-dark-bg/90 rounded-md shadow-lg" data-project-id="<?php echo $project['id']; ?>">
              <div class="swiper project-carousel-<?php echo $project['id']; ?>">
                <div class="swiper-wrapper">
                  <?php
                  $image_urls = json_decode($project['image_urls'], true) ?: [];
                  $fileType = $project['file_type'];
                  if (empty($image_urls) && !empty($project['image_url'])) {
                    $image_urls = [$project['image_url']];
                  }
                  foreach ($image_urls as $url):
                    $filePath = './portfolio/uploads/' . basename($url);
                    if (file_exists($filePath)):
                  ?>
                    <div class="swiper-slide">
                      <?php if (strpos($fileType, 'image/') === 0): ?>
                        <img src="<?php echo htmlspecialchars($filePath); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="w-full h-64 object-contain rounded-md" />
                      <?php elseif (strpos($fileType, 'video/') === 0): ?>
                        <video class="w-full h-64 object-contain rounded-md" controls>
                          <source src="<?php echo htmlspecialchars($filePath); ?>" type="<?php echo htmlspecialchars($fileType); ?>">
                          Votre navigateur ne supporte pas la lecture de vidéos.
                        </video>
                      <?php endif; ?>
                      
                    </div>
                  <?php endif; endforeach; ?>
                </div>
                <div class="carousel-caption text-center mt-4">
                        <h3 class="font-heading text-lg font-semibold text-white"><?php echo htmlspecialchars($project['title']); ?></h3>
                        <p class="text-sm text-white/70"><?php echo htmlspecialchars($project['description']); ?></p>
                      </div>
                <!-- Navigation Buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
              </div>
              <!-- Close Button -->
              <button class="carousel-close absolute top-2 right-2 text-white bg-primary/50 hover:bg-primary rounded-full w-8 h-8 flex items-center justify-center">
                &times;
              </button>
            </div>
            <!-- Thumbnail -->
            <div class="mb-6 relative group">
              <?php
              $primaryFilePath = !empty($image_urls) ? './portfolio/uploads/' . basename($image_urls[0]) : './portfolio/uploads/' . basename($project['image_url']);
              ?>
              <?php if (!empty($image_urls) && file_exists($primaryFilePath) && strpos($fileType, 'image/') === 0): ?>
                <a href="#" class="carousel-toggle" data-project-id="<?php echo $project['id']; ?>">
                  <img src="<?php echo htmlspecialchars($primaryFilePath); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="h-48 w-full object-cover rounded-md transition duration-300 group-hover:scale-105" loading="lazy" />
                </a>
              <?php elseif (!empty($image_urls) && file_exists($primaryFilePath) && strpos($fileType, 'video/') === 0): ?>
                <video class="h-48 w-full object-cover rounded-md" controls>
                  <source src="<?php echo htmlspecialchars($primaryFilePath); ?>" type="<?php echo htmlspecialchars($fileType); ?>">
                  Votre navigateur ne supporte pas la lecture de vidéos.
                </video>
              <?php elseif (!empty($project['image_url']) && file_exists($primaryFilePath)): ?>
                <a href="#" class="carousel-toggle" data-project-id="<?php echo $project['id']; ?>">
                  <img src="<?php echo htmlspecialchars($primaryFilePath); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="h-48 w-full object-cover rounded-md transition duration-300 group-hover:scale-105" loading="lazy" />
                </a>
              <?php else: ?>
                <div class="h-48 w-full bg-gray-200 rounded-md flex items-center justify-center">
                  <span class="text-gray-500">Aucun média disponible</span>
                </div>
              <?php endif; ?>
            </div>
            <h3 class="font-heading text-xl font-semibold text-dark-text dark:text-white mb-2"><?php echo htmlspecialchars($project['title']); ?></h3>
            <p class="text-sm text-primary dark:text-white/70 mb-2"><?php echo htmlspecialchars($project['category']); ?></p>
            <p class="text-base text-dark-text dark:text-white/70"><?php echo htmlspecialchars($project['description']); ?></p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- ===== Projects Section End ===== -->

    <!-- ===== Back To Top Start ===== -->
    <a href="javascript:void(0)" class="hover:shadow-signUp back-to-top bg-primary fixed right-8 bottom-8 left-auto z-999 hidden h-10 w-10 items-center justify-center rounded-xs text-white shadow-md transition">
      <span class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"></span>
    </a>
    <!-- ===== Back To Top End ===== -->

    <!-- ===== Scripts ===== -->
    
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
 <script>
  // Section menu active
  function onScroll(event) {
    const sections = document.querySelectorAll(".menu-scroll");
    const scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

    for (let i = 0; i < sections.length; i++) {
      const currLink = sections[i];
      const val = currLink.getAttribute("href");
      let refElement;
      if (val.includes("#")) {
        refElement = document.querySelector(val.split("#")[1]);
      } else {
        refElement = document.querySelector("#about");
      }
      const scrollTopMinus = scrollPos + 73;
      if (refElement && refElement.offsetTop <= scrollTopMinus && refElement.offsetTop + refElement.offsetHeight > scrollTopMinus) {
        document.querySelectorAll(".menu-scroll").forEach(link => link.classList.remove("active"));
        currLink.classList.add("active");
      } else {
        currLink.classList.remove("active");
      }
    }
  }

  window.document.addEventListener("scroll", onScroll);

  // Initialize Isotope and Swiper
  document.addEventListener('DOMContentLoaded', function () {
    // Initialize Isotope for filtering
    const grid = document.querySelector('.iso-box-section');
    if (grid) {
      const iso = new Isotope(grid, {
        itemSelector: '.iso-box',
        layoutMode: 'fitRows'
      });

      // Filter items on click
      const filters = document.querySelectorAll('.filter-wrapper a');
      filters.forEach(filter => {
        filter.addEventListener('click', function (e) {
          e.preventDefault();
          const filterValue = this.getAttribute('data-filter');
          iso.arrange({ filter: filterValue });

          // Update 'selected' class
          filters.forEach(f => f.classList.remove('selected'));
          this.classList.add('selected');
        });
      });
    }

    // Initialize Swiper for each project carousel
    document.querySelectorAll('.carousel-container').forEach(container => {
      const projectId = container.getAttribute('data-project-id');
      new Swiper(`.project-carousel-${projectId}`, {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
          nextEl: `.project-carousel-${projectId} .swiper-button-next`,
          prevEl: `.project-carousel-${projectId} .swiper-button-prev`,
        },
        pagination: {
          el: `.project-carousel-${projectId} .swiper-pagination`,
          clickable: true,
        },
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
      });
    });

    // Toggle carousel visibility
    document.querySelectorAll('.carousel-toggle').forEach(toggle => {
      toggle.addEventListener('click', function (e) {
        e.preventDefault();
        const projectId = this.getAttribute('data-project-id');
        const carousel = document.querySelector(`.carousel-container[data-project-id="${projectId}"]`);
        carousel.classList.toggle('hidden');
      });
    });

    // Close carousel
    document.querySelectorAll('.carousel-close').forEach(button => {
      button.addEventListener('click', function () {
        this.closest('.carousel-container').classList.add('hidden');
      });
    });
  });
</script>
    <script defer src="./js/bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  </body>
</html>