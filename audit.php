<!DOCTYPE html>
<html lang="fr" class="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Strivaro - Audit Stratégique</title>
    <link rel="icon" href="./src/images/logo/favicon.ico">
    <link href="style9.2.css" rel="stylesheet">
    <style>
      body {
  overflow-x: hidden;
    padding-top: 100px;
}
    </style>
  </head>

  <body class="dark:bg-dark">
    <!-- ===== Header Start ===== -->
<header class="header absolute top-0 left-0 w-full">
      <div class="flex w-full flex-wrap px-5 lg:flex-nowrap lg:items-center lg:px-5 xl:px-10 2xl:px-20">
        <div class="relative z-99 max-w-[250px] lg:w-full xl:max-w-[350px]">
          <a href="index.php" class="inline-block">
            <img src="src/images/logo/logo-dark.svg" alt="Strivaro logo" class="hidden h-[50px] dark:block" />
            <img src="src/images/logo/logo-light.svg" alt="Strivaro logo" class="h-[50px] dark:hidden" />
          </a>
        </div>
        <div class="menu-wrapper dark:bg-dark fixed top-0 left-0 z-50 h-screen w-full justify-center bg-white p-5 lg:visible lg:static lg:flex lg:h-auto lg:justify-start lg:bg-transparent lg:p-0 lg:opacity-100 dark:lg:bg-transparent">
          <div class="w-full self-center">
            <nav>
              <ul class="navbar flex flex-col items-center justify-center space-y-5 text-center lg:flex-row lg:justify-start lg:space-y-0 lg:space-x-10">
                <li>
                  <a href="index.php#home" class="menu-scroll font-heading text-dark-text hover:text-primary inline-flex items-center justify-center text-center text-base dark:hover:text-white">
                    Home
                  </a>
                </li>
                <li>
                  <a href="index.php#features" class="menu-scroll font-heading text-dark-text hover:text-primary inline-flex items-center justify-center text-center text-base dark:hover:text-white">
                    Nos Services
                  </a>
                </li>
                <li>
                  <a href="about.php" class="menu-scroll font-heading text-dark-text hover:text-primary inline-flex items-center justify-center text-center text-base dark:hover:text-white">
                    À propos
                  </a>
                </li>
                <li>
                  <a href="./audit.php" class="menu-scroll active font-heading text-dark-text hover:text-primary inline-flex items-center justify-center text-center text-base dark:hover:text-white">
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



<!-- ===== Contact & Free Audit Section Start ===== -->
<section id="contact-audit" class="contact-audit-section">
  <div class="overlay"></div>

  <div class="content">
    <h1>Contact & Free Audit</h1>
  </div>
</section>
<!-- ===== Contact & Free Audit Section End ===== -->

<section id="why-reach-out" class="pt-14 sm:pt-20 lg:pt-[130px]">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center -mx-4">
      <div class="wow fadeInUp w-full lg:w-1/2 px-4 mb-10 lg:mb-0" data-wow-delay=".2s">
        <div class="relative rounded-lg overflow-hidden">
          <img
            src="./src/images/audit/image-2.jpg"
            alt="Deux professionnels se serrant la main au-dessus d’une table avec des documents et un ordinateur portable"
            class="custom-image"
          />
        </div>
      </div>
      <div class="wow fadeInUp w-full lg:w-1/2 px-4" data-wow-delay=".25s">
        <span class="text-primary font-semibold text-3xl">[Strivaro]</span>
        <h2 class="font-heading text-dark dark:text-white mb-5 text-3xl font-semibold sm:text-4xl md:text-[50px] md:leading-[60px]">
          Pourquoi nous contacter ?
        </h2>
        <p class="text-dark-text dark:text-gray-300 text-base mb-6">
          Chez Strivaro, nous croyons en une approche stratégique et personnalisée de l'acquisition client. Que vous souhaitiez optimiser vos campagnes publicitaires, revoir votre stratégie digitale ou développer votre activité, nous sommes là pour vous accompagner.
        </p>
        <h3 class="font-heading text-dark dark:text-white mb-3 text-2xl font-semibold">Ce que vous obtenez avec notre audit gratuit :</h3>
        <ul class="text-dark-text dark:text-gray-300 space-y-2">
          <li class="flex items-center">
            <svg class="mr-2 h-5 w-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Une analyse complète de vos campagnes publicitaires actuelles.
          </li>
          <li class="flex items-center">
            <svg class="mr-2 h-5 w-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Des recommandations précises sur votre stratégie d’acquisition client.
          </li>
          <li class="flex items-center">
            <svg class="mr-2 h-5 w-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Un plan d’action personnalisé pour maximiser votre retour sur investissement (ROAS).
          </li>
        </ul>
        <div style="margin-top: 70px;">
          <a
            href="javascript:void(0)"
            class="bg-primary font-heading hover:bg-primary/90 inline-flex flex-col items-center rounded-sm px-8 py-[14px] text-base text-white text-center"
          >
            Planifiez un appel stratégique<br />
            <span class="block text-center">STRIVARO</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- ===== Benefits & Contact Section Start ===== -->
<section id="benefits" class="pt-14 sm:pt-20 lg:pt-[130px] pb-24">
  <div class="px-4 xl:container">
    <!-- Titre -->
    <div class="wow fadeInUp relative mx-auto mb-12 max-w-[620px] pt-6 text-center md:mb-20 lg:pt-16" data-wow-delay=".2s">
      <span class="title block text-primary uppercase mb-2 tracking-widest">OBTENEZ</span>
      <h2 class="font-heading text-dark mb-5 text-3xl font-semibold sm:text-4xl md:text-[50px] md:leading-[60px] dark:text-white">
        Ce Que Vous Obtenez
      </h2>
      <p class="text-dark-text text-base">
        Un audit gratuit, sans engagement, conçu pour apporter de la <b>valeur immédiate</b> et vous aider à prendre des décisions éclairées.
      </p>
    </div>

    <!-- Liste des bénéfices -->
    <div class="-mx-4 flex flex-wrap justify-center gap-y-6">
      <!-- Élément 1 -->
      <div class="w-full px-4 md:w-1/2">
        <div class="wow fadeInUp text-center" data-wow-delay=".2s">
          <p class="text-dark-text text-base flex justify-center items-start gap-2">
            <svg class="mr-2 h-5 w-5 text-primary shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            30 à 60 minutes d’échange avec un stratège senior
          </p>
        </div>
      </div>

      <!-- Élément 2 -->
      <div class="w-full px-4 md:w-1/2">
        <div class="wow fadeInUp text-center" data-wow-delay=".25s">
          <p class="text-dark-text text-base flex justify-center items-start gap-2">
            <svg class="mr-2 h-5 w-5 text-primary shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Un audit sur mesure de vos actions actuelles
          </p>
        </div>
      </div>

      <!-- Élément 3 -->
      <div class="w-full px-4 md:w-1/2">
        <div class="wow fadeInUp text-center" data-wow-delay=".3s">
          <p class="text-dark-text text-base flex justify-center items-start gap-2">
            <svg class="mr-2 h-5 w-5 text-primary shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Des recommandations immédiates et utiles
          </p>
        </div>
      </div>

      <!-- Élément 4 -->
      <div class="w-full px-4 md:w-1/2">
        <div class="wow fadeInUp text-center" data-wow-delay=".35s">
          <p class="text-dark-text text-base flex justify-center items-start gap-2">
            <svg class="mr-2 h-5 w-5 text-primary shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Une vision claire pour prendre des décisions éclairées
          </p>
        </div>
      </div>

      <!-- Élément 5 -->
      <!-- Élément 5 -->
  <div class="w-full px-4">
  <div class="wow fadeInUp text-center" data-wow-delay=".4s">
    <p class="text-dark-text text-base font-semibold flex justify-center items-start gap-2">
      <svg class="mr-2 text-primary shrink-0 " xmlns="http://www.w3.org/2000/svg" fill="none" width="20" heigth="20" viewBox="0 0 24 24"
           stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-primary mt-0.5 shrink-0">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 
                 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 
                 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 
                 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
      </svg>
      Aucune pression, juste de la valeur
    </p>
    <p class="text-dark-text text-base mt-4">
      Cet audit est offert <b>sans engagement</b> : si nous pouvons vous aider, tant mieux. Sinon, vous repartirez avec des conseils concrets à appliquer seul.
    </p>
  </div>
  </div>

    </div>
  </div>
</section>

    <!-- ===== Benefits & Contact Section End ===== -->
    
    <!-- ===== Support Section Start ===== -->
<section id="support" class="pt-14 sm:pt-20 lg:pt-[130px]">
      <div class="px-4 xl:container">
        <div class="-mx-4 flex flex-wrap justify-center">
          <div class="w-full px-4 xl:w-10/12">
            <div
              class="flex flex-wrap items-center border-b pb-14 lg:pb-0 dark:border-[#2E333D]"
            >
              <div class="w-full px-4 lg:w-1/2">
                <!-- Section Title -->
                <div
                  class="wow fadeInUp relative mb-12 max-w-[500px] pt-6 md:mb-14 lg:pt-16"
                  data-wow-delay=".2s"
                >
                  <span class="title left-0! translate-x-0!"> SUPPORT </span>
                  <h2
                    class="font-heading text-dark mb-5 text-3xl font-semibold sm:text-4xl md:text-[50px] md:leading-[60px] dark:text-white"
                  >
                    Vous Avez Une Question Avant De Réserver ?
                  </h2>
                </div>
              </div>

              <div class="w-full px-4 lg:w-1/2">
                <div
                  class="wow fadeInUp flex items-center"
                  data-wow-delay=".2s"
                >
                  <span
                    class="bg-dark mr-10 h-1 w-full max-w-[200px] dark:bg-white"
                  ></span>
                  <a href="mailto:strivaro@gmail.com" class="font-heading text-dark text-xl md:text-3xl lg:text-xl xl:text-3xl dark:text-white">
                    <span class="__cf_email__" data-cfemail="2a43444c456a4d45595e4b585e5f5a04494547">strivaro@gmail.com</span>
                  </a>
                </div>
              </div>
            </div>

            <div
              class="wow fadeInUp -mx-4 flex flex-wrap pt-12"
              data-wow-delay=".2s"
            >
              <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div class="mb-6">
                  <h3
                    class="font-heading text-dark mb-2 text-base sm:text-xl dark:text-white"
                  >
                    Email Address
                  </h3>
                  <p class="text-dark-text text-base font-medium">
                    <a href="mailto:strivaro@gmail.com">strivaro@gmail.com</a>
                  </p>
                </div>
              </div>
              <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div class="mb-6">
                  <h3
                    class="font-heading text-dark mb-2 text-base sm:text-xl dark:text-white"
                  >
                    Phone Number
                  </h3>
                  <p class="text-dark-text text-base font-medium">
                    +(1) 438 860 8395
                  </p>
                </div>
              </div>
              <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div class="mb-6">
                  <h3
                    class="font-heading text-dark mb-2 text-base sm:text-xl dark:text-white"
                  >
                    Office Location
                  </h3>
                  <p class="text-dark-text text-base font-medium">
                    2780 avenues Gaspard
                  </p>
                </div>
              </div>
              <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                <div class="mb-6 flex items-center space-x-5 lg:justify-end">
                  <a
                    href="javascript:void(0)"
                    name="social-link"
                    aria-label="social-link"
                    class="text-dark-text hover:text-primary dark:hover:text-white"
                  >
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      class="fill-current"
                    >
                      <path
                        d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z"
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    name="social-link"
                    aria-label="social-link"
                    class="text-dark-text hover:text-primary dark:hover:text-white"
                  >
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M13.9831 19.25L9.82094 13.3176L4.61058 19.25H2.40625L8.843 11.9233L2.40625 2.75H8.06572L11.9884 8.34127L16.9034 2.75H19.1077L12.9697 9.73737L19.6425 19.25H13.9831ZM16.4378 17.5775H14.9538L5.56249 4.42252H7.04674L10.808 9.6899L11.4584 10.6039L16.4378 17.5775Z"
                        fill="currentColor"
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    name="social-link"
                    aria-label="social-link"
                    class="text-dark-text hover:text-primary dark:hover:text-white"
                  >
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      class="fill-current"
                    >
                      <path
                        d="M6.93994 5.00002C6.93968 5.53046 6.72871 6.03906 6.35345 6.41394C5.97819 6.78883 5.46938 6.99929 4.93894 6.99902C4.40851 6.99876 3.89991 6.78779 3.52502 6.41253C3.15014 6.03727 2.93968 5.52846 2.93994 4.99802C2.94021 4.46759 3.15117 3.95899 3.52644 3.5841C3.9017 3.20922 4.41051 2.99876 4.94094 2.99902C5.47137 2.99929 5.97998 3.21026 6.35486 3.58552C6.72975 3.96078 6.94021 4.46959 6.93994 5.00002ZM6.99994 8.48002H2.99994V21H6.99994V8.48002ZM13.3199 8.48002H9.33994V21H13.2799V14.43C13.2799 10.77 18.0499 10.43 18.0499 14.43V21H21.9999V13.07C21.9999 6.90002 14.9399 7.13002 13.2799 10.16L13.3199 8.48002Z"
                      />
                    </svg>
                  </a>
                  <a
                    href="javascript:void(0)"
                    name="social-link"
                    aria-label="social-link"
                    class="text-dark-text hover:text-primary dark:hover:text-white"
                  >
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      class="fill-current"
                    >
                      <path
                        d="M7.443 5.34961C8.082 5.34961 8.673 5.39961 9.213 5.54761C9.70302 5.63765 10.1708 5.82244 10.59 6.09161C10.984 6.33861 11.279 6.68561 11.475 7.13061C11.672 7.57561 11.77 8.12061 11.77 8.71361C11.77 9.40661 11.623 9.99961 11.279 10.4446C10.984 10.8906 10.492 11.2856 9.902 11.5826C10.738 11.8306 11.377 12.2756 11.77 12.8686C12.164 13.4626 12.41 14.2046 12.41 15.0456C12.41 15.7386 12.262 16.3316 12.016 16.8266C11.77 17.3216 11.377 17.7666 10.934 18.0636C10.4528 18.382 9.92084 18.616 9.361 18.7556C8.771 18.9046 8.181 19.0036 7.591 19.0036H1V5.34961H7.443ZM7.049 10.8896C7.59 10.8896 8.033 10.7416 8.377 10.4946C8.721 10.2476 8.869 9.80161 8.869 9.25761C8.869 8.96061 8.819 8.66361 8.721 8.46661C8.623 8.26861 8.475 8.11961 8.279 7.97161C8.082 7.87261 7.885 7.77361 7.639 7.72461C7.393 7.67461 7.148 7.67461 6.852 7.67461H4V10.8906H7.05L7.049 10.8896ZM7.197 16.7276C7.492 16.7276 7.787 16.6776 8.033 16.6286C8.28138 16.5814 8.51628 16.48 8.721 16.3316C8.92139 16.1868 9.08903 16.0015 9.213 15.7876C9.311 15.5406 9.41 15.2436 9.41 14.8976C9.41 14.2046 9.213 13.7096 8.82 13.3636C8.426 13.0666 7.885 12.9186 7.246 12.9186H4V16.7286H7.197V16.7276ZM16.689 16.6776C17.082 17.0736 17.672 17.2716 18.459 17.2716C19 17.2716 19.492 17.1236 19.885 16.8766C20.279 16.5796 20.525 16.2826 20.623 15.9856H23.033C22.639 17.1726 22.049 18.0136 21.263 18.5576C20.475 19.0526 19.541 19.3496 18.41 19.3496C17.6864 19.3518 16.9688 19.2175 16.295 18.9536C15.6887 18.7262 15.148 18.3524 14.721 17.8656C14.2643 17.4102 13.9267 16.8494 13.738 16.2326C13.492 15.5896 13.393 14.8976 13.393 14.1056C13.393 13.3636 13.492 12.6716 13.738 12.0276C13.9745 11.4077 14.3245 10.8373 14.77 10.3456C15.213 9.90061 15.754 9.50561 16.344 9.25761C17.0007 8.99367 17.7022 8.8592 18.41 8.86161C19.246 8.86161 19.984 9.01061 20.623 9.35661C21.263 9.70261 21.754 10.0986 22.148 10.6926C22.5499 11.2631 22.8494 11.8993 23.033 12.5726C23.131 13.2646 23.18 13.9576 23.131 14.7486H16C16 15.5406 16.295 16.2826 16.689 16.6786V16.6776ZM19.787 11.4836C19.443 11.1376 18.902 10.9396 18.262 10.9396C17.82 10.9396 17.475 11.0386 17.18 11.1866C16.885 11.3356 16.689 11.5336 16.492 11.7316C16.311 11.9229 16.1912 12.1638 16.148 12.4236C16.098 12.6716 16.049 12.8686 16.049 13.0666H20.475C20.377 12.3246 20.131 11.8306 19.787 11.4836ZM15.459 6.28961H20.967V7.62561H15.46V6.28961H15.459Z"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mx-auto max-w-[780px] pt-[130px]">
          <form
            id="contact-form"
            class="wow fadeInUp"
            data-wow-delay=".2s"
          >
            <div class="-mx-4 flex flex-wrap">
              <div class="w-full px-4 sm:w-1/2">
                <div class="mb-12">
                  <label
                    for="name"
                    class="font-heading text-dark mb-3 block text-base dark:text-white"
                  >
                    Your Name
                  </label>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Full Name"
                    class="text-dark placeholder-dark-text focus:border-primary w-full border-b bg-transparent py-5 text-base font-medium outline-hidden dark:border-[#2C3443] dark:text-white dark:focus:border-white"
                    required
                  />
                </div>
              </div>
              <div class="w-full px-4 sm:w-1/2">
                <div class="mb-12">
                  <label
                    for="email"
                    class="font-heading text-dark mb-3 block text-base dark:text-white"
                  >
                    Email Address
                  </label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Email Address"
                    class="text-dark placeholder-dark-text focus:border-primary w-full border-b bg-transparent py-5 text-base font-medium outline-hidden dark:border-[#2C3443] dark:text-white dark:focus:border-white"
                    required
                  />
                </div>
              </div>
              <div class="w-full px-4 sm:w-1/2">
                <div class="mb-12">
                  <label
                    for="phone"
                    class="font-heading text-dark mb-3 block text-base dark:text-white"
                  >
                    Phone (Optional)
                  </label>
                  <input
                    type="text"
                    name="phone"
                    id="phone"
                    placeholder="Phone Number"
                    class="text-dark placeholder-dark-text focus:border-primary w-full border-b bg-transparent py-5 text-base font-medium outline-hidden dark:border-[#2C3443] dark:text-white dark:focus:border-white"
                  />
                </div>
              </div>
              <div class="w-full px-4 sm:w-1/2">
                <div class="mb-12">
                  <label
                    for="subject"
                    class="font-heading text-dark mb-3 block text-base dark:text-white"
                  >
                    Subject
                  </label>
                  <input
                    type="text"
                    name="subject"
                    id="subject"
                    placeholder="Type Subject"
                    class="text-dark placeholder-dark-text focus:border-primary w-full border-b bg-transparent py-5 text-base font-medium outline-hidden dark:border-[#2C3443] dark:text-white dark:focus:border-white"
                    required
                  />
                </div>
              </div>
              <div class="w-full px-4">
                <div class="mb-10">
                  <label
                    for="message"
                    class="font-heading text-dark mb-3 block text-base dark:text-white"
                  >
                    Message
                  </label>
                  <textarea
                    rows="4"
                    name="message"
                    id="message"
                    placeholder="Type Message"
                    class="text-dark placeholder-dark-text focus:border-primary w-full resize-none border-b bg-transparent py-5 text-base font-medium outline-hidden dark:border-[#2C3443] dark:text-white dark:focus:border-white"
                    required
                  ></textarea>
                </div>
              </div>

              <div class="w-full px-4">
                <div class="mb-12">
                  <label
                    for="supportCheckbox"
                    class="text-dark-text hover:text-primary flex cursor-pointer select-none"
                  >
                    <div class="relative">
                      <input
                        type="checkbox"
                        id="supportCheckbox"
                        class="sr-only"
                        required
                      />
                      <div
                        class="box mt-1 mr-4 flex h-5 w-5 items-center justify-center rounded-sm border dark:border-[#414652]"
                      >
                        <span class="opacity-0">
                          <svg
                            width="11"
                            height="8"
                            viewBox="0 0 11 8"
                            fill="none"
                            class="stroke-current"
                          >
                            <path
                              d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                              stroke-width="0.4"
                            ></path>
                          </svg>
                        </span>
                      </div>
                    </div>
                    I have read the terms of the Service & I accept Privacy
                    Policy
                  </label>
                </div>
              </div>

              <div class="w-full px-4">
                <button
                  type="submit"
                  class="bg-primary font-heading hover:bg-primary/90 flex w-full items-center justify-center rounded-sm px-8 py-[14px] text-base text-white"
                >
                  Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
</section>


    <!-- ===== Support Section End ===== -->


     <!-- ===== CTA Section Start ===== -->
    <section id="cta" class="pt-14 sm:pt-20 lg:pt-[130px]">
      <div class="px-4 xl:container">
        <div
          class="wow fadeInUp drop-shadow-light relative overflow-hidden bg-cover bg-center px-10 py-[60px] sm:px-[70px] dark:drop-shadow-none"
          data-wow-delay=".2s"
        >
          <div
            class="bg-noise-pattern absolute top-0 left-0 -z-10 h-full w-full bg-cover bg-center opacity-10 dark:opacity-40"
          ></div>
          <div class="absolute bottom-0 left-1/2 -z-10 -translate-x-1/2">
            <svg
              width="1215"
              height="259"
              viewBox="0 0 1215 259"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g opacity="0.6" filter="url(#filter0_f_63_363)">
                <rect
                  x="450"
                  y="189"
                  width="315"
                  height="378"
                  fill="url(#paint0_linear_63_363)"
                />
              </g>
              <defs>
                <filter
                  id="filter0_f_63_363"
                  x="0"
                  y="-261"
                  width="1215"
                  height="1278"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB"
                >
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="BackgroundImageFix"
                    result="shape"
                  />
                  <feGaussianBlur
                    stdDeviation="225"
                    result="effect1_foregroundBlur_63_363"
                  />
                </filter>
                <linearGradient
                  id="paint0_linear_63_363"
                  x1="420.718"
                  y1="263.543"
                  x2="585.338"
                  y2="628.947"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#ABBCFF" />
                  <stop offset="0.859375" stop-color="#322FBF" />
                </linearGradient>
              </defs>
            </svg>
          </div>

          <div class="-mx-4 flex flex-wrap items-center">
            <div class="w-full px-4 lg:w-2/3">
              <div
                class="mx-auto mb-10 max-w-[550px] text-center lg:mb-0 lg:ml-0 lg:text-left"
              >
                <h2
                  class="font-heading text-dark mb-4 text-xl leading-tight font-semibold sm:text-[38px] dark:text-white"
                >
                  Envie d’aller plus loin ?
                </h2>
                <p class="text-dark-text text-base">
                 Nous offrons un audit stratégique gratuit pour les marques ambitieuses qui
                  souhaitent structurer ou scaler leur acquisition client.
                </p>
              </div>
            </div>
            <div class="w-full px-4 lg:w-1/3">
              <div class="text-center lg:text-right">
                <a
                  href="javascript:void(0)"
                  class="bg-primary font-heading hover:bg-primary/90 inline-flex flex-col items-center rounded-sm px-8 py-[14px] text-base text-white text-center"
                >
                  Réservez votre appel avec un expert<br />
                  <span class="block text-center">STRIVARO</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== CTA Section End ===== -->

    <!-- ===== Footer Start ===== -->
    <footer
  class="wow fadeInUp pt-14 sm:pt-20 lg:pt-[130px]"
  data-wow-delay=".2s"
>
  <div class="px-4 xl:container">
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4 sm:w-1/2 md:w-5/12 lg:w-3/12 xl:w-3/12">
        <div class="mb-20 max-w-[330px]">
          <a href="index.php" class="mb-6 inline-block">
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
          <p class="text-dark-text mb-10 text-base">
            Votre croissance commence ici.
          </p>
          <div class="flex items-center space-x-5">
            <a
              href="javascript:void(0)"
              name="social-link"
              aria-label="lien social"
              class="text-dark-text hover:text-primary dark:hover:text-white"
            >
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                class="fill-current"
              >
                <path
                  d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z"
                />
              </svg>
            </a>
            <a
              href="javascript:void(0)"
              name="social-link"
              aria-label="lien social"
              class="text-dark-text hover:text-primary dark:hover:text-white"
            >
              <svg
                width="22"
                height="22"
                viewBox="0 0 22 22"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M13.9831 19.25L9.82094 13.3176L4.61058 19.25H2.40625L8.843 11.9233L2.40625 2.75H8.06572L11.9884 8.34127L16.9034 2.75H19.1077L12.9697 9.73737L19.6425 19.25H13.9831ZM16.4378 17.5775H14.9538L5.56249 4.42252H7.04674L10.808 9.6899L11.4584 10.6039L16.4378 17.5775Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a
              href="javascript:void(0)"
              name="social-link"
              aria-label="lien social"
              class="text-dark-text hover:text-primary dark:hover:text-white"
            >
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                class="fill-current"
              >
                <path
                  d="M6.93994 5.00002C6.93968 5.53046 6.72871 6.03906 6.35345 6.41394C5.97819 6.78883 5.46938 6.99929 4.93894 6.99902C4.40851 6.99876 3.89991 6.78779 3.52502 6.41253C3.15014 6.03727 2.93968 5.52846 2.93994 4.99802C2.94021 4.46759 3.15117 3.95899 3.52644 3.5841C3.9017 3.20922 4.41051 2.99876 4.94094 2.99902C5.47137 2.99929 5.97998 3.21026 6.35486 3.58552C6.72975 3.96078 6.94021 4.46959 6.93994 5.00002ZM6.99994 8.48002H2.99994V21H6.99994V8.48002ZM13.3199 8.48002H9.33994V21H13.2799V14.43C13.2799 10.77 18.0499 10.43 18.0499 14.43V21H21.9999V13.07C21.9999 6.90002 14.9399 7.13002 13.2799 10.16L13.3199 8.48002Z"
                />
              </svg>
            </a>
            <a
              href="javascript:void(0)"
              name="social-link"
              aria-label="lien social"
              class="text-dark-text hover:text-primary dark:hover:text-white"
            >
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                class="fill-current"
              >
                <path
                  d="M7.443 5.34961C8.082 5.34961 8.673 5.39961 9.213 5.54761C9.70302 5.63765 10.1708 5.82244 10.59 6.09161C10.984 6.33861 11.279 6.68561 11.475 7.13061C11.672 7.57561 11.77 8.12061 11.77 8.71361C11.77 9.40661 11.623 9.99961 11.279 10.4446C10.984 10.8906 10.492 11.2856 9.902 11.5826C10.738 11.8306 11.377 12.2756 11.77 12.8686C12.164 13.4626 12.41 14.2046 12.41 15.0456C12.41 15.7386 12.262 16.3316 12.016 16.8266C11.77 17.3216 11.377 17.7666 10.934 18.0636C10.4528 18.382 9.92084 18.616 9.361 18.7556C8.771 18.9046 8.181 19.0036 7.591 19.0036H1V5.34961H7.443ZM7.049 10.8896C7.59 10.8896 8.033 10.7416 8.377 10.4946C8.721 10.2476 8.869 9.80161 8.869 9.25761C8.869 8.96061 8.819 8.66361 8.721 8.46661C8.623 8.26861 8.475 8.11961 8.279 7.97161C8.082 7.87261 7.885 7.77361 7.639 7.72461C7.393 7.67461 7.148 7.67461 6.852 7.67461H4V10.8906H7.05L7.049 10.8896ZM7.197 16.7276C7.492 16.7276 7.787 16.6776 8.033 16.6286C8.28138 16.5814 8.51628 16.48 8.721 16.3316C8.92139 16.1868 9.08903 16.0015 9.213 15.7876C9.311 15.5406 9.41 15.2436 9.41 14.8976C9.41 14.2046 9.213 13.7096 8.82 13.3636C8.426 13.0666 7.885 12.9186 7.246 12.9186H4V16.7286H7.197V16.7276ZM16.689 16.6776C17.082 17.0736 17.672 17.2716 18.459 17.2716C19 17.2716 19.492 17.1236 19.885 16.8766C20.279 16.5796 20.525 16.2826 20.623 15.9856H23.033C22.639 17.1726 22.049 18.0136 21.263 18.5576C20.475 19.0526 19.541 19.3496 18.41 19.3496C17.6864 19.3518 16.9688 19.2175 16.295 18.9536C15.6887 18.7262 15.148 18.3524 14.721 17.8656C14.2643 17.4102 13.9267 16.8494 13.738 16.2326C13.492 15.5896 13.393 14.8976 13.393 14.1056C13.393 13.3636 13.492 12.6716 13.738 12.0276C13.9745 11.4077 14.3245 10.8373 14.77 10.3456C15.213 9.90061 15.754 9.50561 16.344 9.25761C17.0007 8.99367 17.7022 8.8592 18.41 8.86161C19.246 8.86161 19.984 9.01061 20.623 9.35661C21.263 9.70261 21.754 10.0986 22.148 10.6926C22.5499 11.2631 22.8494 11.8993 23.033 12.5726C23.131 13.2646 23.18 13.9576 23.131 14.7486H16C16 15.5406 16.295 16.2826 16.689 16.6786V16.6776ZM19.787 11.4836C19.443 11.1376 18.902 10.9396 18.262 10.9396C17.82 10.9396 17.475 11.0386 17.18 11.1866C16.885 11.3356 16.689 11.5336 16.492 11.7316C16.311 11.9229 16.1912 12.1638 16.148 12.4236C16.098 12.6716 16.049 12.8686 16.049 13.0666H20.475C20.377 12.3246 20.131 11.8306 19.787 11.4836ZM15.459 6.28961H20.967V7.62561H15.46V6.28961H15.459Z"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="w-1/2 px-4 md:w-3/12 lg:w-3/12 xl:w-2/12">
        <div class="mb-20">
          <h3
            class="font-heading text-dark mb-9 text-2xl font-medium dark:text-white"
          >
            Entreprise
          </h3>
          <ul class="space-y-4">
            <li>
              <a
                href="javascript:void(0)"
                class="font-heading text-dark-text hover:text-primary text-base dark:hover:text-white"
              >
                Accueil
              </a>
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="font-heading text-dark-text hover:text-primary text-base dark:hover:text-white"
              >
                Produit
              </a>
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="font-heading text-dark-text hover:text-primary text-base dark:hover:text-white"
              >
                Carrières
                <span
                  class="bg-primary font-heading ml-4 rounded-sm px-2 py-1 text-xs text-white"
                >
                  Recrutement
                </span>
              </a>
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="font-heading text-dark-text hover:text-primary text-base dark:hover:text-white"
              >
                Tarification
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="w-1/2 px-4 md:w-3/12 lg:w-3/12 xl:w-2/12">
        <div class="mb-20">
          <h3
            class="font-heading text-dark mb-9 text-2xl font-medium dark:text-white"
          >
            Support
          </h3>
          <ul class="space-y-4">
            <li>
              <a
                href="javascript:void(0)"
                class="font-heading text-dark-text hover:text-primary text-base dark:hover:text-white"
              >
                Entreprise
              </a>
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="font-heading text-dark-text hover:text-primary text-base dark:hover:text-white"
              >
                Médias
              </a>
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="font-heading text-dark-text hover:text-primary text-base dark:hover:text-white"
              >
                Contactez-nous
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="w-full px-4 sm:w-1/2 md:w-5/12 lg:w-3/12 xl:w-2/12">
        <div class="mb-20">
          <h3
            class="font-heading text-dark mb-9 text-2xl font-medium dark:text-white"
          >
            Contact
          </h3>
          <div class="space-y-7">
            <div>
              <p class="font-heading text-dark-text text-base">
                Service client gratuit
              </p>
              <a
                href="tel:+(1) 438 860 8395"
                class="font-heading text-dark hover:text-primary dark:hover:text-primary text-base dark:text-white"
              >
                +(1) 438 860 8395
              </a>
            </div>
            <div>
              <p class="font-heading text-dark-text text-base">
                Besoin d'un support en direct ?
              </p>
              <a
              href="mailto:strivaro@gmail.com"
              class="font-heading text-dark hover:text-primary dark:hover:text-primary text-base dark:text-white"
              >
              strivaro@gmail.com
            </a>

            </div>
          </div>
        </div>
      </div>

      <div class="w-full px-4 sm:w-1/2 md:w-5/12 lg:w-5/12 xl:w-3/12">
        <div class="mb-20">
          <h3
            class="font-heading text-dark mb-9 text-2xl font-medium dark:text-white"
          >
            Newsletter
          </h3>
          <p class="font-heading text-dark-text mb-6 text-base">
            Abonnez-vous pour recevoir les futures mises à jour
          </p>
          <form class="relative">
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Adresse e-mail"
              class="pladeholder-opacity-40 text-dark-text focus:border-primary w-full rounded-sm border py-3 pr-12 pl-5 text-base outline-hidden dark:border-transparent dark:bg-[#2C3443]"
            />
            <button
              class="text-dark-text absolute top-0 right-0 flex h-full w-12 items-center justify-center border-l dark:border-[#1F2633]"
            >
              <svg
                width="20"
                height="20"
                viewBox="0 0 20 20"
                class="fill-current"
              >
                <path
                  d="M3.1175 1.17367L18.5025 9.63533C18.5678 9.6713 18.6223 9.72414 18.6602 9.78834C18.6982 9.85255 18.7182 9.92576 18.7182 10.0003C18.7182 10.0749 18.6982 10.1481 18.6602 10.2123C18.6223 10.2765 18.5678 10.3294 18.5025 10.3653L3.1175 18.827C3.05406 18.8619 2.98262 18.8797 2.91023 18.8785C2.83783 18.8774 2.76698 18.8575 2.70465 18.8206C2.64232 18.7838 2.59066 18.7313 2.55478 18.6684C2.51889 18.6056 2.50001 18.5344 2.5 18.462V1.53867C2.50001 1.46626 2.51889 1.39511 2.55478 1.33222C2.59066 1.26934 2.64232 1.21689 2.70465 1.18005C2.76698 1.1432 2.83783 1.12324 2.91023 1.12212C2.98262 1.121 3.05406 1.13877 3.1175 1.17367ZM4.16667 10.8337V16.3478L15.7083 10.0003L4.16667 3.65283V9.167H8.33333V10.8337H4.16667Z"
                />
              </svg>
            </button>
          </form>
        </div>
      </div>
    </div>
     <div>
<div class="nova-wrapper">
  <div class="nova-scaling-text first">Strivaro Du Sens</div>
  <div class="nova-scaling-text second">Strivaro Du Style</div>
  <div class="nova-scaling-text third">Strivaro Du Résultat</div>
</div>

<style>
  .nova-wrapper {
    position: relative;
    overflow: hidden;
    width: 100%; /* ajuste selon ton besoin */
    height: 5rem;
  }

  .nova-scaling-text {
    font-size: 4rem;
    font-weight: bold;
    color: #9CA3AF;
    white-space: nowrap;
    position: absolute;
    animation-timing-function: linear;
    opacity: 0;
  }

  .nova-scaling-text:hover {
    cursor: pointer;
  }

  /* Durée totale : 30s (10s pour chaque phrase) */
  .first {
    animation: walkFirst 25s linear infinite;
  }

  .second {
    animation: walkSecond 25s linear infinite;
  }

  .third {
    animation: walkThird 25s linear infinite;
  }

  @keyframes walkFirst {
    0%   { transform: translateX(100%); opacity: 0; }
    3%   { opacity: 1; }
    15%  { transform: translateX(0); opacity: 1; }
    30%  { transform: translateX(-100%); opacity: 0; }
    100% { opacity: 0; }
  }

  @keyframes walkSecond {
    0%   { opacity: 0; }
    30%  { transform: translateX(100%); opacity: 0; }
    33%  { opacity: 1; }
    45%  { transform: translateX(0); opacity: 1; }
    60%  { transform: translateX(-100%); opacity: 0; }
    100% { opacity: 0; }
  }

  @keyframes walkThird {
    0%   { opacity: 0; }
    60%  { transform: translateX(100%); opacity: 0; }
    63%  { opacity: 1; }
    75%  { transform: translateX(0); opacity: 1; }
    90%  { transform: translateX(-100%); opacity: 0; }
    100% { opacity: 0; }
  }
</style>

</div>
    <div class="md:border-t dark:border-[#2E333D]">
      <div class="-mx-4 flex flex-wrap py-5 md:py-7">
        <div class="w-full px-4 md:w-1/2 lg:w-2/3">
          <div
            class="mb-5 flex items-center justify-center space-x-5 border-b pb-5 md:mb-0 md:justify-start md:border-0 md:pb-0 dark:border-[#2E333D]"
          >
            <a
              href="javascript:void(0)"
              class="font-heading text-dark-text hover:text-primary text-base"
            >
              Français
            </a>
            <a
              href="javascript:void(0)"
              class="font-heading text-dark-text hover:text-primary text-base"
            >
              Politique de confidentialité
            </a>
            <a
              href="javascript:void(0)"
              class="font-heading text-dark-text hover:text-primary text-base"
            >
              Support
            </a>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div>
            <p
              class="font-heading text-dark-text text-center text-base lg:text-right"
            >
              © 2025 Strivaro. Tous droits réservés
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
 





    <!-- ===== Back To Top Start ===== -->
    <a href="javascript:void(0)" class="hover:shadow-signUp back-to-top bg-primary fixed right-8 bottom-8 left-auto z-999 hidden h-10 w-10 items-center justify-center rounded-xs text-white shadow-md transition">
      <span class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"></span>
    </a>
    <!-- ===== Back To Top End ===== -->

    <!-- ===== Scripts ===== -->
         <!-- Include EmailJS SDK -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
     <!-- Inline CSS for Notification -->
<style>
  .notification {
    background-color: #22c55e; /* Green background for success */
    color: white;
    padding: 12px 16px;
    border-radius: 4px;
    text-align: center;
    font-family: Arial, sans-serif;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 16px;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    width: 100%;
    max-width: 100%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .notification.show {
    opacity: 1;
  }
</style>
<script>
  // Initialize EmailJS with your User ID
  emailjs.init("OV2l7lT_n_usXGLyh");

  // Function to show notification above the submit button
  function showNotification(message) {
    // Create notification div
    const notification = document.createElement("div");
    notification.className = "notification";
    notification.textContent = message;

    // Find the submit button's parent div
    const submitButtonParent = document.querySelector("#contact-form button[type='submit']").parentElement;

    // Insert notification before the submit button's parent div
    submitButtonParent.parentElement.insertBefore(notification, submitButtonParent);

    // Trigger fade-in
    setTimeout(() => {
      notification.classList.add("show");
    }, 100);

    // Remove notification after 3 seconds
    setTimeout(() => {
      notification.classList.remove("show");
      setTimeout(() => {
        notification.remove();
      }, 300); // Wait for fade-out transition
    }, 3000);
  }

  // Handle form submission
  document.getElementById("contact-form").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission

    // Disable the submit button to prevent multiple submissions
    const submitButton = this.querySelector("button[type='submit']");
    submitButton.disabled = true;
    submitButton.textContent = "Sending...";

    // Collect form data
    const formData = {
      name: this.name.value,
      email: this.email.value,
      phone: this.phone.value,
      subject: this.subject.value,
      message: this.message.value,
    };

    // Send email using EmailJS
    emailjs.send("service_9mmjsgm", "template_yhm623l", formData)
      .then(
        () => {
          showNotification("Message envoyé avec succès !");
          this.reset(); // Reset the form
          submitButton.disabled = false;
          submitButton.textContent = "Envoyez Un message";
        },
        (error) => {
          alert("Échec de l'envoi du message. Veuillez réessayer."); // Keep error as alert
          console.error("EmailJS error:", error);
          submitButton.disabled = false;
          submitButton.textContent = "Envoyez Un message";
        }
      );
  });
</script>
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
    </script>
    <script defer src="bundle.js"></script>
  </body>
</html>





