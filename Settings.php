<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - The Studio DiScrap</title>
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
                <a href="Guest-Management.html" class="flex items-center space-x-3 text-slate-500 hover:bg-sky-50 hover:text-sky-600 px-4 py-3 rounded-xl transition">
                    <span>👥</span>
                    <span class="font-medium">Guest Management</span>
                </a>
                <a href="#" class="flex items-center space-x-3 bg-sky-50 text-sky-600 px-4 py-3 rounded-xl transition">
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
                    <h2 class="text-xl font-semibold text-slate-700">Settings ⚙️</h2>
                    <p class="text-sm text-slate-400">Akun & Preferensi Anda</p>
                </div>
            </header>

            <div class="p-8 max-w-2xl mx-auto">
                <!-- Profile Section -->
                <div id="profileSection" class="bg-white rounded-3xl shadow-sm border border-sky-50 p-8 mb-8">
                    <h3 class="text-2xl font-semibold text-slate-700 mb-6">👤 Profil Saya</h3>
                    
                    <div class="space-y-6">
                        <!-- Profile Picture -->
                        <div class="flex items-center gap-6">
                            <div class="relative">
                                <div id="avatarPlaceholder" class="w-24 h-24 bg-sky-500 rounded-full flex items-center justify-center text-white text-4xl">
                                    👤
                                </div>
                                <img id="profileAvatar" src="" alt="avatar" class="w-24 h-24 rounded-full object-cover hidden" />
                                <input id="avatarInput" type="file" accept="image/*" class="hidden" />
                            </div>
                            <div class="flex-1">
                                <p id="userFullName" class="text-xl font-semibold text-slate-700">Tidak Terdaftar</p>
                                <p id="userEmail" class="text-sm text-slate-500">Silakan login terlebih dahulu</p>
                                <div class="mt-3 flex items-center gap-3">
                                    <button onclick="openEditProfileModal()" class="px-4 py-2 bg-sky-100 text-sky-600 rounded-lg font-semibold hover:bg-sky-200">Edit Profil</button>
                                    <button onclick="triggerAvatarSelect()" class="px-4 py-2 bg-white border border-sky-200 text-sky-600 rounded-lg font-semibold hover:bg-sky-50">Tambah Foto</button>
                                    <button id="removeAvatarBtn" onclick="removeAvatar()" class="px-3 py-2 bg-red-50 text-red-600 rounded-lg font-semibold hover:bg-red-100 hidden">Hapus Foto</button>
                                </div>
                            </div>
                        </div>

                        <!-- User Details -->
                        <div class="border-t border-sky-100 pt-6 grid grid-cols-2 gap-6">
                            <div>
                                <p class="text-xs font-semibold text-slate-400 uppercase">Username</p>
                                <p id="userUsername" class="text-lg font-semibold text-slate-700 mt-1">-</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-slate-400 uppercase">Telepon</p>
                                <p id="userPhone" class="text-lg font-semibold text-slate-700 mt-1">-</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-slate-400 uppercase">Bergabung Sejak</p>
                                <p id="joinDate" class="text-lg font-semibold text-slate-700 mt-1">-</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-slate-400 uppercase">Status</p>
                                <p id="userStatus" class="text-lg font-semibold text-emerald-600 mt-1">Aktif</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="space-y-4">
                    <!-- Login/Register Button -->
                    <div id="loginRegisterBtn" class="flex gap-4">
                        <button onclick="openLoginModal()" class="flex-1 px-6 py-4 bg-sky-500 text-white rounded-2xl font-semibold hover:bg-sky-600 shadow-md shadow-sky-100 transition">
                            🔐 Login
                        </button>
                        <button onclick="openRegisterModal()" class="flex-1 px-6 py-4 bg-emerald-500 text-white rounded-2xl font-semibold hover:bg-emerald-600 shadow-md shadow-emerald-100 transition">
                            ✍️ Register
                        </button>
                    </div>

                    <!-- Logout Button -->
                    <button id="logoutBtn" onclick="logout()" class="hidden w-full px-6 py-4 bg-red-600 text-white rounded-2xl font-semibold hover:bg-red-700 shadow-md transition">
                        🚪 Logout
                    </button>
                </div>
            </div>
        </main>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" class="hidden fixed inset-0 bg-black/30 flex items-center justify-center z-50 p-4">
        <div class="bg-white rounded-3xl p-8 max-w-md w-full shadow-xl">
            <h3 class="text-2xl font-handwriting text-slate-700 mb-6">🔐 Login</h3>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-slate-600 mb-2">Email</label>
                    <input type="email" id="loginEmail" placeholder="Masukkan email..." class="w-full px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-600 mb-2">Password</label>
                    <input type="password" id="loginPassword" placeholder="Masukkan password..." class="w-full px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>
            </div>

            <div class="flex gap-4 mt-6">
                <button onclick="closeLoginModal()" class="flex-1 px-4 py-3 border border-sky-200 text-sky-500 rounded-xl font-semibold hover:bg-sky-50 transition">Batal</button>
                <button onclick="doLogin()" class="flex-1 px-4 py-3 bg-sky-500 text-white rounded-xl font-semibold hover:bg-sky-600 transition">Login</button>
            </div>

            <p class="text-center text-sm text-slate-500 mt-4">
                Belum punya akun? <button onclick="switchToRegister()" class="text-sky-500 font-semibold hover:underline">Daftar sekarang</button>
            </p>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="hidden fixed inset-0 bg-black/30 flex items-center justify-center z-50 p-4">
        <div class="bg-white rounded-3xl p-8 max-w-md w-full shadow-xl">
            <h3 class="text-2xl font-handwriting text-slate-700 mb-6">✍️ Register</h3>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-slate-600 mb-2">Nama Lengkap</label>
                    <input type="text" id="regFullName" placeholder="Masukkan nama lengkap..." class="w-full px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-600 mb-2">Username</label>
                    <input type="text" id="regUsername" placeholder="Masukkan username..." class="w-full px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-600 mb-2">Email</label>
                    <input type="email" id="regEmail" placeholder="Masukkan email..." class="w-full px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-600 mb-2">Password</label>
                    <input type="password" id="regPassword" placeholder="Masukkan password..." class="w-full px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-600 mb-2">Nomor Telepon</label>
                    <input type="tel" id="regPhone" placeholder="Masukkan nomor telepon..." class="w-full px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>
            </div>

            <div class="flex gap-4 mt-6">
                <button onclick="closeRegisterModal()" class="flex-1 px-4 py-3 border border-sky-200 text-sky-500 rounded-xl font-semibold hover:bg-sky-50 transition">Batal</button>
                <button onclick="doRegister()" class="flex-1 px-4 py-3 bg-emerald-500 text-white rounded-xl font-semibold hover:bg-emerald-600 transition">Register</button>
            </div>

            <p class="text-center text-sm text-slate-500 mt-4">
                Sudah punya akun? <button onclick="switchToLogin()" class="text-sky-500 font-semibold hover:underline">Login sekarang</button>
            </p>
        </div>
    </div>

    <!-- Edit Profile Modal -->
    <div id="editProfileModal" class="hidden fixed inset-0 bg-black/30 flex items-center justify-center z-50 p-4">
        <div class="bg-white rounded-3xl p-8 max-w-md w-full shadow-xl">
            <h3 class="text-2xl font-handwriting text-slate-700 mb-6">✏️ Edit Profil</h3>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-slate-600 mb-2">Nama Lengkap</label>
                    <input type="text" id="editFullName" placeholder="Masukkan nama..." class="w-full px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-600 mb-2">Email</label>
                    <input type="email" id="editEmail" placeholder="Masukkan email..." class="w-full px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-600 mb-2">Nomor Telepon</label>
                    <input type="tel" id="editPhone" placeholder="Masukkan nomor telepon..." class="w-full px-4 py-3 border border-sky-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-400">
                </div>
            </div>

            <div class="flex gap-4 mt-6">
                <button onclick="closeEditProfileModal()" class="flex-1 px-4 py-3 border border-sky-200 text-sky-500 rounded-xl font-semibold hover:bg-sky-50 transition">Batal</button>
                <button onclick="saveProfile()" class="flex-1 px-4 py-3 bg-sky-500 text-white rounded-xl font-semibold hover:bg-sky-600 transition">Simpan</button>
            </div>
        </div>
    </div>

    <script>
        // Load user data on page load
        window.addEventListener('load', loadUserData);

        function loadUserData() {
            const userData = localStorage.getItem('currentUser');
            if (userData) {
                const user = JSON.parse(userData);
                updateProfileUI(user);
                showLogoutButton();
            } else {
                hideLogoutButton();
                // Auto-open register modal if not logged in
                openRegisterModal();
            }
        }

        function updateProfileUI(user) {
            document.getElementById('userFullName').textContent = user.fullName || 'Tidak Terdaftar';
            document.getElementById('userEmail').textContent = user.email || '-';
            document.getElementById('userUsername').textContent = user.username || '-';
            document.getElementById('userPhone').textContent = user.phone || '-';
            document.getElementById('joinDate').textContent = user.joinDate || '-';
            document.getElementById('userStatus').textContent = 'Aktif ✓';

            // Show avatar if available
            const avatarImg = document.getElementById('profileAvatar');
            const avatarPlaceholder = document.getElementById('avatarPlaceholder');
            const removeBtn = document.getElementById('removeAvatarBtn');
            if (user.avatar) {
                avatarImg.src = user.avatar;
                avatarImg.classList.remove('hidden');
                avatarPlaceholder.classList.add('hidden');
                removeBtn.classList.remove('hidden');
            } else {
                avatarImg.src = '';
                avatarImg.classList.add('hidden');
                avatarPlaceholder.classList.remove('hidden');
                removeBtn.classList.add('hidden');
            }
        }

        function showLogoutButton() {
            document.getElementById('loginRegisterBtn').classList.add('hidden');
            document.getElementById('logoutBtn').classList.remove('hidden');
        }

        function hideLogoutButton() {
            document.getElementById('loginRegisterBtn').classList.remove('hidden');
            document.getElementById('logoutBtn').classList.add('hidden');
        }

        function openLoginModal() {
            document.getElementById('loginModal').classList.remove('hidden');
        }

        function closeLoginModal() {
            document.getElementById('loginModal').classList.add('hidden');
        }

        function openRegisterModal() {
            document.getElementById('registerModal').classList.remove('hidden');
        }

        function closeRegisterModal() {
            document.getElementById('registerModal').classList.add('hidden');
        }

        function openEditProfileModal() {
            const userData = localStorage.getItem('currentUser');
            if (userData) {
                const user = JSON.parse(userData);
                document.getElementById('editFullName').value = user.fullName || '';
                document.getElementById('editEmail').value = user.email || '';
                document.getElementById('editPhone').value = user.phone || '';
            }
            document.getElementById('editProfileModal').classList.remove('hidden');
        }

        function closeEditProfileModal() {
            document.getElementById('editProfileModal').classList.add('hidden');
        }

        function switchToLogin() {
            closeRegisterModal();
            openLoginModal();
        }

        function switchToRegister() {
            closeLoginModal();
            openRegisterModal();
        }

        function doLogin() {
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;

            if (!email || !password) {
                alert('❌ Email dan password harus diisi!');
                return;
            }

            // Simple validation (in production, this would call a backend API)
            const users = JSON.parse(localStorage.getItem('users') || '[]');
            const user = users.find(u => u.email === email && u.password === password);

            if (user) {
                localStorage.setItem('currentUser', JSON.stringify(user));
                alert('✅ Login berhasil! Selamat datang!');
                // Redirect to Dashboard after login
                window.location.href = 'Dashboard .html';
            } else {
                alert('❌ Email atau password salah!');
            }
        }

        function doRegister() {
            const fullName = document.getElementById('regFullName').value;
            const username = document.getElementById('regUsername').value;
            const email = document.getElementById('regEmail').value;
            const password = document.getElementById('regPassword').value;
            const phone = document.getElementById('regPhone').value;

            if (!fullName || !username || !email || !password) {
                alert('❌ Semua field harus diisi!');
                return;
            }

            if (!email.includes('@')) {
                alert('❌ Email tidak valid!');
                return;
            }

            // Check if user already exists
            const users = JSON.parse(localStorage.getItem('users') || '[]');
            if (users.find(u => u.email === email)) {
                alert('❌ Email sudah terdaftar!');
                return;
            }

            // Create new user
            const newUser = {
                id: Date.now(),
                fullName: fullName,
                username: username,
                email: email,
                password: password,
                phone: phone,
                joinDate: new Date().toLocaleDateString('id-ID')
            };

            users.push(newUser);
            localStorage.setItem('users', JSON.stringify(users));
            localStorage.setItem('currentUser', JSON.stringify(newUser));

            alert('✅ Registrasi berhasil! Selamat datang!');
            // Redirect to Dashboard after register
            window.location.href = 'Dashboard .html';
        }

        function saveProfile() {
            const fullName = document.getElementById('editFullName').value;
            const email = document.getElementById('editEmail').value;
            const phone = document.getElementById('editPhone').value;

            if (!fullName || !email) {
                alert('❌ Nama dan email harus diisi!');
                return;
            }

            const userData = localStorage.getItem('currentUser');
            const user = JSON.parse(userData);
            user.fullName = fullName;
            user.email = email;
            user.phone = phone;

            localStorage.setItem('currentUser', JSON.stringify(user));

            // Update users list
            const users = JSON.parse(localStorage.getItem('users') || '[]');
            const userIndex = users.findIndex(u => u.id === user.id);
            if (userIndex > -1) {
                users[userIndex] = user;
                localStorage.setItem('users', JSON.stringify(users));
            }

            alert('✅ Profil berhasil diperbarui!');
            closeEditProfileModal();
            loadUserData();
        }

        function logout() {
            if (confirm('⚠️ Anda yakin ingin logout?')) {
                localStorage.removeItem('currentUser');
                alert('✅ Anda telah logout');
                loadUserData();
                document.getElementById('userFullName').textContent = 'Tidak Terdaftar';
                document.getElementById('userEmail').textContent = 'Silakan login terlebih dahulu';
                document.getElementById('userUsername').textContent = '-';
                document.getElementById('userPhone').textContent = '-';
                document.getElementById('joinDate').textContent = '-';
            }
        }

        // Avatar handlers
        (function setupAvatarHandlers(){
            const avatarInput = document.getElementById('avatarInput');
            if (avatarInput) avatarInput.addEventListener('change', handleAvatarFile);
        })();

        function triggerAvatarSelect() {
            const input = document.getElementById('avatarInput');
            if (!input) return;
            input.click();
        }

        function handleAvatarFile(e) {
            const file = e.target.files && e.target.files[0];
            if (!file) return;
            // limit to 2MB
            if (file.size > 2 * 1024 * 1024) {
                alert('❌ Ukuran file terlalu besar (maks 2MB).');
                return;
            }
            const reader = new FileReader();
            reader.onload = function () {
                saveAvatar(reader.result);
            };
            reader.readAsDataURL(file);
        }

        function saveAvatar(dataUrl) {
            const userData = localStorage.getItem('currentUser');
            if (!userData) {
                alert('❌ Silakan login terlebih dahulu.');
                return;
            }
            const user = JSON.parse(userData);
            user.avatar = dataUrl;
            localStorage.setItem('currentUser', JSON.stringify(user));

            // Update in users list as well
            const users = JSON.parse(localStorage.getItem('users') || '[]');
            const idx = users.findIndex(u => u.id === user.id);
            if (idx > -1) {
                users[idx].avatar = dataUrl;
                localStorage.setItem('users', JSON.stringify(users));
            }

            loadUserData();
            alert('✅ Foto profil tersimpan!');
        }

        function removeAvatar() {
            if (!confirm('⚠️ Hapus foto profil?')) return;
            const userData = localStorage.getItem('currentUser');
            if (!userData) return;
            const user = JSON.parse(userData);
            delete user.avatar;
            localStorage.setItem('currentUser', JSON.stringify(user));
            const users = JSON.parse(localStorage.getItem('users') || '[]');
            const idx = users.findIndex(u => u.id === user.id);
            if (idx > -1) {
                delete users[idx].avatar;
                localStorage.setItem('users', JSON.stringify(users));
            }
            loadUserData();
        }
    </script>
</body>
</html>
