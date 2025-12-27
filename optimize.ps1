# Laravel Performance Optimization Script
# Run this script to enable all caching mechanisms

Write-Host "=====================================" -ForegroundColor Cyan
Write-Host "KLINIK WIJAYA - Performance Optimization" -ForegroundColor Cyan
Write-Host "=====================================" -ForegroundColor Cyan
Write-Host ""

Write-Host "Step 1: Clearing old cache..." -ForegroundColor Yellow
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

Write-Host "`nStep 2: Building optimized cache..." -ForegroundColor Yellow
php artisan config:cache
php artisan route:cache
php artisan view:cache

Write-Host "`nStep 3: Optimizing Composer autoload..." -ForegroundColor Yellow
composer dump-autoload --optimize

Write-Host "`n=====================================" -ForegroundColor Green
Write-Host "Optimization Complete!" -ForegroundColor Green
Write-Host "=====================================" -ForegroundColor Green
Write-Host ""
Write-Host "Performance improvements applied:" -ForegroundColor White
Write-Host "  - Config cached" -ForegroundColor Green
Write-Host "  - Routes cached" -ForegroundColor Green
Write-Host "  - Views compiled" -ForegroundColor Green
Write-Host "  - Autoload optimized" -ForegroundColor Green
Write-Host ""
Write-Host "Note: Run 'php artisan optimize:clear' during development to clear all caches when making changes." -ForegroundColor Yellow
