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
