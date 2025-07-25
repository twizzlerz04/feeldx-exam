# FeelDX Practical Exam

## Overview
FeelDX is a Vue.js-based web application showcasing interactive carousels, responsive design, and modern UI components.

## Prerequisites
- Node.js (v14.18+ or v16+)
- XAMPP (for local development)
- npm or yarn package manager

## Installation

1. Clone the repository:
```bash
git clone https://github.com/your-username/feeldx-exam.git
cd feeldx-exam
```

2. Install dependencies:
```bash
composer install
npm install
# or
yarn install
```

3. Configure XAMPP:
   - Place the project in: `/{Your project/html path}/feeldx-exam`
   - Start XAMPP Apache server

4. Setup environment:
```bash
cp .env.example .env
```

5. Install and compile assets:
```bash
npm run dev
# or
yarn dev
```

## Project Structure
```
feeldx-exam/
├── resources/
│   ├── js/
│   │   ├── Layouts/
│   │   │   └── Layout.vue
│   │   ├── Pages/
│   │   │   └── Home.vue
│   ├── css/
│   └── views/
├── public/
├── node_modules/
├── package.json
└── vite.config.js
```

## Features
- Responsive design
- Interactive carousels
- Client testimonials
- Service showcase
- Modern UI components

## Development
Start the development server:
```bash
php artisan serve
```

```bash
npm run dev
# or
yarn dev
```

## Browser Support
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Troubleshooting

### Common Issues

1. Module not found error:
```bash
rm -rf node_modules package-lock.json
npm install
```

2. XAMPP connection issues:
   - Verify Apache is running
   - Check port conflicts
   - Review error logs in XAMPP control panel

## License
[MIT License](LICENSE)
