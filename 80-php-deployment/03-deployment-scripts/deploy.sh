#!/bin/bash
# deploy.sh - Simple deployment script
# Date created: 2025-12-23
# Created by: Michael Monteith

echo "Starting deployment..."
git pull origin main
composer install --no-dev
php artisan migrate --force
echo "Deployment complete."
