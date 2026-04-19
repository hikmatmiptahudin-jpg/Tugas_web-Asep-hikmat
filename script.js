// 1. Inisialisasi Elemen
const btnMode = document.getElementById("btn-interaksi");
const btnUpdate = document.getElementById("btn-ubah-nama");
const inputNama = document.getElementById("input-nama");
const displayNama = document.getElementById("nama-user");
const kartu = document.querySelector(".card");
const foto = document.querySelector(".profile-img");
const pesanLog = document.getElementById("pesan-log");

// 2. Fungsi Ubah Nama (Materi Input & Logic If/Else)
btnUpdate.addEventListener("click", () => {
    let nilaiInput = inputNama.value;

    if (nilaiInput.trim() === "") {
        alert("Peringatan: Nama tidak boleh kosong!");
    } else {
        // Manipulasi Konten Teks
        displayNama.textContent = nilaiInput;
        
        // Manipulasi HTML & Style via JS
        pesanLog.innerHTML = "Nama berhasil diubah menjadi: <strong>" + nilaiInput + "</strong>";
        pesanLog.style.color = "#27ae60";
        
        // Reset Input
        inputNama.value = "";
    }
});

// 3. Fungsi Dark Mode (Materi ClassList Toggle)
btnMode.addEventListener("click", () => {
    kartu.classList.toggle("dark-mode");

    if (kartu.classList.contains("dark-mode")) {
        btnMode.textContent = "Mode Terang";
        console.log("Info: Mode Gelap Aktif");
    } else {
        btnMode.textContent = "Ubah Mode Tampilan";
        console.log("Info: Mode Terang Aktif");
    }
});

// 4. Fungsi Klik Foto (Materi Alert)
foto.addEventListener("click", () => {
    alert(" ini " + displayNama.textContent + "! Hayoh mau apa kepo?");
});

// 5. Materi Perulangan (Loop) di Console untuk Penilaian
console.log("Sistem Portofolio Siap...");
for (let i = 1; i <= 3; i++) {
    console.log("Inisialisasi tahap " + i + " selesai.");
}