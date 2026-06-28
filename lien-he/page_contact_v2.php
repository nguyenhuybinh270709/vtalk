<?php
/**
 * Template Name: Contact V2
 *
 * @since 1.0.0
 * @author ...
 */

get_header();

$hero_section = get_field('hero_section');
$contact_info_section = get_field('contact_info_section');
$contact_form_section = get_field('contact_form_section');
$faq_section = get_field('faq_section');
?>

<!doctype html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact - VTALK Academy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        important: true,
        theme: {
          extend: {
            colors: {
              gold: "#e5aa56",
            },
          },
        },
      };
    </script>
    <link
      href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        background-color: #0d0d1a !important;
        color: #fff !important;
        font-family: "Be Vietnam Pro", sans-serif !important;
      }
      input,
      textarea,
      select {
        background-color: #142132 !important;
        border: 1px solid #2a2a40 !important;
        color: #fff !important;
        outline: none !important;
      }
      input::placeholder,
      textarea::placeholder {
        color: #6b7280 !important;
      }
      select option {
        background-color: #142132 !important;
        color: #fff !important;
      }
      input:focus,
      textarea:focus,
      select:focus {
        border-color: #e5aa56 !important;
        box-shadow: 0 0 0 1px #e5aa56 !important;
      }
    </style>
  </head>
  <body class="bg-[#0d0d1a] text-white">
    <!-- Hero Section -->
    <section
      class="relative overflow-hidden bg-[#0b0f19] min-h-[340px] lg:min-h-screen"
    >
      <div class="absolute inset-0">
        <img
          src="<?php echo $hero_section['background_image']; ?>"
          alt="Hero Image"
          class="hidden lg:block w-full h-full object-fill"
        />
        <div
          class="absolute inset-0 bg-gradient-to-r from-[#0b0f19] via-[#0b0f19]/20 to-transparent"
        ></div>
      </div>
      <div
        class="relative mx-auto px-6 lg:px-20 py-16 lg:py-24 flex flex-col lg:flex-row items-start lg:items-center gap-10"
      >
        <div class="flex-1">
          <div class="mb-4 lg:mb-8">
            <p class="text-2xl sm:text-3xl font-bold uppercase text-white mb-3">
              <?php echo $hero_section['title']['text_1']; ?>
            </p>
            <h1>
              <span
                class="block text-2xl sm:text-4xl font-extrabold leading-tight mb-3"
              >
                <?php echo $hero_section['title']['text_2']; ?>
              </span>
              <span
                class="block text-2xl sm:text-4xl font-black leading-tight text-[#e5aa56]"
              >
                <?php echo $hero_section['title']['text_3']; ?>
              </span>
            </h1>
          </div>
          <p
            class="text-gray-400 text-sm lg:text-base leading-relaxed mb-8 lg:mb-12"
          >
            <?php echo $hero_section['content']; ?>
          </p>
          <div class="grid grid-cols-2 gap-4">
            <div id="hero-features"></div>
          </div>
        </div>
        <div class="hidden lg:flex flex-1 justify-center items-center"></div>
      </div>

      <script>
        const heroFeatures = <?php 
          $formatted_stats = [];
          if (!empty($hero_section['stats'])) {
              foreach ($hero_section['stats'] as $hero) {
                  $formatted_stats[] = [
                      'icon' => $hero['icon'],
                      'text_1'  => $hero['text_1'],
                      'text_2'  => $hero['text_2'],
                  ];
              }
          }
          echo json_encode($formatted_stats);
        ?>;

        document.getElementById("hero-features").outerHTML =
          `<div class="col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-4 mx-auto sm:mx-0">` +
          heroFeatures
            .map(
              (f) => `
          <div class="flex items-start gap-4 sm:gap-3">
            <img src="${f.icon}" class="size-10 sm:size-8 mt-0.5 flex-shrink-0" alt="${f.text_1}" onerror="this.src='https://img.icons8.com/ios/50/e5aa56/star.png'" />
            <div>
              <div class="font-semibold text-base lg:text-sm text-white">${f.text_1}</div>
              <div class="text-sm lg:text-xs text-gray-400">${f.text_2}</div>
            </div>
          </div>
        `,
            )
            .join("") +
          `</div>`;
      </script>
    </section>

    <!-- Contact Info Section -->
    <section class="bg-[#071321] py-12 lg:py-16">
      <div class="mx-auto px-6 lg:px-20">
        <h2 class="text-2xl sm:text-3xl lg:text-3xl font-bold text-white mb-10 uppercase text-center lg:text-left">
          <?php echo $contact_info_section['title']; ?>
        </h2>
        <div class="flex flex-col lg:flex-row gap-8">
          <div class="flex flex-col gap-4 w-full lg:w-[30%] flex-shrink-0">
            <div id="contact-info-list"></div>
          </div>
          <div class="flex flex-col gap-4 w-full">
            <div class="flex flex-col lg:flex-row gap-3">
              <select id="select-tinh" class="flex-1 bg-[#0e1e30] text-white border border-white/20 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-[#e5aa56] cursor-pointer">
                <option value="">--- Chọn tỉnh/thành ---</option>
              </select>
              <select id="select-coso" class="flex-1 bg-[#0e1e30] text-white border border-white/20 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-[#e5aa56] cursor-pointer" disabled>
                <option value="">--- Chọn cơ sở ---</option>
              </select>
              <button id="btn-chon" class="bg-[#e5aa56] hover:bg-[#d4993f] text-[#071321] font-bold px-8 py-3 rounded-lg text-base transition-colors whitespace-nowrap">
                Chọn
              </button>
            </div>
            <div class="flex flex-col lg:flex-row gap-4">
              <div class="flex-1 flex w-full rounded-2xl overflow-hidden min-h-[200px] lg:min-h-[455px] shadow-lg border border-white/15">
                <iframe id="map-iframe" src="" class="w-full h-full min-h-[200px] lg:min-h-[435px] block" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div id="branch-info-panel" class="hidden lg:w-[300px] flex-shrink-0 bg-white rounded-2xl p-6 flex flex-col gap-3"></div>
            </div>
          </div>
        </div>
      </div>

      <script>
        <?php
        $formatted_info = [];
        if (!empty($contact_info_section['info'])) {
          foreach ($contact_info_section['info'] as $item) {
            $formatted_info[] = [
              'icon'        => $item['icon'] ?? '',
              'title'       => $item['title'] ?? '',
              'description' => $item['description'] ?? '',
            ];
          }
        }

        $social_media = [];
        if (!empty($contact_info_section['social_media'])) {
          $sm = $contact_info_section['social_media'];
          $social_media = [
            'icon'  => $sm['icon'] ?? '',
            'title' => $sm['title'] ?? '',
            'items' => [],
          ];
          if (!empty($sm['item'])) {
            foreach ($sm['item'] as $s) {
              $social_media['items'][] = [
                'image' => $s['image'] ?? '',
                'link'  => $s['link'] ?? '',
              ];
            }
          }
        }

        $formatted_branches = [];
        if (!empty($contact_info_section['map'])) {
          foreach ($contact_info_section['map'] as $branch) {
            $raw_map_src = $branch['map_src'] ?? '';
            preg_match('/src="([^"]+)"/', $raw_map_src, $matches);
            $map_src = $matches[1] ?? $raw_map_src;

            $formatted_branches[] = [
              'province_city' => $branch['province_city'] ?? '',
              'branch'        => $branch['branch'] ?? '',
              'map_src'       => $map_src,
              'content'       => [
                'title'   => $branch['content']['title'] ?? '',
                'address' => $branch['content']['address'] ?? '',
                'phone'   => $branch['content']['phone'] ?? '',
                'email'   => $branch['content']['email'] ?? '',
              ],
            ];
          }
        }
        ?>

        const contactInfoItems = <?php echo json_encode($formatted_info); ?>;
        const socialMedia = <?php echo json_encode($social_media); ?>;
        const branches = <?php echo json_encode($formatted_branches); ?>;

        const tinhGroups = {};
        branches.forEach((b, index) => {
          const key = b.province_city;
          if (!tinhGroups[key]) tinhGroups[key] = { label: b.province_city, branches: [] };
          tinhGroups[key].branches.push({ ...b, id: 'branch-' + index });
        });

        const selectTinh = document.getElementById("select-tinh");
        const selectCoso = document.getElementById("select-coso");
        const btnChon = document.getElementById("btn-chon");
        const mapIframe = document.getElementById("map-iframe");
        const branchPanel = document.getElementById("branch-info-panel");

        Object.entries(tinhGroups).forEach(([key, val]) => {
          const opt = document.createElement("option");
          opt.value = key;
          opt.textContent = val.label;
          selectTinh.appendChild(opt);
        });

        selectTinh.addEventListener("change", function () {
          selectCoso.innerHTML = '<option value="">--- Chọn cơ sở ---</option>';
          selectCoso.disabled = true;
          branchPanel.classList.add("hidden");
          if (!this.value) return;
          const group = tinhGroups[this.value];
          if (!group) return;
          group.branches.forEach((b) => {
            const opt = document.createElement("option");
            opt.value = b.id;
            opt.textContent = b.branch;
            selectCoso.appendChild(opt);
          });
          selectCoso.disabled = false;
        });

        const allBranchesWithId = [];
        Object.values(tinhGroups).forEach(group => {
          group.branches.forEach(b => allBranchesWithId.push(b));
        });

        function showBranch(branch) {
          mapIframe.src = branch.map_src;
          branchPanel.innerHTML = `
            <div class="font-bold text-[#071321] text-base mb-1">${branch.content.title}</div>
            <hr class="border-gray-200 my-1"/>
            <div class="text-sm text-gray-700 leading-relaxed">${branch.content.address}</div>
            <div class="text-sm text-gray-700 mt-2">Tel: <span class="font-medium">${branch.content.phone}</span></div>
            <div class="text-sm text-gray-700 mt-1">Email: <a href="mailto:${branch.content.email}" class="text-red-500 hover:underline">${branch.content.email}</a></div>
          `;
          branchPanel.classList.remove("hidden");
        }

        btnChon.addEventListener("click", function () {
          const cosoId = selectCoso.value;
          if (!cosoId) return;
          const branch = allBranchesWithId.find((b) => b.id === cosoId);
          if (branch) showBranch(branch);
        });

        selectCoso.addEventListener("change", function () {
          if (!this.value) {
            branchPanel.classList.add("hidden");
            return;
          }
          const branch = allBranchesWithId.find((b) => b.id === this.value);
          if (branch) showBranch(branch);
        });

        const contactListEl = document.getElementById("contact-info-list");
        const socialRow = socialMedia.items ? `
          <div class="flex items-center gap-4 bg-[#071324] rounded-lg border border-white/15 p-4">
            <div class="size-10 rounded-full bg-[#1a1a30] flex items-center justify-center flex-shrink-0">
              <img src="${socialMedia.icon}" class="size-8" alt="${socialMedia.title}" onerror="this.src='https://img.icons8.com/ios/50/e5aa56/star.png'" />
            </div>
            <div>
              <div class="text-sm text-gray-400 mb-2">${socialMedia.title}</div>
              <div class="flex gap-4 mt-3">
                ${socialMedia.items.map(s => `<a href="${s.link}" target="_blank"><img src="${s.image}" class="w-6 h-6" alt="" onerror="this.src='https://img.icons8.com/ios/50/e5aa56/star.png'" /></a>`).join('')}
              </div>
            </div>
          </div>
        ` : '';

        contactListEl.outerHTML =
          contactInfoItems.map(item => `
            <div class="flex items-center gap-4 bg-[#071324] rounded-lg border border-white/15 p-4">
              <div class="size-10 rounded-full bg-[#1a1a30] flex items-center justify-center flex-shrink-0">
                <img src="${item.icon}" class="size-8" alt="${item.title}" onerror="this.src='https://img.icons8.com/ios/50/e5aa56/star.png'" />
              </div>
              <div>
                <div class="text-sm text-gray-400 mb-2">${item.title}</div>
                <div class="text-sm text-white font-medium">${item.description}</div>
              </div>
            </div>
          `).join('') + socialRow;
      </script>
    </section>

    <!-- Contact Form Section -->
    <section class="bg-[#030e20] py-12 lg:py-16">
      <div class="mx-auto px-6 lg:px-20">
        <h2
          class="text-2xl sm:text-3xl lg:text-3xl font-bold text-white mb-3 uppercase text-center lg:text-left"
        >
          <?php echo $contact_form_section['title']; ?>
        </h2>
        <p class="text-gray-400 text-base mb-10 text-center lg:text-left">
          <?php echo $contact_form_section['description']; ?>
        </p>
        <div class="flex flex-col lg:flex-row gap-8">
          <div
            class="bg-[#010d1d] flex-1 border border-white/15 rounded-md p-6 lg:p-8"
          >
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-5">
              <div>
                <label class="block text-sm font-semibold mb-2"
                  >Họ và tên <span class="text-[#e5aa56]">*</span></label
                >
                <input
                  type="text"
                  placeholder="Nhập họ và tên của bạn"
                  class="w-full rounded-lg px-4 py-3 text-sm"
                />
              </div>
              <div>
                <label class="block text-sm font-semibold mb-2"
                  >Số điện thoại <span class="text-[#e5aa56]">*</span></label
                >
                <input
                  type="tel"
                  placeholder="Nhập số điện thoại"
                  class="w-full rounded-lg px-4 py-3 text-sm"
                />
              </div>
            </div>
            <div class="mb-5">
              <label class="block text-sm font-semibold mb-2">Email</label>
              <input
                type="email"
                placeholder="Nhập email của bạn"
                class="w-full rounded-lg px-4 py-3 text-sm"
              />
            </div>
            <div class="mb-5">
              <label class="block text-sm font-semibold mb-2">
                Nhu cầu kết nối
                <span class="text-[#e5aa56]">*</span>
              </label>

              <div class="relative">
                <select 
                  id="nhu-cau-select"
                  class="w-full rounded-lg px-4 py-3 text-sm appearance-none cursor-pointer text-white border border-gray-700 pr-10"
                >
                  <option value="">Chọn nhu cầu kết nối</option>
                  <script>
                    const optionData = <?php 
                      $formatted_options = [];
                      if (!empty($contact_form_section['form']['select_options'])) {
                          foreach ($contact_form_section['form']['select_options'] as $option) {
                              $formatted_options[] = [
                                  'option' => $option['option'],
                              ];
                          }
                      }
                      echo json_encode($formatted_options);
                    ?>;
                    const selectElement = document.getElementById('nhu-cau-select');

                    const optionsHtml = optionData.map(item => {
                      return `<option value="${item.option}">${item.option}</option>`;
                    }).join('');

                    selectElement.innerHTML += optionsHtml;
                  </script>
                </select>

                <div
                  class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400"
                >
                  <svg
                    class="fill-current h-4 w-4"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="mb-6">
              <label class="block text-sm font-semibold mb-2"
                >Nội dung cần tư vấn
                <span class="text-[#e5aa56]">*</span></label
              >
              <textarea
                rows="5"
                placeholder="Nhập nội dung bạn cần tư vấn..."
                class="w-full rounded-lg px-4 py-3 text-sm resize-none"
              ></textarea>
            </div>
            <button
              class="w-full bg-[#e5aa56] hover:bg-[#d49840] text-[#0d0d1a] font-black text-base uppercase py-4 rounded-lg flex items-center justify-center gap-3 transition-colors duration-200"
            >
              GỬI YÊU CẦU TƯ VẤN
              <img
                src="https://img.icons8.com/ios-filled/50/0d0d1a/sent.png"
                class="w-5 h-5"
                alt="send"
                onerror="this.style.display = 'none'"
              />
            </button>
          </div>
          <div
            class="bg-[#010d1d] w-full lg:w-[35%] flex-shrink-0 border border-white/15 p-6 lg:p-8 rounded-md"
          >
            <div
              class="font-bold text-2xl sm:text-3xl lg:text-base mb-5 text-center lg:text-left"
            >
              <?php echo $contact_form_section['contact_method']['title']; ?>
            </div>
            <div id="contact-channels" class="flex flex-col gap-3"></div>
          </div>
        </div>
      </div>

      <script>
        const channels = <?php 
          $formatted_chanels = [];
          if (!empty($contact_form_section['contact_method']['methods'])) {
              foreach ($contact_form_section['contact_method']['methods'] as $method) {
                  $formatted_chanels[] = [
                      'icon' => $method['icon'],
                      'title'  => $method['title'],
                      'description'  => $method['description'],
                      'link'  => $method['link'],
                  ];
              }
          }
          echo json_encode($formatted_chanels);
        ?>;

        document.getElementById("contact-channels").innerHTML = channels
          .map(
            (c) => `
        <a href="${c.link}" class="flex items-center gap-4 bg-[#051524] hover:bg-[#061c30] rounded-xl px-4 py-4 cursor-pointer transition-colors duration-200 group">
          <div class="size-12 bg-[#051121] rounded-full flex items-center justify-center flex-shrink-0">
            <img src="${c.icon}" class="size-8" alt="${c.title}" onerror="this.src='https://img.icons8.com/ios/50/e5aa56/star.png'" />
          </div>
          <div class="flex-1 min-w-0">
            <div class="text-sm font-bold text-white leading-tight">${c.title}</div>
            <div class="text-xs text-gray-400 mt-0.5 leading-snug">${c.description}</div>
          </div>
          <svg class="w-4 h-4 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </a>
      `,
          )
          .join("");
      </script>
    </section>

    <!-- FAQ Section -->
    <section class="bg-[#030e20] py-12 lg:py-16">
      <div class="mx-auto px-6 lg:px-16">
        <h2
          class="text-2xl sm:text-3xl lg:text-3xl font-bold text-white mb-10 uppercase text-center lg:text-left"
        >
          <?php echo $faq_section['title']; ?>
        </h2>
        <div class="flex flex-col sm:flex-row gap-4 items-start">
          <div id="faq-col-1" class="w-full flex flex-col gap-4"></div>
          <div id="faq-col-2" class="w-full flex flex-col gap-4"></div>
        </div>
      </div>

      <style>
        .faq-scrollbar::-webkit-scrollbar {
          width: 5px;
        }
        .faq-scrollbar::-webkit-scrollbar-track {
          background: #111c2d;
        }
        .faq-scrollbar::-webkit-scrollbar-thumb {
          background: #e5aa56/30;
          border-radius: 99px;
        }
        .faq-scrollbar::-webkit-scrollbar-thumb:hover {
          background: #e5aa56;
        }
      </style>

      <script>
        const faqs = <?php 
          $formatted_faqs = [];
          if (!empty($faq_section['items'])) {
              foreach ($faq_section['items'] as $item) {
                  $formatted_faqs[] = [
                      'question' => $item['question'],
                      'answer'  => $item['answer'],
                  ];
              }
          }
          echo json_encode($formatted_faqs);
        ?>;

        const renderFaqItem = (faq, i) => `
      <div class="border border-white/15 rounded-md overflow-hidden bg-[#111c2d]">
        <button onclick="toggleFaq(${i})" class="w-full flex items-center justify-between px-5 py-4 text-left hover:bg-[#111c2d]/70 transition-colors duration-200 gap-4">
          <span class="font-semibold text-sm text-white">${faq.question}</span>
          <svg id="faq-icon-${i}" class="w-5 h-5 text-[#e5aa56] flex-shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div id="faq-body-${i}" style="max-height: 0px;" class="overflow-hidden transition-all duration-200 ease-in-out">
          <div class="px-5 pb-4 text-sm text-white leading-relaxed border-t border-white/15 pt-3 max-h-[180px] overflow-y-auto faq-scrollbar">
            ${faq.answer}
          </div>
        </div>
      </div>
    `;

        const col1Html = faqs
          .filter((_, i) => i % 2 === 0)
          .map((faq, i) => renderFaqItem(faq, i * 2))
          .join("");
        const col2Html = faqs
          .filter((_, i) => i % 2 !== 0)
          .map((faq, i) => renderFaqItem(faq, i * 2 + 1))
          .join("");

        document.getElementById("faq-col-1").innerHTML = col1Html;
        document.getElementById("faq-col-2").innerHTML = col2Html;

        function toggleFaq(i) {
          const body = document.getElementById("faq-body-" + i);
          const icon = document.getElementById("faq-icon-" + i);

          if (body.style.maxHeight === "0px" || !body.style.maxHeight) {
            body.style.maxHeight = body.scrollHeight + "px";
            icon.style.transform = "rotate(180deg)";
          } else {
            body.style.maxHeight = "0px";
            icon.style.transform = "";
          }
        }
      </script>
    </section>
  </body>
</html>

<?php

get_footer();