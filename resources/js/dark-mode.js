const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
const themeToggleBtn = document.getElementById('theme-toggle');

// Ensure icons are hidden initially
themeToggleDarkIcon.classList.add('hidden');
themeToggleLightIcon.classList.add('hidden');

// Check the current theme and set the icons
const currentTheme = localStorage.getItem('color-theme');
const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

if (currentTheme === 'dark' || (!currentTheme && prefersDark)) {
    document.documentElement.classList.add('dark');
    themeToggleLightIcon.classList.remove('hidden');
} else {
    document.documentElement.classList.remove('dark');
    themeToggleDarkIcon.classList.remove('hidden');
}

// Create a custom event
const darkModeEvent = new CustomEvent('dark-mode', {
    detail: {
        theme: document.documentElement.classList.contains('dark') ? 'dark' : 'light',
    },
});

// Toggle theme and icons on button click
themeToggleBtn.addEventListener('click', function () {
    const isDarkMode = document.documentElement.classList.toggle('dark');

    // Update the icons
    themeToggleDarkIcon.classList.toggle('hidden', isDarkMode);
    themeToggleLightIcon.classList.toggle('hidden', !isDarkMode);

    // Save the theme preference
    localStorage.setItem('color-theme', isDarkMode ? 'dark' : 'light');

    // Update the event detail
    darkModeEvent.detail.theme = isDarkMode ? 'dark' : 'light';

    // Dispatch the custom event
    document.dispatchEvent(darkModeEvent);
});
