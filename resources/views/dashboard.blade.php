<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                🏎️ Dashboard Ejecutivo - Racing Analytics Pro
            </h2>
            <div class="text-sm text-gray-600">
                📊 Actualizado: <span id="current-time"></span>
            </div>
        </div>
    </x-slot>

    <div class="py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- KPIs Principales -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <!-- Revenue Total -->
                <div class="bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl shadow-lg p-6 text-white transform hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-blue-100 text-sm font-medium">Ingresos Totales</p>
                            <p class="text-3xl font-bold mt-2" id="kpi-revenue">$0</p>
                            <p class="text-blue-100 text-xs mt-2">↗️ +18.2% vs mes anterior</p>
                        </div>
                        <div class="bg-blue-400 rounded-full p-4">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Unidades Vendidas -->
                <div class="bg-gradient-to-br from-green-500 to-green-700 rounded-xl shadow-lg p-6 text-white transform hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-green-100 text-sm font-medium">Unidades Vendidas</p>
                            <p class="text-3xl font-bold mt-2" id="kpi-units">0</p>
                            <p class="text-green-100 text-xs mt-2">↗️ +12.5% vs mes anterior</p>
                        </div>
                        <div class="bg-green-400 rounded-full p-4">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Tasa de Conversión -->
                <div class="bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl shadow-lg p-6 text-white transform hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-purple-100 text-sm font-medium">Tasa de Conversión</p>
                            <p class="text-3xl font-bold mt-2">24.8%</p>
                            <p class="text-purple-100 text-xs mt-2">↗️ +3.2% vs mes anterior</p>
                        </div>
                        <div class="bg-purple-400 rounded-full p-4">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Satisfacción Cliente -->
                <div class="bg-gradient-to-br from-orange-500 to-orange-700 rounded-xl shadow-lg p-6 text-white transform hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-orange-100 text-sm font-medium">Satisfacción Cliente</p>
                            <p class="text-3xl font-bold mt-2">4.8/5.0</p>
                            <p class="text-orange-100 text-xs mt-2">⭐ 95% recomendarían</p>
                        </div>
                        <div class="bg-orange-400 rounded-full p-4">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fila 1: Ventas Mensuales + Distribución por Categoría -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <!-- Gráfico de Ventas Mensuales -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold text-gray-800">📈 Ventas Mensuales 2024</h3>
                        <select class="text-sm border border-gray-300 rounded-lg px-3 py-1" id="sales-filter">
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                        </select>
                    </div>
                    <canvas id="monthlySalesChart" class="w-full" height="300"></canvas>
                </div>

                <!-- Distribución por Categoría -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">🏁 Distribución por Categoría</h3>
                    <canvas id="categoryChart" class="w-full" height="300"></canvas>
                </div>
            </div>

            <!-- Fila 2: Top Vehículos + Rendimiento Regional -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <!-- Top 5 Vehículos -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">🏆 Top 5 Vehículos Más Vendidos</h3>
                    <canvas id="topVehiclesChart" class="w-full" height="300"></canvas>
                </div>

                <!-- Rendimiento Regional -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">🌎 Rendimiento por Región</h3>
                    <canvas id="regionalChart" class="w-full" height="300"></canvas>
                </div>
            </div>

            <!-- Fila 3: Gastos Operacionales + Análisis de Márgenes -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <!-- Gastos Operacionales -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">💰 Estructura de Gastos Operacionales</h3>
                    <canvas id="expensesChart" class="w-full" height="300"></canvas>
                </div>

                <!-- Márgenes de Utilidad -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">📊 Análisis de Márgenes</h3>
                    <canvas id="marginsChart" class="w-full" height="300"></canvas>
                </div>
            </div>

            <!-- Sección de Modelos 3D Legendarios -->
            <div class="bg-gradient-to-br from-slate-800 to-slate-900 rounded-xl shadow-2xl p-8 mb-6">
                <h2 class="text-3xl font-bold text-white text-center mb-2">🏎️ LEYENDAS DEL AUTOMOVILISMO</h2>
                <p class="text-slate-300 text-center mb-8">Explora los vehículos más icónicos de la historia</p>
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- McLaren MP4/6 - Ayrton Senna -->
                    <div class="bg-slate-700/50 rounded-xl p-6 backdrop-blur-sm">
                        <h3 class="text-xl font-bold text-white mb-2 text-center">McLaren MP4/6</h3>
                        <p class="text-slate-300 text-sm text-center mb-4">Ayrton Senna - Campeón 1991</p>
                        <div class="w-full h-64 bg-gradient-to-br from-red-900 to-black rounded-lg relative">
                            <canvas id="mclaren-canvas" class="w-full h-full rounded-lg"></canvas>
                            <div class="absolute bottom-2 left-2 bg-black/70 px-3 py-1 rounded text-xs text-white">
                                🖱️ Arrastra para rotar
                            </div>
                        </div>
                        <div class="mt-4 text-slate-300 text-xs space-y-1">
                            <p>⚡ Motor: Honda V12</p>
                            <p>🏆 Victorias: 8 Grandes Premios</p>
                            <p>💪 Potencia: ~700 HP</p>
                        </div>
                    </div>

                    <!-- F1 2026 -->
                    <div class="bg-slate-700/50 rounded-xl p-6 backdrop-blur-sm">
                        <h3 class="text-xl font-bold text-white mb-2 text-center">F1 2026 Concept</h3>
                        <p class="text-slate-300 text-sm text-center mb-4">Nuevas Regulaciones FIA</p>
                        <div class="w-full h-64 bg-gradient-to-br from-blue-900 to-black rounded-lg relative">
                            <canvas id="f1-2026-canvas" class="w-full h-full rounded-lg"></canvas>
                            <div class="absolute bottom-2 left-2 bg-black/70 px-3 py-1 rounded text-xs text-white">
                                🖱️ Arrastra para rotar
                            </div>
                        </div>
                        <div class="mt-4 text-slate-300 text-xs space-y-1">
                            <p>⚡ Híbrido Avanzado</p>
                            <p>🔋 50% Eléctrico / 50% Combustión</p>
                            <p>🌱 Combustible Sostenible</p>
                        </div>
                    </div>

                    <!-- Ford GT40 -->
                    <div class="bg-slate-700/50 rounded-xl p-6 backdrop-blur-sm">
                        <h3 class="text-xl font-bold text-white mb-2 text-center">Ford GT40 Mk II</h3>
                        <p class="text-slate-300 text-sm text-center mb-4">Le Mans Winner 1966</p>
                        <div class="w-full h-64 bg-gradient-to-br from-amber-900 to-black rounded-lg relative">
                            <canvas id="gt40-canvas" class="w-full h-full rounded-lg"></canvas>
                            <div class="absolute bottom-2 left-2 bg-black/70 px-3 py-1 rounded text-xs text-white">
                                🖱️ Arrastra para rotar
                            </div>
                        </div>
                        <div class="mt-4 text-slate-300 text-xs space-y-1">
                            <p>⚡ Motor: V8 7.0L</p>
                            <p>🏆 4 victorias consecutivas Le Mans</p>
                            <p>💪 Potencia: 485 HP</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabla de Rendimiento Detallado -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold text-gray-800">📋 Rendimiento Detallado por Modelo</h3>
                    <button class="text-sm bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                        📥 Exportar a Excel
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Modelo</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Categoría</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Unidades</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ingresos</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Margen</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rating</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tendencia</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" id="performance-table">
                            <!-- Será llenado por JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Resumen Ejecutivo -->
            <div class="bg-gradient-to-r from-slate-700 to-slate-900 rounded-xl shadow-2xl p-8 text-white">
                <h3 class="text-2xl font-bold mb-4">📊 Resumen Ejecutivo del Trimestre</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <h4 class="text-lg font-semibold text-slate-300 mb-2">💡 Insights Clave</h4>
                        <ul class="space-y-2 text-sm text-slate-200">
                            <li>✓ Crecimiento sostenido del 18.2% en ingresos</li>
                            <li>✓ Expansión en mercados latinoamericanos (+35%)</li>
                            <li>✓ Categoría SUV lidera ventas con 42% del total</li>
                            <li>✓ Mejora en satisfacción del cliente (4.8/5.0)</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-slate-300 mb-2">🎯 Objetivos Q1 2025</h4>
                        <ul class="space-y-2 text-sm text-slate-200">
                            <li>→ Incrementar ventas digitales 25%</li>
                            <li>→ Reducir costos operacionales 8%</li>
                            <li>→ Lanzar 3 nuevos modelos eléctricos</li>
                            <li>→ Expandir red de concesionarios (15 nuevos)</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-slate-300 mb-2">⚠️ Áreas de Atención</h4>
                        <ul class="space-y-2 text-sm text-slate-200">
                            <li>! Competencia agresiva en segmento deportivo</li>
                            <li>! Cadena de suministro en microchips</li>
                            <li>! Demanda fluctuante en mercado europeo</li>
                            <li>! Necesidad de actualizar infraestructura EV</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>

    <script>
        // ==================== ACTUALIZAR HORA ====================
        function updateTime() {
            const now = new Date();
            document.getElementById('current-time').textContent = now.toLocaleString('es-ES', {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            });
        }
        updateTime();
        setInterval(updateTime, 60000);

        // ==================== ANIMAR KPIs ====================
        function animateValue(id, start, end, duration, prefix = '', suffix = '') {
            const obj = document.getElementById(id);
            const range = end - start;
            const increment = range / (duration / 16);
            let current = start;
            
            const timer = setInterval(() => {
                current += increment;
                if ((increment > 0 && current >= end) || (increment < 0 && current <= end)) {
                    current = end;
                    clearInterval(timer);
                }
                obj.textContent = prefix + Math.floor(current).toLocaleString('es-ES') + suffix;
            }, 16);
        }

        animateValue('kpi-revenue', 0, 8547320, 2000, '$', '');
        animateValue('kpi-units', 0, 1247, 2000, '', ' unidades');

        // ==================== DATOS ====================
        const monthlyData = {
            labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            revenue: [620000, 680000, 745000, 698000, 812000, 867000, 934000, 889000, 976000, 1045000, 1098000, 1156000],
            units: [89, 97, 106, 98, 115, 122, 131, 125, 137, 146, 153, 162]
        };

        // ==================== GRÁFICO VENTAS MENSUALES ====================
        const ctxSales = document.getElementById('monthlySalesChart').getContext('2d');
        new Chart(ctxSales, {
            type: 'line',
            data: {
                labels: monthlyData.labels,
                datasets: [{
                    label: 'Ingresos ($)',
                    data: monthlyData.revenue,
                    borderColor: 'rgb(59, 130, 246)',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    fill: true,
                    tension: 0.4,
                    pointRadius: 5,
                    pointHoverRadius: 7
                }, {
                    label: 'Unidades Vendidas',
                    data: monthlyData.units,
                    borderColor: 'rgb(34, 197, 94)',
                    backgroundColor: 'rgba(34, 197, 94, 0.1)',
                    fill: true,
                    tension: 0.4,
                    yAxisID: 'y1'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    mode: 'index',
                    intersect: false,
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        padding: 12,
                        titleFont: { size: 14 },
                        bodyFont: { size: 13 }
                    }
                },
                scales: {
                    y: {
                        type: 'linear',
                        display: true,
                        position: 'left',
                        ticks: {
                            callback: function(value) {
                                return '$' + value.toLocaleString();
                            }
                        }
                    },
                    y1: {
                        type: 'linear',
                        display: true,
                        position: 'right',
                        grid: {
                            drawOnChartArea: false,
                        }
                    }
                }
            }
        });

        // ==================== GRÁFICO DISTRIBUCIÓN POR CATEGORÍA ====================
        const ctxCategory = document.getElementById('categoryChart').getContext('2d');
        new Chart(ctxCategory, {
            type: 'doughnut',
            data: {
                labels: ['SUVs', 'Sedanes', 'Deportivos', 'Camionetas', 'Eléctricos', 'Híbridos'],
                datasets: [{
                    data: [42, 23, 12, 15, 5, 3],
                    backgroundColor: [
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(34, 197, 94, 0.8)',
                        'rgba(239, 68, 68, 0.8)',
                        'rgba(251, 146, 60, 0.8)',
                        'rgba(168, 85, 247, 0.8)',
                        'rgba(236, 72, 153, 0.8)'
                    ],
                    borderWidth: 2,
                    borderColor: '#fff'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.parsed + '%';
                            }
                        }
                    }
                }
            }
        });

        // ==================== GRÁFICO TOP 5 VEHÍCULOS ====================
        const ctxTopVehicles = document.getElementById('topVehiclesChart').getContext('2d');
        new Chart(ctxTopVehicles, {
            type: 'bar',
            data: {
                labels: ['Tesla Model Y', 'Ford F-150', 'Toyota RAV4', 'Honda CR-V', 'Chevrolet Silverado'],
                datasets: [{
                    label: 'Unidades Vendidas',
                    data: [187, 165, 142, 128, 115],
                    backgroundColor: [
                        'rgba(239, 68, 68, 0.8)',
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(34, 197, 94, 0.8)',
                        'rgba(251, 146, 60, 0.8)',
                        'rgba(168, 85, 247, 0.8)'
                    ],
                    borderWidth: 0,
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: 'y',
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true
                    }
                }
            }
        });

        // ==================== GRÁFICO RENDIMIENTO REGIONAL ====================
        const ctxRegional = document.getElementById('regionalChart').getContext('2d');
        new Chart(ctxRegional, {
            type: 'radar',
            data: {
                labels: ['Norte América', 'Sudamérica', 'Europa', 'Asia', 'Oceanía', 'África'],
                datasets: [{
                    label: '2024',
                    data: [85, 72, 68, 90, 45, 38],
                    borderColor: 'rgba(59, 130, 246, 1)',
                    backgroundColor: 'rgba(59, 130, 246, 0.2)',
                    pointBackgroundColor: 'rgba(59, 130, 246, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(59, 130, 246, 1)'
                }, {
                    label: '2023',
                    data: [78, 65, 72, 82, 40, 32],
                    borderColor: 'rgba(34, 197, 94, 1)',
                    backgroundColor: 'rgba(34, 197, 94, 0.2)',
                    pointBackgroundColor: 'rgba(34, 197, 94, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(34, 197, 94, 1)'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    r: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            }
        });

        // ==================== GRÁFICO GASTOS OPERACIONALES ====================
        const ctxExpenses = document.getElementById('expensesChart').getContext('2d');
        new Chart(ctxExpenses, {
            type: 'pie',
            data: {
                labels: ['Personal', 'Marketing', 'Inventario', 'Logística', 'Infraestructura', 'I+D', 'Otros'],
                datasets: [{
                    data: [32, 18, 25, 12, 8, 3, 2],
                    backgroundColor: [
                        'rgba(239, 68, 68, 0.8)',
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(34, 197, 94, 0.8)',
                        'rgba(251, 146, 60, 0.8)',
                        'rgba(168, 85, 247, 0.8)',
                        'rgba(236, 72, 153, 0.8)',
                        'rgba(156, 163, 175, 0.8)'
                    ],
                    borderWidth: 2,
                    borderColor: '#fff'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.parsed + '%';
                            }
                        }
                    }
                }
            }
        });

        // ==================== GRÁFICO MÁRGENES ====================
        const ctxMargins = document.getElementById('marginsChart').getContext('2d');
        new Chart(ctxMargins, {
            type: 'bar',
            data: {
                labels: ['SUVs', 'Sedanes', 'Deportivos', 'Camionetas', 'Eléctricos', 'Híbridos'],
                datasets: [{
                    label: 'Margen Bruto (%)',
                    data: [28, 22, 35, 26, 18, 24],
                    backgroundColor: 'rgba(34, 197, 94, 0.8)',
                    borderRadius: 8
                }, {
                    label: 'Margen Neto (%)',
                    data: [15, 12, 22, 14, 8, 13],
                    backgroundColor: 'rgba(59, 130, 246, 0.8)',
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return value + '%';
                            }
                        }
                    }
                }
            }
        });

        // ==================== TABLA DE RENDIMIENTO ====================
        const performanceData = [
            { model: 'Tesla Model Y', category: 'Eléctrico', units: 187, revenue: '$9,350,000', margin: '18%', rating: 4.8, trend: '↗️' },
            { model: 'Ford F-150', category: 'Camioneta', units: 165, revenue: '$8,250,000', margin: '26%', rating: 4.7, trend: '↗️' },
            { model: 'Toyota RAV4', category: 'SUV', units: 142, revenue: '$5,680,000', margin: '28%', rating: 4.6, trend: '↗️' },
            { model: 'Honda CR-V', category: 'SUV', units: 128, revenue: '$5,120,000', margin: '27%', rating: 4.5, trend: '→' },
            { model: 'Chevrolet Silverado', category: 'Camioneta', units: 115, revenue: '$5,750,000', margin: '25%', rating: 4.4, trend: '↘️' },
            { model: 'BMW M4', category: 'Deportivo', units: 98, revenue: '$8,820,000', margin: '35%', rating: 4.9, trend: '↗️' },
            { model: 'Mazda CX-5', category: 'SUV', units: 87, revenue: '$3,045,000', margin: '26%', rating: 4.3, trend: '→' },
            { model: 'Porsche 911', category: 'Deportivo', units: 76, revenue: '$11,400,000', margin: '38%', rating: 5.0, trend: '↗️' }
        ];

        const tableBody = document.getElementById('performance-table');
        performanceData.forEach((item, index) => {
            const row = document.createElement('tr');
            row.className = index % 2 === 0 ? 'bg-white' : 'bg-gray-50';
            row.innerHTML = `
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${item.model}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${item.category}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${item.units}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-semibold">${item.revenue}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600 font-semibold">${item.margin}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-yellow-500">⭐ ${item.rating}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${item.trend}</td>
            `;
            tableBody.appendChild(row);
        });

        // ==================== MODELOS 3D ====================
        function init3DModel(canvasId, modelPath, cameraZ = 5) {
            const canvas = document.getElementById(canvasId);
            const scene = new THREE.Scene();
            scene.background = new THREE.Color(0x1a1a1a);

            const camera = new THREE.PerspectiveCamera(45, canvas.offsetWidth / canvas.offsetHeight, 0.1, 1000);
            camera.position.set(0, 1, cameraZ);

            const renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true });
            renderer.setSize(canvas.offsetWidth, canvas.offsetHeight);
            renderer.shadowMap.enabled = true;
            renderer.shadowMap.type = THREE.PCFSoftShadowMap;

            // Luces
            const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
            scene.add(ambientLight);

            const spotLight1 = new THREE.SpotLight(0xffffff, 1.5);
            spotLight1.position.set(5, 10, 5);
            spotLight1.castShadow = true;
            scene.add(spotLight1);

            const spotLight2 = new THREE.SpotLight(0xffffff, 1);
            spotLight2.position.set(-5, 8, -5);
            scene.add(spotLight2);

            const fillLight = new THREE.DirectionalLight(0x6699ff, 0.3);
            fillLight.position.set(0, 5, -10);
            scene.add(fillLight);

            // Controles
            const controls = new THREE.OrbitControls(camera, renderer.domElement);
            controls.enableDamping = true;
            controls.dampingFactor = 0.05;
            controls.autoRotate = true;
            controls.autoRotateSpeed = 1.5;
            controls.maxPolarAngle = Math.PI / 2;

            // Cargar modelo
            const loader = new THREE.GLTFLoader();
            loader.load(
                modelPath,
                function (gltf) {
                    const model = gltf.scene;
                    
                    // Calcular bounding box para centrar
                    const box = new THREE.Box3().setFromObject(model);
                    const center = box.getCenter(new THREE.Vector3());
                    const size = box.getSize(new THREE.Vector3());
                    
                    // Centrar modelo
                    model.position.x = -center.x;
                    model.position.y = -center.y;
                    model.position.z = -center.z;
                    
                    // Escalar apropiadamente
                    const maxDim = Math.max(size.x, size.y, size.z);
                    const scale = 2 / maxDim;
                    model.scale.set(scale, scale, scale);
                    
                    // Habilitar sombras
                    model.traverse(function (node) {
                        if (node.isMesh) {
                            node.castShadow = true;
                            node.receiveShadow = true;
                            
                            // Mejorar materiales
                            if (node.material) {
                                node.material.metalness = 0.7;
                                node.material.roughness = 0.3;
                            }
                        }
                    });
                    
                    scene.add(model);
                },
                function (xhr) {
                    console.log(canvasId + ': ' + (xhr.loaded / xhr.total * 100) + '% cargado');
                },
                function (error) {
                    console.error('Error cargando modelo ' + canvasId + ':', error);
                }
            );

            // Suelo con grid
            const gridHelper = new THREE.GridHelper(10, 10, 0x333333, 0x222222);
            gridHelper.position.y = -1;
            scene.add(gridHelper);

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
        }

        // Inicializar los 3 modelos
        init3DModel('mclaren-canvas', '/models/mp46.glb', 4);
        init3DModel('f1-2026-canvas', '/models/f1_2026.glb', 4);
        init3DModel('gt40-canvas', '/models/gt40.glb', 4);
    </script>

    <style>
        /* Animaciones suaves */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .max-w-7xl > div {
            animation: fadeIn 0.6s ease-out forwards;
        }

        /* Hover effects mejorados */
        .transform:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Estilos para Canvas 3D */
        canvas {
            display: block;
        }
    </style>
</x-app-layout>