<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Web - Gallery Publik</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 min-h-screen">
    <div class="max-w-6xl mx-auto p-8">
        <header class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-semibold text-slate-700">Galeri Publik</h1>
                <p class="text-sm text-slate-400">Hanya desain yang dipublikasikan tampil di sini.</p>
            </div>
            <div>
                <a href="Dashboard .html" class="px-4 py-2 bg-sky-500 text-white rounded-lg shadow">Kembali ke Dashboard</a>
            </div>
        </header>

        <div id="gallery" class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- public designs appear here -->
        </div>

        <div id="emptyMsg" class="text-center text-slate-400 mt-12">
            Tidak ada desain publik saat ini.
        </div>
    </div>

    <script>
        function loadPublicGallery() {
            const designs = JSON.parse(localStorage.getItem('scrapbookDesigns') || '[]');
            const gallery = document.getElementById('gallery');
            const empty = document.getElementById('emptyMsg');

            const publicDesigns = designs.filter(d => (d.published || d.public));
            if (publicDesigns.length === 0) {
                gallery.innerHTML = '';
                empty.style.display = 'block';
                return;
            }

            empty.style.display = 'none';
            gallery.innerHTML = publicDesigns.map(d => `
                <div class="bg-white rounded-2xl shadow-sm border overflow-hidden">
                    <img src="${d.image}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-slate-700">${d.title}</h3>
                        <p class="text-xs text-slate-400 mt-1">${d.createdAt}</p>
                    </div>
                </div>
            `).join('');
        }

        window.addEventListener('load', loadPublicGallery);
    </script>
</body>
</html>