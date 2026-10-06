const languageSelect = document.querySelector('[data-language-select]');

if (languageSelect) {
    const select = languageSelect.querySelector('#language');
    const toggle = languageSelect.querySelector('[data-language-toggle]');
    const options = languageSelect.querySelector('[data-language-options]');
    const value = languageSelect.querySelector('[data-language-value]');
    const optionButtons = languageSelect.querySelectorAll('[data-language-option]');

    const closeOptions = () => {
        options.classList.add('hidden');
        toggle.setAttribute('aria-expanded', 'false');
    };

    toggle.addEventListener('click', () => {
        const isOpen = !options.classList.contains('hidden');

        options.classList.toggle('hidden', isOpen);
        toggle.setAttribute('aria-expanded', String(!isOpen));
    });

    optionButtons.forEach((option) => {
        option.addEventListener('click', () => {
            select.value = option.dataset.languageOption;
            value.textContent = option.textContent;

            optionButtons.forEach((item) => {
                const isSelected = item === option;

                item.classList.toggle('bg-[#1f1e1d]', isSelected);
                item.classList.toggle('text-white', isSelected);
                item.classList.toggle('bg-[#ebe9e6]', !isSelected);
                item.classList.toggle('text-[#1f1e1d]', !isSelected);
            });

            select.dispatchEvent(new Event('change', { bubbles: true }));
            closeOptions();
        });
    });

    document.addEventListener('click', (event) => {
        if (!languageSelect.contains(event.target)) {
            closeOptions();
        }
    });
}

const menuToggle = document.querySelector('[data-menu-toggle]');
const mobileMenu = document.querySelector('[data-mobile-menu]');

if (menuToggle && mobileMenu) {
    const closeMenu = () => {
        mobileMenu.classList.remove('max-h-[calc(100dvh-75px)]', 'opacity-100', 'pointer-events-auto');
        mobileMenu.classList.add('max-h-0', 'opacity-0', 'pointer-events-none');
        menuToggle.setAttribute('aria-expanded', 'false');
        mobileMenu.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('overflow-hidden');
    };

    const openMenu = () => {
        mobileMenu.classList.remove('max-h-0', 'opacity-0', 'pointer-events-none');
        mobileMenu.classList.add('max-h-[calc(100dvh-75px)]', 'opacity-100', 'pointer-events-auto');
        menuToggle.setAttribute('aria-expanded', 'true');
        mobileMenu.setAttribute('aria-hidden', 'false');
        document.body.classList.add('overflow-hidden');
    };

    menuToggle.addEventListener('click', () => {
        const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';

        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    mobileMenu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('click', (event) => {
        if (!mobileMenu.contains(event.target) && !menuToggle.contains(event.target)) {
            closeMenu();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });
}
