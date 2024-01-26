document.addEventListener('DOMContentLoaded', () => {
    // Mengambil elemen menu pengaturan
    const pengaturanLink = document.getElementById('pengaturan-link');

    // Mengambil elemen submenu
    const submenu = document.querySelector('.submenu');

    // Menambahkan event listener untuk klik pada menu pengaturan
    pengaturanLink.addEventListener('click', (event) => {
        // Mencegah tindakan default dari link
        event.preventDefault();

        // Menampilkan atau menyembunyikan submenu dengan efek fade
        submenu.style.display = (submenu.style.display === 'block') ? 'none' : 'block';
        submenu.style.opacity = (submenu.style.opacity === '1') ? '0' : '1';
    });
});

const menuToggle = document.querySelector('.menu-toggle input');
const nav =document.querySelector('nav ul');

menuToggle.addEventListener('click', function () {
    nav.classList.toggle('slide');
});