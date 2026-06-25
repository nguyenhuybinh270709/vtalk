<?php
/**
 * Template Name: Page Dao Tao Doanh Nghiep
 *
 * @since 1.0.0
 * @author ...
 */

get_header();

$hero_section = get_field('page_dao_tao_doanh_nghiep_hero_section');
$partners_section = get_field('page_dao_tao_doanh_nghiep_partners_section');
$why_choose_section = get_field('page_dao_tao_doanh_nghiep_why_choose_section');
$solution_section = get_field('page_dao_tao_doanh_nghiep_solution_section');
$training_process_section = get_field('page_dao_tao_doanh_nghiep_training_process_section');
$testimonials_section = get_field('page_dao_tao_doanh_nghiep_testimonials_section');
$image_carousel_section = get_field('page_dao_tao_doanh_nghiep_image_carousel_section');
$contact_section = get_field('page_dao_tao_doanh_nghiep_contact_section');
?>

<!doctype html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đào Tạo Doanh Nghiệp - VTALK Academy</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
  		tailwind.config = {
    		important: true,
  		}
	</script>
    
    <style>
      :root {
        --text: #1a1a1a;
        --gold: #d2ab7b;
        scroll-behavior: smooth;
      }
    </style>
  </head>
  <body>
    <!-- Hero Section -->
    <section
      class="lg:min-h-screen pt-6 lg:pt-0 relative bg-[#10100e] overflow-hidden min-h-[500px] lg:min-h-[400px] flex items-center font-['Be_Vietnam_Pro',sans-serif]"
    >
      <img 
        class="hidden lg:block absolute right-0 top-0 bottom-0 w-full h-full object-cover object-top"
    src="<?php echo $hero_section['background_image']; ?>" 
    alt="Hero Image" 
  />
      <div
        class="relative z-[3] w-full mx-auto px-6 lg:px-20 py-20 lg:py-24 flex flex-col lg:flex-row lg:items-end justify-between gap-8"
      >
        <div class="w-full lg:w-[55%]">
          <h1
            class="text-[25px] sm:text-4xl lg:text-[38px] font-bold uppercase space-y-1 lg:space-y-2"
          >
            <span class="text-white block">
            	<?php echo $hero_section['title']['text_1']; ?>
            </span>
            <span class="text-[#d2ab7b] block">
            	<?php echo $hero_section['title']['text_2']; ?>
            </span>
            <span class="text-[#d2ab7b] block">
            	<?php echo $hero_section['title']['text_3']; ?>
            </span>
          </h1>

          <p
            class="mt-4 text-[#a6aaad] leading-[1.82] max-w-full lg:max-w-[80%] text-sm sm:text-[15px] lg:text-base"
          >
            <?php echo $hero_section['content']; ?>
          </p>
          <div class="flex gap-3 mt-5 flex-wrap items-center">
            <a
              href="<?php echo $hero_section['button_1']['endpoint']; ?>"
              class="w-full lg:w-fit justify-center lg:justify-start bg-[#d2ab7b] hover:bg-[#d2ab7b]/90 text-black font-bold text-xs sm:text-sm lg:text-xs py-3 px-4 border-none cursor-pointer no-underline inline-flex items-center gap-1.5 uppercase transition-colors duration-200 rounded-[6px]"
            >
              <?php echo $hero_section['button_1']['text']; ?>
            </a>

            <a
              href="<?php echo $hero_section['button_2']['endpoint']; ?>"
              class="w-full lg:w-fit justify-center lg:justify-start bg-transparent text-white font-semibold text-xs sm:text-sm lg:text-xs py-[11px] px-4 border-[1.5px] border-solid border-[rgba(255,255,255,0.42)] cursor-pointer no-underline inline-flex items-center tracking-[0.7px] uppercase transition-colors duration-200 rounded-[6px] hover:border-[#d2ab7b] hover:text-[#d2ab7b]"
            >
              <?php echo $hero_section['button_2']['text']; ?>
            </a>
          </div>
        </div>

        <div
          class="hidden lg:block bg-[rgba(20,18,14,0.72)] border border-[rgba(210,171,123,0.25)] rounded-[10px] p-6 max-w-[280px] w-full backdrop-blur-sm self-start lg:self-end"
        >
          <div class="text-[#e0b682] text-4xl font-serif leading-none mb-3">
           <svg class="fill-current size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#e0b682" d="M0 	216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 	35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64L0 216zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 			0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-136z"/></svg>
</div>
          <p
            class="text-[#e0b682] text-[12.5px] leading-[1.8] uppercase tracking-[0.5px] font-medium"
          >
            <?php echo $hero_section['quote']['content']; ?>
          </p>
          <div class="mt-4 pt-4 border-t border-[rgba(210,171,123,0.2)]">
            <div class="text-white font-semibold text-[13px] mb-0.5">
              <?php echo $hero_section['quote']['author']['name']; ?>
            </div>
            <div class="text-[rgba(255,255,255,0.5)] text-[11px]">
              <?php echo $hero_section['quote']['author']['role']; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Partners Section -->
    <section
      class="bg-[#070e16] py-12 px-0 border-t border-solid border-white/5 font-['Be_Vietnam_Pro',sans-serif]"
    >
      <p class="text-center text-2xl uppercase text-[#d2ab7b] font-bold mb-4">
        <?php echo $partners_section['title']; ?>
      </p>
      <div class="flex items-center lg:w-[80%] mx-auto px-4 py-0">
        <button
          class="bg-none text-[rgba(255,255,255,0.5)] size-6 flex items-center justify-center cursor-pointer shrink-0 text-xl rounded-[2px] transition-colors duration-200 hover:border-[#d2ab7b] hover:text-[#d2ab7b]"
          id="pPrev"
        >
          &#8249;
        </button>
        <div class="overflow-hidden flex-1 mx-3 my-0" id="pViewport">
          <div
            class="flex items-center transition-transform duration-[0.4s] ease-out will-change-transform"
            id="pTrack"
          ></div>
        </div>
        <button
          class="bg-none text-[rgba(255,255,255,0.5)] size-6 flex items-center justify-center cursor-pointer shrink-0 text-xl rounded-[2px] transition-colors duration-200 hover:border-[#d2ab7b] hover:text-[#d2ab7b]"
          id="pNext"
        >
          &#8250;
        </button>
      </div>

      <script>
        const PARTNERS = <?php 
          $formatted_partners = [];
          if (!empty($partners_section['partners'])) {
              foreach ($partners_section['partners'] as $partner) {
                  $formatted_partners[] = [
                      'name' => $partner['name'],
                      'img'  => $partner['logo']
                  ];
              }
          }
          echo json_encode($formatted_partners);
        ?>;

      (function () {
        const track = document.getElementById("pTrack");
        if (!track || !PARTNERS.length) return;

        function getLayout() {
          const w = window.innerWidth;
          if (w < 640) return { perPage: 2, gap: 16 };
          if (w < 1024) return { perPage: 4, gap: 24 };
          return { perPage: 6, gap: 32 };
        }

        const cloneBefore = [...PARTNERS, ...PARTNERS];
        const cloneAfter = [...PARTNERS, ...PARTNERS];
        const extendedPartners = [...cloneBefore, ...PARTNERS, ...cloneAfter];

        track.innerHTML = extendedPartners
          .map(
            (p) => `
              <div class="p-item shrink-0 flex items-center justify-center px-2 select-none">
                ${
                  p.img
                    ? `<img class="max-h-14 max-w-full object-contain brightness-0 invert opacity-60 transition-opacity duration-200 hover:opacity-100" src="${p.img}" alt="${p.name}" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                      <span class="text-white/60 text-xs uppercase font-bold" style="display:none">${p.name}</span>`
                    : `<span class="text-white/60 text-xs uppercase font-bold text-center">${p.name}</span>`
                }
              </div>
            `,
          )
          .join("");

        let idx = cloneBefore.length;
        let isTransitioning = false;

        function update(withTransition = true) {
          const items = track.children;
          if (items.length === 0) return;

          const { perPage, gap } = getLayout();
          const viewportWidth =
            track.parentElement.getBoundingClientRect().width;
          const itemWidth = (viewportWidth - (perPage - 1) * gap) / perPage;

          for (let i = 0; i < items.length; i++) {
            items[i].style.width = `${itemWidth}px`;
            if (i === items.length - 1) {
              items[i].style.marginRight = "0px";
            } else {
              items[i].style.marginRight = `${gap}px`;
            }
          }

          const step = itemWidth + gap;

          if (withTransition) {
            track.style.transition = "transform 0.4s ease-out";
            isTransitioning = true;
          } else {
            track.style.transition = "none";
          }

          track.style.transform = `translateX(-${idx * step}px)`;
        }

        track.addEventListener("transitionend", () => {
          isTransitioning = false;
          const cloneBeforeCount = cloneBefore.length;

          if (idx >= cloneBeforeCount + PARTNERS.length) {
            idx = idx - PARTNERS.length;
            update(false);
          } else if (idx < cloneBeforeCount) {
            idx = idx + PARTNERS.length;
            update(false);
          }
        });

        document.getElementById("pPrev").addEventListener("click", () => {
          if (isTransitioning) return;
          idx--;
          update();
        });

        document.getElementById("pNext").addEventListener("click", () => {
          if (isTransitioning) return;
          idx++;
          update();
        });

        window.addEventListener("resize", () => {
          update(false);
        });

        setTimeout(() => {
          update(false);
        }, 150);
      })();
      </script>
    </section>

    <!-- Why Choose Section -->
    <section class="bg-[#071825] py-12 px-6 font-['Be_Vietnam_Pro',sans-serif]">
      <h2
        class="text-center text-[#d2ab7b] text-2xl sm:text-3xl lg:text-2xl font-bold uppercase mb-12"
      >
        <?php echo $why_choose_section['title']; ?>
      </h2>
      <div
        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8 max-w-7xl mx-auto lg:px-20"
        id="whyGrid"
      ></div>

      <script>
        const WHY_CARDS = <?php 
          $formatted_cards = [];
          if (!empty($why_choose_section['why_cards'])) {
              foreach ($why_choose_section['why_cards'] as $card) {
                  $formatted_cards[] = [
                      'img'   => $card['image'],
                      'title' => $card['title'],
                      'desc'  => $card['description']
                  ];
              }
          }
          echo json_encode($formatted_cards);
        ?>;

      document.getElementById("whyGrid").innerHTML = WHY_CARDS.map(
        (c) => `
          <div class="flex flex-col items-center text-center px-12 lg:px-3">
            ${
              c.img 
                ? `<div class="size-14 mx-auto mb-3 aspect-square overflow-hidden flex items-center justify-center">
                    <img class="w-full h-full object-cover" src="${c.img}" alt="${c.title}">
                  </div>`
                : ''
            }
            <h3 class="text-white/90 text-sm font-extrabold uppercase leading-1.5 mb-2">${c.title}</h3>
            <p class="text-gray-400 text-xs leading-1.7 block">${c.desc}</p>
          </div>
        `,
      ).join("");
      </script>
    </section>

    <!-- Solution Section -->
    <section class="py-12 px-6 bg-white font-['Be_Vietnam_Pro',sans-serif]">
      <h2
        class="text-center text-[23px] lg:text-2xl font-extrabold uppercase text-[#1a1a1a] mb-2"
      >
        <?php echo $solution_section['title']; ?>
      </h2>
      <p
        class="text-center text-gray-700 text-sm sm:max-w-[80%] lg:max-w-[530px] mx-auto mb-8 leading-[1.4]"
      >
        <?php echo $solution_section['sub_title']; ?>
      </p>
      <div
        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-3.5 px-12 mx-auto"
        id="solGrid"
      ></div>
      <div class="text-center mt-9">
        <a
          href="#"
          class="inline-flex items-center gap-2 border-[1.5px] border-solid border-[#1a1a1a] text-[#1a1a1a] text-xs font-bold py-2 rounded-md px-6 no-underline uppercase transition-colors duration-200 hover:bg-[#1a1a1a] hover:text-white"
        >
          Xem tất cả chương trình
          <svg
            class="size-3 fill-current"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 640 640"
          >
            <path
              d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"
            />
          </svg>
        </a>
      </div>

      <script>
        const SOLUTIONS = <?php 
          $formatted_solutions = [];
          if (!empty($solution_section['solutions'])) {
              foreach ($solution_section['solutions'] as $solution) {
                  $formatted_solutions[] = [
                      'img'   => $solution['image'],
                      'title' => $solution['title'],
                      'desc'  => $solution['description']
                  ];
              }
          }
          echo json_encode($formatted_solutions);
        ?>;

      document.getElementById("solGrid").innerHTML = SOLUTIONS.map(
        (s) => `
        <div class="border border-[#e5e5e5] overflow-hidden transition-all duration-200 hover:shadow-[0_5px_22px_rgba(0,0,0,0.08)] hover:-translate-y-0.5">
          <div class="relative w-full h-40 overflow-hidden bg-gradient-to-br from-[#1a1508] to-[#231c0a] flex items-center justify-center">
            ${
              s.img 
                ? `<img class="absolute inset-0 w-full h-full object-cover" src="${s.img}" alt="${s.title.split("\n")[0]}" loading="lazy">`
                : ''
            }
          </div>
          <div class="p-3.5 pb-4.5">
            <h4 class="text-[15px] lg:text-sm font-extrabold uppercase leading-[1.4] text-[var(--text)] mb-2">${s.title.replace(/\n/g, "<br>")}</h4>
            <p class="text-[13px] lg:text-xs text-gray-700 leading-[1.7]">${s.desc}</p>
            <a href="#" class="inline-flex items-center gap-1 text-[var(--gold)] text-xs font-bold uppercase no-underline mt-3 hover:underline">
              Xem chi tiết 
              <svg class="w-2 h-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                <path d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"/>
              </svg>
            </a>
          </div>
        </div>
        `,
      ).join("");
      </script>
    </section>

    <!-- Training Process Section -->
    <section
      class="bg-white py-12 lg:py-16 px-6 md:px-16 font-['Be_Vietnam_Pro',sans-serif]"
    >
      <h2 class="text-center text-2xl font-extrabold uppercase text-[#1a1a1a]">
        <?php echo $training_process_section['title']; ?>
      </h2>
      <div
        class="grid grid-cols-1 lg:grid-cols-5 gap-6 mx-auto mt-12 relative before:hidden md:before:block before:content-[''] before:absolute before:top-[18px] before:left-[10%] before:right-[10%] before:h-[1px] before:bg-[repeating-linear-gradient(to_right,#d2ab7b_0,#d2ab7b_3px,transparent_3px,transparent_9px)] before:z-0"
        id="processSteps"
      ></div>

      <script>
        const PROCESS_STEPS = <?php 
          $formatted_steps = [];
          if (!empty($training_process_section['progress_steps'])) {
              foreach ($training_process_section['progress_steps'] as $step) {
                  $formatted_steps[] = [
                      'img'   => $step['image'],
                      'title' => $step['title'],
                      'desc'  => $step['description']
                  ];
              }
          }
          echo json_encode($formatted_steps);
        ?>;

      document.getElementById("processSteps").innerHTML = PROCESS_STEPS.map(
        (s, index) => `
      <div class="text-center px-4 relative z-[1] flex flex-col items-center mb-8 last:mb-0 md:mb-0">
        <div class="relative w-full flex items-center justify-center mb-6 h-[40px]">
          <div class="absolute right-[15%] top-[-25px] text-[40px] font-light text-[#f0f0f0] select-none font-sans leading-none z-0">
            0${index + 1}
          </div>
          <div class="absolute right-[11%] top-[-4px] w-[5px] h-[5px] bg-[#d2ab7b] rounded-full hidden md:block z-10"></div>
          <div class="relative z-10 flex items-center justify-center bg-white px-4">
            ${
              s.img 
                ? `<div class="size-12 aspect-square overflow-hidden flex items-center justify-center">
                    <img class="w-full h-full object-cover" src="${s.img}" alt="${s.title}">
                  </div>`
                : ''
            }
          </div>
        </div>
        <h4 class="text-base lg:text-sm font-extrabold uppercase leading-[1.4] text-[#1a1a1a] mb-2 min-h-[36px] flex items-center justify-center">
          ${s.title}
        </h4>
        <p class="text-sm lg:text-xs text-gray-600 leading-[1.6] w-[80%] lg:w-[200px]">
          ${s.desc}
        </p>
      </div>
    `,
      ).join("");
      </script>
    </section>

    <!-- Testimonials Section -->
    <section
      class="py-12 px-6 bg-white font-['Be_Vietnam_Pro',sans-serif]"
    >
      <div
        class="grid grid-cols-1 lg:grid-cols-[240px_1fr] gap-12 max-w-[1140px] mx-auto items-start"
      >
        <div class="testi-left text-center lg:text-left">
          <h2
            class="text-2xl lg:text-[19px] font-extrabold uppercase leading-[1.35] text-[#1a1a1a] mb-2.5"
          >
            <?php echo $testimonials_section['title']; ?>
          </h2>
          <p
            class="text-gray-600 text-base lg:text-[13px] leading-[1.6] lg:leading-[1.7] mb-4"
          >
            <?php echo $testimonials_section['sub_title']; ?>
          </p>
          <a
            href="#"
            class="inline-flex items-center rounded-md gap-[5px] border-[1.5px] border-solid border-[#1a1a1a] text-[#1a1a1a] text-[11px] font-bold py-2.5 px-4 no-underline tracking-[0.5px] uppercase transition-colors duration-200 hover:bg-[#1a1a1a] hover:text-white"
          >
            Xem thêm khách hàng
            <svg
              class="size-3 fill-current"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 640 640"
            >
              <path
                d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"
              />
            </svg>
          </a>
        </div>
        <div class="relative overflow-hidden">
          <div class="overflow-hidden" id="testiViewport">
            <div
              class="flex transition-transform duration-[0.4s] ease-out will-change-transform gap-3.5"
              id="testiCards"
            ></div>
          </div>
          <div class="flex justify-end gap-2 mt-3.5">
            <button
              class="bg-none border border-solid border-[#ddd] w-8 h-8 flex items-center justify-center cursor-pointer text-[#666] text-[14px] rounded-[2px] transition-colors duration-200 hover:border-[#d2ab7b] hover:text-[#d2ab7b]"
              id="testiPrev"
            >
              &#8249;
            </button>
            <button
              class="bg-none border border-solid border-[#ddd] w-8 h-8 flex items-center justify-center cursor-pointer text-[#666] text-[14px] rounded-[2px] transition-colors duration-200 hover:border-[#d2ab7b] hover:text-[#d2ab7b]"
              id="testiNext"
            >
              &#8250;
            </button>
          </div>
        </div>
      </div>

      <script>
        const TESTIMONIALS = <?php 
          $formatted_testimonials = [];
          if (!empty($testimonials_section['testimonials'])) {
              foreach ($testimonials_section['testimonials'] as $t) {
                  $formatted_testimonials[] = [
                      'logo_name'  => $t['logo']['name'] ?? '',
                      'logo_image' => $t['logo']['image'] ?? '',
                      'quote'      => $t['quote'] ?? '',
                      'name'       => $t['author']['name'] ?? '',
                      'role'       => $t['author']['role'] ?? ''
                  ];
              }
          }
          echo json_encode($formatted_testimonials);
        ?>;

      (function () {
        const track = document.getElementById("testiCards");
        if (!track || !TESTIMONIALS.length) return;

        function getLayout() {
          const w = window.innerWidth;
          if (w < 640) return { perPage: 1, gap: 14 };
          if (w < 1024) return { perPage: 2, gap: 14 };
          return { perPage: 3, gap: 14 };
        }

        const cloneBefore = [...TESTIMONIALS, ...TESTIMONIALS];
        const cloneAfter = [...TESTIMONIALS, ...TESTIMONIALS];
        const extendedTestimonials = [...cloneBefore, ...TESTIMONIALS, ...cloneAfter];

        track.innerHTML = extendedTestimonials
          .map(
            (t) => `
              <div class="border border-[#e5e5e5] p-5 pb-5.5 bg-white shrink-0 flex flex-col justify-between box-border select-none">
                <div>
                	<div class="mb-3 h-11 flex items-center">
  					${
    					t.logo_image 
      					? `<img class="max-h-full max-w-[120px] object-contain" 							src="${t.logo_image}" alt="${t.logo_name}">`
      					: `<span class="text-xl lg:text-base font-black text-[var(--text)]">${t.logo_name}</span>`
  					}
					</div>
                  <p class="text-sm lg:text-xs text-gray-600 leading-[1.8]">${t.quote}</p>
                </div>
                <div>
                  <div class="my-4 h-[0.5px] w-[40%] bg-black"></div>
                  <div>
                    <b class="block text-[14.5px] lg:text-[12.5px] font-bold text-[var(--text)]">${t.name}</b>
                    <span class="text-[13px] lg:text-[11px] text-gray-500">${t.role}</span>
                  </div>
                </div>
              </div>
            `,
          )
          .join("");

        let idx = cloneBefore.length;
        let isTransitioning = false;

        function update(withTransition = true) {
          const items = track.children;
          if (items.length === 0) return;

          const { perPage, gap } = getLayout();
          const viewportWidth = track.parentElement.getBoundingClientRect().width;
          const itemWidth = (viewportWidth - (perPage - 1) * gap) / perPage;

          for (let i = 0; i < items.length; i++) {
            items[i].style.width = `${itemWidth}px`;
          }

          const step = itemWidth + gap;

          if (withTransition) {
            track.style.transition = "transform 0.4s ease-out";
            isTransitioning = true;
          } else {
            track.style.transition = "none";
          }

          track.style.transform = `translateX(-${idx * step}px)`;
        }

        track.addEventListener("transitionend", () => {
          isTransitioning = false;
          const cloneBeforeCount = cloneBefore.length;

          if (idx >= cloneBeforeCount + TESTIMONIALS.length) {
            idx = idx - TESTIMONIALS.length;
            update(false);
          } else if (idx < cloneBeforeCount) {
            idx = idx + TESTIMONIALS.length;
            update(false);
          }
        });

        document.getElementById("testiPrev").addEventListener("click", () => {
          if (isTransitioning) return;
          idx--;
          update();
        });

        document.getElementById("testiNext").addEventListener("click", () => {
          if (isTransitioning) return;
          idx++;
          update();
        });

        window.addEventListener("resize", () => {
          update(false);
        });

        setTimeout(() => {
          update(false);
        }, 150);
      })();
      </script>
    </section>

    <!-- Image Carousel Section -->
    <section class="bg-gray-50 py-12 px-4 lg:px-20">
      <div class="mx-auto">
        <div id="partners-container" class="grid grid-cols-1 sm:grid-cols-2 gap-8 gap-y-12 items-stretch"></div>
        <div class="text-center mt-12">
          <button id="load-more-btn" class="px-6 py-2.5 border border-gray-700 text-gray-700 font-medium rounded hover:bg-gray-700 hover:text-white transition-colors duration-200">
            Xem thêm
          </button>
        </div>
      </div>

      <script>
        const partnersData = <?php 
          $formatted_items = [];
          if (!empty($image_carousel_section['items'])) {
              foreach ($image_carousel_section['items'] as $item) {
                  $images = [];
                  if (!empty($item['images'])) {
                      foreach ($item['images'] as $imgObj) {
                          if (!empty($imgObj['image'])) {
                              $images[] = $imgObj['image'];
                          }
                      }
                  }
                  $formatted_items[] = [
                      'title' => $item['title'] ?? '',
                      'images' => $images
                  ];
              }
          }
          echo json_encode($formatted_items);
        ?>;

        let visibleCount = 4;
        let thumbStartIndex = {};
        let activeIndexes = {};
        const container = document.getElementById("partners-container");
        const loadMoreBtn = document.getElementById("load-more-btn");

        function renderPartners() {
          const currentItems = partnersData.slice(0, visibleCount);

          container.innerHTML = currentItems
            .map((partner, index) => {
              if (thumbStartIndex[index] === undefined) {
                thumbStartIndex[index] = 0;
              }
              if (activeIndexes[index] === undefined) {
                activeIndexes[index] = 0;
              }
              return `
                <div class="flex flex-col justify-between h-full bg-white p-2 rounded shadow-sm">
                  <div class="border-l-4 border-[#d2ab7b] pl-4 mb-4">
                    <h3 class="text-2xl font-bold text-slate-800 leading-snug">
                      ${partner.title}
                    </h3>
                  </div>
                  
                  <div class="flex flex-col gap-4 mt-auto">
                    <div class="relative group aspect-video w-full bg-slate-900 overflow-hidden rounded shadow-sm">
                      <img id="main-img-${index}" src="${partner.images[0] || ''}" alt="${partner.title}" class="w-full h-full object-cover transition-opacity duration-200 opacity-100">
                      
                      <button onclick="changeImage(${index}, -1)" class="absolute left-2 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center bg-black/40 text-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-black/60 z-10">
                        &#10094;
                      </button>
                      <button onclick="changeImage(${index}, 1)" class="absolute right-2 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center bg-black/40 text-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-200 hover:bg-black/60 z-10">
                        &#10095;
                      </button>
                    </div>

                    <div class="relative flex items-center">
                      <button onclick="slideThumbs(${index}, -1)" class="w-6 h-full flex items-center justify-center bg-black/5 hover:bg-black/10 text-gray-700 absolute left-0 z-10 rounded-l">
                        &#8249;
                      </button>
                      
                      <div class="overflow-hidden w-full mx-6">
                        <div id="thumb-track-${index}" class="flex gap-2 transition-transform duration-200 ease-in-out" style="transform: translateX(0px);">
                          ${partner.images
                            .map((img, imgIdx) => `
                              <div onclick="setMainImage(${index}, ${imgIdx}, '${img}')" class="thumb-item-${index} shrink-0 aspect-16/10 overflow-hidden rounded cursor-pointer border-2 ${imgIdx === activeIndexes[index] ? "border-[#d2ab7b] opacity-100" : "border-transparent opacity-60 hover:opacity-100"} transition-all duration-200" style="width: calc((100% - 32px) / 5);">
                                <img src="${img}" alt="" class="w-full h-full object-cover pointer-events-none">
                              </div>
                            `).join("")}
                        </div>
                      </div>

                      <button onclick="slideThumbs(${index}, 1)" class="w-6 h-full flex items-center justify-center bg-black/5 hover:bg-black/10 text-gray-700 absolute right-0 z-10 rounded-r">
                        &#8250;
                      </button>
                    </div>
                  </div>
                </div>
              `;
            })
            .join("");

          currentItems.forEach((_, index) => updateThumbVisibility(index));

          if (visibleCount >= partnersData.length) {
            loadMoreBtn.classList.add("hidden");
          } else {
            loadMoreBtn.classList.remove("hidden");
          }
        }

        window.updateThumbVisibility = function (cardIdx) {
          const track = document.getElementById(`thumb-track-${cardIdx}`);
          if (!track) return;
          
          const start = thumbStartIndex[cardIdx];
          const itemWidth = track.firstElementChild ? track.firstElementChild.getBoundingClientRect().width : 0;
          const gap = 8; 
          
          const moveDistance = start * (itemWidth + gap);
          track.style.transform = `translateX(-${moveDistance}px)`;
        };

        window.slideThumbs = function (cardIdx, direction) {
          const totalImages = partnersData[cardIdx].images.length;
          if (totalImages <= 5) return;
          
          let start = thumbStartIndex[cardIdx] + direction;
          if (start < 0) start = totalImages - 5;
          if (start > totalImages - 5) start = 0;
          
          thumbStartIndex[cardIdx] = start;
          updateThumbVisibility(cardIdx);
        };

        window.setMainImage = function (cardIdx, imgIdx, imgSrc) {
          const mainImg = document.getElementById(`main-img-${cardIdx}`);
          if (!mainImg) return;

          activeIndexes[cardIdx] = imgIdx;
          mainImg.classList.replace("opacity-100", "opacity-0");

          setTimeout(() => {
            mainImg.src = imgSrc;
            mainImg.classList.replace("opacity-0", "opacity-100");
          }, 150);

          const thumbs = document.querySelectorAll(`.thumb-item-${cardIdx}`);
          thumbs.forEach((thumb, index) => {
            if (index === imgIdx) {
              thumb.classList.remove("border-transparent", "opacity-60");
              thumb.classList.add("border-[#d2ab7b]", "opacity-100");
            } else {
              thumb.classList.remove("border-[#d2ab7b]", "opacity-100");
              thumb.classList.add("border-transparent", "opacity-60");
            }
          });
        };

        window.changeImage = function (cardIdx, direction) {
          const images = partnersData[cardIdx].images;
          if (!images.length) return;
          
          let currentIndex = activeIndexes[cardIdx] !== undefined ? activeIndexes[cardIdx] : 0;
          let nextIndex = currentIndex + direction;

          if (nextIndex >= images.length) nextIndex = 0;
          if (nextIndex < 0) nextIndex = images.length - 1;

          if (nextIndex < thumbStartIndex[cardIdx] || nextIndex >= thumbStartIndex[cardIdx] + 5) {
            if (direction > 0) {
              thumbStartIndex[cardIdx] = Math.min(nextIndex, images.length - 5);
            } else {
              thumbStartIndex[cardIdx] = Math.max(0, nextIndex - 4);
            }
            if (thumbStartIndex[cardIdx] < 0) thumbStartIndex[cardIdx] = 0;
          }
          
          if (nextIndex === 0 && direction > 0) thumbStartIndex[cardIdx] = 0;
          if (nextIndex === images.length - 1 && direction < 0) thumbStartIndex[cardIdx] = images.length - 5;
          if (thumbStartIndex[cardIdx] < 0) thumbStartIndex[cardIdx] = 0;

          updateThumbVisibility(cardIdx);
          setMainImage(cardIdx, nextIndex, images[nextIndex]);
        };

        loadMoreBtn.addEventListener("click", () => {
          visibleCount += 4;
          renderPartners();
        });

        renderPartners();
      </script>
    </section>

    <!-- Contact Section -->
    <section
      class="bg-[#111] mb-16 grid grid-cols-1 lg:grid-cols-2 overflow-hidden font-['Be_Vietnam_Pro',sans-serif]"
    >
      <div class="relative overflow-hidden hidden lg:block h-full w-full">
        <img
          class="absolute inset-0 w-full h-full object-cover block"
          src="<?php echo $contact_section['image']; ?>"
          alt="Contact CTA Image"
        />
      </div>

      <div class="px-6 py-10 md:px-14 flex flex-col justify-center">
        <h2
          class="text-[22px] font-black uppercase text-[#d2ab7b] leading-[1.3] mb-2.5"
        >
          <?php echo $contact_section['title']; ?>
        </h2>
        <p class="lg:w-[90%] text-white/70 text-[13px] leading-[1.7] mb-4">
          <?php echo $contact_section['content']; ?>
        </p>
        <div class="flex items-center gap-4 flex-wrap">
          <a
            href="<?php echo $contact_section['button_1']['endpoint']; ?>"
            class="bg-[#d2ab7b] text-[#1a1a1a] font-extrabold text-xs h-[42px] px-6 border-none cursor-pointer no-underline inline-flex items-center gap-1.5 uppercase tracking-[0.5px] transition-colors duration-200 rounded-[5px] hover:bg-[#c49a6a] max-[480px]:w-full max-[480px]:justify-center"
          >
            <?php echo $contact_section['button_1']['text']; ?>
          </a>

          <a
            href="<?php echo $contact_section['button_2']['endpoint']; ?>"
            class="text-white border border-white/30 h-[42px] px-6 rounded-[5px] text-[12.5px] font-extrabold tracking-[0.5px] no-underline inline-flex items-center gap-2 hover:border-[#d2ab7b] hover:text-[#d2ab7b] transition-colors duration-200 max-[480px]:w-full max-[480px]:justify-center"
          >
            <?php echo $contact_section['button_2']['text']; ?>
          </a>
        </div>
      </div>
    </section>
  </body>
</html>

<?php

get_footer();