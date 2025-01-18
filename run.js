// Nomor WhatsApp tujuan
const whatsappNumber = "081931951011"; // Ganti dengan nomor tujuan

// Pesan yang akan dikirim
const message = `Halo, berikut adalah informasi mobil:
- Nama: ${name}
- Nomor Telepon: ${phone}
- Tanggal: ${date}
- Jam Bertemu: ${time}
- Problem pada Mobil: ${problem}`;

// Tautan lengkap ke WhatsApp
const whatsappLink = https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}&app_absent=0;

// Redirect pengguna ke WhatsApp
window.location.href = whatsappLink;