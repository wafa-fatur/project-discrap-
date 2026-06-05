<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Studio - DiScrap Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-handwriting { font-family: 'Dancing Script', cursive; }
        .scrapbook-border {
            border-style: dashed;
            border-width: 2px;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800">

    <div class="flex h-screen overflow-hidden">
        <aside class="w-64 bg-white border-r border-sky-100 flex flex-col shadow-sm">
            <div class="p-6">
                <h1 class="text-3xl font-handwriting text-sky-500">DiScrap</h1>
                <p class="text-xs text-sky-300 font-semibold uppercase tracking-widest mt-1">The Studio</p>
            </div>
            
            <nav class="flex-1 px-4 space-y-2">
                <a href="Dashboard .html" class="flex items-center space-x-3 bg-sky-50 text-sky-600 px-4 py-3 rounded-xl transition">
                    <span>🏠</span>
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="Scrapbook-Editor.html" class="flex items-center space-x-3 text-slate-500 hover:bg-sky-50 hover:text-sky-600 px-4 py-3 rounded-xl transition">
                    <span>🎨</span>
                    <span class="font-medium">Scrapbook Editor</span>
                </a>
                <a href="Guest-Management.html" class="flex items-center space-x-3 text-slate-500 hover:bg-sky-50 hover:text-sky-600 px-4 py-3 rounded-xl transition">
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
            <header class="bg-white/80 backdrop-blur-md border-b border-sky-100 p-6 flex justify-between items-center sticky top-0 z-10">
                <div>
                    <h2 class="text-xl font-semibold text-slate-700">Selamat Pagi, Panitia! 👋</h2>
                    <p class="text-sm text-slate-400">Mari susun kepingan kenangan hari ini.</p>
                </div>
                <div class="flex items-center space-x-4">
                    <button onclick="window.open('preview.html','_blank')" class="bg-white border border-sky-200 text-sky-500 px-4 py-2 rounded-full text-sm font-medium hover:bg-sky-50 transition">Preview Web</button>
                    <button class="bg-sky-500 text-white px-6 py-2 rounded-full text-sm font-medium hover:bg-sky-600 shadow-md shadow-sky-100 transition">Publish</button>
                </div>
            </header>

            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-sky-50 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-sky-100 rounded-bl-full -mr-10 -mt-10 transition-transform group-hover:scale-110"></div>
                        <p class="text-slate-400 text-sm font-medium">Total Kenangan</p>
                        <h3 class="text-4xl font-semibold text-slate-700 mt-2">128</h3>
                        <p class="text-sky-500 text-xs mt-2 font-bold">+12 baru hari ini</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-sky-50">
                        <p class="text-slate-400 text-sm font-medium">Kontributor</p>
                        <h3 class="text-4xl font-semibold text-slate-700 mt-2">45</h3>
                        <p class="text-slate-500 text-xs mt-2">Teman sekelas / Tamu</p>
                    </div>
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-sky-50">
                        <p class="text-slate-400 text-sm font-medium">Mode Privasi</p>
                        <div class="flex items-center mt-3 space-x-2">
                            <span class="bg-emerald-100 text-emerald-600 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">🔒 Private</span>
                        </div>
                    </div>
                </div>

                <!-- Saved Designs Section -->
                <div class="bg-white rounded-3xl shadow-sm border border-sky-50 p-8 mb-8">
                    <div class="flex justify-between items-end mb-6">
                        <div>
                            <h3 class="text-2xl font-handwriting text-slate-700">Desain Tersimpan 🎨</h3>
                            <p class="text-sm text-slate-400">Koleksi scrapbook yang sudah dibuat.</p>
                        </div>
                    </div>
                    
                    <div id="designsContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Designs akan ditampilkan di sini -->
                        <div class="text-center py-12">
                            <p class="text-slate-400 text-sm">Belum ada desain tersimpan. <a href="Scrapbook-Editor.html" class="text-sky-500 font-semibold hover:underline">Buat desain baru →</a></p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-sm border border-sky-50 p-8">
                    <div class="flex justify-between items-end mb-6">
                        <div>
                            <h3 class="text-2xl font-handwriting text-slate-700">Quick Edit Scrapbook</h3>
                            <p class="text-sm text-slate-400">Tarik dan atur tata letak Polaroid-mu secara langsung.</p>
                        </div>
                        <a href="#" class="text-sky-500 text-sm font-semibold hover:underline">Buka Editor Penuh &rarr;</a>
                    </div>

                    <div class="bg-sky-50/50 scrapbook-border border-sky-200 rounded-2xl min-h-[400px] p-10 relative overflow-hidden">
                        <div class="absolute top-10 left-10 w-48 bg-white p-2 shadow-lg rotate-3 hover:rotate-0 transition-transform cursor-move group">
                            <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&q=80&w=400" class="w-full grayscale group-hover:grayscale-0 transition">
                            <p class="font-handwriting text-center mt-2 text-slate-500">Tertawa lepas! 📸</p>
                        </div>

                        <div class="absolute bottom-10 right-20 w-48 bg-white p-2 shadow-lg -rotate-6 hover:rotate-0 transition-transform cursor-move group">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=400" class="w-full grayscale group-hover:grayscale-0 transition">
                            <p class="font-handwriting text-center mt-2 text-slate-500">Masa SMA terbaik.</p>
                        </div>

                        <div class="absolute bottom-6 left-6 bg-white/90 backdrop-blur px-4 py-3 rounded-2xl shadow-sm border border-sky-100 flex items-center space-x-3">
                            <div class="w-10 h-10 bg-sky-500 rounded-full flex items-center justify-center text-white animate-spin-slow">
                                🎵
                            </div>
                            <div>
                                <p class="text-[10px] uppercase font-bold text-sky-400 tracking-widest">BGM Aktif</p>
                                <p class="text-xs font-semibold text-slate-600">Laskar Pelangi - Nidji</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <style>
        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .animate-spin-slow {
            animation: spin-slow 8s linear infinite;
        }
    </style>

    <script>
        // Load saved designs on page load
        window.addEventListener('load', loadSavedDesigns);

        function loadSavedDesigns() {
            const designs = JSON.parse(localStorage.getItem('scrapbookDesigns') || '[]');
            const container = document.getElementById('designsContainer');
            
            if (designs.length === 0) {
                container.innerHTML = `
                    <div class="text-center py-12 col-span-full">
                        <p class="text-slate-400 text-sm">Belum ada desain tersimpan. <a href="Scrapbook-Editor.html" class="text-sky-500 font-semibold hover:underline">Buat desain baru →</a></p>
                    </div>
                `;
                return;
            }

            container.innerHTML = designs.map((design, index) => `
                <div class="bg-white rounded-2xl shadow-sm border border-sky-50 overflow-hidden hover:shadow-md transition group cursor-pointer" onclick="viewDesign(${index})">
                    <div class="relative overflow-hidden h-40 bg-gray-100">
                        <img src="${design.image}" alt="${design.title}" class="w-full h-full object-cover group-hover:scale-105 transition">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold text-slate-700 truncate">${design.title}</h4>
                        <p class="text-xs mt-1">${(design.published || design.public) ? '<span class="text-emerald-600 font-semibold">🔓 Published</span>' : '<span class="text-slate-400">🔒 Private</span>'}</p>
                        <p class="text-xs text-slate-400 mt-1">📅 ${design.createdAt}</p>
                        <div class="flex gap-2 mt-4">
                            <button onclick="event.stopPropagation(); editDesign(${index})" class="flex-1 px-3 py-2 bg-sky-100 text-sky-600 rounded-lg text-xs font-semibold hover:bg-sky-200 transition">✏️ Edit</button>
                            <button onclick="event.stopPropagation(); deleteDesign(${index})" class="flex-1 px-3 py-2 bg-red-100 text-red-600 rounded-lg text-xs font-semibold hover:bg-red-200 transition">🗑️ Hapus</button>
                            <button onclick="event.stopPropagation(); togglePrivacy(${index})" class="px-3 py-2 bg-slate-50 text-slate-600 rounded-lg text-xs font-semibold hover:bg-slate-100 transition">🔁 Toggle Privacy</button>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        function editDesign(index) {
            const designs = JSON.parse(localStorage.getItem('scrapbookDesigns') || '[]');
            localStorage.setItem('editingDesignIndex', index);
            localStorage.setItem('editingDesignContent', designs[index].htmlContent);
            localStorage.setItem('editingDesignIsPublished', (designs[index].published || designs[index].public) ? '1' : '0');
            window.location.href = 'Scrapbook-Editor.html';
        }

        function deleteDesign(index) {
            if (confirm('Hapus desain ini?')) {
                const designs = JSON.parse(localStorage.getItem('scrapbookDesigns') || '[]');
                designs.splice(index, 1);
                localStorage.setItem('scrapbookDesigns', JSON.stringify(designs));
                alert('✅ Desain berhasil dihapus');
                loadSavedDesigns();
            }
        }

        function togglePrivacy(index) {
            const designs = JSON.parse(localStorage.getItem('scrapbookDesigns') || '[]');
            const d = designs[index];
            if (!d) return;
            // toggle published flag (compatible with older 'public')
            d.published = !('published' in d ? d.published : !!d.public);
            // keep legacy public value in sync
            d.public = !!d.published;
            localStorage.setItem('scrapbookDesigns', JSON.stringify(designs));
            loadSavedDesigns();
            alert('🔒 Status publikasi diubah: ' + (d.published ? 'Published' : 'Private'));
        }

        // Open a modal to view design larger and allow editing from modal
        function viewDesign(index) {
            const designs = JSON.parse(localStorage.getItem('scrapbookDesigns') || '[]');
            const design = designs[index];
            if (!design) return;

            // Create modal
            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-black/50 flex items-center justify-center z-50';

            modal.innerHTML = `
                <div class="bg-white rounded-2xl shadow-lg max-w-3xl w-full mx-4 overflow-hidden">
                    <div class="p-4 border-b flex justify-between items-start">
                        <div>
                            <h4 class="font-semibold text-slate-700">${design.title}</h4>
                            <p class="text-xs text-slate-400">${design.createdAt}</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <button id="modalEditBtn" class="px-3 py-1 bg-sky-100 text-sky-600 rounded-lg text-sm font-semibold">✏️ Edit</button>
                            <button id="modalDeleteBtn" class="px-3 py-1 bg-red-100 text-red-600 rounded-lg text-sm font-semibold">🗑️ Hapus</button>
                            <button id="modalCloseBtn" class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-sm">Tutup</button>
                        </div>
                    </div>
                    <div class="p-4">
                        <p id="modalPrivacyStatus" class="text-sm mb-3">${(design.published || design.public) ? '<span class="text-emerald-600 font-semibold">🔓 Published</span>' : '<span class="text-slate-400">🔒 Private</span>'}</p>
                        <img src="${design.image}" alt="${design.title}" class="w-full h-auto rounded-md">
                    </div>
                </div>
            `;

            document.body.appendChild(modal);

            // Close handler
            document.getElementById('modalCloseBtn').addEventListener('click', (e) => {
                e.stopPropagation();
                modal.remove();
            });

            // Edit from modal
            document.getElementById('modalEditBtn').addEventListener('click', (e) => {
                e.stopPropagation();
                localStorage.setItem('editingDesignIndex', index);
                localStorage.setItem('editingDesignContent', design.htmlContent);
                window.location.href = 'Scrapbook-Editor.html';
            });

            // Delete from modal
            document.getElementById('modalDeleteBtn').addEventListener('click', (e) => {
                e.stopPropagation();
                if (confirm('Hapus desain ini?')) {
                    deleteDesign(index);
                    modal.remove();
                }
            });

            // Toggle privacy from modal
            const modalToggle = document.createElement('button');
            modalToggle.className = 'ml-2 px-3 py-1 bg-slate-50 text-slate-600 rounded-lg text-sm';
            modalToggle.textContent = (design.published || design.public) ? 'Jadikan Private' : 'Jadikan Publish';
            modalToggle.addEventListener('click', (ev) => {
                ev.stopPropagation();
                togglePrivacy(index);
                // read updated design and update texts
                const updated = JSON.parse(localStorage.getItem('scrapbookDesigns') || '[]')[index];
                modalToggle.textContent = updated && (updated.published || updated.public) ? 'Jadikan Private' : 'Jadikan Publish';
                const statusEl = document.getElementById('modalPrivacyStatus');
                if (statusEl) statusEl.innerHTML = updated && (updated.published || updated.public) ? '<span class="text-emerald-600 font-semibold">🔓 Published</span>' : '<span class="text-slate-400">🔒 Private</span>';
            });
            document.getElementById('modalEditBtn').parentNode.appendChild(modalToggle);

            // Close modal when clicking outside content
            modal.addEventListener('click', (e) => {
                if (e.target === modal) modal.remove();
            });
        }
    </script>
</body>
</html>