<!DOCTYPE html>
<html lang="fr" class="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Strivaro - À propos</title>
    <link rel="icon" href="./src/images/logo/favicon.ico">
    <link href="style9.1.css" rel="stylesheet">
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
                  <a href="about.php" class="menu-scroll active font-heading text-dark-text hover:text-primary inline-flex items-center justify-center text-center text-base dark:hover:text-white">
                    À propos
                  </a>
                </li>
                <li>
                  <a href="./audit.php" class="menu-scroll font-heading text-dark-text hover:text-primary inline-flex items-center justify-center text-center text-base dark:hover:text-white">
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

    <!-- ===== Hero Section Start ===== -->
<section id="about" class="relative z-40 overflow-hidden pt-28 pb-24 sm:pt-36 lg:pt-[170px] lg:pb-[120px]">
  <div class="px-4 xl:container">
    <div class="-mx-4 flex flex-wrap items-center">
      <div class="w-full px-4 lg:w-1/2">
        <div class="wow fadeInLeft relative z-30 mx-auto h-[560px] w-full max-w-[700px] lg:mr-0" data-wow-delay=".3s">
          <div class="absolute top-0 left-0 lg:w-11/12">
            <img src="src/images/hero/image-3.jpg" alt="Strivaro team working together" />
          </div>
          <div class="absolute bottom-0 left-0">
            <svg width="72" height="38" viewBox="0 0 72 38" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M62.0035 2.04985C59.6808 1.76671 57.4524 2.70929 55.1508 4.68209C51.3631 7.92863 44.7908 9.54366 38.8668 4.69678C36.329 2.6204 34.117 2.29213 32.2894 2.59672C30.3972 2.91209 28.8057 3.92088 27.5547 4.75487C25.5734 6.07577 23.3915 7.46379 20.8786 7.78953C18.2847 8.12577 15.515 7.32034 12.3598 4.69105C9.71804 2.48955 7.45748 2.0661 5.72104 2.33325C3.94436 2.6066 2.56003 3.6273 1.76341 4.56877C1.40666 4.99037 0.775686 5.04295 0.354079 4.68621C-0.0675277 4.32946 -0.120109 3.69849 0.236635 3.27688C1.27334 2.05168 3.0643 0.71846 5.41692 0.356509C7.80979 -0.0116349 10.6326 0.648246 13.6402 3.1546C16.485 5.52529 18.7154 6.05321 20.6215 5.80612C22.6086 5.54854 24.4266 4.43657 26.4453 3.09078L27 3.92282L26.4453 3.09078C27.6943 2.25809 29.6028 1.0169 31.9606 0.623935C34.383 0.220203 37.1711 0.725274 40.1333 3.14886C45.1548 7.25733 50.6369 5.9169 53.8492 3.16356C56.3795 0.994798 59.1512 -0.312658 62.2455 0.0645503C65.3089 0.43799 68.4333 2.43425 71.7557 6.26783C72.1174 6.68518 72.0723 7.31674 71.655 7.67845C71.2376 8.04015 70.606 7.99504 70.2443 7.57769C67.0668 3.91125 64.3571 2.33677 62.0035 2.04985Z" fill="#322FBF" />
            </svg>
          </div>
          <div class="absolute bottom-0 left-1/2">
            <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path opacity="0.9" d="M120 60C120 93.1371 93.1371 120 60 120C26.8629 120 0 93.1371 0 60C0 26.8629 26.8629 0 60 0C93.1371 0 120 26.8629 120 60Z" fill="url(#paint0_angular_300_926)" />
              <defs>
                <radialGradient id="paint0_angular_300_926" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(60 60) rotate(90) scale(60)">
                  <stop stop-color="#322FBF" />
                  <stop offset="1" stop-color="#111722" />
                </radialGradient>
              </defs>
            </svg>
          </div>
        </div>
      </div>
      <div class="w-full px-3 lg:w-1/2">
        <div class="mx-auto mb-12 max-w-[530px] text-center lg:mb-0 lg:mr-0 lg:text-left">
          <span class="wow fadeInUp bg-primary/5 font-heading text-primary mb-8 inline-block rounded-full px-5 py-[10px] text-base dark:bg-white/10 dark:text-white" data-wow-delay=".2s">
            <span class="bg-primary mr-2 inline-block h-2 w-2 rounded-full"></span>
            Qui nous sommes ?
          </span>
          <h1 class="wow fadeInUp font-heading mb-5 text-2xl font-semibold sm:text-4xl md:text-[50px] md:leading-[60px] dark:text-white" data-wow-delay=".3s">
            STRIVARO, <br />Votre partenaire pour la <span style="color: #322FBF;" class="underline">croissance</span>
          </h1>
          <p class="wow fadeInUp text-dark-text mb-12 text-base" data-wow-delay=".4s">
                Dans un écosystème dominé par les grandes marques et les agences hors de
                portée, STRIVARO s’est donné pour mission de <b></b>  en leur offrant des stratégies puissantes, accessibles et
                100% orientées performance.          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-noise-pattern absolute bottom-0 left-0 -z-10 h-full w-full bg-cover bg-center opacity-10 dark:opacity-40"></div>
  <div class="absolute top-0 right-0 -z-10">
    <svg width="1356" height="860" viewBox="0 0 1356 860" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g opacity="0.5" filter="url(#filter0_f_201_2181)">
        <rect x="450.088" y="-126.709" width="351.515" height="944.108" transform="rotate(-34.6784 450.088 -126.709)" fill="url(#paint0_linear_201_2181)" />
      </g>
      <defs>
        <filter id="filter0_f_201_2181" x="0.0878906" y="-776.711" width="1726.24" height="1876.4" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
          <feGaussianBlur stdDeviation="225" result="effect1_foregroundBlur_201_2181" />
        </filter>
        <linearGradient id="paint0_linear_201_2181" x1="417.412" y1="59.4717" x2="966.334" y2="603.857" gradientUnits="userSpaceOnUse">
          <stop stop-color="#ABBCFF" />
          <stop offset="0.859375" stop-color="#322FBF" />
        </linearGradient>
      </defs>
    </svg>
  </div>
</section>
    <!-- ===== Hero Section End ===== -->

    <!-- ===== Mission & Values Section Start ===== -->
<section id="mission" class="pt-14 sm:pt-20 lg:pt-[130px]">
  <div class="px-4 xl:container">
    <div class="wow fadeInUp relative mx-auto mb-12 max-w-[620px] pt-6 text-center md:mb-20 lg:pt-16" data-wow-delay=".2s">
      <span class="title">MISSION</span>
      <h2 class="font-heading text-dark mb-5 text-3xl font-semibold sm:text-4xl md:text-[50px] md:leading-[60px] dark:text-white">
        Transformer vos ambitions en succès
      </h2>
      <p class="text-dark-text text-base">
        Nous croyons en une approche <b>business-first</b>, où chaque stratégie est conçue pour maximiser votre retour sur investissement et propulser votre croissance.
      </p>
    </div>

    <div class="-mx-4 flex flex-wrap justify-center">
      <!-- Résultats mesurables -->
      <div class="w-full px-4 md:w-1/2 lg:w-1/3">
        <div class="wow fadeInUp group mx-auto mb-10 max-w-[380px] text-center md:mb-16" data-wow-delay=".2s">
          <div class="bg-primary/5 text-primary group-hover:bg-primary group-hover:text-white mx-auto mb-6 flex h-[70px] w-[70px] items-center justify-center rounded-full transition md:mb-9 md:h-[90px] md:w-[90px] dark:bg-white/5 dark:text-white dark:group-hover:bg-primary dark:group-hover:text-white">
            <!-- Target SVG (résultats mesurables) -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
            </svg>
          </div>
          <div>
            <h3 class="font-heading text-dark mb-3 text-xl font-medium sm:text-2xl md:mb-5 dark:text-white">
              Résultats mesurables
            </h3>
            <p class="text-dark-text text-base">
              Chaque action est pilotée par des données pour garantir un impact concret sur votre business.
            </p>
          </div>
        </div>
      </div>

      <!-- Approche sur mesure -->
      <div class="w-full px-4 md:w-1/2 lg:w-1/3">
        <div class="wow fadeInUp group mx-auto mb-10 max-w-[380px] text-center md:mb-16" data-wow-delay=".25s">
          <div class="bg-primary/5 text-primary group-hover:bg-primary group-hover:text-white mx-auto mb-6 flex h-[70px] w-[70px] items-center justify-center rounded-full transition md:mb-9 md:h-[90px] md:w-[90px] dark:bg-white/5 dark:text-white dark:group-hover:bg-primary dark:group-hover:text-white">
            <!-- Gears SVG (approche personnalisée) -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
            </svg>
          </div>
          <div>
            <h3 class="font-heading text-dark mb-3 text-xl font-medium sm:text-2xl md:mb-5 dark:text-white">
              Approche sur mesure
            </h3>
            <p class="text-dark-text text-base">
              Nous adaptons nos stratégies à vos besoins spécifiques pour des solutions uniques et efficaces.
            </p>
          </div>
        </div>
      </div>

      <!-- Innovation constante -->
      <div class="w-full px-4 md:w-1/2 lg:w-1/3">
        <div class="wow fadeInUp group mx-auto mb-10 max-w-[380px] text-center md:mb-16" data-wow-delay=".3s">
          <div class="bg-primary/5 text-primary group-hover:bg-primary group-hover:text-white mx-auto mb-6 flex h-[70px] w-[70px] items-center justify-center rounded-full transition md:mb-9 md:h-[90px] md:w-[90px] dark:bg-white/5 dark:text-white dark:group-hover:bg-primary dark:group-hover:text-white">
            <!-- Innovation SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
            </svg>
          </div>
          <div>
            <h3 class="font-heading text-dark mb-3 text-xl font-medium sm:text-2xl md:mb-5 dark:text-white">
              Innovation constante
            </h3>
            <p class="text-dark-text text-base">
              Nous intégrons les dernières tendances et technologies pour rester à la pointe du marché.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- ===== Mission & Values Section End ===== -->
<!-- ===== Culture Section Start (Culture d’agence) ===== -->
<section id="culture" class="pt-14 sm:pt-20 lg:pt-[130px]">
  <div class="px-4 xl:container">
    <div class="wow fadeInUp relative mx-auto mb-12 max-w-[620px] pt-6 text-center md:mb-20 lg:pt-16" data-wow-delay=".2s">
      <span class="title">CULTURE</span>
      <h2 class="font-heading text-dark mb-5 text-3xl font-semibold sm:text-4xl md:text-[50px] md:leading-[60px] dark:text-white">
        STRIVARO, c’est avant tout une équipe.
      </h2>
      <p class="text-dark-text text-base">
        Multiculturelle. Engagée. Alignée. Nos valeurs sont au cœur de chaque projet que nous menons.
      </p>
    </div>
    <div class="-mx-4 flex flex-wrap justify-center">
      <!-- Inclusion & Authenticité -->
      <div class="w-full px-4 md:w-1/2 lg:w-1/3">
        <div class="wow fadeInUp mx-auto mb-10 max-w-[380px] text-center md:mb-16" data-wow-delay=".2s">
          <div class="w-[130px] h-[130px] mx-auto rounded-full overflow-hidden mb-4">
            <img src="src/images/about/Inclu.jpg" alt="Inclusion & Authenticité" class="w-full h-full object-cover" />
          </div>
          <div>
            <h3 class="font-heading text-dark mb-2 text-xl font-medium sm:text-2xl dark:text-white">
              Inclusion & Authenticité
            </h3>
            <p class="text-dark-text text-base">
              Chaque voix compte. Chaque différence est une richesse. Nous écoutons avant d’agir.
            </p>
          </div>
        </div>
      </div>
      <!-- Persévérance -->
      <div class="w-full px-4 md:w-1/2 lg:w-1/3">
        <div class="wow fadeInUp mx-auto mb-10 max-w-[380px] text-center md:mb-16" data-wow-delay=".25s">
          <div class="w-[130px] h-[130px] mx-auto rounded-full overflow-hidden mb-4">
            <img src="src/images/about/frankie-cordoba-8W5Uw571B_c-unsplash.jpg" alt="Persévérance" class="w-full h-full object-cover" />
          </div>
          <div>
            <h3 class="font-heading text-dark mb-2 text-xl font-medium sm:text-2xl dark:text-white">
              Persévérance
            </h3>
            <p class="text-dark-text text-base">
              Pas de recette miracle, mais du travail. De l’itération. De l’exigence dans l’exécution.
            </p>
          </div>
        </div>
      </div>
      <!-- Excellence partagée -->
      <div class="w-full px-4 md:w-1/2 lg:w-1/3">
        <div class="wow fadeInUp mx-auto mb-10 max-w-[380px] text-center md:mb-16" data-wow-delay=".3s">
          <div class="w-[130px] h-[130px] mx-auto rounded-full overflow-hidden mb-4">
            <img src="src/images/about/marek-studzinski-KjC02H6bbng-unsplash.jpg" alt="Excellence partagée" class="w-full h-full object-cover" />
          </div>
          <div>
            <h3 class="font-heading text-dark mb-2 text-xl font-medium sm:text-2xl dark:text-white">
              Excellence partagée
            </h3>
            <p class="text-dark-text text-base">
              Nous croyons que la performance se co-construit. Chaque victoire est collective.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="wow fadeInUp text-center mt-8" data-wow-delay=".5s">
      <a href="index.php#features" class="secondary-cta inline-flex items-center text-lg font-medium transition">
        Découvrez nos projets
      </a>
    </div>
  </div>
</section>
<!-- ===== Culture Section End ===== -->





     <!-- ===== Team Section Start ===== -->
    <section id="team" class="pt-14 sm:pt-20 lg:pt-[130px]">
      <div class="px-4 xl:container">
        <!-- Section Title -->
        <div
          class="wow fadeInUp relative mx-auto mb-12 pt-6 text-center md:mb-20 lg:pt-16"
          data-wow-delay=".2s"
        >
          <span class="title"> L'ÉQUIPE </span>
          <h2
            class="font-heading text-dark mx-auto mb-5 max-w-[620px] text-3xl font-semibold sm:text-4xl md:text-[50px] md:leading-[60px] dark:text-white"
          >
            Qui se cache derrière STRIVARO ?
          </h2>
          <p class="text-dark-text mx-auto max-w-[620px] text-base">
            Une équipe de passionnés de marketing digital, mais surtout, de <b>stratèges
              business.</b> 
              Chacun apporte sa spécialité : publicité, funnel, automation, copywriting, data...
              Ensemble, nous partageons une même mission : <b>faire grandir les marques qui
              veulent impacter.</b>
          </p>
        </div>

        <div class="-mx-4 flex flex-wrap justify-center">
          <div class="w-full px-4 md:w-1/2 lg:w-1/4">
            <div
              class="wow fadeInUp xs:max-w-[370px] group mx-auto mb-10 max-w-[300px] text-center"
              data-wow-delay=".2s"
            >
              <div class="relative mb-8 overflow-hidden rounded-sm">
                <img
                  src="src/images/team/image-1.jpg"
                  alt="team-image"
                  class="w-full"
                />
                <div
                  class="absolute bottom-6 left-1/2 -translate-x-1/2 translate-y-10 opacity-0 transition duration-300 group-hover:translate-y-0 group-hover:opacity-100"
                >
                  <div class="flex items-center justify-center space-x-3">
                    <a
                      href="javascript:void(0)"
                      name="social-icon"
                      aria-label="social-icon"
                      class="hover:bg-primary flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/10 text-white backdrop-blur-sm transition hover:border-transparent"
                    >
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M11.6667 11.2501H13.75L14.5834 7.91675H11.6667V6.25008C11.6667 5.39175 11.6667 4.58341 13.3334 4.58341H14.5834V1.78341C14.3117 1.74758 13.2859 1.66675 12.2025 1.66675C9.94004 1.66675 8.33337 3.04758 8.33337 5.58341V7.91675H5.83337V11.2501H8.33337V18.3334H11.6667V11.2501Z"
                          fill="white"
                        />
                      </svg>
                    </a>
                    <a
                      href="javascript:void(0)"
                      name="social-icon"
                      aria-label="social-icon"
                      class="hover:bg-primary flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/10 text-white backdrop-blur-sm transition hover:border-transparent"
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
                      name="social-icon"
                      aria-label="social-icon"
                      class="hover:bg-primary flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/10 text-white backdrop-blur-sm transition hover:border-transparent"
                    >
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M5.78328 4.16677C5.78306 4.6088 5.60726 5.03263 5.29454 5.34504C4.98182 5.65744 4.55781 5.83282 4.11578 5.8326C3.67376 5.83238 3.24992 5.65657 2.93752 5.34386C2.62511 5.03114 2.44973 4.60713 2.44995 4.1651C2.45017 3.72307 2.62598 3.29924 2.9387 2.98683C3.25141 2.67443 3.67542 2.49905 4.11745 2.49927C4.55948 2.49949 4.98331 2.6753 5.29572 2.98801C5.60812 3.30073 5.78351 3.72474 5.78328 4.16677ZM5.83328 7.06677H2.49995V17.5001H5.83328V7.06677ZM11.1 7.06677H7.78328V17.5001H11.0666V12.0251C11.0666 8.9751 15.0416 8.69177 15.0416 12.0251V17.5001H18.3333V10.8918C18.3333 5.7501 12.45 5.94177 11.0666 8.46677L11.1 7.06677Z"
                          fill="white"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div>
                <h3
                  class="font-heading text-dark mb-1 text-xl font-medium sm:text-2xl dark:text-white"
                >
                  Islam Fersaoui 
                </h3>
                <p class="font-heading text-dark-text text-base">
                  Project Manager
                </p>
              </div>
            </div>
          </div>

          <div class="w-full px-4 md:w-1/2 lg:w-1/4">
            <div
              class="wow fadeInUp xs:max-w-[370px] group mx-auto mb-10 max-w-[300px] text-center"
              data-wow-delay=".25s"
            >
              <div class="relative mb-8 overflow-hidden rounded-sm">
                <img
                  src="src/images/team/image-2.jpg"
                  alt="team-image"
                  class="w-full"
                />
                <div
                  class="absolute bottom-6 left-1/2 -translate-x-1/2 translate-y-10 opacity-0 transition duration-300 group-hover:translate-y-0 group-hover:opacity-100"
                >
                  <div class="flex items-center justify-center space-x-3">
                    <a
                      href="javascript:void(0)"
                      name="social-icon"
                      aria-label="social-icon"
                      class="hover:bg-primary flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/10 text-white backdrop-blur-sm transition hover:border-transparent hover:opacity-100"
                    >
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M11.6667 11.2501H13.75L14.5834 7.91675H11.6667V6.25008C11.6667 5.39175 11.6667 4.58341 13.3334 4.58341H14.5834V1.78341C14.3117 1.74758 13.2859 1.66675 12.2025 1.66675C9.94004 1.66675 8.33337 3.04758 8.33337 5.58341V7.91675H5.83337V11.2501H8.33337V18.3334H11.6667V11.2501Z"
                          fill="white"
                        />
                      </svg>
                    </a>
                    <a
                      href="javascript:void(0)"
                      name="social-icon"
                      aria-label="social-icon"
                      class="hover:bg-primary flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/10 text-white backdrop-blur-sm transition hover:border-transparent hover:opacity-100"
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
                      name="social-icon"
                      aria-label="social-icon"
                      class="hover:bg-primary flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/10 text-white backdrop-blur-sm transition hover:border-transparent hover:opacity-100"
                    >
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M5.78328 4.16677C5.78306 4.6088 5.60726 5.03263 5.29454 5.34504C4.98182 5.65744 4.55781 5.83282 4.11578 5.8326C3.67376 5.83238 3.24992 5.65657 2.93752 5.34386C2.62511 5.03114 2.44973 4.60713 2.44995 4.1651C2.45017 3.72307 2.62598 3.29924 2.9387 2.98683C3.25141 2.67443 3.67542 2.49905 4.11745 2.49927C4.55948 2.49949 4.98331 2.6753 5.29572 2.98801C5.60812 3.30073 5.78351 3.72474 5.78328 4.16677ZM5.83328 7.06677H2.49995V17.5001H5.83328V7.06677ZM11.1 7.06677H7.78328V17.5001H11.0666V12.0251C11.0666 8.9751 15.0416 8.69177 15.0416 12.0251V17.5001H18.3333V10.8918C18.3333 5.7501 12.45 5.94177 11.0666 8.46677L11.1 7.06677Z"
                          fill="white"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div>
                <h3
                  class="font-heading text-dark mb-1 text-xl font-medium sm:text-2xl dark:text-white"
                >
                  Samir
                </h3>
                <p class="font-heading text-dark-text text-base">
                  Project Manager
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/4">
            <div
              class="wow fadeInUp xs:max-w-[370px] group mx-auto mb-10 max-w-[300px] text-center"
              data-wow-delay=".3s"
            >
              <div class="relative mb-8 overflow-hidden rounded-sm">
                <img
                  src="src/images/team/image-3.jpg"
                  alt="team-image"
                  class="w-full"
                />
                <div
                  class="absolute bottom-6 left-1/2 -translate-x-1/2 translate-y-10 opacity-0 transition duration-300 group-hover:translate-y-0 group-hover:opacity-100"
                >
                  <div class="flex items-center justify-center space-x-3">
                    <a
                      href="javascript:void(0)"
                      name="social-icon"
                      aria-label="social-icon"
                      class="hover:bg-primary flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/10 text-white backdrop-blur-sm transition hover:border-transparent hover:opacity-100"
                    >
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M11.6667 11.2501H13.75L14.5834 7.91675H11.6667V6.25008C11.6667 5.39175 11.6667 4.58341 13.3334 4.58341H14.5834V1.78341C14.3117 1.74758 13.2859 1.66675 12.2025 1.66675C9.94004 1.66675 8.33337 3.04758 8.33337 5.58341V7.91675H5.83337V11.2501H8.33337V18.3334H11.6667V11.2501Z"
                          fill="white"
                        />
                      </svg>
                    </a>
                    <a
                      href="javascript:void(0)"
                      name="social-icon"
                      aria-label="social-icon"
                      class="hover:bg-primary flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/10 text-white backdrop-blur-sm transition hover:border-transparent hover:opacity-100"
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
                      name="social-icon"
                      aria-label="social-icon"
                      class="hover:bg-primary flex h-10 w-10 items-center justify-center rounded-full border border-white/10 bg-white/10 text-white backdrop-blur-sm transition hover:border-transparent hover:opacity-100"
                    >
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M5.78328 4.16677C5.78306 4.6088 5.60726 5.03263 5.29454 5.34504C4.98182 5.65744 4.55781 5.83282 4.11578 5.8326C3.67376 5.83238 3.24992 5.65657 2.93752 5.34386C2.62511 5.03114 2.44973 4.60713 2.44995 4.1651C2.45017 3.72307 2.62598 3.29924 2.9387 2.98683C3.25141 2.67443 3.67542 2.49905 4.11745 2.49927C4.55948 2.49949 4.98331 2.6753 5.29572 2.98801C5.60812 3.30073 5.78351 3.72474 5.78328 4.16677ZM5.83328 7.06677H2.49995V17.5001H5.83328V7.06677ZM11.1 7.06677H7.78328V17.5001H11.0666V12.0251C11.0666 8.9751 15.0416 8.69177 15.0416 12.0251V17.5001H18.3333V10.8918C18.3333 5.7501 12.45 5.94177 11.0666 8.46677L11.1 7.06677Z"
                          fill="white"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div>
                <h3
                  class="font-heading text-dark mb-1 text-xl font-medium sm:text-2xl dark:text-white"
                >
                  Fares Kdj
                </h3>
                <p class="font-heading text-dark-text text-base">
                  Web Developer
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Team Section End ===== -->   

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