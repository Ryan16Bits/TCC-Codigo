@extends("index")
@section("conteudo")
<div class="container mt-4">
    <!-- TÍTULO -->
    <h5 class="txt-main mb-3">Relatórios</h5>
     <div class="row g-3 mb-4">
        <!-- Pulseiras - Amarelo -->
        <div class="col-6 col-md-3">
            <div class="dashboard-card card-yellow p-3 h-100 d-flex flex-column">
                <div class="d-flex align-items-center gap-2">
                    <i class="fa-solid fa-bookmark" style="color: #facc15;"></i>
                    <span class="card-label">Pulseiras cadastradas</span>
                </div>
                    <div class="card-value mt-1">{{ $totalPulseira }}</div>
            </div>
        </div>
        <!-- Idosos - Verde -->
        <div class="col-6 col-md-3">
            <div class="dashboard-card card-green p-3 h-100 d-flex flex-column">
                <div class="d-flex align-items-center gap-2">
                    <i class="fa-solid fa-person-cane" style="color: #22c55e;"></i>
                    <span class="card-label">Idosos cadastrados</span>
                </div>
                <div class="card-value mt-1">{{ $totalIdoso }}</div>
            </div>
        </div>
        <!-- Cuidadores - Azul -->
        <div class="col-6 col-md-3">
            <div class="dashboard-card card-blue p-3 h-100 d-flex flex-column">
                <div class="d-flex align-items-center gap-2">
                    <i class="fa-solid fa-user-doctor" style="color: #3b82f6;"></i>
                    <span class="card-label">Cuidadores cadastrados</span>
                </div>
                <div class="card-value mt-1">{{ $totalCuidador }}</div>
            </div>
        </div>
        <!-- Quedas - Vermelho -->
        <div class="col-6 col-md-3">
            <div class="dashboard-card card-red p-3 h-100 d-flex flex-column">
                <div class="d-flex align-items-center gap-2">
                    <i class="fa-solid fa-triangle-exclamation" style="color: #ef4444;"></i>
                    <span class="card-label">Quedas detectadas</span>
                </div>
                <div class="card-value mt-1">{{ $totalQueda }}</div>
            </div>
        </div>
    </div>

    <!-- ROW: Calendário + Gráfico (mesmo tamanho) -->
    <div class="row g-4">
        <!-- Calendário -->
        <div class="col-12 col-md-6">
            <div class="block-wrapper d-flex flex-column">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="block-title">Calendário de Quedas</span>
                    <span class="badge bg-light text-secondary fw-normal" id="monthBadge">Abril 2026</span>
                </div>
                <div class="calendar-container flex-grow-1" id="calendarContainer">
                    <!-- Cabeçalho com navegação -->
                    <div class="calendar-header d-flex align-items-center justify-content-between mb-2">
                        <div class="fw-semibold fs-6" id="monthYearDisplay">Abril 2026</div>
                        <div class="d-flex gap-2">
                            <span class="nav-btn" id="prevMonthBtn">‹</span>
                            <span class="nav-btn" id="nextMonthBtn">›</span>
                        </div>
                    </div>
                    <!-- Grid do calendário -->
                    <div class="calendar-grid" id="calendarGrid"></div>
                    <div class="mt-2 text-center text-secondary" style="font-size: 12px;"></div>
                </div>
            </div>
        </div>

        <!-- Gráfico de Linhas -->
        <div class="col-12 col-md-6">
            <div class="block-wrapper d-flex flex-column">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="block-title">Gráfico de Aceleração Média</span>
                    <span class="badge bg-light text-secondary fw-normal">m/s²</span>
                </div>
                <div class="chart-container flex-grow-1">
                    <canvas id="accelChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    (function() {
        let currentDate = new Date();
        let currentYear = currentDate.getFullYear();
        let currentMonth = currentDate.getMonth();

        const monthNames = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
        const monthBadge = document.getElementById('monthBadge');
        const monthYearDisplay = document.getElementById('monthYearDisplay');
        const calendarGrid = document.getElementById('calendarGrid');

        function renderCalendar(year, month) {
            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const daysInPrevMonth = new Date(year, month, 0).getDate();

            const displayMonth = monthNames[month];
            monthYearDisplay.textContent = `${displayMonth} ${year}`;
            monthBadge.textContent = `${displayMonth} ${year}`;

            let gridHtml = '';
            const weekdays = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];
            weekdays.forEach(day => {
                gridHtml += `<div class="weekday">${day}</div>`;
            });

            const startOffset = firstDay;
            for (let i = startOffset - 1; i >= 0; i--) {
                const prevDay = daysInPrevMonth - i;
                gridHtml += `<div class="day other-month">${prevDay}</div>`;
            }

            const today = new Date();
            const todayDate = today.getDate();
            const todayMonth = today.getMonth();
            const todayYear = today.getFullYear();

            for (let d = 1; d <= daysInMonth; d++) {
                let classes = 'day';
                if (d === todayDate && month === todayMonth && year === todayYear) {
                    classes += ' today';
                }
                const dayOfWeek = new Date(year, month, d).getDay();
                if (dayOfWeek === 0 || dayOfWeek === 6) {
                    classes += ' weekend';
                }
                gridHtml += `<div class="${classes}">${d}</div>`;
            }

            const totalCells = startOffset + daysInMonth;
            const remaining = (7 - (totalCells % 7)) % 7;
            for (let i = 1; i <= remaining; i++) {
                gridHtml += `<div class="day other-month">${i}</div>`;
            }

            calendarGrid.innerHTML = gridHtml;
        }

        document.getElementById('prevMonthBtn').addEventListener('click', function() {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            renderCalendar(currentYear, currentMonth);
        });

        document.getElementById('nextMonthBtn').addEventListener('click', function() {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            renderCalendar(currentYear, currentMonth);
        });

        renderCalendar(currentYear, currentMonth);

        const ctx = document.getElementById('accelChart').getContext('2d');
        const meses = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
        const dadosGrafico = [15, 22, 18, 35, 41, 29, 44, 38, 31, 26, 20, 17];

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: meses,
                datasets: [{
                    label: 'Aceleração média (m/s²)',
                    data: dadosGrafico,
                    backgroundColor: 'rgba(59, 130, 246, 0.12)',
                    borderColor: '#3b82f6',
                    borderWidth: 3,
                    tension: 0.3,
                    pointBackgroundColor: '#3b82f6',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverRadius: 7,
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return `${context.parsed.y} m/s²`;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        min: 0,
                        max: 50,
                        grid: { color: '#e9edf2' },
                        ticks: { stepSize: 10 }
                    },
                    x: {
                        grid: { display: false }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
            }
        });
    })();
</script>   
@endsection