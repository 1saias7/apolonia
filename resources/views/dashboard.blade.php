<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            🇧🇷 {{ __('Dashboard - Destino Brasil') }} 🇧🇷
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gradient-to-br from-yellow-400 via-green-500 to-blue-600 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Título Principal -->
            <div class="text-center mb-8 animate-bounce">
                <h1 class="text-6xl font-bold text-white drop-shadow-lg mb-4">
                    🏖️ ¡VACACIONES EN BRASIL! 🏖️
                </h1>
                <p class="text-2xl text-white font-semibold">
                    Rio de Janeiro te espera 🌴☀️🌊
                </p>
            </div>

            <!-- Contador Regresivo -->
            <div class="bg-white/90 backdrop-blur-sm overflow-hidden shadow-2xl rounded-3xl mb-8 transform hover:scale-105 transition-transform duration-300">
                <div class="p-8 text-center">
                    <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-600 via-yellow-500 to-blue-600 mb-6">
                        ⏰ CUENTA REGRESIVA ⏰
                    </h2>
                    
                    <div id="countdown" class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                        <!-- Días -->
                        <div class="bg-gradient-to-br from-green-400 to-green-600 rounded-2xl p-6 shadow-xl transform hover:rotate-3 transition-transform">
                            <div class="text-6xl font-bold text-white" id="days">0</div>
                            <div class="text-xl text-white font-semibold mt-2">DÍAS</div>
                        </div>
                        
                        <!-- Horas -->
                        <div class="bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl p-6 shadow-xl transform hover:rotate-3 transition-transform">
                            <div class="text-6xl font-bold text-white" id="hours">0</div>
                            <div class="text-xl text-white font-semibold mt-2">HORAS</div>
                        </div>
                        
                        <!-- Minutos -->
                        <div class="bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl p-6 shadow-xl transform hover:rotate-3 transition-transform">
                            <div class="text-6xl font-bold text-white" id="minutes">0</div>
                            <div class="text-xl text-white font-semibold mt-2">MINUTOS</div>
                        </div>
                        
                        <!-- Segundos -->
                        <div class="bg-gradient-to-br from-orange-400 to-red-500 rounded-2xl p-6 shadow-xl transform hover:rotate-3 transition-transform">
                            <div class="text-6xl font-bold text-white" id="seconds">0</div>
                            <div class="text-xl text-white font-semibold mt-2">SEGUNDOS</div>
                        </div>
                    </div>

                    <div class="text-3xl font-bold text-gray-800 mt-4">
                        📅 Fecha: <span class="text-blue-600">1 de Abril, 2026</span>
                    </div>
                    
                    <div class="mt-6 text-xl text-gray-700 font-semibold">
                        🎉 ¡Prepárate para la aventura de tu vida! 🎉
                    </div>
                </div>
            </div>

            <!-- Cristo Redentor 3D -->
            <div class="bg-white/90 backdrop-blur-sm overflow-hidden shadow-2xl rounded-3xl mb-8">
                <div class="p-8">
                    <h2 class="text-4xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-green-600 via-yellow-500 to-blue-600 mb-6">
                        ⛪ Cristo Redentor ⛪
                    </h2>
                    <p class="text-center text-gray-700 mb-6 text-lg">
                        🗿 Una de las 7 Maravillas del Mundo Moderno te está esperando 🗿
                    </p>
                    
                    <div id="canvas-container" class="w-full h-96 bg-gradient-to-br from-sky-200 to-sky-400 rounded-2xl shadow-inner relative overflow-hidden">
                        <canvas id="three-canvas" class="w-full h-full"></canvas>
                        <div class="absolute bottom-4 left-4 bg-white/80 px-4 py-2 rounded-lg">
                            <p class="text-sm font-semibold text-gray-700">🖱️ Arrastra para rotar</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Info Adicional -->
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-6 shadow-xl text-center transform hover:scale-105 transition-transform">
                    <div class="text-5xl mb-4">🏖️</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Playas Paradisíacas</h3>
                    <p class="text-gray-600">Copacabana e Ipanema te esperan</p>
                </div>
                
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-6 shadow-xl text-center transform hover:scale-105 transition-transform">
                    <div class="text-5xl mb-4">🎭</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Carnaval Carioca</h3>
                    <p class="text-gray-600">La fiesta más grande del mundo</p>
                </div>
                
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-6 shadow-xl text-center transform hover:scale-105 transition-transform">
                    <div class="text-5xl mb-4">🍹</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Caipiriñas</h3>
                    <p class="text-gray-600">El sabor auténtico de Brasil</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>

    <script>
        // ==================== CONTADOR REGRESIVO ====================
        function updateCountdown() {
            const targetDate = new Date('2026-04-01T00:00:00').getTime();
            const now = new Date().getTime();
            const distance = targetDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById('days').textContent = days;
            document.getElementById('hours').textContent = hours;
            document.getElementById('minutes').textContent = minutes;
            document.getElementById('seconds').textContent = seconds;

            if (distance < 0) {
                document.getElementById('countdown').innerHTML = '<div class="col-span-4 text-6xl font-bold text-green-600">🎉 ¡YA ES HORA DE BRASIL! 🎉</div>';
            }
        }

        // Actualizar cada segundo
        updateCountdown();
        setInterval(updateCountdown, 1000);

        // ==================== MODELO 3D CRISTO REDENTOR ====================
        const canvas = document.getElementById('three-canvas');
        const scene = new THREE.Scene();
        scene.background = new THREE.Color(0x87CEEB); // Cielo azul

        // Cámara
        const camera = new THREE.PerspectiveCamera(75, canvas.offsetWidth / canvas.offsetHeight, 0.1, 1000);
        camera.position.z = 5;
        camera.position.y = 2;

        // Renderer
        const renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true });
        renderer.setSize(canvas.offsetWidth, canvas.offsetHeight);
        renderer.shadowMap.enabled = true;

        // Luces
        const ambientLight = new THREE.AmbientLight(0xffffff, 0.6);
        scene.add(ambientLight);

        const directionalLight = new THREE.DirectionalLight(0xffffff, 0.8);
        directionalLight.position.set(5, 10, 5);
        directionalLight.castShadow = true;
        scene.add(directionalLight);

        const sunLight = new THREE.DirectionalLight(0xffdd00, 0.4);
        sunLight.position.set(-5, 10, -5);
        scene.add(sunLight);

        // Controles de órbita
        const controls = new THREE.OrbitControls(camera, renderer.domElement);
        controls.enableDamping = true;
        controls.dampingFactor = 0.05;
        controls.autoRotate = true;
        controls.autoRotateSpeed = 2;

        // Cargar modelo GLB
        const loader = new THREE.GLTFLoader();
        loader.load(
            '/models/brasil.glb',
            function (gltf) {
                const model = gltf.scene;
                model.scale.set(1, 1, 1);
                model.position.y = -1;
                
                // Habilitar sombras
                model.traverse(function (node) {
                    if (node.isMesh) {
                        node.castShadow = true;
                        node.receiveShadow = true;
                    }
                });
                
                scene.add(model);
            },
            function (xhr) {
                console.log((xhr.loaded / xhr.total * 100) + '% cargado');
            },
            function (error) {
                console.error('Error cargando el modelo:', error);
            }
        );

        // Suelo con sombras
        const planeGeometry = new THREE.PlaneGeometry(20, 20);
        const planeMaterial = new THREE.ShadowMaterial({ opacity: 0.3 });
        const plane = new THREE.Mesh(planeGeometry, planeMaterial);
        plane.rotation.x = -Math.PI / 2;
        plane.position.y = -1;
        plane.receiveShadow = true;
        scene.add(plane);

        // Animación
        function animate() {
            requestAnimationFrame(animate);
            controls.update();
            renderer.render(scene, camera);
        }
        animate();

        // Responsive
        window.addEventListener('resize', function() {
            const width = canvas.offsetWidth;
            const height = canvas.offsetHeight;
            renderer.setSize(width, height);
            camera.aspect = width / height;
            camera.updateProjectionMatrix();
        });
    </script>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .animate-bounce {
            animation: float 3s ease-in-out infinite;
        }
        
        #canvas-container {
            background: linear-gradient(to bottom, #87CEEB 0%, #E0F6FF 100%);
        }
    </style>
</x-app-layout>