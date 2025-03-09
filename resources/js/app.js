import "./bootstrap";

document.addEventListener("livewire:navigated", () => {
    const theme = localStorage.getItem("darkMode");

    if (theme === "dark") {
        document.documentElement.classList.add("dark");
    } else if (theme === "light") {
        document.documentElement.classList.remove("dark");
    } else {
        // Jika "system", cek preferensi sistem lagi
        if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    }
});
