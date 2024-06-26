Tutorial untuk pengguna baru dalam menggunakan teamistry

1. Konfigurasi Repository
   silahkan download ZIP pada repository ini dan buat pada repository yang diinginkan
2. Inisiasi framework laravel
   dengan menggunakan vscode, buka terminal dan jalankan command composer create-project --prefer-dist laravel/laravel:^9.0 src. Maka dalam repositori tersebut akan terbentuk repository bernama src yang berisikan seluruh file laravel.
3. Connect remote dengan github https://github.com/tommy7e/teamistry.git
   lakukan git init untuk menginisialisasi repository dengan git. Git remote add origin https://github.com/tommy7e/teamistry.git. Git fetch --all. Dan git reset --hard origin/master
4. Lakukan editing yang diinginkan
5. Lakukan git add .; git commit -m "komentar"; git push
   Lakukan push untuk memperbaharui repository pada branch master
6. Google cloud akan melakukan revisi dalam waktu: 1 min 30 detik
   Setelah ada perubahan pada repository github, service pada google cloud run akan otomatis melakukan revision: membuat ulang image dan mendeploynya pada cloud. Waktu yang dibutuhkan sekitar 1 menit 30 detik.
8. Hasil perubahan dapat dilihat pada: https://teamistry-ir6oijtnxq-uc.a.run.app/
   Klik pada link tersebut untuk melihat web tersebut sudah terlaunch via Google Cloud Run service. https://teamistry-ir6oijtnxq-uc.a.run.app/<route-yang-dituju> untuk pergi pada page di route lainnya 
    
