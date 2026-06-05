<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Management - The Studio DiScrap</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-handwriting { font-family: 'Dancing Script', cursive; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800">

    <div class="flex h-screen overflow-hidden">
        <!-- SIDEBAR -->
        <aside class="w-64 bg-white border-r border-sky-100 flex flex-col shadow-sm">
            <div class="p-6">
                <h1 class="text-3xl font-handwriting text-sky-500">DiScrap</h1>
                <p class="text-xs text-sky-300 font-semibold uppercase tracking-widest mt-1">The Studio</p>
            </div>
            
            <nav class="flex-1 px-4 space-y-2">
                <a href="Dashboard .html" class="flex items-center space-x-3 text-slate-500 hover:bg-sky-50 hover:text-sky-600 px-4 py-3 rounded-xl transition">
                    <span>🏠</span>
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="Scrapbook-Editor.html" class="flex items-center space-x-3 text-slate-500 hover:bg-sky-50 hover:text-sky-600 px-4 py-3 rounded-xl transition">
                    <span>🎨</span>
                    <span class="font-medium">Scrapbook Editor</span>
                </a>
                <a href="#" class="flex items-center space-x-3 bg-sky-50 text-sky-600 px-4 py-3 rounded-xl transition">
                    <span>👥</span>
                    <span class="font-medium">Guest Management</span>
                </a>
                <a href="Settings.html" class="flex items-center space-x-3 text-slate-500 hover:bg-sky-50 hover:text-sky-600 px-4 py-3 rounded-xl transition">
                    <span>⚙️</span>
                    <span class="font-medium">Settings</span>
                </a>
            </nav>

            <div class="p-6 border-t border-sky-50">
                <div class="bg-sky-500 text-white p-4 rounded-2xl text-center shadow-lg shadow-sky-200">
                    <p class="text-xs font-semibold uppercase">Status Proyek</p>
                    <p class="text-lg font-handwriting mt-1">Live & Terang</p>
                </div>
            </div>
        </aside>

        <main class="flex-1 flex flex-col overflow-y-auto">
            <header class="bg-white/80 backdrop-blur-md border-b border-sky-100 p-6 flex justify-between items-center sticky top-0 z-20">
                <div>
                    <h2 class="text-xl font-semibold text-slate-700">Guest Management 👥</h2>
                    <p class="text-sm text-slate-400">Kelola tamu yang berpartisipasi dalam scrapbook.</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button onclick="openInviteModal()" class="bg-sky-500 text-white px-6 py-2 rounded-full text-sm font-medium hover:bg-sky-600 shadow-md">+ Undang Tamu</button>
                </div>
            </header>

            <div class="p-8">
                <!-- Stats Cards -->
                <div class="grid grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-sky-50">
                        <p class="text-slate-400 text-sm font-medium">Total Tamu</p>
                        <h3 class="text-4xl font-semibold text-slate-700 mt-2 count-guests">45</h3>
                        <p class="text-sky-500 text-xs mt-2 font-bold">+5 minggu ini</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-sky-50">
                        <p class="text-slate-400 text-sm font-medium">Sudah Kontribusi</p>
                        <h3 class="text-4xl font-semibold text-slate-700 mt-2 count-contributed">32</h3>
                        <p class="text-emerald-500 text-xs mt-2 font-bold">71% dari total</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-sky-50">
                        <p class="text-slate-400 text-sm font-medium">Foto Diterima</p>
                        <h3 class="text-4xl font-semibold text-slate-700 mt-2 count-photos">128</h3>
                        <p class="text-sky-500 text-xs mt-2 font-bold">Rata-rata 4 foto/tamu</p>
                    </div>
                </div>

                <!-- Guest List -->
                <div class="bg-white rounded-3xl shadow-sm border border-sky-50 p-8">
                    <h3 class="text-2xl font-semibold text-slate-700 mb-6">Daftar Tamu</h3>
                    
                    <!-- Search & Filter -->
                    <div class="flex gap-4 mb-6">
                        <input type="text" placeholder="Cari nama atau email..." id="searchGuest" class="flex-1 px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                        <select id="filterGuest" class="px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                            <option value="">Semua Status</option>
                            <option value="contributed">Sudah Kontribusi</option>
                            <option value="pending">Pending</option>
                            <option value="declined">Ditolak</option>
                        </select>
                    </div>

                    <!-- Guest Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b-2 border-sky-100">
                                    <th class="text-left py-3 px-4 font-semibold text-slate-600">Nama</th>
                                    <th class="text-left py-3 px-4 font-semibold text-slate-600">Email</th>
                                    <th class="text-left py-3 px-4 font-semibold text-slate-600">Foto</th>
                                    <th class="text-left py-3 px-4 font-semibold text-slate-600">Status</th>
                                    <th class="text-left py-3 px-4 font-semibold text-slate-600">Tgl Bergabung</th>
                                    <th class="text-center py-3 px-4 font-semibold text-slate-600">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="guestTableBody">
                                <!-- Guests akan ditambahkan di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Invite Modal -->
    <div id="inviteModal" class="hidden fixed inset-0 bg-black/30 flex items-center justify-center z-50">
        <div class="bg-white rounded-3xl p-8 max-w-md w-full shadow-xl">
            <h3 class="text-2xl font-handwriting text-slate-700 mb-4">Undang Tamu</h3>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-slate-600 mb-2">Nama Lengkap</label>
                    <input type="text" id="guestName" placeholder="Masukkan nama..." class="w-full px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-600 mb-2">Email</label>
                    <input type="email" id="guestEmail" placeholder="Masukkan email..." class="w-full px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-600 mb-2">Kategori</label>
                    <select id="guestCategory" class="w-full px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                        <option value="friend">Teman Sekelas</option>
                        <option value="family">Keluarga</option>
                        <option value="teacher">Guru</option>
                        <option value="other">Lainnya</option>
                    </select>
                </div>
            </div>

            <div class="flex gap-4 mt-6">
                <button onclick="closeInviteModal()" class="flex-1 px-4 py-3 border border-sky-200 text-sky-500 rounded-xl font-semibold hover:bg-sky-50 transition">Batal</button>
                <button onclick="sendInvite()" class="flex-1 px-4 py-3 bg-sky-500 text-white rounded-xl font-semibold hover:bg-sky-600 transition">Kirim Undangan</button>
            </div>
        </div>
    </div>

    <script>
        // Sample data
        const guests = [
            { id: 1, name: 'Budi Santoso', email: 'budi@email.com', photos: 5, status: 'contributed', date: '2026-05-01' },
            { id: 2, name: 'Citra Dewi', email: 'citra@email.com', photos: 3, status: 'contributed', date: '2026-05-02' },
            { id: 3, name: 'Andi Pratama', email: 'andi@email.com', photos: 4, status: 'contributed', date: '2026-05-03' },
            { id: 4, name: 'Siti Nurhaliza', email: 'siti@email.com', photos: 6, status: 'contributed', date: '2026-05-04' },
            { id: 5, name: 'Rara Sekar', email: 'rara@email.com', photos: 0, status: 'pending', date: '2026-05-05' },
            { id: 6, name: 'Jaka Wijaya', email: 'jaka@email.com', photos: 0, status: 'declined', date: '2026-05-06' },
        ];

        function renderGuestTable() {
            const tbody = document.getElementById('guestTableBody');
            tbody.innerHTML = guests.map(guest => {
                const statusBadge = guest.status === 'contributed' 
                    ? '<span class="bg-emerald-100 text-emerald-600 px-3 py-1 rounded-full text-xs font-bold">✓ Sudah</span>'
                    : guest.status === 'pending'
                    ? '<span class="bg-amber-100 text-amber-600 px-3 py-1 rounded-full text-xs font-bold">⏳ Pending</span>'
                    : '<span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-bold">✗ Ditolak</span>';
                
                return `
                    <tr class="border-b border-sky-50 hover:bg-sky-50/30 transition">
                        <td class="py-4 px-4 font-semibold text-slate-700">${guest.name}</td>
                        <td class="py-4 px-4 text-slate-500 text-sm">${guest.email}</td>
                        <td class="py-4 px-4"><span class="bg-sky-100 text-sky-600 px-3 py-1 rounded-full text-sm font-bold">${guest.photos} foto</span></td>
                        <td class="py-4 px-4">${statusBadge}</td>
                        <td class="py-4 px-4 text-slate-500 text-sm">${guest.date}</td>
                        <td class="py-4 px-4 text-center">
                            <button onclick="editGuest(${guest.id})" class="text-sky-500 hover:text-sky-600 font-semibold mr-2">✏️</button>
                            <button onclick="deleteGuest(${guest.id})" class="text-red-500 hover:text-red-600 font-semibold">🗑️</button>
                        </td>
                    </tr>
                `;
            }).join('');
        }

        function openInviteModal() {
            document.getElementById('inviteModal').classList.remove('hidden');
        }

        function closeInviteModal() {
            document.getElementById('inviteModal').classList.add('hidden');
            document.getElementById('guestName').value = '';
            document.getElementById('guestEmail').value = '';
        }

        function sendInvite() {
            const name = document.getElementById('guestName').value;
            const email = document.getElementById('guestEmail').value;
            
            if (!name || !email) {
                alert('Lengkapi semua data terlebih dahulu');
                return;
            }

            guests.push({
                id: guests.length + 1,
                name: name,
                email: email,
                photos: 0,
                status: 'pending',
                date: new Date().toISOString().split('T')[0]
            });

            renderGuestTable();
            closeInviteModal();
            alert('Undangan berhasil dikirim ke ' + email);
        }

        function editGuest(id) {
            alert('Edit fitur untuk tamu ID: ' + id);
        }

        function deleteGuest(id) {
            if (confirm('Hapus tamu ini?')) {
                const index = guests.findIndex(g => g.id === id);
                if (index > -1) {
                    guests.splice(index, 1);
                    renderGuestTable();
                    alert('Tamu berhasil dihapus');
                }
            }
        }

        // Initial render
        renderGuestTable();
    </script>
</body>
</html>
