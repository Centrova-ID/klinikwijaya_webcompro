function shrinkRegSymbols() {
    const element = document.getElementById('main-content');
    let html = element.innerHTML;

    // Mengganti semua ® dengan span bergaya khusus
    // g = global (semua karakter), unicode \xAE adalah simbol ®
    html = html.replace(/®/g, '<span class="reg-symbol">®</span>');

    element.innerHTML = html;
}

// Jalankan fungsi
shrinkRegSymbols();