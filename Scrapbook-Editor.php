<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrapbook Editor - The Studio DiScrap</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-handwriting { font-family: 'Dancing Script', cursive; }
        .canvas-area {
            background: white;
            border: 2px dashed #e0f2fe;
            position: relative;
            overflow: hidden;
        }
        .draggable-element {
            position: absolute;
            cursor: move;
            transition: box-shadow 0.2s;
        }
        .draggable-element:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }
        .draggable-element.selected {
            border: 2px solid #0ea5e9;
            box-shadow: 0 0 0 4px rgba(14, 165, 233, 0.1);
        }
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
                <a href="#" class="flex items-center space-x-3 bg-sky-50 text-sky-600 px-4 py-3 rounded-xl transition">
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
            <header class="bg-white/80 backdrop-blur-md border-b border-sky-100 p-6 flex justify-between items-center sticky top-0 z-20">
                <div>
                    <h2 class="text-xl font-semibold text-slate-700">Scrapbook Editor 🎨</h2>
                    <p class="text-sm text-slate-400">Susun elemen-elemen kenangan dengan bebas.</p>
                </div>
                    <div class="flex items-center space-x-4">
                    <label class="flex items-center gap-2 bg-white border border-sky-200 px-3 py-2 rounded-full text-sm">
                        <input type="checkbox" id="publishToggle">
                        <span class="text-slate-600 text-sm">Publish</span>
                    </label>
                    <button onclick="saveLayout()" class="bg-white border border-sky-200 text-sky-500 px-4 py-2 rounded-full text-sm font-medium hover:bg-sky-50 transition">Simpan</button>
                    <button onclick="deleteCurrentDesign()" class="bg-red-100 text-red-600 px-4 py-2 rounded-full text-sm font-medium hover:bg-red-200 transition">Hapus</button>
                    <button class="bg-sky-500 text-white px-6 py-2 rounded-full text-sm font-medium hover:bg-sky-600 shadow-md shadow-sky-100 transition">Export</button>
                </div>
            </header>

            <div class="p-8 flex gap-8 h-full overflow-hidden">
                <!-- Tool Panel -->
                <div class="w-72 bg-white rounded-2xl shadow-sm border border-sky-50 p-6 overflow-y-auto">
                    <h3 class="text-lg font-semibold text-slate-700 mb-4">Elemen</h3>
                    
                    <div class="space-y-4">
                        <!-- Foto -->
                        <div>
                            <label class="block text-sm font-semibold text-slate-600 mb-2">📸 Tambah Foto</label>
                            <input type="file" accept="image/*" class="w-full text-sm" onchange="addImage(event)">
                        </div>

                        <!-- Teks -->
                        <div>
                            <label class="block text-sm font-semibold text-slate-600 mb-2">✏️ Tambah Teks</label>
                            <div class="flex gap-2">
                                <input type="text" placeholder="Ketik teks..." id="textInput" class="flex-1 px-3 py-2 border border-sky-200 rounded-lg text-sm">
                                <button onclick="addText()" class="bg-sky-500 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-sky-600">Tambah</button>
                            </div>
                        </div>

                        <!-- Sticker -->
                        <div>
                            <label class="block text-sm font-semibold text-slate-600 mb-2">😊 Stiker</label>
                            <div class="grid grid-cols-4 gap-2">
                                <button onclick="addSticker('❤️')" class="p-2 bg-sky-50 rounded-lg hover:bg-sky-100 text-lg">❤️</button>
                                <button onclick="addSticker('⭐')" class="p-2 bg-sky-50 rounded-lg hover:bg-sky-100 text-lg">⭐</button>
                                <button onclick="addSticker('🎉')" class="p-2 bg-sky-50 rounded-lg hover:bg-sky-100 text-lg">🎉</button>
                                <button onclick="addSticker('🌸')" class="p-2 bg-sky-50 rounded-lg hover:bg-sky-100 text-lg">🌸</button>
                                <button onclick="addSticker('✨')" class="p-2 bg-sky-50 rounded-lg hover:bg-sky-100 text-lg">✨</button>
                                <button onclick="addSticker('💫')" class="p-2 bg-sky-50 rounded-lg hover:bg-sky-100 text-lg">💫</button>
                                <button onclick="addSticker('🎵')" class="p-2 bg-sky-50 rounded-lg hover:bg-sky-100 text-lg">🎵</button>
                                <button onclick="addSticker('🌙')" class="p-2 bg-sky-50 rounded-lg hover:bg-sky-100 text-lg">🌙</button>
                            </div>
                        </div>

                        <!-- Bentuk -->
                        <div>
                            <label class="block text-sm font-semibold text-slate-600 mb-2">🎨 Bentuk</label>
                            <div class="space-y-2">
                                <button onclick="addShape('rect')" class="w-full px-3 py-2 bg-sky-50 hover:bg-sky-100 rounded-lg text-sm font-medium text-slate-600 transition">▭ Persegi</button>
                                <button onclick="addShape('circle')" class="w-full px-3 py-2 bg-sky-50 hover:bg-sky-100 rounded-lg text-sm font-medium text-slate-600 transition">● Lingkaran</button>
                            </div>
                        </div>

                        <!-- Filter -->
                        <div>
                            <label class="block text-sm font-semibold text-slate-600 mb-2">🎬 Filter</label>
                            <div class="space-y-2">
                                <button onclick="applyFilter('grayscale')" class="w-full px-3 py-2 bg-sky-50 hover:bg-sky-100 rounded-lg text-sm font-medium text-slate-600 transition">Hitam Putih</button>
                                <button onclick="applyFilter('sepia')" class="w-full px-3 py-2 bg-sky-50 hover:bg-sky-100 rounded-lg text-sm font-medium text-slate-600 transition">Sepia</button>
                                <button onclick="applyFilter('saturate')" class="w-full px-3 py-2 bg-sky-50 hover:bg-sky-100 rounded-lg text-sm font-medium text-slate-600 transition">Saturasi</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Canvas Area -->
                <div class="flex-1 bg-white rounded-2xl shadow-sm border border-sky-50 p-6 flex flex-col">
                    <p class="text-sm text-slate-400 mb-4">Klik elemen untuk pilih, tarik untuk pindahkan</p>
                    <div class="canvas-area flex-1" id="canvas">
                        <!-- Elements akan ditambahkan di sini -->
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        let selectedElement = null;
        const canvas = document.getElementById('canvas');

        // Load existing design if editing
        window.addEventListener('load', () => {
            const editingContent = localStorage.getItem('editingDesignContent');
            if (editingContent) {
                canvas.innerHTML = editingContent;
                // Reattach event listeners to loaded elements
                document.querySelectorAll('.draggable-element').forEach(el => {
                    makeElementDraggable(el);
                });
                // Set publish toggle if passed
                const isPublished = localStorage.getItem('editingDesignIsPublished');
                if (isPublished !== null) {
                    document.getElementById('publishToggle').checked = isPublished === '1';
                }
                localStorage.removeItem('editingDesignContent');
                localStorage.removeItem('editingDesignIsPublished');
                // keep editingDesignIndex until save completes
            }
        });

        function addImage(event) {
            const file = event.target.files[0];
            if (!file) return;
            
            const reader = new FileReader();
            reader.onload = (e) => {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'draggable-element w-48 h-48 object-cover bg-white p-2 shadow-lg';
                img.style.left = Math.random() * (canvas.offsetWidth - 200) + 'px';
                img.style.top = Math.random() * (canvas.offsetHeight - 200) + 'px';
                makeElementDraggable(img);
                canvas.appendChild(img);
            };
            reader.readAsDataURL(file);
        }

        function addText() {
            const text = document.getElementById('textInput').value;
            if (!text) return;
            
            const div = document.createElement('div');
            div.className = 'draggable-element font-handwriting text-2xl text-slate-700 bg-white p-3 rounded-lg shadow-md';
            div.textContent = text;
            div.style.left = Math.random() * (canvas.offsetWidth - 200) + 'px';
            div.style.top = Math.random() * (canvas.offsetHeight - 100) + 'px';
            makeElementDraggable(div);
            canvas.appendChild(div);
            document.getElementById('textInput').value = '';
        }

        function addSticker(emoji) {
            const sticker = document.createElement('div');
            sticker.className = 'draggable-element text-4xl bg-transparent';
            sticker.textContent = emoji;
            sticker.style.left = Math.random() * (canvas.offsetWidth - 100) + 'px';
            sticker.style.top = Math.random() * (canvas.offsetHeight - 100) + 'px';
            makeElementDraggable(sticker);
            canvas.appendChild(sticker);
        }

        function addShape(type) {
            const shape = document.createElement('div');
            shape.className = 'draggable-element bg-sky-200 opacity-70 hover:opacity-100';
            
            if (type === 'rect') {
                shape.style.width = '150px';
                shape.style.height = '100px';
                shape.className += ' rounded-lg';
            } else if (type === 'circle') {
                shape.style.width = '120px';
                shape.style.height = '120px';
                shape.className += ' rounded-full';
            }
            
            shape.style.left = Math.random() * (canvas.offsetWidth - 200) + 'px';
            shape.style.top = Math.random() * (canvas.offsetHeight - 200) + 'px';
            makeElementDraggable(shape);
            canvas.appendChild(shape);
        }

        function makeElementDraggable(element) {
            let pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
            
            element.addEventListener('mousedown', (e) => {
                e.preventDefault();
                selectedElement = element;
                document.querySelectorAll('.draggable-element').forEach(el => el.classList.remove('selected'));
                element.classList.add('selected');
                
                pos3 = e.clientX;
                pos4 = e.clientY;
                
                const onMouseMove = (e) => {
                    pos1 = pos3 - e.clientX;
                    pos2 = pos4 - e.clientY;
                    pos3 = e.clientX;
                    pos4 = e.clientY;
                    element.style.top = (element.offsetTop - pos2) + "px";
                    element.style.left = (element.offsetLeft - pos1) + "px";
                };
                
                const onMouseUp = () => {
                    document.removeEventListener('mousemove', onMouseMove);
                    document.removeEventListener('mouseup', onMouseUp);
                };
                
                document.addEventListener('mousemove', onMouseMove);
                document.addEventListener('mouseup', onMouseUp);
            });
        }

        function applyFilter(filterType) {
            if (!selectedElement) {
                alert('Pilih elemen terlebih dahulu');
                return;
            }
            
            if (filterType === 'grayscale') {
                selectedElement.style.filter = 'grayscale(100%)';
            } else if (filterType === 'sepia') {
                selectedElement.style.filter = 'sepia(100%)';
            } else if (filterType === 'saturate') {
                selectedElement.style.filter = 'saturate(200%)';
            }
        }

        function saveLayout() {
            const canvas = document.getElementById('canvas');
            
            // Create a temporary canvas to capture the design
            const tempCanvas = document.createElement('canvas');
            const rect = canvas.getBoundingClientRect();
            tempCanvas.width = rect.width;
            tempCanvas.height = rect.height;
            const ctx = tempCanvas.getContext('2d');
            
            // Fill white background
            ctx.fillStyle = 'white';
            ctx.fillRect(0, 0, tempCanvas.width, tempCanvas.height);
            
            // Draw each element
            const elements = canvas.querySelectorAll('.draggable-element');
            elements.forEach(el => {
                const text = el.textContent;
                const style = window.getComputedStyle(el);
                const x = el.offsetLeft;
                const y = el.offsetTop;
                
                // Simple text rendering
                ctx.font = '14px Inter';
                ctx.fillStyle = '#334155';
                ctx.fillText(text.substring(0, 20), x, y + 20);
            });
            
            // Convert canvas to image and save
            const imageData = tempCanvas.toDataURL('image/png');
            // Save design to localStorage (support edit)
            const designs = JSON.parse(localStorage.getItem('scrapbookDesigns') || '[]');
            const publicFlag = document.getElementById('publishToggle').checked;

            const editingIndexRaw = localStorage.getItem('editingDesignIndex');
            const editingIndex = editingIndexRaw !== null ? parseInt(editingIndexRaw, 10) : null;
            if (editingIndex !== null && !isNaN(editingIndex) && designs[editingIndex]) {
                // update existing design
                designs[editingIndex].image = imageData;
                designs[editingIndex].htmlContent = canvas.innerHTML;
                designs[editingIndex].public = !!publicFlag;
                designs[editingIndex].published = !!publicFlag;
                designs[editingIndex].createdAt = new Date().toLocaleString('id-ID');
            } else {
                const newDesign = {
                    id: Date.now(),
                    image: imageData,
                    title: 'Scrapbook #' + (designs.length + 1),
                    createdAt: new Date().toLocaleString('id-ID'),
                    htmlContent: canvas.innerHTML,
                    public: !!publicFlag,
                    published: !!publicFlag
                };
                designs.push(newDesign);
            }

            localStorage.setItem('scrapbookDesigns', JSON.stringify(designs));
            localStorage.removeItem('editingDesignIndex');
            
            // Show notification
            showSaveNotification();
            
            // Redirect to Dashboard after 2 seconds
            setTimeout(() => {
                window.location.href = 'Dashboard .html';
            }, 2000);
        }

        function showSaveNotification() {
            const notification = document.createElement('div');
            notification.className = 'fixed top-6 right-6 px-6 py-4 rounded-2xl shadow-lg z-50 bg-emerald-100 text-emerald-600 font-semibold';
            notification.textContent = '✅ Desain berhasil disimpan! Mengalihkan ke Dashboard...';
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }

        function deleteCurrentDesign() {
            const editingIndexRaw = localStorage.getItem('editingDesignIndex');
            const editingIndex = editingIndexRaw !== null ? parseInt(editingIndexRaw, 10) : null;
            if (editingIndex === null || isNaN(editingIndex)) {
                alert('Tidak ada desain yang sedang diedit untuk dihapus.');
                return;
            }

            if (!confirm('Hapus desain yang sedang diedit?')) return;

            const designs = JSON.parse(localStorage.getItem('scrapbookDesigns') || '[]');
            if (!designs[editingIndex]) {
                alert('Desain tidak ditemukan.');
                localStorage.removeItem('editingDesignIndex');
                return;
            }

            designs.splice(editingIndex, 1);
            localStorage.setItem('scrapbookDesigns', JSON.stringify(designs));
            localStorage.removeItem('editingDesignIndex');
            alert('✅ Desain berhasil dihapus');
            window.location.href = 'Dashboard .html';
        }
    </script>
</body>
</html>
