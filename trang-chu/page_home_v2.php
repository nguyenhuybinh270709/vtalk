<?php
/**
 * Template Name: Home V2
 *
 * @since 1.0.0
 * @author ...
 */

get_header();

$hero_section = get_field('hero_section');
$media_and_press_section = get_field('media_and_press_section');
$achievement_and_milestones_section = get_field('achievement_and_milestones_section');
$courses_section = get_field('courses_section');
$instructors_section = get_field('instructors_section');
$vtalk_in_action_section = get_field('vtalk_in_action_section');
$corporate_training_section = get_field('corporate_training_section');
$international_cooperation_section = get_field('international_cooperation_section');
$active_image_section = get_field('active_image_section');
$testimonials_section = get_field('testimonials_section');
?>

<!doctype html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Học viện Kỹ năng VTALK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        important: true,
        theme: {
          extend: {
            colors: {
              brand: "#d2ab7b",
              dark: "#0D0D1A",
              card: "#13132A",
            },
            fontFamily: {
              sans: ["Be Vietnam Pro", "sans-serif"],
            },
          },
        },
      };
    </script>
    <link
      href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="bg-white text-gray-800">
    <!-- ═══════════════════════════════════════════════════ -->
    <!-- Hero Section -->
    <!-- ═══════════════════════════════════════════════════ -->
    <section class="lg:min-h-screen relative overflow-hidden bg-[#0d0d1a] flex items-center">
      <div class="hidden lg:block absolute inset-0 z-0">
        <img
          src="<?php echo $hero_section['background_image']; ?>"
          alt="Hero Background"
          class="w-full h-full object-cover object-center"
        />
        <div
          class="absolute inset-0 bg-gradient-to-r from-[25%] from-black/80 via-black/10 to-transparent"
        ></div>
      </div>

      <div
        class="relative z-10 mx-auto px-6 lg:px-20 py-12 lg:py-16 flex flex-col lg:flex-row items-center justify-between gap-8 w-full"
      >
        <div class="flex-1 text-white lg:w-[50%]">
          <h1
            class="text-3xl sm:text-4xl font-extrabold sm:font-bold text-white uppercase"
          >
            <?php echo $hero_section['title']['text_1']; ?>
            <span
              class="block text-3xl sm:text-5xl text-[#e5aa56] mt-3 lg:mt-4 mb-4"
            >
              <?php echo $hero_section['title']['text_2']; ?>
            </span>
          </h1>
          <p
            class="text-gray-300 text-sm sm:text-[15px] lg:text-sm lg:max-w-md mb-5 leading-relaxed"
          >
            <?php echo $hero_section['content']; ?>
          </p>

          <div
            id="featuresContainer"
            class="grid grid-cols-2 sm:grid-cols-4 lg:flex flex-wrap items-center gap-x-5 gap-y-3 mb-6 text-xs text-gray-200"
          ></div>

          <div class="flex gap-3 flex-wrap">
            <a
              href="<?php echo $hero_section['button_1']['endpoint']; ?>"
              class="w-full lg:w-fit bg-[#e5aa56] text-black font-bold px-5 py-2.5 text-xs uppercase flex items-center justify-center lg:justify-start gap-2 hover:bg-[#f5b862] transition rounded-md active:scale-[1.04]"
            >
              <?php echo $hero_section['button_1']['text']; ?>
            </a>
            <a
              href="<?php echo $hero_section['button_2']['endpoint']; ?>"
              class="w-full lg:w-fit group border-[1.5px] border-white/40 bg-black/5 lg:bg-black/40 text-white font-bold px-5 py-2.5 text-xs uppercase flex items-center justify-center lg:justify-start gap-2 hover:bg-white hover:text-black transition rounded-md active:scale-[1.04]"
            >
              <?php echo $hero_section['button_2']['text']; ?>
            </a>
          </div>
        </div>

        <div
          id="statsContainer"
          class="grid grid-cols-1 mx-auto shrink-0 w-full lg:w-fit bg-black/15 lg:bg-black/60 border border-white/40 lg:border-white/20 rounded-lg p-5 gap-4"
        ></div>
      </div>

      <script>

        
        const STATS_1_DATA = <?php 
          $formatted_stats_1 = [];
          if (!empty($hero_section['stats_1'])) {
              foreach ($hero_section['stats_1'] as $hero) {
                  $formatted_stats_1[] = [
                      'icon' => $hero['icon'],
                      'text'  => $hero['text']
                  ];
              }
          }
          echo json_encode($formatted_stats_1);
        ?>;

        const STATS_2_DATA = <?php 
          $formatted_stats_2 = [];
          if (!empty($hero_section['stats_2'])) {
              foreach ($hero_section['stats_2'] as $hero) {
                  $formatted_stats_2[] = [
                      'icon' => $hero['icon'],
                      'text_1'  => $hero['text_1'],
                      'text_2'  => $hero['text_2']
                  ];
              }
          }
          echo json_encode($formatted_stats_2);
        ?>;

        document.getElementById("featuresContainer").innerHTML =
          STATS_1_DATA.map(
            (item) => `
                <span class="text-[13px] flex items-center gap-1.5">
                    <img src="${item.icon}" alt="Icon" class="size-5 object-cover" />
                    ${item.text}
                </span>
                `,
            ).join("");

        document.getElementById("statsContainer").innerHTML = STATS_2_DATA.map(
          (item) => `
                <div class="flex items-center gap-3 text-white">
                    <img src="${item.icon}" alt="" class="size-8 object-cover flex-shrink-0" />
                    <div>
                    <div class="text-xl lg:text-lg font-bold">${item.text_1}</div>
                    <div class="text-sm lg:text-xs text-white/65">${item.text_2}</div>
                    </div>
                </div>
                `,
            ).join("");
      </script>
    </section>

    <!-- ═══════════════════════════════════════════════════ -->
    <!-- Media And Press Section -->
    <!-- ═══════════════════════════════════════════════════ -->
    <section
      class="bg-[#070e16] py-12 px-0 border-t border-solid border-white/5 font-['Be_Vietnam_Pro',sans-serif]"
    >
      <p
        class="text-center text-xl sm:text-2xl uppercase text-white font-bold mb-12"
      >
        <?php echo $media_and_press_section['title']; ?>
      </p>
      <div class="flex items-center lg:w-[90%] mx-auto px-4 py-0">
        <button
          class="bg-none text-[rgba(255,255,255,0.5)] size-6 flex items-center justify-center cursor-pointer shrink-0 text-3xl rounded-[2px] transition-colors duration-200 hover:border-[#d2ab7b] hover:text-[#d2ab7b]"
          id="pPrev"
        >
          &#8249;
        </button>
        <div class="overflow-hidden flex-1 mx-3 my-0" id="pViewport">
          <div class="flex flex-col gap-16" id="pRows">
            <div
              class="flex items-center transition-transform duration-[0.4s] ease-out will-change-transform"
              id="pTrack"
            ></div>
            <div
              class="flex items-center transition-transform duration-[0.4s] ease-out will-change-transform"
              id="pTrack2"
            ></div>
          </div>
        </div>
        <button
          class="bg-none text-[rgba(255,255,255,0.5)] size-6 flex items-center justify-center cursor-pointer shrink-0 text-3xl rounded-[2px] transition-colors duration-200 hover:border-[#d2ab7b] hover:text-[#d2ab7b]"
          id="pNext"
        >
          &#8250;
        </button>
      </div>

      <script>
        const PARTNERS = <?php 
          $formatted_items = [];
          if (!empty($media_and_press_section['items'])) {
              foreach ($media_and_press_section['items'] as $items) {
                  $formatted_items[] = [
                      'name' => $items['name'],
                      'logo'  => $items['logo'],
                      'link'  => $items['link'],
                  ];
              }
          }
          echo json_encode($formatted_items);
        ?>;

        (function () {
          const track = document.getElementById("pTrack");
          const track2 = document.getElementById("pTrack2");
          if (!track || !track2 || !PARTNERS.length) return;

          function getLayout() {
            const w = window.innerWidth;
            if (w < 640) return { perPage: 2, gap: 16 };
            if (w < 1024) return { perPage: 4, gap: 24 };
            return { perPage: 5, gap: 32 };
          }

          const half = Math.ceil(PARTNERS.length / 2);
          const row1 = PARTNERS.slice(0, half);
          const row2 = PARTNERS.slice(half);

          function buildExtended(arr) {
            const cloneBefore = [...arr, ...arr];
            const cloneAfter = [...arr, ...arr];
            return { extended: [...cloneBefore, ...arr, ...cloneAfter], originalLen: arr.length, cloneBeforeLen: cloneBefore.length };
          }

          const r1 = buildExtended(row1);
          const r2 = buildExtended(row2);

          function renderItems(trackEl, extendedArr) {
            trackEl.innerHTML = extendedArr
              .map(
                (p) => `
                  <div class="p-item shrink-0 flex items-center justify-center px-2 select-none">
                    <a href="${p.link}" target="_blank" class="flex items-center justify-center w-full h-full">
                      ${
                        p.logo
                          ? `<img class="max-h-14 max-w-full object-contain rounded-md" src="${p.logo}" alt="${p.name}" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
                            <span class="text-white/60 text-xs uppercase font-bold" style="display:none">${p.name}</span>`
                          : `<span class="text-white/60 text-xs uppercase font-bold text-center">${p.name}</span>`
                      }
                    </a>
                  </div>
                  `,
              )
              .join("");
          }

          renderItems(track, r1.extended);
          renderItems(track2, r2.extended);

          let idx1 = r1.cloneBeforeLen;
          let idx2 = r2.cloneBeforeLen;
          let isTransitioning = false;

          function updateTrack(trackEl, idx, withTransition) {
            const items = trackEl.children;
            if (items.length === 0) return;

            const { perPage, gap } = getLayout();
            const viewportWidth = trackEl.parentElement.getBoundingClientRect().width;
            const itemWidth = (viewportWidth - (perPage - 1) * gap) / perPage;

            for (let i = 0; i < items.length; i++) {
              items[i].style.width = `${itemWidth}px`;
              items[i].style.marginRight = i === items.length - 1 ? "0px" : `${gap}px`;
            }

            const step = itemWidth + gap;

            if (withTransition) {
              trackEl.style.transition = "transform 0.4s ease-out";
            } else {
              trackEl.style.transition = "none";
            }

            trackEl.style.transform = `translateX(-${idx * step}px)`;
          }

          function update(withTransition = true) {
            if (withTransition) isTransitioning = true;
            updateTrack(track, idx1, withTransition);
            updateTrack(track2, idx2, withTransition);
          }

          track.addEventListener("transitionend", () => {
            isTransitioning = false;
            if (idx1 >= r1.cloneBeforeLen + r1.originalLen) {
              idx1 -= r1.originalLen;
              updateTrack(track, idx1, false);
            } else if (idx1 < r1.cloneBeforeLen) {
              idx1 += r1.originalLen;
              updateTrack(track, idx1, false);
            }
          });

          track2.addEventListener("transitionend", () => {
            if (idx2 >= r2.cloneBeforeLen + r2.originalLen) {
              idx2 -= r2.originalLen;
              updateTrack(track2, idx2, false);
            } else if (idx2 < r2.cloneBeforeLen) {
              idx2 += r2.originalLen;
              updateTrack(track2, idx2, false);
            }
          });

          document.getElementById("pPrev").addEventListener("click", () => {
            if (isTransitioning) return;
            idx1--;
            idx2--;
            update();
          });

          document.getElementById("pNext").addEventListener("click", () => {
            if (isTransitioning) return;
            idx1++;
            idx2++;
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

    <!-- ═══════════════════════════════════════════════════ -->
    <!-- Achievement And Milestones Section -->
    <!-- ═══════════════════════════════════════════════════ -->
    <section
      class="relative bg-[#03070c] text-white py-12 px-6 lg:px-16 font-sans bg-cover bg-center bg-no-repeat"
      style="background-image: url(&quot;<?php echo $achievement_and_milestones_section['background_image']; ?>&quot;);">
        <div
            class="absolute inset-0 bg-gradient-to-b h-16 from-black to-transparent"
        ></div>
        <div class="mx-auto">
            <h2
            class="text-xl lg:text-2xl text-center font-bold text-white uppercase mb-8"
            >
            <?php echo $achievement_and_milestones_section['title']; ?>
            </h2>

            <div
            id="vtalk-achievements-grid"
            class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 px-6 lg:px-8 gap-4 relative z-10"
            ></div>
        </div>

        <script>
        (() => {
            const achievements = <?php 
            $formatted_stats = [];
            if (!empty($achievement_and_milestones_section['stats'])) {
                foreach ($achievement_and_milestones_section['stats'] as $stats) {
                    $formatted_stats[] = [
                        'icon' => $stats['icon'],
                        'text_1'  => $stats['text_1'],
                        'text_2'  => $stats['text_2']
                    ];
                }
            }
            echo json_encode($formatted_stats);
            ?>;

            const gridContainer = document.getElementById(
            "vtalk-achievements-grid",
            );

            gridContainer.innerHTML = achievements
            .map(
                (item) => `
        <div class="flex flex-col items-center text-center p-4 bg-white/5 rounded-xl border border-gray-800/60 backdrop-blur-sm transition-all duration-200 hover:border-white/20 hover:bg-white/7 hover:scale-[1.04]">
            <div class="mb-2 flex items-center justify-center">
            <img src="${item.icon}" alt="${item.text_2}" class="w-10 size-12 object-cover" loading="lazy" />
            </div>
            <div class="text-2xl font-extrabold text-[#e5aa56] mb-1">
            ${item.text_1}
            </div>
            <p class="text-xs sm:text-[13px] text-white/60 font-medium leading-relaxed">
            ${item.text_2}
            </p>
        </div>
        `,
            )
            .join("");
        })();

        </script>
    </section>

    <!-- ═══════════════════════════════════════════════════ -->
    <!-- Courses Section -->
    <!-- ═══════════════════════════════════════════════════ -->
    <section class="bg-[#03070c] text-white py-12 px-6 lg:px-16 font-sans">
      <div class="mx-auto">
        <div
          class="flex flex-col lg:flex-row gap-3 justify-between items-center mb-6"
        >
          <h2 class="text-2xl font-bold text-gray-200 uppercase">
            <?php echo $courses_section['title']; ?>
          </h2>
          <a
            href="/khoa-hoc"
            class="text-sm text-[#e5aa56] font-medium flex items-center gap-1 transition-colors group"
          >
            <span class="group-hover:underline">Xem tất cả khóa học</span>
            <svg
              class="size-2.5 fill-current"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"
            >
              <path
                d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224H40c-17.7 0-32 14.3-32 32s14.3 32 32 32h362.7L265.4 413.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
              />
            </svg>
          </a>
        </div>

        <div
          id="vtalk-courses-grid"
          class="grid grid-cols-1 lg:grid-cols-2 lg:grid-cols-3 gap-6 relative z-10"
        ></div>
      </div>

        <script>
        (() => {
            const courses =  <?php 
                $formatted_courses = [];
                if (!empty($courses_section['courses'])) {
                    foreach ($courses_section['courses'] as $courses) {
                        $formatted_courses[] = [
                            'background_image' => $courses['background_image'],
                            'title'  => $courses['title'],
                            'description'  => $courses['description'],
                            'link'  => $courses['link'],
                        ];
                    }
                }
                echo json_encode($formatted_courses);
                ?>;

            const gridContainer = document.getElementById("vtalk-courses-grid");

            gridContainer.innerHTML = courses
            .map(
                (item) => `
                <div class="relative rounded-2xl border border-gray-800/60 overflow-hidden bg-cover bg-center flex flex-col justify-between p-8 group transition-all duration-300 hover:scale-[1.04]" 
                        style="background-image: url('${item.background_image}');">
                    <div class="flex flex-col gap-3 w-[50%]">
                    <h3 class="text-xl font-bold text-white uppercase leading-tight">
                        ${item.title}
                    </h3>
                    <p class="text-sm text-gray-400 font-medium leading-relaxed backdrop-blur-xs rounded-lg inline-block">
                        ${item.description}
                    </p>
                    </div>
                    <div class="mt-2">
                      <a href="${item.link}" class="inline-flex items-center gap-2 text-sm font-semibold text-[#e5aa56] transition-all hover:underline">
                          Xem chi tiết
                          <svg
                          class="size-2.5 fill-current"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 512 512"
                          >
                          <path
                              d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224H40c-17.7 0-32 14.3-32 32s14.3 32 32 32h362.7L265.4 413.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
                          />
                          </svg>
                      </a>
                    </div>
                </div>
                `,
            )
            .join("");
        })();
        </script>
    </section>

    <!-- ═══════════════════════════════════════════════════ -->
    <!-- Instructors Section -->
    <!-- ═══════════════════════════════════════════════════ -->
    <section
      class="bg-[#03070c] text-white py-12 px-6 lg:px-16 font-sans border-t border-white/5"
    >
      <div class="mx-auto">
        <div
          class="flex flex-col lg:flex-row gap-3 justify-between items-center mb-6"
        >
          <h2 class="text-2xl font-bold text-gray-200 uppercase">
            <?php echo $instructors_section['title']; ?>
          </h2>
          <a
            href="#"
            class="text-sm text-[#e5aa56] font-medium flex items-center gap-1 transition-colors group"
          >
            <span class="group-hover:underline">Xem tất cả giảng viên</span>
            <svg
              class="size-2.5 fill-current"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"
            >
              <path
                d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224H40c-17.7 0-32 14.3-32 32s14.3 32 32 32h362.7L265.4 413.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
              />
            </svg>
          </a>
        </div>

        <div
          class="flex items-center w-full mx-auto relative group/slider px-10 lg:px-12"
        >
          <button
            class="absolute left-0 lg:-left-2 z-20 bg-[#131926]/80 text-gray-400 hover:text-[#e5aa56] border border-gray-800 hover:border-[#e5aa56] size-10 flex items-center justify-center cursor-pointer text-2xl rounded-full transition-all duration-200 shadow-lg"
            id="insPrev"
          >
            &#8249;
          </button>

          <div class="overflow-hidden flex-1" id="insViewport">
            <div
              class="flex transition-transform duration-[0.4s] ease-out will-change-transform"
              id="insTrack"
            ></div>
          </div>

          <button
            class="absolute right-0 lg:-right-2 z-20 bg-[#131926]/80 text-gray-400 hover:text-[#e5aa56] border border-gray-800 hover:border-[#e5aa56] size-10 flex items-center justify-center cursor-pointer text-2xl rounded-full transition-all duration-200 shadow-lg"
            id="insNext"
          >
            &#8250;
          </button>
        </div>
      </div>

      <script>
        const INSTRUCTORS = <?php 
            $formatted_instructors = [];
            if (!empty($instructors_section['instructors'])) {
                 foreach ($instructors_section['instructors'] as $instructors) {
                    $formatted_instructors[] = [
                        'image' => $instructors['image'],
                        'name'  => $instructors['name'],
                        'role'  => $instructors['role'],
                        'description'  => $instructors['description']
                    ];
                }
            }
            echo json_encode($formatted_instructors);
            ?>;

        (function () {
          const track = document.getElementById("insTrack");
          if (!track || !INSTRUCTORS.length) return;

          function getLayout() {
            const w = window.innerWidth;
            if (w < 640) return { perPage: 1, gap: 16 };
            if (w < 768) return { perPage: 2, gap: 16 };
            if (w < 1024) return { perPage: 3, gap: 20 };
            if (w < 1280) return { perPage: 4, gap: 24 };
            return { perPage: 5, gap: 24 };
          }

          const cloneBefore = [...INSTRUCTORS, ...INSTRUCTORS];
          const cloneAfter = [...INSTRUCTORS, ...INSTRUCTORS];
          const extendedInstructors = [
            ...cloneBefore,
            ...INSTRUCTORS,
            ...cloneAfter,
          ];

          track.innerHTML = extendedInstructors
            .map(
              (ins) => `
          <div class="p-item shrink-0 flex flex-col items-center p-4 bg-white/5 rounded-xl border border-gray-800/60 backdrop-blur-sm select-none transition-all duration-200 hover:border-[#e5aa56] hover:bg-white/8">
            <div class="w-full flex justify-center mb-4 overflow-hidden rounded-xl bg-[#0b0f19]/50 aspect-[4/5]">
              <img class="w-full h-full object-cover pointer-events-none" src="${ins.image}" alt="${ins.name}">
            </div>
            <div class="text-center w-full flex flex-col gap-1.5">
              <h3 class="text-base font-bold text-[#e5aa56] uppercase leading-tight">
                ${ins.name}
              </h3>
              <p class="text-xs lg:text-[13px] text-gray-300 font-semibold">
                ${ins.role}
              </p>
              <p class="text-xs text-gray-500 font-medium leading-relaxed">
                ${ins.description}
              </p>
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

            if (idx >= cloneBeforeCount + INSTRUCTORS.length) {
              idx = idx - INSTRUCTORS.length;
              update(false);
            } else if (idx < cloneBeforeCount) {
              idx = idx + INSTRUCTORS.length;
              update(false);
            }
          });

          document.getElementById("insPrev").addEventListener("click", () => {
            if (isTransitioning) return;
            idx--;
            update();
          });

          document.getElementById("insNext").addEventListener("click", () => {
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

    <!-- ═══════════════════════════════════════════════════ -->
    <!-- Vtalk In Action Section -->
    <!-- ═══════════════════════════════════════════════════ -->
    <section
      class="bg-[#0b0f19] text-white py-12 px-6 lg:px-16 font-sans border-t border-white/5"
    >
      <div class="mx-auto">
        <div class="flex justify-center lg:justify-between items-center mb-8">
          <h2 class="text-2xl font-bold text-[#e5e7eb] uppercase m-0">
            <?php echo $vtalk_in_action_section['title']; ?>
          </h2>
        </div>
        <div
          class="grid grid-cols-1 lg:grid-cols-[5fr_3fr_4fr] gap-8 items-center"
        >
          <div
            class="relative w-full aspect-video rounded-2xl border border-gray-700 overflow-hidden bg-black"
          >
            <iframe
              id="vtalkMainVideo"
              class="w-full h-full absolute inset-0"
              src=""
              title="VTALK Video Player"
              frameborder="0"
              allow="
                accelerometer;
                autoplay;
                clipboard-write;
                encrypted-media;
                gyroscope;
                picture-in-picture;
                web-share;
              "
              allowfullscreen
            ></iframe>
          </div>
          <div class="flex flex-col gap-4 text-left justify-center h-full">
            <h3
              class="text-lg sm:text-xl font-bold text-[#f3f4f6] leading-snug m-0"
            >
              <?php echo $vtalk_in_action_section['sub_title']; ?>
            </h3>
            <p
              class="text-[0.85rem] text-gray-400 font-medium leading-relaxed m-0"
            >
              <?php echo $vtalk_in_action_section['content']; ?>
            </p>
            <div class="pt-2">
              <a
                href="<?php echo $vtalk_in_action_section['button']['endpoint']; ?>"
                class="w-full lg:w-fit inline-block bg-[#e5aa56] hover:bg-[#f5b862] text-black text-[0.8rem] font-bold uppercase py-3 px-6 rounded-lg no-underline text-center"
                ><?php echo $vtalk_in_action_section['button']['text']; ?></a
              >
            </div>
          </div>
          <div
            id="vtalk-playlist-container"
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-3 w-full"
          ></div>
        </div>
      </div>

      <script>
        (() => {
          const PLAYLIST = <?php 
            $formatted_videos = [];
            if (!empty($vtalk_in_action_section['videos'])) {
                 foreach ($vtalk_in_action_section['videos'] as $video) {
                    $raw = $video['link'];
                    preg_match('/src=["\']([^"\']+)["\']/', $raw, $matches);
                    $src = !empty($matches[1]) ? $matches[1] : $raw;
                    $formatted_videos[] = [
                        'title' => $video['title'],
                        'link'  => $src,
                    ];
                }
            }
            echo json_encode($formatted_videos);
            ?>;

          const container = document.getElementById("vtalk-playlist-container");
          const iframe = document.getElementById("vtalkMainVideo");
          iframe.src = PLAYLIST[0].link;

          if (!container || !iframe) return;

          container.innerHTML = PLAYLIST.map(
            (v, i) => `
                      <div class="pitem ${i === 0 ? "border-[#f59e0b]/40 bg-[#161d2d]" : "border-gray-700/40 bg-[#131926]/40"} flex items-center gap-3 p-2.5 rounded-xl border cursor-pointer transition-all duration-250" data-src="${v.link}">
                        <div class="relative w-28 aspect-video rounded-lg overflow-hidden bg-black shrink-0 border border-gray-700/80">
                          <iframe class="w-full h-full absolute inset-0 pointer-events-none" src="${v.link}" frameborder="0" allow="encrypted-media"></iframe>
                          <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                            <div class="w-7 h-7 bg-black/60 rounded-full flex items-center justify-center border border-white/40 text-white text-[0.7rem]">&#9654;</div>
                          </div>
                        </div>
                        <div class="flex-1 min-w-0">
                          <h4 class="text-[0.75rem] font-semibold text-[#d1d5db] leading-df m-0 line-clamp-2">${v.title}</h4>
                        </div>
                      </div>
                    `,
          ).join("");

          container.querySelectorAll(".pitem").forEach((el) => {
            el.addEventListener("click", function () {
              container.querySelectorAll(".pitem").forEach((e) => {
                e.classList.remove("border-[#f59e0b]/40", "bg-[#161d2d]");
                e.classList.add("border-gray-700/40", "bg-[#131926]/40");
              });
              this.classList.remove("border-gray-700/40", "bg-[#131926]/40");
              this.classList.add("border-[#f59e0b]/40", "bg-[#161d2d]");

              let targetSrc = this.dataset.src;
              if (targetSrc.includes("?")) {
                iframe.src = targetSrc + "&autoplay=1";
              } else {
                iframe.src = targetSrc + "?autoplay=1";
              }
            });
          });
        })();
      </script>
    </section>

    <!-- ═══════════════════════════════════════════════════ -->
    <!-- Corporate Training Section -->
    <!-- ═══════════════════════════════════════════════════ -->
    <section class="bg-[#0b0f19] text-white py-8 px-6 lg:px-16 font-sans">
      <div class="mx-auto border border-white/20 rounded-lg">
        <div
          class="grid grid-cols-1 lg:grid-cols-10 items-stretch rounded-lg border border-gray-800/60 overflow-hidden"
        >
          <div
            class="lg:col-span-6 flex flex-col lg:flex-row items-stretch bg-[#0b0f19] relative overflow-hidden"
          >
            <div
              class="w-full lg:w-[50%] p-6 flex flex-col justify-between gap-4 relative z-10 bg-[#0b0f19] shrink-0"
            >
              <div class="flex flex-col gap-2">
                <h2
                  class="text-2xl font-extrabold text-[#e5aa56] uppercase leading-tight"
                >
                  <?php echo $corporate_training_section['part_1']['title']; ?>
                </h2>
                <p class="text-sm text-gray-300 font-medium leading-relaxed">
                  <?php echo $corporate_training_section['part_1']['description']; ?>
                </p>
              </div>

              <div
                id="vtalk-features-container"
                class="flex flex-col gap-3"
              ></div>

              <div>
                <a
                  href="<?php echo $corporate_training_section['part_1']['button']['endpoint']; ?>"
                  class="w-full lg:w-fit inline-flex items-center justify-center gap-2 bg-[#e5aa56] hover:bg-[#f5b862] text-black text-xs lg:text-sm font-bold uppercase py-3 px-8 rounded-lg transition-colors shadow-lg shadow-[#e5aa56]/10"
                >
                  <?php echo $corporate_training_section['part_1']['button']['text']; ?>
                </a>
              </div>
            </div>

            <div
              class="w-full relative bg-cover bg-center bg-no-repeat grow"
              style="background-image: url(&quot;<?php echo $corporate_training_section['part_1']['image']; ?>&quot;)"
            >
              <div
                class="absolute inset-0 bg-gradient-to-r from-[#0b0f19] via-30% via-[#0b0f19]/30 to-transparent"
              ></div>
            </div>
          </div>

          <div
            class="lg:col-span-4 flex flex-col items-center justify-center bg-white/95 text-black p-6"
          >
            <p class="text-xl font-bold text-gray-800 uppercase mb-6">
              <?php echo $corporate_training_section['part_2']['title']; ?>
            </p>

            <div
              id="vtalk-partners-grid"
              class="grid grid-cols-3 sm:grid-cols-4 gap-4 w-full items-center justify-items-center mb-6"
            ></div>

            <script>
              const rawData =
                `<?php echo $corporate_training_section['part_1']['content']; ?>`;

              document.getElementById("vtalk-features-container").innerHTML =
                rawData
                  .split(/<br\s*\/?>/i)
                  .filter((text) => text.trim())
                  .map(
                    (text) => `
                      <div class="flex items-start gap-3">
                        <span class="text-[#e5aa56] text-base leading-none">✓</span>
                        <span class="text-sm text-gray-300">${text.trim()}</span>
                      </div>
                    `,
                  )
                  .join("");

              const partnersData = <?php 
            $formatted_partners = [];
            if (!empty($corporate_training_section['part_2']['partners'])) {
                 foreach ($corporate_training_section['part_2']['partners'] as $partner) {
                    $formatted_partners[] = [
                        'name' => $partner['name'],
                        'logo'  => $partner['logo'],
                    ];
                }
            }
            echo json_encode($formatted_partners);
            ?>;

              document.getElementById("vtalk-partners-grid").innerHTML =
                partnersData
                  .map((partner) => {
                    const hasLogo =
                      partner.logo &&
                      partner.logo !== "null" &&
                      partner.logo !== "";

                    return `<div class="partner-item flex items-center justify-center h-10 w-full px-1">
                              ${
                                hasLogo
                                  ? `<img src="${partner.logo}" alt="${partner.name}" class="max-h-full max-w-full object-contain" onerror="const span = document.createElement('span'); span.className='text-xs font-semibold text-gray-800 text-center leading-tight'; span.innerText='${partner.name}'; this.replaceWith(span);" />`
                                  : `<span class="text-sm font-semibold text-gray-800 text-center leading-tight">${partner.name}</span>`
                              }
                            </div>`;
                  })
                  .join("");
            </script>

            <a
              href="<?php echo $corporate_training_section['part_2']['button']['endpoint']; ?>"
              class="w-fit text-center bg-transparent hover:bg-black border border-black hover:border-transparent hover:text-white text-xs font-bold uppercase py-3 px-4 rounded-lg transition-colors text-gray-700"
            >
              <?php echo $corporate_training_section['part_2']['button']['text']; ?>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════════ -->
    <!-- International Cooperation Section -->
    <!-- ═══════════════════════════════════════════════════ -->
    <section class="bg-[#0b0f19] text-white py-12 px-6 lg:px-16 font-sans">
      <div class="mx-auto border border-gray-700 rounded-md">
        <div
          id="vtalk-global-container"
          class="relative grid grid-cols-1 lg:grid-cols-12 items-stretch rounded-xl overflow-hidden bg-cover bg-no-repeat"
          style="background-image: url(&quot;<?php echo $international_cooperation_section['background_image']; ?>&quot;);"
        >
          <div
            class="lg:col-span-4 p-6 flex flex-col justify-center bg-[#0b0f19] backdrop-blur-sm"
          >
            <div id="vtalk-stats-grid" class="grid grid-cols-2 gap-4"></div>
          </div>

          <div
            class="lg:col-span-8 relative flex flex-col justify-center gap-6 p-6 lg:p-12"
          >
            <div class="absolute inset-y-0 left-0 w-px bg-gray-700 z-20"></div>

            <div
              class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-[#0b0f19] via-[#0b0f19]/20 to-transparent z-10"
            ></div>

            <div class="relative flex flex-col gap-4 z-30">
              <h2
                class="text-2xl lg:text-3xl font-extrabold text-[#e5aa56] uppercase leading-tight"
              >
                <?php echo $international_cooperation_section['title']; ?>
              </h2>
              <p
                class="text-sm lg:text-base text-gray-300 font-medium leading-relaxed lg:w-[60%]"
              >
                <?php echo $international_cooperation_section['content']; ?>
              </p>
            </div>

            <div class="relative z-30">
              <a
                href="<?php echo $international_cooperation_section['button']['endpoint']; ?>"
                class="w-full lg:w-fit inline-flex items-center justify-center gap-1.5 bg-[#e5aa56] hover:bg-[#f5b862] text-black text-xs lg:text-sm font-bold uppercase py-3 px-8 rounded-lg transition-colors shadow-lg shadow-[#e5aa56]/10"
              >
                <?php echo $international_cooperation_section['button']['text']; ?>
              </a>
            </div>
          </div>
        </div>
      </div>

      <script>
        (() => {
          const statsData = <?php 
            $formatted_stats = [];
            if (!empty($international_cooperation_section['stats'])) {
                 foreach ($international_cooperation_section['stats'] as $stat) {
                    $formatted_stats[] = [
                        'icon' => $stat['icon'],
                        'text_1'  => $stat['text_1'],
                        'text_2'  => $stat['text_2'],
                    ];
                }
            }
            echo json_encode($formatted_stats);
            ?>;

          const grid = document.getElementById("vtalk-stats-grid");
          if (grid) {
            grid.innerHTML = statsData
              .map(
                (stat) => `
      <div class="flex flex-col items-center justify-center text-center group">
        <div class="mb-1 flex items-center justify-center size-12 select-none">
          <img src="${stat.icon}" alt="${stat.text_2}" class="max-h-full max-w-full object-cover" onerror="this.style.display='none';" />
        </div>
        <div class="text-xl lg:text-2xl font-extrabold text-[#e5aa56] leading-tight mb-1">${stat.text_1}</div>
        <p class="text-xs text-gray-400 font-medium leading-relaxed">${stat.text_2}</p>
      </div>
        `,
              )
              .join("");
          }
        })();
      </script>
    </section>

    <!-- ═══════════════════════════════════════════════════ -->
    <!-- Active Image Section -->
    <!-- ═══════════════════════════════════════════════════ -->
    <section
      class="bg-[#03070c] py-6 px-6 lg:px-16 border-t border-solid border-white/5 font-['Be_Vietnam_Pro',sans-serif]"
    >
      <div
        class="flex flex-col lg:flex-row gap-3 justify-between items-center mb-6"
      >
        <h2 class="text-2xl font-bold text-gray-200 uppercase">
          <?php echo $active_image_section['title']; ?>
        </h2>
        <a
          href="#"
          class="text-sm text-[#e5aa56] font-medium flex items-center gap-1 transition-colors group"
        >
          <span class="group-hover:underline">Xem tất cả</span>
          <svg
            class="size-2.5 fill-current"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
          >
            <path
              d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224H40c-17.7 0-32 14.3-32 32s14.3 32 32 32h362.7L265.4 413.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
            />
          </svg>
        </a>
      </div>

      <div class="flex items-center mx-auto relative group px-8 lg:px-12">
        <button
          class="absolute left-0 lg:left-2 z-10 bg-black/40 text-white/50 hover:text-[#d2ab7b] size-8 lg:size-10 flex items-center justify-center cursor-pointer text-xl lg:text-2xl rounded-full transition-colors duration-200"
          id="actPrev"
        >
          &#8249;
        </button>

        <div class="overflow-hidden flex-1 w-full" id="actViewport">
          <div
            class="flex items-center transition-transform duration-[0.4s] ease-out will-change-transform"
            id="actTrack"
          ></div>
        </div>

        <button
          class="absolute right-0 lg:right-2 z-10 bg-black/40 text-white/50 hover:text-[#d2ab7b] size-8 lg:size-10 flex items-center justify-center cursor-pointer text-xl lg:text-2xl rounded-full transition-colors duration-200"
          id="actNext"
        >
          &#8250;
        </button>
      </div>

      <script>
        const ACTIVITIES = <?php 
            $formatted_images = [];
            if (!empty($active_image_section['images'])) {
                 foreach ($active_image_section['images'] as $image) {
                    $formatted_images[] = [
                        'image' => $image['image'],
                    ];
                }
            }
            echo json_encode($formatted_images);
            ?>;

        (function () {
          const track = document.getElementById("actTrack");
          if (!track || !ACTIVITIES.length) return;

          function getLayout() {
            const w = window.innerWidth;
            if (w < 640) return { perPage: 1, gap: 12 };
            if (w < 1024) return { perPage: 3, gap: 16 };
            return { perPage: 5, gap: 16 };
          }

          const cloneBefore = [...ACTIVITIES, ...ACTIVITIES];
          const cloneAfter = [...ACTIVITIES, ...ACTIVITIES];
          const extendedActivities = [
            ...cloneBefore,
            ...ACTIVITIES,
            ...cloneAfter,
          ];

          track.innerHTML = extendedActivities
            .map(
              (act) => `
            <div class="act-item shrink-0 px-1 select-none">
              <div class="relative aspect-[14/10] w-full rounded-lg overflow-hidden group/item cursor-pointer border border-white/5 bg-neutral-900">
                <img class="w-full h-full object-cover transition-transform duration-500 group-hover/item:scale-105" src="${act.image}" alt="Activity">
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

            if (idx >= cloneBeforeCount + ACTIVITIES.length) {
              idx = idx - ACTIVITIES.length;
              update(false);
            } else if (idx < cloneBeforeCount) {
              idx = idx + ACTIVITIES.length;
              update(false);
            }
          });

          document.getElementById("actPrev").addEventListener("click", () => {
            if (isTransitioning) return;
            idx--;
            update();
          });

          document.getElementById("actNext").addEventListener("click", () => {
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

    <!-- ═══════════════════════════════════════════════════ -->
    <!-- Testimonials Section -->
    <!-- ═══════════════════════════════════════════════════ -->
    <section
      class="bg-[#03070c] py-6 lg:py-10 px-6 lg:px-16 border-t border-solid border-white/5 font-['Be_Vietnam_Pro',sans-serif]"
    >
      <div
        class="flex flex-col sm:flex-row gap-3 justify-between items-center mb-6"
      >
        <h2 class="text-xl lg:text-2xl font-bold text-gray-200 uppercase">
          <?php echo $testimonials_section['title']; ?>
        </h2>
        <a
          href="#"
          class="text-sm text-[#e5aa56] font-medium flex items-center gap-1 transition-colors group"
        >
          <span class="group-hover:underline">Xem tất cả đánh giá</span>
          <svg
            class="size-3 fill-current"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
          >
            <path
              d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224H40c-17.7 0-32 14.3-32 32s14.3 32 32 32h362.7L265.4 413.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
            />
          </svg>
        </a>
      </div>

      <div class="flex items-center mx-auto relative group px-6 lg:px-10">
        <button
          class="absolute left-0 z-10 text-white/40 hover:text-[#d2ab7b] size-8 flex items-center justify-center cursor-pointer text-2xl transition-colors duration-200"
          id="reviewPrev"
        >
          &#8249;
        </button>

        <div class="overflow-hidden flex-1 w-full" id="reviewViewport">
          <div
            class="flex items-stretch transition-transform duration-[0.4s] ease-out will-change-transform"
            id="reviewTrack"
          ></div>
        </div>

        <button
          class="absolute right-0 z-10 text-white/40 hover:text-[#d2ab7b] size-8 flex items-center justify-center cursor-pointer text-2xl transition-colors duration-200"
          id="reviewNext"
        >
          &#8250;
        </button>
      </div>

      <script>
        const REVIEWS = <?php 
            $formatted_reviews = [];
            if (!empty($testimonials_section['students'])) {
                 foreach ($testimonials_section['students'] as $student) {
                    $formatted_reviews[] = [
                        'rating' => $student['rating'],
                        'avatar' => $student['avatar'],
                        'name' => $student['name'],
                        'role' => $student['role'],
                        'quote' => $student['quote'],
                    ];
                }
            }
            echo json_encode($formatted_reviews);
            ?>;

        (function () {
          const track = document.getElementById("reviewTrack");
          if (!track || !REVIEWS.length) return;

          function getLayout() {
            const w = window.innerWidth;
            if (w < 640) return { perPage: 1, gap: 12 };
            if (w < 1024) return { perPage: 2, gap: 16 };
            return { perPage: 4, gap: 16 };
          }

          function generateStars(rating) {
            let starsHtml = "";
            for (let i = 0; i < 5; i++) {
              starsHtml += `
            <svg class="size-4 ${i < rating ? "text-[#e5aa56]" : "text-gray-600"} fill-current" viewBox="0 0 24 24">
              <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
            </svg>
          `;
            }
            return starsHtml;
          }

          const cloneBefore = [...REVIEWS, ...REVIEWS];
          const cloneAfter = [...REVIEWS, ...REVIEWS];
          const extendedReviews = [...cloneBefore, ...REVIEWS, ...cloneAfter];

          track.innerHTML = extendedReviews
            .map(
              (rev) => `
        <div class="review-item shrink-0 select-none box-border flex">
          <div class="w-full rounded-xl p-5 border border-white/10 bg-[#070d14] flex flex-col justify-between gap-4">
            <div>
              <div class="flex items-center gap-0.5 mb-3">
                ${generateStars(rev.rating)}
              </div>
              <p class="text-[13px] lg:text-sm text-gray-300 leading-relaxed font-normal">
                ${rev.quote}
              </p>
            </div>
            <div class="flex items-center gap-3 pt-2">
              <img class="size-10 rounded-full object-cover border border-white/10 shrink-0" src="${rev.avatar}" alt="${rev.name}">
              <div class="overflow-hidden">
                <h4 class="text-sm font-semibold text-gray-200 truncate">${rev.name}</h4>
                <p class="text-xs text-gray-400 truncate mt-0.5">${rev.role}</p>
              </div>
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

            if (idx >= cloneBeforeCount + REVIEWS.length) {
              idx = idx - REVIEWS.length;
              update(false);
            } else if (idx < cloneBeforeCount) {
              idx = idx + REVIEWS.length;
              update(false);
            }
          });

          document
            .getElementById("reviewPrev")
            .addEventListener("click", () => {
              if (isTransitioning) return;
              idx--;
              update();
            });

          document
            .getElementById("reviewNext")
            .addEventListener("click", () => {
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
  </body>
</html>

<?php

get_footer();