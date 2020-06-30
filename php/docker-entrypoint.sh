#!/usr/bin/env bash
sleep 20
echo "Running migrations and seeding..."
php artisan migrate:fresh --seed
