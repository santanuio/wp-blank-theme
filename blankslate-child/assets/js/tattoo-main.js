// navscroll
      // navscroll
      (function () {
        const nav = document.querySelector(".nav--autohide");
        if (!nav) return;

        // Point this at your hero/AFC wrapper element
        const afc = document.querySelector(".afc"); // or '.hero', '.hero-image', etc.

        const SCROLL_UP_THRESHOLD = 8; // px scrolled up before nav reappears

        let activateAfter = afc ? afc.offsetHeight : 150; // fallback if AFC not found
        let lastY = window.scrollY;
        let upDistance = 0;

        // separate flags — resize must never block scroll updates or vice versa
        let scrollTicking = false;
        let resizeTicking = false;

        function onScroll() {
          // skip processing while the mobile menu is open/locked
          const body = document.getElementById("js-body");
          if (body && body.classList.contains("body-fix")) {
            scrollTicking = false;
            return;
          }

          const currentY = window.scrollY;
          const goingDown = currentY > lastY;

          // solid background toggle — reacts to any scroll away from top
          if (currentY > 0) {
            nav.classList.add("nav--solid");
          } else {
            nav.classList.remove("nav--solid");
          }

          // hide/show logic
          if (currentY <= activateAfter) {
            nav.classList.remove("nav--hidden");
            upDistance = 0;
          } else if (goingDown) {
            upDistance = 0;
            nav.classList.add("nav--hidden");
          } else {
            upDistance += lastY - currentY;
            if (upDistance > SCROLL_UP_THRESHOLD) {
              nav.classList.remove("nav--hidden");
            }
          }

          lastY = currentY;
          scrollTicking = false;
        }

        function recalcActivateAfter() {
          if (afc) activateAfter = afc.offsetHeight;
          resizeTicking = false;
        }

        window.addEventListener(
          "scroll",
          function () {
            if (!scrollTicking) {
              requestAnimationFrame(onScroll);
              scrollTicking = true;
            }
          },
          { passive: true },
        );

        window.addEventListener(
          "resize",
          function () {
            if (!resizeTicking) {
              requestAnimationFrame(recalcActivateAfter);
              resizeTicking = true;
            }
          },
          { passive: true },
        );
      })();

      // mobile nav
      function initMobileNav() {
        const hamburgerIcon = document.getElementById("js-hamburger-icon");
        const sideMenu = document.getElementById("js-side-menu");
        const body = document.getElementById("js-body");

        if (!hamburgerIcon || !sideMenu || !body) return; // page doesn't use mobile nav — skip silently

        let scrollPosition = 0;

        function openMenu() {
          scrollPosition = window.scrollY;
          body.style.top = `-${scrollPosition}px`;
          body.classList.add("body-fix");
          hamburgerIcon.classList.add("hamburger-icon--collapse");
          sideMenu.classList.add("o-side-menu--visible");
        }

        function closeMenu(restoreScroll = true) {
          body.classList.remove("body-fix");
          body.style.top = "";
          hamburgerIcon.classList.remove("hamburger-icon--collapse");
          sideMenu.classList.remove("o-side-menu--visible");

          if (restoreScroll) {
            window.scrollTo({
              top: scrollPosition,
              left: 0,
              behavior: "instant",
            });
          }
        }

        hamburgerIcon.addEventListener("click", function () {
          const isOpening = !body.classList.contains("body-fix");
          if (isOpening) {
            openMenu();
          } else {
            closeMenu(true);
          }
        });

        // dropdown toggle
        const dropdownButton = document.getElementById("js-dropdown-button");
        const mobileDropdown = document.getElementById("js-mobile-dropdown");
        const showIcon = document.getElementById("js-show");
        const hideIcon = document.getElementById("js-hide");

        if (dropdownButton && mobileDropdown && showIcon && hideIcon) {
          dropdownButton.addEventListener("click", function () {
            mobileDropdown.classList.toggle(
              "o-side-menu__dropdown-menu--visible",
            );
            showIcon.classList.toggle("o-side-menu__plus--hide");
            hideIcon.classList.toggle("o-side-menu__subs--view");
          });
        }

        // same-page anchor links inside the side menu:
        // close the menu, then scroll to the target section instead of restoring old scroll position
        const menuLinks = sideMenu.querySelectorAll('a[href^="#"]');
        menuLinks.forEach(function (link) {
          link.addEventListener("click", function (e) {
            const href = link.getAttribute("href");

            // skip empty "#" placeholders (Services parent link, Home stub, etc.)
            if (!href || href === "#") return;

            const target = document.querySelector(href);
            if (!target) return; // not a valid in-page target — let it behave as a normal link

            e.preventDefault();
            closeMenu(false); // false = don't restore old scroll position, we're navigating instead

            // wait one frame so the body unlocks (position: fixed removed) before scrolling
            requestAnimationFrame(function () {
              target.scrollIntoView({ behavior: "smooth" });
            });
          });
        });
      }

      // run now if the DOM is already ready, otherwise wait for it — safe against defer/async timing
      if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initMobileNav);
      } else {
        initMobileNav();
      }