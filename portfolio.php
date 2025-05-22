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
    <link href="style9.2.css" rel="stylesheet">
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
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
                <li>
                  <a href="about.php#projects" class="menu-scroll font-heading text-dark-text hover:text-primary inline-flex items-center justify-center text-center text-base dark:hover:text-white">
                    Projets
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="absolute top-1/2 right-5 z-50 flex -translate-y-1/2 items-center lg:static lg:translate-y-0">
          <label for="darkToggler" class="bg-gray-2 dark:bg-dark-bg relative z-40 flex h-9 w-9 cursor-pointer items-center justify-center rounded-full text-black md:h-14 md:w-14 dark:text-white">
            <input type="checkbox" name="darkToggler" id="darkToggler" class="sr-only" aria-label="darkToggler" />
            <svg viewBox="0 0 23 23" class="h-5 w-5 stroke-current md:h-6 md:w-6 dark:hidden" fill="none">
              <path d="M9.55078 1.5C5.80078 1.5 1.30078 5.25 1.30078 11.25C1.30078 17.25 5.80078 21.75 11.8008 21.75C17.8008 21.75 21.5508 17.25 21.5508 13.5C13.3008 18.75 4.30078 9.75 9.55078 1.5Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="hidden h-5 w-5 md:h-6 md:w-6 dark:block">
              <!-- [Votre SVG pour le mode sombre reste inchangé] -->
            </svg>
          </label>
          <button class="menu-toggler text-dark relative z-50 lg:hidden dark:text-white">
            <svg width="28" height="28" viewBox="0 0 28 28" class="cross hidden fill-current">
              <path d="M14.0002 11.8226L21.6228 4.20001L23.8002 6.37745L16.1776 14L23.8002 21.6226L21.6228 23.8L14.0002 16.1774L6.37763 23.8L4.2002 21.6226L11.8228 14L4.2002 6.37745L6.37763 4.20001L14.0002 11.8226Z" />
            </svg>
            <svg width="22" height="22" viewBox="0 0 22 22" class="menu fill-current">
              <path d="M2.75 3.66666H19.25V5.49999H2.75V3.66666ZM2.75 10.0833H19.25V11.9167H2.75V10.0833ZM2.75 16.5H19.25V18.3333H2.75V16.5Z" />
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
                  <!-- [Votre SVG reste inchangé] -->
                </svg>
              </div>
              <div class="absolute bottom-0 left-1/2">
                <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <!-- [Votre SVG reste inchangé] -->
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
                Dans un écosystème dominé par les grandes marques et les agences hors de portée, STRIVARO s’est donné pour mission de <b></b> en leur offrant des stratégies puissantes, accessibles et 100% orientées performance.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-noise-pattern absolute bottom-0 left-0 -z-10 h-full w-full bg-cover bg-center opacity-10 dark:opacity-40"></div>
      <div class="absolute top-0 right-0 -z-10">
        <svg width="1356" height="860" viewBox="0 0 1356 860" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- [Votre SVG reste inchangé] -->
        </svg>
      </div>
    </section>
    <!-- ===== Hero Section End ===== -->

    <!-- ===== Projects Section Start ===== -->
    <section id="projects" class="relative z-40 overflow-hidden pt-12 pb-24 sm:pt-16 lg:pt-20 lg:pb-28">
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
        <ul class="flex justify-center space-x-4 mb-8 filter-wrapper">
          <li><a href="#" data-filter="*" class="text-primary font-heading text-base selected">All</a></li>
          <li><a href="#" data-filter=".Design-Graphique" class="text-primary font-heading text-base">Graphic Design</a></li>
          <li><a href="#" data-filter=".Développement-Web" class="text-primary font-heading text-base">Web Development</a></li>
          <li><a href="#" data-filter=".Réalisation-de-Films" class="text-primary font-heading text-base">FilmMaking</a></li>
          <li><a href="#" data-filter=".Montage-Vidéo" class="text-primary font-heading text-base">Video Editing</a></li>
        </ul>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 iso-box-section">
          <?php if (empty($projects)): ?>
            <div class="text-center col-span-full">
              <p class="text-dark-text dark:text-white/70">Aucun projet disponible pour le moment.</p>
            </div>
          <?php else: ?>
            <?php foreach ($projects as $project): ?>
              <div class="wow fadeInUp rounded-lg bg-white p-6 shadow-md dark:bg-dark-bg iso-box <?php echo htmlspecialchars(str_replace(' ', '-', $project['category'])); ?>" data-wow-delay=".3s">
                <div class="mb-6">
                  <?php
                  // Construire le chemin comme dans la section portfolio
                  $filePath = './portfolio/uploads/' . basename($project['image_url']);
                  $fileType = $project['file_type'];
                  ?>
                  <?php if (!empty($project['image_url']) && strpos($fileType, 'image/') === 0 && file_exists($filePath)): ?>
                    <a href="<?php echo htmlspecialchars($filePath); ?>" data-lightbox-gallery="projects-gallery">
                      <img src="<?php echo htmlspecialchars($filePath); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="h-48 w-full object-cover rounded-md" loading="lazy" />
                    </a>
                  <?php elseif (!empty($project['image_url']) && strpos($fileType, 'video/') === 0 && file_exists($filePath)): ?>
                    <video class="h-48 w-full object-cover rounded-md" controls>
                      <source src="<?php echo htmlspecialchars($filePath); ?>" type="<?php echo htmlspecialchars($fileType); ?>">
                      Votre navigateur ne supporte pas la lecture de vidéos.
                    </video>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
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

      // Initialiser Isotope pour le filtrage
      document.addEventListener('DOMContentLoaded', function() {
        const grid = document.querySelector('.iso-box-section');
        const iso = new Isotope(grid, {
          itemSelector: '.iso-box',
          layoutMode: 'fitRows'
        });

        // Filtrer les éléments au clic
        const filters = document.querySelectorAll('.filter-wrapper a');
        filters.forEach(filter => {
          filter.addEventListener('click', function(e) {
            e.preventDefault();
            const filterValue = this.getAttribute('data-filter');
            iso.arrange({ filter: filterValue });

            // Mettre à jour la classe 'selected'
            filters.forEach(f => f.classList.remove('selected'));
            this.classList.add('selected');
          });
        });
      });
    </script>
    <script defer src="bundle.js"></script>
  </body>
</html>