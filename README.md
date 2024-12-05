# CountHub

### Описание
CountHub — это универсальное Web-приложение, предназначенное для учета мебели и оборудования на различных площадках в образовательных организациях, таких как колледжи системы среднего профессионального образования (СПО). Приложение обеспечивает удобное управление инвентарем и контроль за состоянием имущества на всех объектах организации.

### Возможности
- **Учет мебели и оборудования**: фиксируйте информацию о мебели, технике и других объектах, хранящихся в разных кабинетах или на площадках.
- **Гибкая система категорий**: разделяйте инвентарь на категории (мебель, электроника, учебные материалы и т.д.) для упрощения поиска и управления.
- **Локации**: управляйте данными для нескольких площадок, корпусов и аудиторий внутри образовательной организации.
- **Отчеты и аналитика**: генерируйте отчеты о текущем состоянии инвентаря, его местоположении и статусе (исправно, требует ремонта, списано и т.д.).
- **Мультипользовательский доступ**: предоставляйте доступ различным ролям (администраторы, преподаватели, сотрудники) с разграничением прав.
- **Простота интеграции**: возможность импорта/экспорта данных в популярных форматах (Excel, CSV).

### Технологический стек
- **Frontend**: React, TypeScript, MUI, Axios, Redux.
- **Backend**: Laravel.
- **База данных**: MySQL, WorkBench.

### Целевая аудитория
Приложение предназначено для:
- Администраторов образовательных организаций.
- Заведующих кафедрами и подразделениями.
- Сотрудников, ответственных за материально-техническое обеспечение.

### Преимущества
- Удобный и интуитивно понятный интерфейс.
- Централизованное управление всеми объектами учета.
- Повышение прозрачности и упрощение работы с инвентарем.
- Снижение потерь имущества за счет точного отслеживания.

### Установка
1. Склонируйте репозиторий:
   ```bash
   git clone https://github.com/yourusername/counthub.git
   ```
2. Перейдите в папку проекта:
   ```bash
   cd counthub
   ```
3. Установите зависимости:
   ```bash
   npm install
   ```
4. Настройте переменные окружения в файле `.env`:
   ```
   DB_USER=root
   DB_PASSWORD=yourpassword
   DB_DATABASE=counthub
   ```
5. Запустите приложение:
   ```bash
   npm run dev
   ```

---
CountHub — простой способ управлять инвентарем и сохранять порядок в образовательных организациях!


